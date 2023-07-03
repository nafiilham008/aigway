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
    <div class=" bg-white rounded-xl py-[27px] px-20 ">
        <h1 class="text-[#272B30] text-lg font-semibold font-vietnam mb-1">Pengaturan</h1>
        <h1 class="text-[#737373] text-xs font-vietnam mb-8">Berikut adalah data admin</h1>
        {{-- Iqbal --}}
        @if (session()->has('error'))
            <div class="alert alert-danger text-red-600 text-center mb-5 font-semibold">
                {{ session('error') }}
            </div>
        @endif
        @if (session()->has('success'))
            <x-modal.modal-notification />
        @endif
        <div class="flex gap-5 items-center w-full mb-5">
            <div class="w-full">
                <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Nama</h1>
                <input type="text" id="name" wire:model.defer="name"
                    class="bg-white border border-[#CACACA] text-[#A8A8A8] text-xs rounded-lg block w-full py-2.5 px-6"
                    placeholder="Mida Alkusani" required>
                @error('name')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full">
                <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Email</h1>
                <input type="email" id="email" wire:model.defer="email"
                    class="bg-white border border-[#CACACA] text-[#A8A8A8] text-xs rounded-lg block w-full py-2.5 px-6"
                    placeholder="aigwayofficial@gmail.com" required>
                @error('email')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="flex gap-5 items-center w-full mb-5">
            <div class="w-full">
                <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Kota</h1>
                <input type="text" id="city" wire:model.defer="city"
                    class="bg-white border border-[#CACACA] text-[#A8A8A8] text-xs rounded-lg block w-full py-2.5 px-6"
                    placeholder="Yogyakarta" required>
                @error('city')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full">
                <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Alamat Kantor</h1>
                <input type="text" id="address" wire:model.defer="address"
                    class="bg-white border border-[#CACACA] text-[#A8A8A8] text-xs rounded-lg block w-full py-2.5 px-6"
                    placeholder="Jln Belimbing No. 86, Bantul, Bantul, Daerah Istimewa Yogyakarta" required>
                @error('address')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="flex gap-5 items-center w-full mb-5">
            <div class="w-full">
                <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Latitude</h1>
                <input type="number" step="any" id="latitude" wire:model.defer="latitude"
                    class="bg-white border border-[#CACACA] text-[#A8A8A8] text-xs rounded-lg block w-full py-2.5 px-6"
                    placeholder="Contoh: -7.8765" required>
                @error('latitude')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full">
                <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Longitude</h1>
                <input type="number" step="any" id="longitude" wire:model.defer="longitude"
                    class="bg-white border border-[#CACACA] text-[#A8A8A8] text-xs rounded-lg block w-full py-2.5 px-6"
                    placeholder="Contoh: 110.4321" required>
                @error('longitude')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="flex gap-5 items-center w-full mb-5">
            <div class="w-full">
                <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">No. Telepon</h1>
                <input type="text" id="phone" wire:model.defer="phone"
                    class="bg-white border border-[#CACACA] text-[#A8A8A8] text-xs rounded-lg block w-full py-2.5 px-6"
                    placeholder="Contoh: +628222133561" pattern="\d*" maxlength="15" required>
                <div id="phone-error" class="text-red-500 text-xs"></div>
                @error('phone')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full">

            </div>
        </div>
        <div class="flex gap-5 justify-end">
            <button wire:click="getPassword" class="text-xs font-vietnam text-[#861B43]">Ubah
                Password</button>
            <button wire:click='storeOrUpdateSetting'
                class="px-[13px] py-[10px] rounded-md button text-sm text-white">Simpan Perubahan</button>
        </div>
    </div>
    <livewire:dashboard.setting.component.modal-edit-password :openModal="$openModal" />
</div>
@push('js')
<script>
    const phoneInput = document.getElementById('phone');
    const phoneError = document.getElementById('phone-error');

    phoneInput.addEventListener('input', function() {
        let phoneValue = phoneInput.value;
        const phoneRegex = /^(62)?\d{9,15}$/;

        phoneValue = phoneValue.replace(/\D/g, '');

        if (!phoneRegex.test(phoneValue)) {
            phoneError.textContent = 'Format nomor telepon tidak valid';
        } else if (!phoneValue.startsWith('62')) {
            phoneError.textContent = 'Nomor telepon harus diawali dengan 62';
        } else {
            phoneError.textContent = '';
        }

        phoneInput.value = phoneValue;
    });
</script>

<script>
    var password = document.getElementById('password');
    var password2 = document.getElementById('password2');
    var password3 = document.getElementById('password3');

    var toggler1 = document.getElementById('toggler1');
    var toggler2 = document.getElementById('toggler2');
    var toggler3 = document.getElementById('toggler3');

    showHidePassword = (input, toggler) => {
        if (input.type === 'password') {
            input.setAttribute('type', 'text');
            toggler.removeAttribute('icon');
            toggler.setAttribute('icon', 'bxs:hide');
        } else {
            toggler.removeAttribute('icon');
            toggler.setAttribute('icon', 'bxs:show');
            input.setAttribute('type', 'password');
        }
    };

    toggler1.addEventListener('click', () => showHidePassword(password, toggler1));
    toggler2.addEventListener('click', () => showHidePassword(password2, toggler2));
    toggler3.addEventListener('click', () => showHidePassword(password3, toggler3));
</script>
@endpush
