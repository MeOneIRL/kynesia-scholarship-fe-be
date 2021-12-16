<nav class="sticky top-0 bg-bg-color border-b border-gray-300" x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center md:hidden">
                <!-- Mobile menu button-->
                <button type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-primary-color focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false" @click="open = !open">
                    <span class="sr-only">Open main menu</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center md:items-stretch md:justify-start">
                <div class="flex-shrink-0 flex items-center hidden md:block">
                    <p class="text-3xl text-secondary-color {{ request()->is('portal/home') ? 'block' : 'hidden'}}">
                        Home
                    </p>
                    <p class="text-3xl text-secondary-color {{ request()->is('portal/profile') ? 'block' : 'hidden'}}">
                        Profile
                    </p>
                    <p
                        class="text-3xl text-secondary-color {{ request()->is('portal/riwayat-pencairan-dana') ? 'block' : 'hidden'}}">
                        Riwayat Pencairan Dana
                    </p>
                </div>
                <div class="flex-shrink-0 flex items-center md:hidden">
                    <img class="w-20 h-auto" src="{{ asset('images/logo.svg')}}" alt="">
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <!-- Profile dropdown -->
                <div @click.away="open = false" x-data="{ open: false }" class="ml-3 relative">
                    <div class="bg-primary-color rounded-full p-1">
                        <button @click="open = !open" type="button"
                            class="bg-bg-white flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-primary-color"
                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <svg class="h-8 w-8 rounded-full border-2 border-bg-color filter brightness-0 invert"
                                width="100" height="100" viewBox="0 0 100 100" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M50 25C54.5833 25 58.3333 28.75 58.3333 33.3333C58.3333 37.9167 54.5833 41.6667 50 41.6667C45.4167 41.6667 41.6667 37.9167 41.6667 33.3333C41.6667 28.75 45.4167 25 50 25ZM50 62.5C61.25 62.5 74.1667 67.875 75 70.8333V75H25V70.875C25.8333 67.875 38.75 62.5 50 62.5ZM50 16.6667C40.7917 16.6667 33.3333 24.125 33.3333 33.3333C33.3333 42.5417 40.7917 50 50 50C59.2083 50 66.6667 42.5417 66.6667 33.3333C66.6667 24.125 59.2083 16.6667 50 16.6667ZM50 54.1666C38.875 54.1666 16.6667 59.75 16.6667 70.8333V83.3333H83.3333V70.8333C83.3333 59.75 61.125 54.1666 50 54.1666Z"
                                    fill="#1E335F" />
                            </svg>
                        </button>
                    </div>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <!-- Active: "bg-gray-100", Not Active: "" -->
                        <p class="block px-4 py-2 text-sm font-semibold tracking-wide text-secondary-color">
                            Anda Masuk Sebagai</p>
                        <p class="block px-4 py-2 text-sm text-gray-700 border-b broder-gray-300">
                            {{Auth::user()->email}}</p>
                        <a href="{{route('logoutAccount')}}" class="block px-4 py-2 text-sm text-red-500 font-semibold" role="menuitem"
                            tabindex="-1" id="user-menu-item-2">Keluar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="open" :class="{'md:hidden': open, 'hidden': !open}">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{route('homePortal')}}"
                class="block px-3 py-2 rounded-md text-base font-medium {{ request()->is('portal/home') ? 'bg-primary-color text-bg-color' : 'bg-white text-secondary-color hover:bg-gray-300'}}"
                aria-current="page">Home</a>
            <a href="{{route('profilePortal')}}"
                class="block px-3 py-2 rounded-md text-base font-medium {{ request()->is('portal/profile') ? 'bg-primary-color text-bg-color' : 'bg-white text-secondary-color hover:bg-gray-300'}}">
                Profile</a>
            <a href="{{route('fundingPortal')}}"
                class="block px-3 py-2 rounded-md text-base font-medium {{ request()->is('portal/riwayat-pencairan-dana') ? 'bg-primary-color text-bg-color' : 'bg-white text-secondary-color hover:bg-gray-300'}}">
                Riwayat Pencairan Dana</a>
            <a href="/bantuan"
                class="text-secondary-color hover:bg-accent-color block px-3 py-2 rounded-md text-base font-medium">Bantuan</a>
        </div>
    </div>
</nav>