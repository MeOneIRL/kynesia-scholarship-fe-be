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
                    <div>
                        <button @click="open = !open" type="button"
                            class="bg-bg-white flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-primary-color focus:ring-white"
                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="" />
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
                            user@mail.com</p>
                        <a href="#" class="block px-4 py-2 text-sm text-red-500 font-semibold" role="menuitem"
                            tabindex="-1" id="user-menu-item-2">Keluar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="open" :class="{'md:hidden': open, 'hidden': !open}">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="#"
                class="block px-3 py-2 rounded-md text-base font-medium {{ request()->is('portal/home') ? 'bg-primary-color text-bg-color' : 'bg-white text-secondary-color hover:bg-gray-300'}}"
                aria-current="page">Home</a>
            <a href="#"
                class="block px-3 py-2 rounded-md text-base font-medium {{ request()->is('portal/profile') ? 'bg-primary-color text-bg-color' : 'bg-white text-secondary-color hover:bg-gray-300'}}">
                Profile</a>
            <a href="#"
                class="block px-3 py-2 rounded-md text-base font-medium {{ request()->is('portal/riwayat-pencairan-dana') ? 'bg-primary-color text-bg-color' : 'bg-white text-secondary-color hover:bg-gray-300'}}">
                Riwayat Pencairan Dana</a>
            <a href="#"
                class="text-secondary-color hover:bg-accent-color block px-3 py-2 rounded-md text-base font-medium">Bantuan</a>
        </div>
    </div>
</nav>