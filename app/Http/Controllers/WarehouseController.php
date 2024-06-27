<?php

namespace App\Http\Controllers;

use App\Models\Warehouse; // Import model Warehouse
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class WarehouseController extends Controller
{
    // Phương thức hiển thị danh sách các kho

    public function index()
    {
        // Lấy danh sách các kho với phân trang
        $warehouses = Warehouse::paginate(10); // Phân trang với mỗi trang 10 bản ghi
    
        return view('warehouses.index', ['warehouses' => $warehouses]);
    }
    
    // Phương thức hiển thị form tạo mới kho
    public function create()
    {
        return view('warehouses.create');
    }

    // Phương thức lưu kho mới vào cơ sở dữ liệu
    public function store(Request $request)
    {
        // Validate dữ liệu từ form
        $request->validate([
            'id' => 'required|integer|unique:warehouses,id',
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        // Tạo mới một kho
        Warehouse::create([
            'id' => $request->id,
            'name' => $request->name,
            'location' => $request->location,
        ]);

        return redirect()->route('warehouses.index')->with('success', 'Đã thêm kho thành công.');
    }

    // Phương thức hiển thị form chỉnh sửa kho
    public function edit($id)
    {
        $warehouse = Warehouse::find($id); // Tìm kho theo ID
        return view('warehouses.edit', ['warehouse' => $warehouse]);
    }

    // Phương thức cập nhật thông tin kho vào cơ sở dữ liệu
    public function update(Request $request, $id)
    {
        // Validate dữ liệu từ form
        $request->validate([
            'id' => 'required|integer|unique:warehouses,id,' . $id,
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);
    
        // Tìm và cập nhật kho
        $warehouse = Warehouse::findOrFail($id);
        $warehouse->update([
            'id' => $request->id,
            'name' => $request->name,
            'location' => $request->location,
        ]);

        // Kiểm tra xem dữ liệu đã được cập nhật chưa
        Log::info('Updated Warehouse: ' . $warehouse);

        return redirect()->route('warehouses.index')->with('success', 'Đã cập nhật kho thành công.');
    }
    
    // Phương thức xóa một kho khỏi cơ sở dữ liệu
    public function destroy($id)
    {
        Warehouse::destroy($id); // Xóa kho theo ID
        return redirect()->route('warehouses.index')->with('success', 'Đã xóa kho thành công.');
    }

    // Phương thức hiển thị số lượng sản phẩm của mỗi kho
    public function listProductsInWarehouse()
    {
        // Lấy danh sách các kho và số lượng sản phẩm trong mỗi kho
        // $warehouses = Warehouse::all();
        $warehouses = Warehouse::paginate(10); // Phân trang với mỗi trang 10 bản ghi


        return view('warehouses.list_products', ['warehouses' => $warehouses]);
    }
}
