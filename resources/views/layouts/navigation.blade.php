<?php
    use App\Models\Footer;
    $footerData = Footer::all()->keyBy('id');
?>
<div class="flex h-screen">
    <!-- Sidebar (Navbar) -->
    <nav x-data="{ open: false }" class="bg-white border-r border-gray-100 w-64 fixed h-full">
        <!-- Logo -->
        <div class="shrink-0 flex items-center h-16 border-b border-gray-200 px-4">
            <div class="main-header-one__bottom-left">
                <div class="w-[75px] h-[45px]  aspect-[5/3]">
                    <a href=""><img src="{{ asset('storage/' . $footerData[1]->image) }}" class="object-contain w-full h-full">
                    </a>
                </div>
            </div>
        </div>

        <!-- Navigation Links -->
        <div class="space-y-1 mt-4">
            <x-nav-link :href="route('mainmenu')" :active="request()->routeIs('mainmenu')" class="block px-4 py-2">
                Main menu
            </x-nav-link>
        </div>
        <div class="space-y-1 mt-4">
            <x-nav-link :href="route('galeriControl.index')" :active="request()->routeIs('galeriControl.index')" class="block px-4 py-2">
                Setting Galeri
            </x-nav-link>
        </div>
        <div class="space-y-1 mt-4">
            <x-nav-link :href="route('products.index')" :active="request()->routeIs('products.index')" class="block px-4 py-2">
                Setting Product
            </x-nav-link>
        </div>

        <div class="space-y-1 mt-4">
            <x-nav-link :href="route('aboutus.index')" :active="request()->routeIs('aboutus.index')" class="block px-4 py-2">
                Setting about us
            </x-nav-link>
        </div>

        <div class="space-y-1 mt-4">
            <x-nav-link :href="route('feedback.index')" :active="request()->routeIs('feedback.index')" class="block px-4 py-2">
                Setting feedback
            </x-nav-link>
        </div>

        <div class="space-y-1 mt-4">
            <x-nav-link :href="route('testimoni.index')" :active="request()->routeIs('testimoni.index')" class="block px-4 py-2">
                Setting testimoni
            </x-nav-link>
        </div>
        <div class="space-y-1 mt-4">
            <x-nav-link :href="route('footer.index')" :active="request()->routeIs('footer.index')" class="block px-4 py-2">
                Setting Footer
            </x-nav-link>
        </div>
        <div class="space-y-1 mt-4">
        <!-- Responsive Settings Options -->
        <div class="hidden sm:flex sm:items-center">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        <div>{{ Auth::user()->name }}</div>

                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
    </nav>

    <!-- Main Content -->
    <div class="flex-1 bg-gray-50 ml-64">
        <div class="max-w-7xl bg-gray-50 mx-auto p-6">
            <!-- Content goes here -->
            {{ $slot }}
        </div>
    </div>
</div>
