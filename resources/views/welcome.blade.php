<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to LoveConnect</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-pink-400 to-purple-600 min-h-screen flex items-center justify-center p-4">
    <div class="max-w-md w-full bg-white bg-opacity-10 backdrop-blur-md rounded-xl shadow-lg p-8 text-center transition-all duration-300 hover:shadow-xl">
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold mb-6 text-white animate-fade-in-down">
            Welcome to LoveConnect
            <span class="inline-block animate-bounce">❤️</span>
        </h1>
        <p class="text-lg sm:text-xl mb-8 text-white opacity-90">
            Find your perfect match with just a click. Your soulmate might be just a swipe away!
        </p>
        <a href="{{ route('login') }}" class="inline-block bg-white text-pink-600 px-8 py-3 rounded-full text-lg font-semibold shadow-md hover:bg-pink-100 hover:scale-105 transition-all duration-300 ease-in-out">
            Get Started
        </a>
    </div>

    <style>
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fade-in-down {
            animation: fadeInDown 0.6s ease-out;
        }
    </style>
</body>
</html>