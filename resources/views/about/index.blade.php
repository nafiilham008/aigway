<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>About</title>
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
            <img src='../assets/images/bg-about.svg' class=" w-full" />
            <div class="absolute md:top-1 flex  items-center h-full">
                <div class="grid grid-cols-3">
                    <div class="col-span-2 flex justify-center px-[151px]">
                        <div class="">
                            <h1 class="text-[48px] font-inter font-semibold text-[#272727]">Aigway Skincare</h1>
                            <h1 class="text-lg font-inter font-semibold text-[#272727]">Kami membuat perawatan kulit ini
                                untuk anda
                                dengan cinta. Produk kami menggunakan bahan alami & teknologi modern</h1>
                        </div>
                    </div>
                    <div class="col-span-1">
                    </div>
                </div>
                </h1>
            </div>
        </div>
        <div class="bg-[#F6E0E6]/50 md:mb-[138px]">
            <div class="grid grid-cols-12 py-9 px-28">
                <div class="col-span-6 flex items-center">
                    <img src="../assets/images/ilustrasi4.svg" class="md:w-[504] h-auto" alt="">
                </div>
                <div class="col-span-6">
                    <h1 class="text-[45px] font-inter font-semibold text-[#272727] md:mb-[38px] text-center">Tentang
                        Kami</h1>
                    <h1 class="md:text-lg font-vietnam text-[#272727] font-normal">Aigway memulai perjalanan bisnis
                        Skincare pada
                        tahun 2022 sebagai local brand perawatan kulit dan tubuh, baik secara online maupun offline.
                        Aigway merupakan penamaan yang kami bentuk untuk brand skincare. Aigway ingin memberikan
                        perawatan kepada wanita di dunia.<br><br>Aigway kini sudah memiliki Member & Reseller resmi
                        walau masih terbilang baru di dunia Skincare dan perawatan tubuh. Selain itu, Aigway juga telah
                        merambah ke mancanegara seperti Hongkong, Taiwan, dan sekitarnya.<br><br>Aigway memiliki misi
                        dan harapan kedepannya, untuk para wanita di penjuru dunia supaya bisa menghilangkan
                        permasalahan kulit wajah dan tubuh dengan All Varian produk yang kami innovasikan setiap hari
                        nya. Maka dari itu Aigway selalu menjaga kualitas setiap produknya dengan mendapatkan
                        standarisasi dari BPOM dan Halal, serta sudah di uji secara klinis untuk memberikan perawatan
                        kulit terbaik kepada wanita di seluruh dunia.</h1>
                </div>
            </div>
        </div>
        <div class="relative">
            <div class="px-28">
                <h1 class="text-[45px] text-[#272727] font-inter font-semibold mb-5">Mau Jadi Reseller?</h1>
                <h1 class="text-lg font-vietnam w-3/5">Ayo gabung bersama kami dan dapatkan keuntungan dari penjualan
                    produk kami. Penawaran yang menarik sedang menanti anda let’s join now.</h1>
            </div>
            <div class="grid grid-cols-12 mt-[108px]">
                <div class="col-span-4 bg-[#861B43] px-28 py-12">
                    <ul class="list-disc">
                        <li class="text-white text-base font-poppins">Pembelian awal cukup dengan 3 paket Aigway
                            skincare,
                            boleh mix series apa saja, kamu sudah mendapat mendapat harga reseller dan menjadi reseller
                            resmi Aigway.</li>
                    </ul>
                </div>
                <div class="col-span-4 bg-[#9E3254] px-28 py-12">
                    <ul class="list-disc">
                        <li class="text-white text-base font-poppins">Customer yang order di kami akan di arahkan ke
                            reseller terdekat oleh admin kami.</li>
                    </ul>
                </div>
                <div class="col-span-4 bg-[#E35C8D] px-28 py-12">

                    <ul class="list-disc">
                        <li class="text-white text-base font-poppins">Untuk informasi lebih lanjut bisa menghubungi no
                            Admin Aigway dibawah ini.</li>
                    </ul>
                </div>
            </div>
        </div>
        <h1 class="md:text-lg font-vietnam text-[#272727] font-semibold text-center md:mt-20">Hubungi kami</h1>
        <div class="flex justify-center md:mb-[91px]">
            <div class="relative mt-3 w-max ">
                <a href="https://wa.me/6282221333561" class="w-max">
                    <div class="rounded-full bg-[#60D669] py-2.5 px-[71px] w-max">
                        <div class="text-center text-lg">0822-2133-3561</div>
                    </div>
                    <div class="absolute top-0">
                        <svg width="48" height="49" viewBox="0 0 48 49" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_62_326)">
                                <path
                                    d="M1.0243 23.898C1.02318 27.9624 2.08518 31.931 4.10455 35.429L0.831177 47.3807L13.0622 44.1737C16.4451 46.0153 20.2354 46.9803 24.0872 46.9805H24.0973C36.8126 46.9805 47.1632 36.6337 47.1686 23.9162C47.1711 17.7536 44.7733 11.9587 40.4169 7.59897C36.0613 3.23959 30.2685 0.837529 24.0964 0.834717C11.3796 0.834717 1.02974 11.181 1.02449 23.898"
                                    fill="url(#paint0_linear_62_326)" />
                                <path
                                    d="M0.200625 23.8905C0.199313 28.1012 1.29937 32.2118 3.39075 35.835L0 48.2151L12.6696 44.8931C16.1604 46.7964 20.0908 47.7999 24.0902 47.8014H24.1005C37.272 47.8014 47.9944 37.0824 48 23.9096C48.0023 17.5256 45.5182 11.5224 41.0062 7.0065C36.4937 2.49112 30.4937 0.002625 24.1005 0C10.9267 0 0.205875 10.7175 0.200625 23.8905ZM7.74563 35.211L7.27256 34.4601C5.28394 31.2981 4.23431 27.6441 4.23581 23.892C4.24012 12.9429 13.1509 4.035 24.108 4.035C29.4143 4.03725 34.401 6.10575 38.1517 9.85875C41.9023 13.6121 43.9661 18.6015 43.9648 23.9081C43.9599 34.8572 35.049 43.7663 24.1005 43.7663H24.0926C20.5277 43.7644 17.0314 42.807 13.9823 40.9978L13.2566 40.5675L5.73825 42.5387L7.74563 35.2108V35.211Z"
                                    fill="url(#paint1_linear_62_326)" />
                                <path
                                    d="M18.1271 13.9026C17.6798 12.9083 17.209 12.8883 16.7835 12.8708C16.4351 12.8558 16.0369 12.857 15.639 12.857C15.2408 12.857 14.5937 13.0068 14.0468 13.604C13.4993 14.2017 11.9565 15.6462 11.9565 18.5841C11.9565 21.5223 14.0965 24.3616 14.3948 24.7604C14.6935 25.1585 18.5259 31.3805 24.5957 33.7741C29.6402 35.7633 30.6668 35.3676 31.7616 35.2679C32.8566 35.1685 35.2948 33.8238 35.7923 32.4293C36.2901 31.0351 36.2901 29.84 36.1408 29.5902C35.9916 29.3414 35.5933 29.192 34.9961 28.8935C34.3988 28.5948 31.4629 27.1501 30.9156 26.9508C30.3681 26.7516 29.97 26.6523 29.5718 27.2502C29.1735 27.8472 28.0299 29.192 27.6814 29.5902C27.3332 29.9894 26.9846 30.0391 26.3876 29.7404C25.7901 29.4408 23.8669 28.811 21.5852 26.7768C19.8099 25.1939 18.6114 23.2392 18.2631 22.6413C17.9147 22.0443 18.2258 21.7206 18.5252 21.4231C18.7935 21.1555 19.1226 20.7258 19.4214 20.3772C19.7192 20.0285 19.8186 19.7796 20.0177 19.3814C20.217 18.9828 20.1173 18.634 19.9682 18.3353C19.8186 18.0366 18.6581 15.0833 18.1271 13.9026Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <linearGradient id="paint0_linear_62_326" x1="2317.7" y1="4655.43" x2="2317.7"
                                    y2="0.834717" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1FAF38" />
                                    <stop offset="1" stop-color="#60D669" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_62_326" x1="2400" y1="4821.51" x2="2400"
                                    y2="0" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F9F9F9" />
                                    <stop offset="1" stop-color="white" />
                                </linearGradient>
                                <clipPath id="clip0_62_326">
                                    <rect width="48" height="48.375" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                    </div>
                </a>
            </div>
        </div>
        <h1 class="text-[45px] font-inter font-semibold text-[#272727] md:mb-[38px] text-center">Temukan Kami</h1>
        <div class="grid grid-cols-12 md:px-48 md:mb-24">
            <div class="col-span-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.6039893506263!2d110.4039267!3d-7.831669000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5721bf4121af%3A0x8e36f7d51931f6a5!2sJl.%20Belimbing%20No.86%2C%20Mutilan%2C%20Wirokerten%2C%20Kec.%20Banguntapan%2C%20Kabupaten%20Bantul%2C%20Daerah%20Istimewa%20Yogyakarta%2055173!5e0!3m2!1sid!2sid!4v1684851295407!5m2!1sid!2sid"
                    width="496" height="372" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-span-6">
                <div class="flex gap-7 mb-[22px]">
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
                    <h1 class="md:text-lg font-vietnam text-black font-normal">Jln Belimbing No. 86, Bantul, Bantul,
                        Daerah Istimewa Yogyakarta</h1>
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
                        class="md:text-lg font-vietnam text-black font-normal underline underline-offset-2">aigwayofficial@gmail.com</a>
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
                    <a href="https://wa.me/6282221333561" class="md:text-lg font-vietnam text-black font-normal ">+62
                        822-2133-3561</a>
                </div>
            </div>
        </div>
        <div class="bg-no-repeat bg-center bg-cover h-[437px] items-center flex lg:w-full "
            style="background-image: url('../assets/images/banner.svg');">
            <div class="">
                <div class="px-28">
                    <h1 class="text-[45px] font-inter font-semibold text-[#272727] md:mb-5">Testimoni</h1>
                    <h1 class="md:text-base font-vietnam text-[#272727] font-normal md:mb-6 w-3/5">Banyak orang telah
                        menggunakan produk kami untuk perawatan kulit mereka dan lihat apa kata mereka.</h1>
                    <a href="/testimoni"
                        class="px-8 py-2 md:text-base font-vietnam text-[#272727] border border-[#272727] rounded-lg bg-transparent hover:bg-gray-300">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <livewire:footer.index />
        </div>
</body>

</html>
