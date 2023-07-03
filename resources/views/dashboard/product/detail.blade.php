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
    <div class="grid grid-cols-12">
        <div class="col-span-6">
            <div class="column">
                @if (!empty($dataProduct->photo))
                    <img id="featured" src="{{ asset('storage/' . $dataProduct->photo[0]) }}" class="mb-6">
                @endif

                <div id="slide-wrapper">
                    <button id="slideLeft">
                        <svg width="67" height="67" viewBox="0 0 67 67" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_204_478)">
                                <circle cx="32.5" cy="31.5" r="22.5" fill="white" />
                            </g>
                            <path
                                d="M35.4297 40.0313L27.5313 32.1562C27.4375 32.0625 27.371 31.9609 27.3316 31.8516C27.2922 31.7422 27.2728 31.625 27.2735 31.5C27.2735 31.375 27.2928 31.2578 27.3316 31.1484C27.3703 31.0391 27.4369 30.9375 27.5313 30.8438L35.4297 22.9453C35.6485 22.7266 35.9219 22.6172 36.25 22.6172C36.5781 22.6172 36.8594 22.7344 37.0938 22.9688C37.3281 23.2031 37.4453 23.4766 37.4453 23.7891C37.4453 24.1016 37.3281 24.375 37.0938 24.6094L30.2031 31.5L37.0938 38.3906C37.3125 38.6094 37.4219 38.8791 37.4219 39.1997C37.4219 39.5203 37.3047 39.7975 37.0703 40.0313C36.836 40.2656 36.5625 40.3828 36.25 40.3828C35.9375 40.3828 35.6641 40.2656 35.4297 40.0313Z"
                                fill="url(#paint0_linear_204_478)" />
                            <defs>
                                <filter id="filter0_d_204_478" x="0" y="0" width="67"
                                    height="67" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dx="1" dy="2" />
                                    <feGaussianBlur stdDeviation="5.5" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix"
                                        values="0 0 0 0 0.418012 0 0 0 0 0.418012 0 0 0 0 0.418012 0 0 0 0.25 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                        result="effect1_dropShadow_204_478" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_204_478"
                                        result="shape" />
                                </filter>
                                <linearGradient id="paint0_linear_204_478" x1="28.8518" y1="31.5" x2="49.7217"
                                    y2="31.5" gradientUnits="userSpaceOnUse">
                                    <stop offset="0.114583" stop-color="#BA2B60" />
                                    <stop offset="0.65625" stop-color="#E9C6CC" />
                                    <stop offset="0.65635" stop-color="#FFB9C5" />
                                    <stop offset="0.90625" stop-color="#C7ECE2" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </button>
                    <div id="slider">
                        @if (!empty($dataProduct->photo))
                            @foreach ($dataProduct->photo as $index => $photo)
                                <img class="thumbnail{{ $index === 0 ? ' active' : '' }}"
                                    src="{{ asset('storage/' . $photo) }}">
                            @endforeach

                        @endif
                    </div>

                    <button id="slideRight">
                        <svg width="67" height="67" viewBox="0 0 67 67" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_204_481)">
                                <circle cx="22.5" cy="22.5" r="22.5" transform="matrix(-1 0 0 1 55 9)"
                                    fill="white" />
                            </g>
                            <path
                                d="M29.5703 40.0313L37.4687 32.1562C37.5625 32.0625 37.629 31.9609 37.6684 31.8516C37.7078 31.7422 37.7272 31.625 37.7265 31.5C37.7265 31.375 37.7072 31.2578 37.6684 31.1484C37.6297 31.0391 37.5631 30.9375 37.4687 30.8438L29.5703 22.9453C29.3515 22.7266 29.0781 22.6172 28.75 22.6172C28.4219 22.6172 28.1406 22.7344 27.9062 22.9688C27.6719 23.2031 27.5547 23.4766 27.5547 23.7891C27.5547 24.1016 27.6719 24.375 27.9062 24.6094L34.7969 31.5L27.9062 38.3906C27.6875 38.6094 27.5781 38.8791 27.5781 39.1997C27.5781 39.5203 27.6953 39.7975 27.9297 40.0313C28.164 40.2656 28.4375 40.3828 28.75 40.3828C29.0625 40.3828 29.3359 40.2656 29.5703 40.0313Z"
                                fill="url(#paint0_linear_204_481)" />
                            <defs>
                                <filter id="filter0_d_204_481" x="0" y="0" width="67"
                                    height="67" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dx="1" dy="2" />
                                    <feGaussianBlur stdDeviation="5.5" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix"
                                        values="0 0 0 0 0.418012 0 0 0 0 0.418012 0 0 0 0 0.418012 0 0 0 0.25 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                        result="effect1_dropShadow_204_481" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_204_481"
                                        result="shape" />
                                </filter>
                                <linearGradient id="paint0_linear_204_481" x1="36.1482" y1="31.5"
                                    x2="15.2783" y2="31.5" gradientUnits="userSpaceOnUse">
                                    <stop offset="0.114583" stop-color="#BA2B60" />
                                    <stop offset="0.65625" stop-color="#E9C6CC" />
                                    <stop offset="0.65635" stop-color="#FFB9C5" />
                                    <stop offset="0.90625" stop-color="#C7ECE2" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </button>
                </div>
            </div>
        </div>


        <div class="col-span-6">
            <h1 class="text-[40px] font-semibold font-vietnam mb-2">{{ $dataProduct->name }}</h1>
            <h1 class="text-base text-[#272727]/80 font-vietnam mb-[30px]">
                {{ $dataProduct->category ? $dataProduct->category->label : 'Lainnya' }}
            </h1>
            <h1 class="text-[32px] font-semibold font-vietnam mb-2">
                {{ $dataProduct->price ? 'IDR. ' . number_format($dataProduct->price, 0, ',', '.') : ' - ' }}
            </h1>

            <div class="accordion flex flex-col items-center justify-center">
                <!--  Panel 1  -->
                <div class="w-full">
                    <input type="checkbox" name="panel" id="panel-1" class="hidden">
                    <label for="panel-1"
                        class="relative block bg-transparent text-black text-lg p-4 border-t border-[#D1D1D1] font-medium cursor-pointer">
                        Tentang Produk</label>
                    <div class="accordion__content overflow-hidden bg-grey-lighter">
                        <p class="text-base font-vietnam text-[#272727] p-4">{{ $dataProduct->description }}</p>
                    </div>
                </div>
                <!-- Panel 2 -->
                <div class="w-full">
                    <input type="checkbox" name="panel" id="panel-2" class="hidden">
                    <label for="panel-2"
                        class="relative block bg-transparent text-black text-lg p-4 border-t border-[#D1D1D1] font-medium cursor-pointer">Manfaat</label>
                    <div class="accordion__content overflow-hidden bg-grey-lighter w-full">
                        <div class="p-4 w-full">
                            @if ($dataProduct->benefits)
                                @foreach (json_decode($dataProduct->benefits) as $benefit)
                                    <div class="flex gap-5 mb-[15px]">
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.60049 12.3L6.45049 10.15C6.26715 9.96667 6.03382 9.875 5.75049 9.875C5.46715 9.875 5.23382 9.96667 5.05049 10.15C4.86715 10.3333 4.77549 10.5667 4.77549 10.85C4.77549 11.1333 4.86715 11.3667 5.05049 11.55L7.90049 14.4C8.10049 14.6 8.33382 14.7 8.60049 14.7C8.86715 14.7 9.10049 14.6 9.30049 14.4L14.9505 8.75C15.1338 8.56667 15.2255 8.33333 15.2255 8.05C15.2255 7.76667 15.1338 7.53333 14.9505 7.35C14.7672 7.16667 14.5338 7.075 14.2505 7.075C13.9672 7.075 13.7338 7.16667 13.5505 7.35L8.60049 12.3ZM10.0005 20.5C8.61715 20.5 7.31715 20.2373 6.10049 19.712C4.88382 19.1867 3.82549 18.4743 2.92549 17.575C2.02549 16.675 1.31315 15.6167 0.788488 14.4C0.263822 13.1833 0.00115495 11.8833 0.000488281 10.5C0.000488281 9.11667 0.263155 7.81667 0.788488 6.6C1.31382 5.38333 2.02615 4.325 2.92549 3.425C3.82549 2.525 4.88382 1.81267 6.10049 1.288C7.31715 0.763333 8.61715 0.500667 10.0005 0.5C11.3838 0.5 12.6838 0.762667 13.9005 1.288C15.1172 1.81333 16.1755 2.52567 17.0755 3.425C17.9755 4.325 18.6882 5.38333 19.2135 6.6C19.7388 7.81667 20.0012 9.11667 20.0005 10.5C20.0005 11.8833 19.7378 13.1833 19.2125 14.4C18.6872 15.6167 17.9748 16.675 17.0755 17.575C16.1755 18.475 15.1172 19.1877 13.9005 19.713C12.6838 20.2383 11.3838 20.5007 10.0005 20.5ZM10.0005 18.5C12.2338 18.5 14.1255 17.725 15.6755 16.175C17.2255 14.625 18.0005 12.7333 18.0005 10.5C18.0005 8.26667 17.2255 6.375 15.6755 4.825C14.1255 3.275 12.2338 2.5 10.0005 2.5C7.76715 2.5 5.87549 3.275 4.32549 4.825C2.77549 6.375 2.00049 8.26667 2.00049 10.5C2.00049 12.7333 2.77549 14.625 4.32549 16.175C5.87549 17.725 7.76715 18.5 10.0005 18.5Z"
                                                fill="#A2C1A2" />
                                        </svg>
                                        <h1 class="text-base font-vietnam text-[#272727]">{{ $benefit }}</h1>
                                    </div>
                                @endforeach
                            @else
                                <p>Belum ada data manfaat yang tersedia.</p>
                            @endif
                        </div>
                    </div>
                </div>


                <!--  Panel 3  -->
                {{-- <div class="w-full">
                        <input type="checkbox" name="panel" id="panel-3" class="hidden">
                        <label for="panel-3"
                            class="relative block bg-transparent text-black text-lg p-4 border-t border-[#D1D1D1] font-medium cursor-pointer"></label>
                        <div class="accordion__content overflow-hidden bg-grey-lighter">
                            <p class="accordion__body p-4">Serum dengan Niacinamide,Tranexamic Acid dan Licorice
                                Extract, yg efektif untuk mencerahkan kulit kusam, menyamarkan bekas jerawat dan noda
                                hitam. Kulit wajah terasa lembap dan cerah bercahaya</p>
                        </div>
                    </div> --}}
            </div>
        </div>
    </div>
