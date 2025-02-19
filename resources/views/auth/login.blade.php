
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{asset('assets/logo/favicon.png')}}">

</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>

        <!-- Display validation errors -->
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Login Form -->
        <form action="{{ route('authenticate') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" name="password" id="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <button type="submit" class="w-full bg-yellow-500 text-white py-2 rounded-lg hover:bg-yellow-400">Login</button>
        </form>

        <!-- Register Link -->
        <div class="mt-4 text-center">
            <p class="text-gray-600">Don't have an account? <a href="{{ route('showRegistrationForm') }}" class="text-yellow-500 hover:underline">Register</a></p>
        </div>
    </div>
</div>
</body>
</html>
