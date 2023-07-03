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
    <div class="flex gap-[53px] rounded-[12px] bg-white px-14 py-20">
        <div class="">
            <div wire:ignore id="map" class="w-[451px] h-[338px]"></div>
        </div>
        <div class="">
            <h1 class="md:text-xl text-lg font-vietnam text-black font-semibold mb-7">
                {{ isset($dataReseller->city) ? $dataReseller->city : 'Kota belum tersedia' }}
                ({{ isset($dataReseller->name) ? $dataReseller->name : 'Kota belum tersedia' }})
            </h1>

            <div class="flex gap-7 mb-[22px]">
                <div class="w-9 h-9">
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17.25 13.5C17.25 12.5054 17.6451 11.5516 18.3483 10.8483C19.0516 10.1451 20.0054 9.75 21 9.75C22.65 9.75 24.045 10.815 24.555 12.285C24.675 12.675 24.75 13.08 24.75 13.5C24.75 13.9925 24.653 14.4801 24.4645 14.9351C24.2761 15.39 23.9999 15.8034 23.6516 16.1517C23.3034 16.4999 22.89 16.7761 22.4351 16.9645C21.9801 17.153 21.4925 17.25 21 17.25C19.365 17.25 18 16.215 17.46 14.76C17.325 14.37 17.25 13.935 17.25 13.5ZM7.5 13.5C7.5 20.25 15.12 29.49 16.5 31.215L15 33C15 33 4.5 21.375 4.5 13.5C4.5 8.745 7.665 4.725 12 3.435C9.24 5.91 7.5 9.495 7.5 13.5ZM21 3C26.79 3 31.5 7.695 31.5 13.5C31.5 21.375 21 33 21 33C21 33 10.5 21.375 10.5 13.5C10.5 7.695 15.21 3 21 3ZM21 6C16.86 6 13.5 9.36 13.5 13.5C13.5 15 13.5 18 21 28.065C28.5 18 28.5 15 28.5 13.5C28.5 9.36 25.14 6 21 6Z"
                            fill="url(#paint0_linear_108_593)" />
                        <defs>
                            <linearGradient id="paint0_linear_108_593" x1="8.68965" y1="18" x2="64.0862"
                                y2="18" gradientUnits="userSpaceOnUse">
                                <stop offset="0.114583" stop-color="#BA2B60" />
                                <stop offset="0.65625" stop-color="#E9C6CC" />
                                <stop offset="0.65635" stop-color="#FFB9C5" />
                                <stop offset="0.90625" stop-color="#C7ECE2" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <h1 class="md:text-lg font-vietnam text-black font-normal text-base">
                    {{ isset($dataReseller->address) ? $dataReseller->address : 'Alamat belum tersedia' }}</h1>
            </div>
            <div class="flex gap-7 mb-[22px]">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M33 9C33 7.35 31.65 6 30 6H6C4.35 6 3 7.35 3 9V27C3 28.65 4.35 30 6 30H30C31.65 30 33 28.65 33 27V9ZM30 9L18 16.5L6 9H30ZM30 27H6V12L18 19.5L30 12V27Z"
                        fill="url(#paint0_linear_108_589)" />
                    <defs>
                        <linearGradient id="paint0_linear_108_589" x1="7.65517" y1="18" x2="69.2069"
                            y2="18" gradientUnits="userSpaceOnUse">
                            <stop offset="0.114583" stop-color="#BA2B60" />
                            <stop offset="0.65625" stop-color="#E9C6CC" />
                            <stop offset="0.65635" stop-color="#FFB9C5" />
                            <stop offset="0.90625" stop-color="#C7ECE2" />
                        </linearGradient>
                    </defs>
                </svg>

                <a href="mailto:aigwayofficial@gmail.com"
                    class="md:text-lg font-vietnam text-black font-normal text-base underline underline-offset-2">{{ isset($dataReseller->email) ? $dataReseller->email : 'Alamat email belum tersedia' }}
                </a>
            </div>
            <div class="flex gap-7 mb-[22px]">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M25.5752 4.36509C24.2 2.97598 22.562 1.87459 20.7567 1.12517C18.9513 0.375741 17.0149 -0.00672017 15.0602 8.93544e-05C6.87019 8.93544e-05 0.195196 6.67509 0.195196 14.8651C0.195196 17.4901 0.885195 20.0401 2.1752 22.2901L0.0751953 30.0001L7.9502 27.9301C10.1252 29.1151 12.5702 29.7451 15.0602 29.7451C23.2502 29.7451 29.9252 23.0701 29.9252 14.8801C29.9252 10.9051 28.3802 7.17009 25.5752 4.36509ZM15.0602 27.2251C12.8402 27.2251 10.6652 26.6251 8.76019 25.5001L8.31019 25.2301L3.6302 26.4601L4.8752 21.9001L4.5752 21.4351C3.34181 19.4655 2.68691 17.189 2.6852 14.8651C2.6852 8.05509 8.2352 2.50509 15.0452 2.50509C18.3452 2.50509 21.4502 3.79509 23.7752 6.13509C24.9264 7.28103 25.8387 8.64408 26.4593 10.1452C27.0798 11.6464 27.3962 13.2558 27.3902 14.8801C27.4202 21.6901 21.8702 27.2251 15.0602 27.2251ZM21.8402 17.9851C21.4652 17.8051 19.6352 16.9051 19.3052 16.7701C18.9602 16.6501 18.7202 16.5901 18.4652 16.9501C18.2102 17.3251 17.5052 18.1651 17.2952 18.4051C17.0852 18.6601 16.8602 18.6901 16.4852 18.4951C16.1102 18.3151 14.9102 17.9101 13.5002 16.6501C12.3902 15.6601 11.6552 14.4451 11.4302 14.0701C11.2202 13.6951 11.4002 13.5001 11.5952 13.3051C11.7602 13.1401 11.9702 12.8701 12.1502 12.6601C12.3302 12.4501 12.4052 12.2851 12.5252 12.0451C12.6452 11.7901 12.5852 11.5801 12.4952 11.4001C12.4052 11.2201 11.6552 9.39009 11.3552 8.64009C11.0552 7.92009 10.7402 8.01009 10.5152 7.99509H9.79519C9.54019 7.99509 9.1502 8.08509 8.80519 8.46009C8.47519 8.83509 7.5152 9.73509 7.5152 11.5651C7.5152 13.3951 8.8502 15.1651 9.0302 15.4051C9.2102 15.6601 11.6552 19.4101 15.3752 21.0151C16.2602 21.4051 16.9502 21.6301 17.4902 21.7951C18.3752 22.0801 19.1852 22.0351 19.8302 21.9451C20.5502 21.8401 22.0352 21.0451 22.3352 20.1751C22.6502 19.3051 22.6502 18.5701 22.5452 18.4051C22.4402 18.2401 22.2152 18.1651 21.8402 17.9851Z"
                        fill="url(#paint0_linear_108_597)" />
                    <defs>
                        <linearGradient id="paint0_linear_108_597" x1="4.70709" y1="15.0001" x2="65.9511"
                            y2="15.0001" gradientUnits="userSpaceOnUse">
                            <stop offset="0.114583" stop-color="#BA2B60" />
                            <stop offset="0.65625" stop-color="#E9C6CC" />
                            <stop offset="0.65635" stop-color="#FFB9C5" />
                            <stop offset="0.90625" stop-color="#C7ECE2" />
                        </linearGradient>
                    </defs>
                </svg>
                <a href="https://wa.me/{{ $dataReseller->phone ?? '' }}" target="_blank"
                    class="md:text-lg font-vietnam text-black font-normal text-base ">{{ isset($dataReseller->phone) ? $dataReseller->phone : 'Nomor telepon belum tersedia' }}
                </a>
            </div>
        </div>
    </div>
