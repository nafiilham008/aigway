<div class="relative">
    <div class="relative lg:block hidden">
        <img src='../assets/images/bg-katalog.svg' class=" w-full" />
        <div class="absolute md:top-1 flex  items-center h-full">
            <div class="grid grid-cols-2">
                <div class="col-span-1 flex justify-center px-[151px]">
                    <div class="">
                        <h1 class="text-[48px] font-vietnam text-[#272727]">Produk Kami</h1>
                        <h1 class="text-lg font-vietnam text-[#272727]">Punya masalah dengan jerawat,bekas jerawat, atau
                            pengin turunin berat badan?. Penasaran juga sama produk Aigway apa aja? Yuk kepoin.</h1>
                    </div>
                </div>
                <div class="col-span-1">

                </div>
            </div>
            </h1>
        </div>
    </div>
    <div class=" relative lg:hidden block">
        <div class="bg-[#F6E0E6]">
            <div class="grid grid-cols-2 md:grid-cols-3">
                <div class="md:col-span-2  col-span-1 flex items-center py-0 md:py-6 px-5 md:px-8 md:w-3/4">
                    <div class="">
                        <h1 class="lg:text-[48px] text-[25px] font-vietnam text-[#272727]">Produk Kami</h1>
                        <h1 class="lg:text-lg text-xs text-light font-vietnam text-[#272727]">Punya masalah dengan
                            jerawat,bekas jerawat, atau
                            pengin turunin berat badan?. Penasaran juga sama produk Aigway apa aja? Yuk kepoin.</h1>
                    </div>
                </div>
                <div class="col-span-1">
                    <img src='../assets/images/ilustrasi-katalog.svg' class=" w-full" />

                </div>
            </div>
        </div>
    </div>
    <div class="relative bg-white">
        <div class="lg:px-[183px] md:px-5 py-10 md:py-[105px]">
            <div
                class="bg-[#861B43] w-full px-14 py-3 rounded-xl drop-shadow-xl gap-10 shadow-[#9B9B9B]/25 lg:block hidden">
                <button id="tab0" class="text-lg font-vietnam font-medium text-white tab-button active">Semua
                    Produk</button>
                @if (!empty($category))
                    @foreach ($category as $item)
                        <button id="tab{{ $item->id }}"
                            class="text-lg font-vietnam font-medium text-white tab-button mx-3">{{ $item->label }}</button>
                    @endforeach
                @endif
            </div>
            <div class="lg:hidden block px-3">
                <select id="tab-select"
                    class="text-lg font-vietnam font-medium rounded-[12px] bg-white border border-[#861B43] text-[#861B43] outline-none">
                    <option value="tab0">Semua Produk</option>
                    @if (!empty($category))
                        @foreach ($category as $item)
                            <option value="tab{{ $item->id }}">{{ $item->label }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="lg:block hidden">
                <div id="content-tab0" class="tab-content">
                    <div class="grid grid-cols-4 gap-5 w-full mt-[69px] ">
                        @if (!empty($product))
                            @foreach ($product as $item)
                                <div class="bg-white rounded-xl drop-shadow-xl shadow-[#6B6B6B]/25 sm:w-full md:w-[230px] lg:w-full btn3">
                                    <div class="w-full h-[440px] py-8 flex justify-center">
                                        <div class="">
                                            <div class="flex justify-center px-3">
                                                <img src="{{ asset('storage/' . json_decode($item->photo)[0]) }}"
                                                    alt="{{ $item->name }}" class="h-[254px]">
                                            </div>
                                            <h1 class="font-vietnam font-semibold text-lg text-center">
                                                {{ $item->name }}
                                            </h1>
                                            <div class="flex justify-center">
                                                <a href="{{ route('index.katalog.detail', $item->slug) }}"
                                                    class="font-medium text-base rounded-full border border-[#BB2C60] text-[#BB2C60] px-[72px] py-1 mt-16 hover:bg-[#BB2C60] hover:text-white">Lihat</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>Belum ada produk.</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="lg:hidden block">
                <div id="content-tab0" class="tab-content">
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 md:px-0 px-3 w-full mt-5">
                        @if (!empty($product))
                            @foreach ($product as $item)
                                <div
                                    class="bg-white rounded-xl drop-shadow-xl shadow-[#6B6B6B]/25 sm:w-full md:w-[230px] lg:w-full btn3">
                                    <div class="md:h-[440px] h-[289px] py-8 flex justify-center">
                                        <div class="">
                                            <div class="flex justify-center">
                                                <img src="{{ asset('storage/' . json_decode($item->photo)[0]) }}"
                                                    alt="{{ $item->name }}" class="md:w-full w-[118px] h-[133px] md:h-[254px] object-cover">
                                            </div>
                                            <h1 class="font-vietnam font-semibold text-lg text-center mt-4">
                                                {{ $item->name }}
                                            </h1>
                                            <div class="flex justify-center">
                                                <a href="{{ route('index.katalog.detail', $item->slug) }}"
                                                    class="font-medium text-base rounded-full border border-[#BB2C60] text-[#BB2C60] px-10 md:px-[72px] py-1 mt-6 hover:bg-[#BB2C60] hover:text-white">Lihat</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>Belum ada produk.</p>
                        @endif
                    </div>
                </div>
            </div>

            @foreach ($category as $categoryItem)
                <div id="content-tab{{ $categoryItem->id }}" class="tab-content hidden">
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 w-full md:px-0 px-3 mt-5 lg:mt-[69px]">
                        @if (!empty($product))
                            @foreach ($product as $item)
                                @if ($item->category_id == $categoryItem->id)
                                    <div class="bg-white rounded-xl drop-shadow-xl shadow-[#6B6B6B]/25 sm:w-full md:w-[230px] lg:w-full btn3">
                                        <div class="md:h-[440px] h-[289px] py-8 flex justify-center">
                                            <div class="">
                                                <div class="flex justify-center">
                                                    <img src="{{ asset('storage/' . json_decode($item->photo)[0]) }}"
                                                        alt="{{ $item->name }}" class="md:w-full w-[118px] h-[133px] md:h-[254px] object-cover">
                                                </div>
                                                <h1 class="font-vietnam font-semibold text-lg text-center mt-4">
                                                    {{ $item->name }}
                                                </h1>
                                                <div class="flex justify-center">
                                                    <a href="{{ route('index.katalog.detail', $item->slug) }}"
                                                        class="font-medium text-base rounded-full border border-[#BB2C60] text-[#BB2C60] px-10 md:px-[72px] py-1 mt-6 hover:bg-[#BB2C60] hover:text-white">Lihat</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <p>Belum ada produk.</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@push('css')
    <style>
        .line-clamp {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .cover {
            object-fit: cover;
            height: 680px;
            width: 100%;
        }

        .btn3 {
            transform: scale(1);
            transition: transform .2s ease-in
        }

        .btn3:hover {
            transform: scale(1.1);
        }

        .btn3 span {
            transform: scale(1);
            transition: transform .3s ease-in
        }

        .btn3:hover span {
            transform: scale(1.1, 1.2);
        }


        @media only screen and (max-width: 600px) {
            .cover {
                height: 600px;
                width: 100%;
                object-fit: cover;
            }
        }
    </style>
@endpush

@push('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.tab-content');

            tabButtons.forEach((button) => {
                button.addEventListener('click', () => {
                    tabButtons.forEach((btn) => {
                        btn.classList.remove('active');
                        btn.style.fontWeight =
                            'normal';
                    });
                    tabContents.forEach((content) => content.classList.add('hidden'));

                    button.classList.add('active');
                    button.style.fontWeight = 'bold';

                    const target = button.id;
                    const targetContent = document.getElementById(`content-${target}`);
                    targetContent.classList.remove('hidden');
                });
            });

            // Default load
            const defaultTab = document.getElementById('tab0');
            defaultTab.click();
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectElement = document.getElementById('tab-select');
            const tabContents = document.querySelectorAll('.tab-content');

            selectElement.addEventListener('change', (event) => {
                const target = event.target.value;

                if (target === 'tab0') {
                    tabContents.forEach((content) => {
                        if (content.id === 'content-tab0') {
                            content.classList.remove('hidden');
                        } else {
                            content.classList.add('hidden');
                        }
                    });
                } else {
                    tabContents.forEach((content) => {
                        if (content.id === `content-${target}`) {
                            content.classList.remove('hidden');
                        } else {
                            content.classList.add('hidden');
                        }
                    });
                }
            });

            // Set default select value to 'tab0' (Semua Produk)
            selectElement.value = 'tab0';

            // Show content-tab0 by default
            tabContents.forEach((content) => {
                if (content.id === 'content-tab0') {
                    content.classList.remove('hidden');
                } else {
                    content.classList.add('hidden');
                }
            });
        });
    </script>
@endpush
