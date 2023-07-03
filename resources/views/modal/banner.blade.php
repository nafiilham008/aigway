<div x-data="{ modalOpen: {{ $modalOpen ? 'true' : 'false' }} }" id="popupOverlay" class="popup-overlay {{ $modalOpen ? 'block' : 'hidden' }}" x-cloak>
    <div class="popup-container">
        <div class="relative w-max">
            @if (isset($banner->image))
                <img src="{{ asset('storage/' . $banner->image) }}" alt="Gambar" class="cover py-3">
            @else
                <p>Tidak ada gambar tersedia.</p>
            @endif
            <button wire:click='modalClose' id="closePopup"
                class="absolute top-0 right-[-4px] p-1 rounded-full bg-[#861B43]">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 1024 1024">
                    <path fill="white"
                        d="M195.2 195.2a64 64 0 0 1 90.496 0L512 421.504L738.304 195.2a64 64 0 0 1 90.496 90.496L602.496 512L828.8 738.304a64 64 0 0 1-90.496 90.496L512 602.496L285.696 828.8a64 64 0 0 1-90.496-90.496L421.504 512L195.2 285.696a64 64 0 0 1 0-90.496z" />
                </svg>
            </button>
        </div>
    </div>
</div>