</div>

@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.css">
    <style>
        #map {
            height: 400px;
        }
    </style>
@endpush

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        document.addEventListener('livewire:load', function() {
            var map = L.map('map').setView([{{ $latitude }}, {{ $longitude }}],
                9); // Angka 9 untuk mengatur zoom out, semakin kecil semakin jauh

            // Tile layers
            var googleMapsLayer = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                attribution: '&copy; <a href="https://www.google.com/maps">Google Maps</a>'
            });

            var googleSatelliteLayer = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                attribution: '&copy; <a href="https://www.google.com/maps">Google Satellite</a>'
            });

            var openStreetMapLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
            });

            googleMapsLayer.addTo(map); // Default layer

            // Marker and popup
            var markerIcon = L.icon({
                iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41]
            });

            var marker = L.marker([{{ $latitude }}, {{ $longitude }}], {
                icon: markerIcon
            }).addTo(map);
            marker.bindPopup("Ini adalah lokasi reseller '{{ $dataReseller->name }}'");
            marker.on('mouseover', function() {
                this.openPopup();
            });
            marker.on('mouseout', function() {
                this.closePopup();
            });

            // Redirect to Google Maps
            marker.on('click', function() {
                var lat = {{ $latitude }};
                var lng = {{ $longitude }};
                var url = 'https://www.google.com/maps?q=' + lat + ',' + lng;
                window.open(url, '_blank');
            });

            // Disable click event
            map.off('click');

            // Scale control
            L.control.scale().addTo(map);

            // Layer control
            var baseLayers = {
                "Google Maps": googleMapsLayer,
                "Google Satellite": googleSatelliteLayer,
                "OpenStreetMap": openStreetMapLayer
            };

            L.control.layers(baseLayers).addTo(map);
        });
    </script>
@endpush
