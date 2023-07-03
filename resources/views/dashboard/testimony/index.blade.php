<div :class="{ 'ml-56': sidebarOpen, 'ml-0': !sidebarOpen }"
    class="flex-col w-full ml-56 transition-all duration-300 md:flex md:flex-col min-h-screen p-20 bg-[#FFF3F3]">
    <div class="flex gap-[10px] items-center mb-[46px]">
        @foreach ($breadcrumb as $item)
            @if (isset($item['link']))
                <a href="{{ $item['link'] }}"
                    class="font-vietnam font-medium text-base text-[#272727]/50">{{ $item['label'] }}</a>
            @else
                <h1 class="font-vietnam font-semibold text-base text-black">{{ $item['label'] }}</h1>
            @endif

            @if (!$loop->last)
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7.39574 17.5832L14.4166 10.5832C14.4999 10.4998 14.5591 10.4096 14.5941 10.3123C14.6291 10.2151 14.6463 10.1109 14.6457 9.99984C14.6457 9.88873 14.6285 9.78456 14.5941 9.68734C14.5596 9.59012 14.5005 9.49984 14.4166 9.4165L7.39574 2.39567C7.20129 2.20123 6.95824 2.104 6.66657 2.104C6.37491 2.104 6.12491 2.20817 5.91657 2.4165C5.70824 2.62484 5.60407 2.86789 5.60407 3.14567C5.60407 3.42345 5.70824 3.6665 5.91657 3.87484L12.0416 9.99984L5.91657 16.1248C5.72213 16.3193 5.62491 16.559 5.62491 16.844C5.62491 17.129 5.72907 17.3754 5.93741 17.5832C6.14574 17.7915 6.38879 17.8957 6.66657 17.8957C6.94435 17.8957 7.18741 17.7915 7.39574 17.5832Z"
                        fill="url(#paint0_linear_187_865)" />
                    <defs>
                        <linearGradient id="paint0_linear_187_865" x1="13.2427" y1="9.99984" x2="-5.3083"
                            y2="9.99984" gradientUnits="userSpaceOnUse">
                            <stop offset="0.114583" stop-color="#BA2B60" />
                            <stop offset="0.65625" stop-color="#E9C6CC" />
                            <stop offset="0.65635" stop-color="#FFB9C5" />
                            <stop offset="0.90625" stop-color="#C7ECE2" />
                        </linearGradient>
                    </defs>
                </svg>
            @endif
        @endforeach
    </div>
    <div class="bg-white p-6 rounded-lg">
        <h1 class="text-[#272B30] text-lg font-semibold font-vietnam mb-1">Testimoni</h1>
        <h1 class="text-[#737373] text-xs font-vietnam mb-5">
            {{ $testimonyCount != 0 ? $testimonyCount . ' Testimoni tersedia' : 'Belum ada testimoni tersedia' }}
        </h1>
        <div class="flex justify-end mb-3">
            <a href="{{ route('dashboard.testimony.create') }}"
            class="px-8 py-2 rounded-md button text-sm text-white">Tambah</a>
        </div>

    <div>
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </div>
    <x-modal.modal-notification />

    <div>
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </div>
    <livewire:dashboard.testimony.component.testimony-datatable />

</div>

@push('js')
    <script src="../assets/js/navigation/sidebarActive.js"></script>
@endpush

@push('css')
    <style>
        .button {
            background: linear-gradient(to right, #BA2B60, #c6537b, #d27b98);
        }

        button.button:hover,
        button.button:active {
            background: #BA2B60
        }
        ::-webkit-scrollbar {
            width: 0.5em;
        }

        ::-webkit-scrollbar-track {
            background-color: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background-color: transparent;
        }
    </style>
@endpush