</div>


@push('css')
    <style>
        .button {
            background: linear-gradient(to right, #BA2B60, #c6537b, #d27b98);
        }

        button.button:hover,
        button.button:active {
            background: #BA2B60
        }
    </style>
    <style>
        .column {
            width: 600px;
            padding: 10px;

        }

        #featured {
            width: 398px;
            height: 398px;
            object-fit: cover;
            cursor: pointer;
        }

        .thumbnail {
            object-fit: cover;
            width: 92px;
            height: 92px;
            cursor: pointer;
            opacity: 0.5;
            margin: 5px;
        }

        .thumbnail:hover {
            opacity: 1;
        }

        .active {
            opacity: 1;
        }

        #slide-wrapper {
            max-width: 500px;
            display: flex;
            min-height: 100px;
            align-items: center;
        }

        #slider {
            width: 300px;
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            overflow: hidden;
        }



        .arrow {
            width: 30px;
            height: 30px;
            cursor: pointer;
            transition: .3s;
        }

        .arrow:hover {
            opacity: .5;
            width: 35px;
            height: 35px;
        }
    </style>
    <style>
        label:after {
            content: url("data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M2.41659 7.3955L9.41659 14.4163C9.49992 14.4997 9.5902 14.5588 9.68742 14.5938C9.78464 14.6288 9.88881 14.6461 9.99992 14.6455C10.111 14.6455 10.2152 14.6283 10.3124 14.5938C10.4096 14.5594 10.4999 14.5002 10.5833 14.4163L17.6041 7.3955C17.7985 7.20105 17.8958 6.958 17.8958 6.66633C17.8958 6.37466 17.7916 6.12466 17.5833 5.91633C17.3749 5.708 17.1319 5.60383 16.8541 5.60383C16.5763 5.60383 16.3333 5.708 16.1249 5.91633L9.99992 12.0413L3.87492 5.91633C3.68047 5.72188 3.44075 5.62466 3.15575 5.62466C2.87075 5.62466 2.62436 5.72883 2.41659 5.93716C2.20825 6.1455 2.10409 6.38855 2.10409 6.66633C2.10409 6.94411 2.20825 7.18716 2.41659 7.3955Z' fill='url(%23paint0_linear_396_756)'/%3E%3Cdefs%3E%3ClinearGradient id='paint0_linear_396_756' x1='9.99991' y1='13.2425' x2='9.99991' y2='-5.30854' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0.114583' stop-color='%23BA2B60'/%3E%3Cstop offset='0.65625' stop-color='%23E9C6CC'/%3E%3Cstop offset='0.65635' stop-color='%23FFB9C5'/%3E%3Cstop offset='0.90625' stop-color='%23C7ECE2'/%3E%3C/linearGradient%3E%3C/defs%3E%3C/svg%3E");
            display: inline-block;
            width: 20px;
            height: 20px;
            position: absolute;
            right: 1em;
        }

        input:checked+label:after {
            content: url("data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M17.5834 12.6045L10.5834 5.58367C10.5001 5.50034 10.4098 5.44117 10.3126 5.40617C10.2154 5.37117 10.1112 5.35395 10.0001 5.35451C9.88897 5.35451 9.7848 5.37173 9.68758 5.40617C9.59036 5.44062 9.50008 5.49978 9.41675 5.58367L2.39591 12.6045C2.20147 12.7989 2.10425 13.042 2.10425 13.3337C2.10425 13.6253 2.20841 13.8753 2.41675 14.0837C2.62508 14.292 2.86814 14.3962 3.14591 14.3962C3.42369 14.3962 3.66675 14.292 3.87508 14.0837L10.0001 7.95867L16.1251 14.0837C16.3195 14.2781 16.5592 14.3753 16.8442 14.3753C17.1292 14.3753 17.3756 14.2712 17.5834 14.0628C17.7917 13.8545 17.8959 13.6114 17.8959 13.3337C17.8959 13.0559 17.7917 12.8128 17.5834 12.6045Z' fill='url(%23paint0_linear_396_758)'/%3E%3Cdefs%3E%3ClinearGradient id='paint0_linear_396_758' x1='10.0001' y1='6.75751' x2='10.0001' y2='25.3085' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0.114583' stop-color='%23BA2B60'/%3E%3Cstop offset='0.65625' stop-color='%23E9C6CC'/%3E%3Cstop offset='0.65635' stop-color='%23FFB9C5'/%3E%3Cstop offset='0.90625' stop-color='%23C7ECE2'/%3E%3C/linearGradient%3E%3C/defs%3E%3C/svg%3E");
            display: inline-block;
            width: 20px;
            height: 20px;
            position: absolute;
            right: 1em;
        }

        .accordion__content {
            max-height: 0em;
            transition: all 0.4s cubic-bezier(0.865, 0.14, 0.095, 0.87);
            widows: 100%;
        }

        input[name='panel']:checked~.accordion__content {
            max-height: 50em;
        }
    </style>
@endpush

@push('js')
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            let thumbnails = document.getElementsByClassName('thumbnail');
            let activeImages = document.getElementsByClassName('active');

            for (var i = 0; i < thumbnails.length; i++) {
                thumbnails[i].addEventListener('mouseover', function() {
                    console.log(activeImages);

                    if (activeImages.length > 0) {
                        activeImages[0].classList.remove('active');
                    }

                    this.classList.add('active');
                    document.getElementById('featured').src = this.src;
                });
            }

            let buttonRight = document.getElementById('slideRight');
            let buttonLeft = document.getElementById('slideLeft');

            buttonLeft.addEventListener('click', function() {
                document.getElementById('slider').scrollLeft -= 180;
            });

            buttonRight.addEventListener('click', function() {
                document.getElementById('slider').scrollLeft += 180;
            });
        });
    </script>
@endpush
