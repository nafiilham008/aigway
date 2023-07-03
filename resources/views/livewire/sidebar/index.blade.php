<div x-cloak x-data="sidebar()" class="relative flex items-start ">
    <div class="fixed top-0 z-40 transition-all duration-300">
        <div class="flex justify-end">
            <button @click="sidebarOpen = !sidebarOpen"
                :class="{ 'hover:bg-gray-300': !sidebarOpen, 'hover:bg-gray-700': sidebarOpen }"
                class="transition-all duration-300 w-8 p-1 mx-3 my-2 rounded-full focus:outline-none">
                <svg viewBox="0 0 20 20" class="w-6 h-6 fill-current"
                    :class="{ 'text-gray-600': !sidebarOpen, 'text-gray-300': sidebarOpen }">
                    <path x-show="!sidebarOpen" fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                    <path x-show="sidebarOpen" fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>

    <div x-cloak wire:ignore :class="{ 'w-56': sidebarOpen, 'w-0': !sidebarOpen }"
        class="fixed top-0 bottom-0 left-0 z-30 block w-56 h-full min-h-screen overflow-y-auto text-gray-400 transition-all duration-300 ease-in-out bg-white shadow-lg overflow-x-hidden">

        <div class="flex flex-col items-stretch justify-between h-full">
            <div class="flex flex-col flex-shrink-0 w-full">
                <div class="flex items-center mt-10 justify-center px-8 py-3 text-center">
                    <a href="{{ url('/') }}" class="text-lg leading-normal text-gray-200">
                        <img src="{{ asset('assets/images/logo.svg') }}" alt="">
                    </a>
                </div>

                <nav>
                    <div class="flex-grow md:block md:overflow-y-auto overflow-x-hidden"
                        :class="{ 'opacity-1': sidebarOpen, 'opacity-0': !sidebarOpen }">
                        <a id="button-dashboard"
                            class="flex justify-between items-center md:px-10 py-3 hover:bg-[#F6E0E6] hover:text-[#861B43] text-sm"
                            href="{{ route('dashboard.index') }}">
                            <span class="">Dashboard</span>
                            <div id="hi-dashboard" class="hidden">
                                <span class="iconify" data-icon="iconamoon:arrow-right-2" style="color: #861b43;"
                                    data-width="20" data-height="20"></span>
                            </div>

                        </a>

                        <a id="button-category"
                            class="flex justify-between items-center md:px-10 py-3 hover:bg-[#F6E0E6] hover:text-[#861B43] text-sm"
                            href="{{ route('dashboard.category.index') }}">
                            <span class="">Kategori</span>
                            <div id="hi-category" class="hidden">
                                <span class="iconify" data-icon="iconamoon:arrow-right-2" style="color: #861b43;"
                                    data-width="20" data-height="20"></span>
                            </div>
                        </a>

                        <button id="button-kelola" data-collapse-toggle="dropdown-product"
                            class="flex justify-between items-center md:px-10 py-3 hover:bg-[#F6E0E6]  hover:text-[#861B43] text-sm w-full">
                            <span>Kelola Produk</span>
                            <div id="hi-kelola" class="hidden">
                                <span class="iconify" data-icon="iconamoon:arrow-right-2" style="color: #861b43;"
                                    data-width="20" data-height="20"></span>
                            </div>
                        </button>
                        <ul id="dropdown-product" class="hidden py-2 space-y-2">
                            <li>
                                <a id="button-product" href="{{ route('dashboard.product.index') }}"
                                    class="flex items-center md:pl-12 py-1 hover:bg-[#F6E0E6]  hover:text-[#861B43] text-sm">Produk</a>
                            </li>
                            <li>
                                <a id="button-testimoni" href="{{ route('dashboard.testimony.index') }}"
                                    class="flex items-center md:pl-12 py-1 hover:bg-[#F6E0E6]  hover:text-[#861B43] text-sm">Testimoni</a>
                            </li>
                        </ul>
                        <button data-collapse-toggle="dropdown-setting"
                            class="flex justify-between items-center md:px-10 py-3 hover:bg-[#F6E0E6]  hover:text-[#861B43] text-sm w-full">
                            <span class="">Pengaturan</span>
                            <div id="hi-kelola" class="hidden">
                                <span class="iconify" data-icon="iconamoon:arrow-right-2" style="color: #861b43;"
                                    data-width="20" data-height="20"></span>
                            </div>
                        </button>
                        <ul id="dropdown-setting" class="hidden py-2 space-y-2">
                            <li>
                                <a id="li-warehouse-logistic" href="{{ route('dashboard.reseller.index') }}"
                                    class="flex items-center md:pl-12 py-1 hover:bg-[#F6E0E6]  hover:text-[#861B43] text-sm">Offline Store</a>
                            </li>
                            <li>
                                <a id="li-warehouse-logistic" href="{{ route('dashboard.banner.index') }}"
                                    class="flex items-center md:pl-12 py-1 hover:bg-[#F6E0E6]  hover:text-[#861B43] text-sm">Banner</a>
                            </li>
                        </ul>
                    </div>

                </nav>

            </div>

            <div class="">
                <a href="{{ route('dashboard.setting.index') }}" class="px-4 py-3 flex justify-center items-center gap-2">
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="18" cy="18" r="18" fill="#D9D9D9" />
                        <path
                            d="M18 18C16.9 18 15.9583 17.6083 15.175 16.825C14.3917 16.0417 14 15.1 14 14C14 12.9 14.3917 11.9583 15.175 11.175C15.9583 10.3917 16.9 10 18 10C19.1 10 20.0417 10.3917 20.825 11.175C21.6083 11.9583 22 12.9 22 14C22 15.1 21.6083 16.0417 20.825 16.825C20.0417 17.6083 19.1 18 18 18ZM10 26V23.2C10 22.6333 10.146 22.1123 10.438 21.637C10.73 21.1617 11.1173 20.7993 11.6 20.55C12.6333 20.0333 13.6833 19.6457 14.75 19.387C15.8167 19.1283 16.9 18.9993 18 19C19.1 19 20.1833 19.1293 21.25 19.388C22.3167 19.6467 23.3667 20.034 24.4 20.55C24.8833 20.8 25.271 21.1627 25.563 21.638C25.855 22.1133 26.0007 22.634 26 23.2V26H10Z"
                            fill="url(#paint0_linear_246_298)" />
                        <defs>
                            <linearGradient id="paint0_linear_246_298" x1="12.4828" y1="18" x2="45.3103"
                                y2="18" gradientUnits="userSpaceOnUse">
                                <stop offset="0.114583" stop-color="#BA2B60" />
                                <stop offset="0.65625" stop-color="#E9C6CC" />
                                <stop offset="0.65635" stop-color="#FFB9C5" />
                                <stop offset="0.90625" stop-color="#C7ECE2" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <h1 class="text-sm font-vietnam text-black">Admin</h1>
                </a>
                <hr class="my-[14px] h-[2px] border-[#F1F1F1] border">
                <a title="Logout" href="#" class=" px-4 py-3 flex justify-center items-center gap-2"
                    wire:click.prevent="logout">
                    <svg width="27" height="23" viewBox="0 0 27 23" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.5 16.5V19C16.5 19.663 16.2366 20.2989 15.7678 20.7678C15.2989 21.2366 14.663 21.5 14 21.5H4C3.33696 21.5 2.70107 21.2366 2.23223 20.7678C1.76339 20.2989 1.5 19.663 1.5 19V4C1.5 3.33696 1.76339 2.70107 2.23223 2.23223C2.70107 1.76339 3.33696 1.5 4 1.5H13.5C14.8806 1.5 16.5 2.61937 16.5 4V6.5M20.5 16.5L25.5 11.5L20.5 6.5M8.5 11.5H24.5"
                            stroke="url(#paint0_linear_246_303)" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <defs>
                            <linearGradient id="paint0_linear_246_303" x1="5.22414" y1="11.5" x2="54.4655"
                                y2="11.5" gradientUnits="userSpaceOnUse">
                                <stop offset="0.114583" stop-color="#BA2B60" />
                                <stop offset="0.65625" stop-color="#E9C6CC" />
                                <stop offset="0.65635" stop-color="#FFB9C5" />
                                <stop offset="0.90625" stop-color="#C7ECE2" />
                            </linearGradient>
                        </defs>
                    </svg>

                    <h1 class="text-sm font-vietnam text-black">Keluar</h1>
                </a>
            </div>
        </div>


    </div>

    @push('js')
        <script>
            window.addEventListener('confirm-logout', event => {
                if (confirm('Are you sure you want to logout?')) {
                    console.log('js read');
                    Livewire.emit('confirm');
                }
            });
        </script>
        <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    @endpush
    @push('css')
        <style>
            .a-hover:hover svg path {
                fill: #fff;
            }

            .a-hover:hover span {
                color: #fff;
            }
        </style>
    @endpush
