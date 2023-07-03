<div class="grid grid-cols-12">
    <div class="col-span-12">
        <div wire:ignore id="map"></div>
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
            var map = L.map('map').setView([{{ $latitude[0] }}, {{ $longitude[0] }}], 13);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            var markers = [];
            @foreach ($latitude as $key => $lat)
                var marker = L.marker([{{ $lat }}, {{ $longitude[$key] }}]).addTo(map);
                markers.push(marker);
            @endforeach

            map.on('click', function(e) {
                var coord = e.latlng;
                markers.forEach(function(marker) {
                    marker.setLatLng(coord);
                });
                @this.latitude = coord.lat;
                @this.longitude = coord.lng;
            });
        });
    </script>
@endpush
