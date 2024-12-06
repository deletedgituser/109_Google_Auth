<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - LoveConnect</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-pink-100 to-purple-200 min-h-screen font-sans">
    @if($user)
    <div class="flex flex-col md:flex-row min-h-screen">
        <!-- Left Sidebar -->
        <div class="bg-white w-full md:w-1/3 lg:w-1/4 p-6 shadow-lg">
            <h2 class="text-2xl font-bold mb-6 text-pink-600">Your Profile</h2>
            <div class="text-gray-800 space-y-4">
                <div class="relative">
                    <img src="{{ $user->avatar }}" alt="{{ $user->name }}" class="w-32 h-32 rounded-full mb-4 object-cover mx-auto border-4 border-pink-400 shadow-lg">
                    <div class="absolute bottom-0 right-1/3 bg-green-400 w-4 h-4 rounded-full border-2 border-white"></div>
                </div>
                <p class="text-xl font-semibold text-center">{{ $user->name }}</p>
                <p class="text-gray-600 text-center">{{ $user->email }}</p>
                <div class="bg-pink-100 rounded-lg p-4 mt-4">
                    <p class="font-semibold text-pink-800">About Me:</p>
                    <p class="text-gray-700">I love long walks on the beach and deep conversations under the stars.</p>
                </div>
                <div class="bg-purple-100 rounded-lg p-4 mt-4">
                    <p class="font-semibold text-purple-800">Interests:</p>
                    <div class="flex flex-wrap gap-2 mt-2">
                        <span class="bg-purple-200 text-purple-800 px-2 py-1 rounded-full text-sm">Travel</span>
                        <span class="bg-purple-200 text-purple-800 px-2 py-1 rounded-full text-sm">Cooking</span>
                        <span class="bg-purple-200 text-purple-800 px-2 py-1 rounded-full text-sm">Photography</span>
                    </div>
                </div>
            </div>
            <div class="mt-6">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full px-4 py-2 bg-pink-600 text-white rounded-lg hover:bg-pink-700 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-opacity-50">
                        Logout
                    </button>
                </form>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <h2 class="text-3xl font-bold mb-8 text-purple-800">Find Your Perfect Match</h2>
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="w-full md:w-1/2 flex flex-col items-center mb-6 md:mb-0">
                        <img src="{{ $user->avatar }}" alt="{{ $user->name }}" class="w-40 h-40 rounded-full mb-4 object-cover border-4 border-pink-400 shadow-lg">
                        <p class="text-2xl font-semibold text-gray-800">{{ $user->name }}</p>
                        <p class="text-gray-600 mb-4">Looking for love</p>
                        <a href="{{ route('find_match') }}" class="bg-gradient-to-r from-pink-500 to-purple-600 text-white px-8 py-3 rounded-full hover:from-pink-600 hover:to-purple-700 transition-all duration-300 shadow-md hover:shadow-lg text-center w-full md:w-auto">
                            Find a Match
                        </a>
                    </div>
                    
                    <!-- Display Match -->
                    <div class="w-full md:w-1/2 mt-8 md:mt-0 text-center" id="match">
                        @isset($match)
                            <h3 class="text-2xl font-bold text-purple-800 mb-4">You matched with:</h3>
                            <img src="{{ $match->avatar }}" alt="Match Avatar" class="w-32 h-32 rounded-full mt-4 object-cover mx-auto border-4 border-purple-400 shadow-lg">
                            <p class="text-xl font-semibold mt-4 text-gray-800">{{ $match->name }}</p>
                            <p class="text-gray-600">Interests: Travel, Music</p>
                            <button class="mt-4 bg-purple-500 text-white px-6 py-2 rounded-full hover:bg-purple-600 transition-all duration-300">
                                Send a Message
                            </button>
                        @else
                            <p class="text-xl text-gray-600">No match found yet. Keep searching!</p>
                            <img src="https://via.placeholder.com/150" alt="Placeholder" class="w-32 h-32 rounded-full mt-4 object-cover mx-auto opacity-50">
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="flex items-center justify-center min-h-screen">
        <p class="text-2xl text-gray-600 bg-white p-8 rounded-xl shadow-lg">No user found. Please <a href="{{ route('login') }}" class="text-pink-600 hover:underline">login</a> to continue.</p>
    </div>
    @endif

    <script>
        function findMatch() {
            // Sample match data
            const match = {
                name: "Alex Johnson",
                interests: "Photography, Hiking",
                image: "https://via.placeholder.com/150",
            };
            // Bind match to the data
            document.querySelector("#match").innerHTML = `
                <h3 class="text-2xl font-bold text-purple-800 mb-4">You matched with:</h3>
                <img src="${match.image}" alt="${match.name}" class="w-32 h-32 rounded-full mt-4 object-cover mx-auto border-4 border-purple-400 shadow-lg">
                <p class="text-xl font-semibold mt-4 text-gray-800">${match.name}</p>
                <p class="text-gray-600">Interests: ${match.interests}</p>
                <button class="mt-4 bg-purple-500 text-white px-6 py-2 rounded-full hover:bg-purple-600 transition-all duration-300">
                    Send a Message
                </button>
            `;
        }
    </script>
</body>
</html>