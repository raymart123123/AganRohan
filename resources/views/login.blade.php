<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rohan Login</title>
    @vite("resources/css/app.css")
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-image: url('/images/welc.jpg');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
        }

        .top-left-logo {
            background-image: url('/images/loggo1.png');
            background-size: 100% 100%;
            background-repeat: no-repeat;
            width: 200px;
            height: 115px;
            position: absolute;
            top: 0px;
            left: 80px;
            z-index: 2;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.6);
            max-width: 400px;
            margin: 0 auto;
            padding: 40px;
            position: relative;
            z-index: 3;
        }

        .container:hover {
            background-color: rgba(0, 0, 0, 0.9);
        }

        .logo {
            background-image: url('/images/loggo1.png');
            background-size: 100% 100%;
            background-repeat: no-repeat;
            width: 150px;
            height: 100px;
            margin: 0 auto;
            z-index: 2;
        }

        #particles-js {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div id="particles-js"></div>
    <div class="flex items-center justify-center min-h-screen">
        <div class="top-left-logo"></div>
        <ul class="flex space-x-4 mr-4 mt-4">
            <div class="container p-5 md:p-8 rounded-lg shadow-md w-full text-white">
                @if($errors->has('message'))
                    <div class="bg-red-500 text-white font-medium py-2 px-4 mb-4 rounded-lg text-center error-message">
                        {{ $errors->first('message') }}
                    </div>
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            setTimeout(function() {
                                $('.error-message').fadeOut('slow', function() {
                                    $(this).remove();
                                });
                            }, 3000);
                        });
                    </script>
                @endif

                @if(Session::has('login-message'))
                    <div class="alert alert-success bg-blue-500 text-white rounded-lg text-center" id="login-message">
                        {{ Session::get('login-message') }}
                    </div>
                    <script>
                        $(document).ready(function() {
                            setTimeout(function() {
                                $('#login-message').fadeOut('slow', function() {
                                    $(this).remove();
                                });
                            }, 3000);
                        });
                    </script>
                @endif

                @if (Session::has('success'))
                    <div class="bg-blue-500 text-white font-medium py-2 px-4 mb-4 rounded-lg text-center">
                        {!! Session::get('success') !!}
                    </div>
                @endif
                <div class="logo mb-3"></div>
                <h2 class="text-lg md:text-xl font-semibold text-center mb-8">LOGIN</h2>
                <form action="/login" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="username" class="block text-gray-300 font-medium mb-2">Username</label>
                        <input type="text" id="username" name="username" class="w-full px-3 py-2 rounded-lg bg-gray-800 focus:ring-blue-500 focus:border-blue-500 text-sm mb-2" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-300 font-medium mb-2">Password</label>
                        <input type="password" id="password" name="password" class="w-full px-3 py-2 rounded-lg bg-gray-800 focus:ring-blue-500 focus:border-blue-500 text-sm mb-2" required>
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="w-full bg-blue-500 text-white font-medium py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Login</button>
                    </div>
                    <div class="mb-4 text-center">
                        <p class="text-gray-300">Don't have an account? <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Register here</a></p>
                    </div>
                    <footer style="background-color: rgba(0, 0, 0, 0.7); color: white; text-align: center; position: fixed; bottom: 0; left: 0; width: 100%;">
                        <div style="padding: 1px; background-color: rgba(0, 0, 0, 0.8)">
                            <p style="margin-right: 10px;  margin-top: 20px;">&copy; 2023 Agan Rohan All Rights Reserved.</p>
                            <div style="position: relative; top: -23px;">
                                <a href="https://www.facebook.com/yourfacebookpage" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: white; margin-right:320px; font-size: 15px;">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://discord.gg/yourdiscord" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: white; margin-right:10px; font-size: 15px;">
                                    <i class="fab fa-discord"></i>
                                </a>
                            </div>
                        </div>
                    </footer>
                </form>
            </div>
        </ul>
    </div>

    <script>
        particlesJS("particles-js", {
            particles: {
                number: {
                    value: 50,
                    density: {
                        enable: true,
                        value_area: 800,
                    },
                },
                size: {
                    value: 2,
                },
            },
        });
    </script>
</body>
</html>
