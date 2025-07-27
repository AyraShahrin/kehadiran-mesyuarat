<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <a href="{{ url('/') }}" class="inline-block px-4 py-2 mb-4 bg-blue-500 text-white rounded hover:bg-blue-600">
    ← Home
</a>

    <div class="w-full max-w-md bg-white rounded-xl shadow-md p-6">
        <h2 class="text-2xl font-bold text-center mb-6">Login to Your Account</h2>

        <!-- Show session status -->
        @if (session('status'))
            <div class="mb-4 text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <!-- Show validation errors -->
        @if ($errors->any())
            <div class="mb-4">
                <ul class="text-red-600 text-sm list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif




            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input type="email" name="email" id="email" required autofocus
                       class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" required
                       class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="mb-4 flex items-center justify-between">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" class="rounded">
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
                <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:underline">Forgot password?</a>
            </div>

            <div>
                <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-200">
                    Login
                </button>
            </div>
        </form>

        <div class="mt-4 text-center text-sm">
            Don’t have an account?
            <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Register here</a>
        </div>
    </div>
</body>
</html>
