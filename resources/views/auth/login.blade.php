<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supreme Rohan Login</title>
    @vite("resources/css/app.css")
    <style>

        body {
            background-image: url('/images/990328.jpg');
            background-size: cover;
            background-position: center;

        }

        .container {
            background-color: rgba(0, 0, 0, 0.6);
        }

        .container:hover {
            background-color: rgba(0, 0, 0, 0.9);
        }

        .logo {
            background-image: url('/images/athena2.png');
            background-size: 100% 100%;
            background-repeat: no-repeat;
            width: 250px;
            height: 250px;
            margin: 0 auto;
        }

    </style>
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-blue-500 text-white font-medium py-2 px-4 mb-4 rounded-lg text-center">
            You have been successfully registered. You can now log in.
        </div>

        <img src="/images/athena2.png" alt="Logo1" class="w-200 h-300">
        <div class="container p-8 rounded-lg shadow-md w-96 text-white">
            @if (\Session::has('message'))
            <div class="bg-green-500 font-bold">
                  {!! \Session::get('message') !!}
            </div>
            @endif
            <div class="logo mb-3"></div>
            <h2 class="text-2xl font-semibold text-center mb-8">LOGIN</h2>
            <form method="POST" action="/login">

                @csrf
                <div class="mb-4">
                    <label for="username" class="block text-gray-300 font-medium mb-2">Username</label>
                    <input type="text" id="username" name="username" class="w-full px-4 py-3 rounded-lg bg-gray-800 focus:ring-blue-500 focus:border-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-300 font-medium mb-2">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-3 rounded-lg bg-gray-800 focus:ring-blue-500 focus:border-blue-500" required>
                </div>
                <div class="mb-4">
                    <button type="submit" class="w-full bg-blue-500 text-white font-medium py-3 rounded-lg hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Login</button>
                </div>
            </form>

        </div>
    </div>
</body>
</html>
