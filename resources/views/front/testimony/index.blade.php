<div class="flex gap-[10px] items-center mb-5 lg:mb-[46px] lg:pt-[50px] md:pt-[130px] pt-[130px] px-5 md:px-10 lg:px-[95px]">
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
<hr class="lg:my-5 lg:mb-0 mb-5 h-[1px] border-[#D1D1D1] border">
<div class="grid lg:grid-cols-5 md:grid-cols-4 grid-cols-3 lg:px-[95px] md:px-10 px-5 py-10">
    @forelse ($testimony as $item)
        <div
            class="bg-[#FEDEE4] lg:w-[235px] lg:h-[235px] md:w-[154px] md:h-[154px] w-[111px] h-[111px] flex items-center justify-center mb-10">
            <div class="lg:max-w-[235px] lg:max-h-[235px] md:max-w-[154px] md:max-h-[154px] max-w-[111px] max-h-[111px]">
                <a href="{{ asset('storage/' . $item->image) }}" class="popup-link flex">
                    <img src="{{ asset('storage/' . $item->image) }}"
                        class="lg:max-w-[235px] lg:max-h-[235px] md:max-w-[154px] md:max-h-[154px] max-w-[111px] max-h-[111px]" alt="Image">
                </a>
            </div>
        </div>
    @empty
        <div class="text-center">
            <h1>Belum ada testimoni yang tersedia.</h1>
        </div>
    @endforelse
</div>




@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
@endpush
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.popup-link').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    </script>
@endpush
