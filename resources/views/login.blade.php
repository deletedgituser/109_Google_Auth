<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - LoveConnect</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-pink-400 to-purple-600 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white bg-opacity-20 backdrop-blur-lg p-8 rounded-2xl shadow-xl w-full max-w-md text-center transition-all duration-300 hover:shadow-2xl">
        <h1 class="text-3xl sm:text-4xl font-bold text-white mb-8 animate-fade-in-down">Login to LoveConnect</h1>
        
        <!-- Username Field -->
        <input type="text" placeholder="Username" class="w-full p-3 mb-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-pink-500" />

        <!-- Password Field -->
        <input type="password" placeholder="Password" class="w-full p-3 mb-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-pink-500" />

        <a href="{{ route('google.login') }}" class="w-full flex items-center justify-center bg-white text-gray-800 py-3 px-4 rounded-lg shadow-md hover:bg-gray-100 transition-all duration-300 group">
            <svg class="w-6 h-6 mr-3 transition-transform duration-300 group-hover:scale-110" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                <path fill="#EA4335" d="M24 9.5c3.05 0 5.79 1.16 7.86 3.06l5.85-5.85C33.47 3.73 29.02 2 24 2 14.73 2 6.73 7.91 3.18 15.93l7.1 5.5C12.43 14.68 17.68 9.5 24 9.5z"></path>
                <path fill="#4285F4" d="M46.37 24.4c0-1.65-.16-3.24-.46-4.77H24v9.05h12.7c-.55 2.96-2.16 5.47-4.63 7.18l7.09 5.5c4.15-3.83 6.54-9.48 6.54-16.96z"></path>
                <path fill="#FBBC05" d="M10.28 28.07C9.48 25.96 9 23.59 9 21c0-2.59.48-5.07 1.28-7.07L3.18 8.43C1.15 12.17 0 16.45 0 21s1.15 8.83 3.18 12.57l7.1-5.5z"></path>
                <path fill="#34A853" d="M24 44c5.02 0 9.47-1.73 13.02-4.7l-7.09-5.5c-2.04 1.36-4.64 2.16-7.92 2.16-6.33 0-11.67-4.32-13.6-10.18l-7.1 5.5C6.73 40.09 14.73 46 24 46z"></path>
            </svg>
            <span class="text-lg font-semibold">Login with Google</span>
        </a>
        <p class="mt-6 text-white text-sm">Don't have an account? <a href="#" class="underline hover:text-pink-200 transition-colors duration-300">Sign up</a></p>
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