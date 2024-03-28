<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Login</title>
</head>
<body class="bg-gray-100">
    @include('todo.nav')
    <div class="container mx-auto py-10">
        @if (session('dec'))
            <div class="bg-blue-600 text-black p-3 mb-4">{{session('dec')}}</div>
        @endif
        @if (session('ok'))
        <div class="bg-yellow-200 text-yellow-800 p-3 mb-4">{{ session('ok') }}</div>
        @endif
        <form action="{{ route('login') }}" method="POST" class="max-w-md mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="text" name="email" id="email" placeholder="Email" value="{{ old('email') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('email')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" value="{{ old('password') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('password')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Sign In</button>
            </div>
            <p class="block mt-4 font-sans text-base antialiased font-normal leading-relaxed text-center text-gray-700">
                Already have an account?
                <a href="{{route('sig')}}" class="font-medium text-gray-900">
                  Sign In
                </a>
              </p>        </form>
    </div>
</body>
</html>
