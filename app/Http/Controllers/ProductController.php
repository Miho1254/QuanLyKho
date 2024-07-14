<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Warehouse;
use App\Models\WarehouseInventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        // Lấy tất cả sản phẩm từ cơ sở dữ liệu
        $products = Product::paginate(8);

        // Chuyển dữ liệu tới view
        return view('products.index', compact('products'));
    }

    public function create()
    {
        // Hiển thị form tạo sản phẩm mới
        $categories = Category::all(); // Lấy tất cả các danh mục
        $warehouses = Warehouse::all();

        return view('products.create', [
            'categories' => $categories,
            'warehouses' => $warehouses,
        ]);
    }

    public function store(Request $request)
    {
        // Validate request data
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'brand' => 'nullable',
            'category' => 'nullable|array', // Ensure 'category' is an array
            'warehouse_quantity' => 'nullable|array', // Ensure 'warehouse_quantity' is an array
        ]);
    
        // Handle image upload if exists
        $imagePath = null;
        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('public/images/upload/products');
            $imagePath = str_replace('public/', 'storage/', $imagePath);
        }
    
        // Format price to integer (remove non-numeric characters)
        $price = (int) preg_replace("/[^0-9]/", "", $request->price);
    
        // Create new product
        $product = Product::create([
            'id' => $request->id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $price,
            'image_path' => $imagePath,
            'brand' => $request->brand,
        ]);
    
        // Associate product with categories if provided
        if ($request->has('category')) {
            $product->categories()->attach($request->category);
        }
    
        // Associate product with warehouse quantities if provided
        if ($request->has('warehouse_quantity')) {
            foreach ($request->warehouse_quantity as $warehouse_id => $quantity) {
                // Only create a warehouse inventory record if quantity is not null
                if ($quantity !== null) {
                    WarehouseInventory::updateOrCreate(
                        [
                            'warehouse_id' => $warehouse_id,
                            'product_id' => $product->id,
                        ],
                        [
                            'quantity' => $quantity ?? 0, // Default to 0 if quantity is null
                        ]
                    );
                }
            }
        }
    
        // Redirect with success message
        return redirect()->route('products.index')->with('success', 'Thêm sản phẩm thành công!');
    }
        
    public function show($id)
    {
        // Hiển thị chi tiết 1 sản phẩm
    }

    public function edit($id)
    {
        // Lấy sản phẩm cùng với thông tin kho và số lượng
        $product = Product::with('warehouses')->find($id);
        
        if (!$product) {
            abort(404, 'Product not found');
        }
    
        // Lấy tất cả kho
        $warehouses = Warehouse::all();
        
        // Lấy tất cả tồn kho của sản phẩm này
        $warehouses_inventory = WarehouseInventory::where('product_id', $id)->get();
        
        // Lấy tất cả danh mục
        $categories = Category::all();
        
        return view('products.edit', [
            'product' => $product,
            'warehouses' => $warehouses,
            'warehouses_inventory' => $warehouses_inventory,
            'categories' => $categories,
        ]);
    }
                                    
    public function update(Request $request, $id)
    {
        // Validate request data
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'brand' => 'nullable',
            'category' => 'nullable|array', // Ensure 'category' is an array
            'warehouse_quantity' => 'nullable|array', // Ensure 'warehouse_quantity' is an array
        ]);
    
        // Find the existing product
        $product = Product::findOrFail($id);
    
        // Handle image upload if exists
        if ($request->hasFile('image_path')) {
            // Delete the old image if it exists
            if ($product->image_path) {
                Storage::delete(str_replace('storage/', 'public/', $product->image_path));
            }
    
            $imagePath = $request->file('image_path')->store('public/images/upload/products');
            $imagePath = str_replace('public/', 'storage/', $imagePath);
        } else {
            // Retain the old image path if no new image is provided
            $imagePath = $product->image_path;
        }
    
        // Format price to integer (remove non-numeric characters) and do not multiply
        $price = (int) preg_replace("/[^0-9]/", "", $request->price);
    
        // Update product details
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $price,
            'image_path' => $imagePath,
            'brand' => $request->brand,
        ]);
    
        // Update associated categories
        if ($request->has('category')) {
            $product->categories()->sync($request->category);
        }
    
        // Update associated warehouse quantities
        if ($request->has('warehouse_quantity')) {
            foreach ($request->warehouse_quantity as $warehouse_id => $quantity) {
                // Only create or update a warehouse inventory record if quantity is not null
                if ($quantity !== null) {
                    WarehouseInventory::updateOrCreate(
                        [
                            'warehouse_id' => $warehouse_id,
                            'product_id' => $product->id,
                        ],
                        [
                            'quantity' => $quantity ?? 0, // Default to 0 if quantity is null
                        ]
                    );
                }
            }
        }
    
        // Redirect with success message
        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }
                                            
    public function destroy($id)
    {
        // Xóa sản phẩm
        $product = Product::findOrFail($id); // Tìm sản phẩm theo id, nếu không tìm thấy sẽ trả về 404

        // Xóa sản phẩm
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Sản phẩm đã được xóa thành công.');
    }

    public function outOfStock()
    {
        // Hiển thị sản phẩm hết hàng
    }
}