<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-2xl font-semibold mb-6">Login</h2>
        <form method="POST" action="{{ url('/login') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-600 font-semibold mb-2">Email:</label>
                <input type="email" id="email" name="email" required class="w-full border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-400">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-600 font-semibold mb-2">Password:</label>
                <input type="password" id="password" name="password" required class="w-full border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-400">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white font-semibold py-2 rounded-md hover:bg-blue-600">Login</button>
        </form>
    </div>
</body>
</html>
