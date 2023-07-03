<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Testimoni</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    @vite('resources/css/app.css')

    @livewireStyles
</head>

<body>
    <div class="sticky z-20 top-0">
        <livewire:navbar.index />
    </div>
    <div class="flex gap-[10px] items-center mb-[46px] px-[95px] border-b-2 border-[#D1D1D1] py-6">
        <a href="/about" class="font-vietnam font-medium text-base text-[#272727]/50">Tentang Kami</a>
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
        <h1 class="font-vietnam font-semibold text-base text-black">Detail</h1>
    </div>
    <div class="grid grid-cols-5 px-[95px] py-10">
        <div class="bg-[#FEDEE4] w-[235px] h-[235px] flex items-center justify-center">
            <div class="max-w-[235px] max-h-[235px]">
                <a href="../assets/images/marsha.png" class="popup-link">
                    <img src="../assets/images/marsha.png" alt="Image 1">
                </a>
            </div>
        </div>
        <div class="bg-[#FEDEE4] w-[235px] h-[235px] flex items-center justify-center">
            <div class="max-w-[235px] max-h-[235px]">
                <a href="../assets/images/collagen.svg" class="popup-link">
                    <img src="../assets/images/collagen.svg" alt="Image 2">
                </a>
            </div>
        </div>
        <div class="bg-[#FEDEE4] w-[235px] h-[235px] flex items-center justify-center">
            <div class="max-w-[235px] max-h-[235px]">
                <a href="../assets/images/marsha.png" class="popup-link">
                    <img src="../assets/images/marsha.png" alt="Image 1">
                </a>
            </div>
        </div>
        <div class="bg-[#FEDEE4] w-[235px] h-[235px] flex items-center justify-center">
            <div class="max-w-[235px] max-h-[235px]">
                <a href="../assets/images/collagen.svg" class="popup-link">
                    <img src="../assets/images/collagen.svg" alt="Image 2">
                </a>
            </div>
        </div>
        <div class="bg-[#FEDEE4] w-[235px] h-[235px] flex items-center justify-center">
            <div class="max-w-[235px] max-h-[235px]">
                <a href="../assets/images/marsha.png" class="popup-link">
                    <img src="../assets/images/marsha.png" alt="Image 1">
                </a>
            </div>
        </div>
        <div class="bg-[#FEDEE4] w-[235px] h-[235px] flex items-center justify-center">
            <div class="max-w-[235px] max-h-[235px]">
                <a href="../assets/images/collagen.svg" class="popup-link">
                    <img src="../assets/images/collagen.svg" alt="Image 2">
                </a>
            </div>
        </div>
        <!-- Tambahkan lebih banyak item galeri di sini -->
    </div>
    <div>
        <livewire:footer.index />
    </div>
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
</body>

</html>
