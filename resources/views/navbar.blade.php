<nav class="bg-gray-900 border-b border-gray-700">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center">
                <a href="/" class="text-white text-xl font-semibold mr-4">Pax</a>
                <div class="hidden md:flex space-x-4">
                    <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Features</a>
                    <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Explore</a>
                    <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Pricing</a>
                    <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Docs</a>
                </div>
            </div>

            <div class="flex items-center">
                <div class="relative hidden sm:block">
                    <input
                        type="text"
                        class="bg-gray-800 text-gray-300 placeholder-gray-500 rounded-md pl-10 pr-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
                        placeholder="Search battles"
                    />
                    <svg
                        class="absolute left-3 top-2 h-5 w-5 text-gray-500"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 21.7l-4.5-4.5m0 0A7.5 7.5 0 1116.5 16.5l3.5 5.5z"/>
                    </svg>
                </div>

                <div class="ml-4 relative">
                    <button onclick="toggleDropdown()" class="flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <img
                            class="h-8 w-8 rounded-full"
                            src="#"
                            alt="User Avatar"/>
                    </button>
                    <div id="dropdownMenu" class="absolute right-0 mt-2 w-48 bg-gray-800 border border-gray-700 rounded-md shadow-lg z-10 hidden">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Your Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Settings</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Sign Out</a>
                    </div>
                </div>

                <button
                    onclick="toggleMobileMenu()"
                    class="md:hidden ml-2 text-gray-300 hover:text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16 M4 12h16m-16 6h16" />
                    </svg>
                </button>
            </div>
        </div>

        <div id="mobileMenu" class="md:hidden hidden">
            <div class="space-y-1 px-2 pb-3 pt-2">
                <a href="#" class="block text-gray-300 hover:text-white px-3 py-2 rounded-md text-base font-medium">Features</a>
                <a href="#" class="block text-gray-300 hover:text-white px-3 py-2 rounded-md text-base font-medium">Explore</a>
                <a href="#" class="block text-gray-300 hover:text-white px-3 py-2 rounded-md text-base font-medium">Pricing</a>
                <a href="#" class="block text-gray-300 hover:text-white px-3 py-2 rounded-md text-base font-medium">Docs</a>
            </div>
            <div class="border-t border-gray-700 pb-3">
                <div class="px-2 relative mt-3">
                    <input
                        type="text"
                        class="w-full bg-gray-800 text-gray-300 placeholder-gray-500 rounded-md pl-6 pr-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
                        placeholder="Search battles"
                    />
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleDropdown() {
            const dropdownMenu = document.getElementById('dropdownMenu');
            dropdownMenu.classList.toggle('hidden');
        }

        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('hidden');
        }
    </script>
</nav>
