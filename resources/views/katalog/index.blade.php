<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Katalog</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
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

    @livewireStyles
</head>

<body>
    <div class="sticky z-20 top-0">
        <livewire:navbar.index />
    </div>
    <div class="relative">
        <div class="relative">
            <img src='../assets/images/bg-katalog.svg' class=" w-full" />
            <div class="absolute md:top-1 flex  items-center h-full">
                <div class="grid grid-cols-2">
                    <div class="col-span-1 flex justify-center px-[151px]">
                        <div class="">
                            <h1 class="text-[48px] font-inter font-semibold text-[#272727]">Produk Kami</h1>
                            <h1 class="text-lg font-inter font-semibold text-[#272727]">Lorem ipsum dolor sit amet consectetur.
                                Sapien cras amet pellentesque eget nibh pulvinar sociis nulla. Ut imperdiet lorem id
                                quam in. Id ultrices sed faucibus vel.
                        </div>
                    </div>
                    <div class="col-span-1">
                    </div>
                </div>
                </h1>
            </div>
        </div>
        <div class="relative bg-white">
            <div class="px-[183px] py-[105px]">
                <div
                    class="bg-[#861B43] w-full px-14 py-3 gap-[30px] flex rounded-xl drop-shadow-xl shadow-[#9B9B9B]/25">
                    <button id="tab1" class="text-lg font-vietnam font-medium text-white tab-button">Semua
                        Produk</button>
                    <button id="tab2" class="text-lg font-vietnam font-medium text-white tab-button">Serum</button>
                </div>
                <div id="content-tab1" class="tab-content">
                    <div class="grid grid-cols-4 gap-5 w-full mt-[69px]">
                        <div class="bg-white rounded-xl drop-shadow-xl shadow-[#6B6B6B]/25 w-full btn3">
                            <div class="w-full h-[440px] py-8 flex justify-center">
                                <div class="">
                                    <div class="flex justify-center">
                                        <img src="../assets/images/hirotea.svg" alt="" class="h-[254px]">
                                    </div>
                                    <h1 class="font-vietnam font-semibold text-lg text-center">Hirotea</h1>
                                    <div class="flex justify-center">
                                        <a href="/katalog/detail-product"
                                            class="font-medium text-base rounded-full border border-[#BB2C60] text-[#BB2C60] px-[72px] py-1 mt-16 hover:bg-[#BB2C60] hover:text-white">Lihat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded-xl drop-shadow-xl shadow-[#6B6B6B]/25 w-full btn3">
                            <div class="w-full h-[440px] py-8 flex justify-center">
                                <div class="">
                                    <div class="flex justify-center">
                                        <img src="../assets/images/collagen.svg" alt="" class="h-[254px]">
                                    </div>
                                    <h1 class="font-vietnam font-semibold text-lg text-center">Collagen Night Cream</h1>
                                    <div class="flex justify-center">
                                        <a href="/katalog/detail-product"
                                            class="font-medium text-base rounded-full border border-[#BB2C60] text-[#BB2C60] px-[72px] py-1 mt-16 hover:bg-[#BB2C60] hover:text-white">Lihat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded-xl drop-shadow-xl shadow-[#6B6B6B]/25 w-full btn3">
                            <div class="w-full h-[440px] py-8 flex justify-center">
                                <div class="">
                                    <div class="flex justify-center">
                                        <img src="../assets/images/dark.svg" alt="" class="h-[254px]">
                                    </div>
                                    <h1 class="font-vietnam font-semibold text-lg text-center">Dark Spot Brightening
                                    </h1>
                                    <div class="flex justify-center">
                                        <a href="/katalog/detail-product"
                                            class="font-medium text-base rounded-full border border-[#BB2C60] text-[#BB2C60] px-[72px] py-1 mt-16 hover:bg-[#BB2C60] hover:text-white">Lihat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded-xl drop-shadow-xl shadow-[#6B6B6B]/25 w-full btn3">
                            <div class="w-full h-[440px] py-8 flex justify-center">
                                <div class="">
                                    <div class="flex justify-center">
                                        <img src="../assets/images/acne.svg" alt="" class="h-[254px]">
                                    </div>
                                    <h1 class="font-vietnam font-semibold text-lg text-center">Acne Serum Witch Hazel
                                    </h1>
                                    <div class="flex justify-center">
                                        <a href="/katalog/detail-product"
                                            class="font-medium text-base rounded-full border border-[#BB2C60] text-[#BB2C60] px-[72px] py-1 mt-16 hover:bg-[#BB2C60] hover:text-white">Lihat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="content-tab2" class="tab-content hidden">
                    <div class="grid grid-cols-4 gap-5 w-full mt-[69px]">
                        <div class="bg-white rounded-xl drop-shadow-xl shadow-[#6B6B6B]/25 w-full btn3">
                            <div class="w-full h-[440px] py-8 flex justify-center">
                                <div class="">
                                    <div class="flex justify-center">
                                        <img src="../assets/images/hirotea.svg" alt="" class="h-[254px]">
                                    </div>
                                    <h1 class="font-vietnam font-semibold text-lg text-center">Hirotea</h1>
                                    <div class="flex justify-center">
                                        <a href="/katalog/detail-product"
                                            class="font-medium text-base rounded-full border border-[#BB2C60] text-[#BB2C60] px-[72px] py-1 mt-16 hover:bg-[#BB2C60] hover:text-white">Lihat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded-xl drop-shadow-xl shadow-[#6B6B6B]/25 w-full btn3">
                            <div class="w-full h-[440px] py-8 flex justify-center">
                                <div class="">
                                    <div class="flex justify-center">
                                        <img src="../assets/images/collagen.svg" alt="" class="h-[254px]">
                                    </div>
                                    <h1 class="font-vietnam font-semibold text-lg text-center">Collagen Night Cream</h1>
                                    <div class="flex justify-center">
                                        <a href="/katalog/detail-product"
                                            class="font-medium text-base rounded-full border border-[#BB2C60] text-[#BB2C60] px-[72px] py-1 mt-16 hover:bg-[#BB2C60] hover:text-white">Lihat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded-xl drop-shadow-xl shadow-[#6B6B6B]/25 w-full btn3">
                            <div class="w-full h-[440px] py-8 flex justify-center">
                                <div class="">
                                    <div class="flex justify-center">
                                        <img src="../assets/images/dark.svg" alt="" class="h-[254px]">
                                    </div>
                                    <h1 class="font-vietnam font-semibold text-lg text-center">Dark Spot Brightening
                                    </h1>
                                    <div class="flex justify-center">
                                        <a href="/katalog/detail-product"
                                            class="font-medium text-base rounded-full border border-[#BB2C60] text-[#BB2C60] px-[72px] py-1 mt-16 hover:bg-[#BB2C60] hover:text-white">Lihat</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <livewire:footer.index />
    </div>
    <script>
        const tabButtons = document.querySelectorAll('.tab-button');
        const tabContents = document.querySelectorAll('.tab-content');

        tabButtons.forEach((button) => {
            button.addEventListener('click', () => {
                // Menghapus kelas 'active' dari semua button dan konten
                tabButtons.forEach((btn) => {
                    btn.classList.remove('active');
                    btn.style.fontWeight = 'normal'; // Menghilangkan gaya tebal dari semua button
                });
                tabContents.forEach((content) => content.classList.add('hidden'));

                // Menambahkan kelas 'active' pada button yang diklik dan menerapkan gaya tebal
                button.classList.add('active');
                button.style.fontWeight = 'bold';

                // Menampilkan konten yang sesuai dengan button yang diklik
                const target = button.id;
                const targetContent = document.getElementById(`content-${target}`);
                targetContent.classList.remove('hidden');
            });
        });
    </script>
</body>

</html>
