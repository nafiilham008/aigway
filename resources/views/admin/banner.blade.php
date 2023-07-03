<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <title>Banner</title>
    @livewireStyles

    @vite('resources/css/app.css')
    @stack('css')
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

        .button {
            background: linear-gradient(to right, #BA2B60, #c6537b, #d27b98);
        }

        button.button:hover,
        button.button:active {
            background: #BA2B60
        }
    </style>
    <style>
        .imageThumb {
            max-height: 75px;
            border: 2px solid;
            padding: 1px;
            cursor: pointer;
        }

        .pip {
            display: inline-block;
            margin: 10px 10px 0 0;
        }

        .remove {
            display: block;
            background: #444;
            border: 1px solid black;
            color: white;
            text-align: center;
            cursor: pointer;
        }

        .remove:hover {
            background: white;
            color: black;
        }
    </style>

</head>

<body>
    <livewire:sidebar.index />

    <div :class="{ 'ml-56': sidebarOpen, 'ml-0': !sidebarOpen }"
        class="flex-col w-full ml-56 transition-all duration-300 md:flex md:flex-col min-h-screen p-20 bg-[#FFF3F3]">
        <div class="flex gap-[10px] items-center mb-[46px]">
            <a href="/admin/reseller" class="font-vietnam font-medium text-base text-[#272727]/50">Pengaturan</a>
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
            <a href="/admin/banner" class="font-vietnam font-medium text-base text-[#272727]/50">Banner</a>
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
            <h1 class="font-vietnam font-semibold text-base text-black">Tambah Banner</h1>
        </div>
        <div class=" bg-white rounded-xl py-[27px] px-20 ">
            <h1 class="text-[#272B30] text-lg font-semibold font-vietnam mb-1">Banner</h1>
            <h1 class="text-[#737373] text-xs font-vietnam mb-8">3 Dijadwalkan</h1>
            <div class="flex gap-5 justify-end my-5">
                <a href="/admin/add-banner" class="px-8 py-2 rounded-md button text-sm text-white">Tambah</a>
            </div>
            <table class="table-auto w-full">
                <thead>
                    <tr class="bg-[#E8FBE8]">
                        <th class="flex items-center px-4 py-2 text-start gap-2">
                            <label class="inline-flex items-center ">
                                <input type="checkbox" id="select-all"
                                    class="form-checkbox h-5 w-5 text-[#BA2B60] rounded">
                            </label>
                            <h1 class="text-xs font-vietnam font-semibold">Banner</h1>
                        </th>
                        <th class="px-4 py-2">
                            <h1 class="text-xs font-vietnam font-semibold text-start">Tanggal Mulai</h1>
                        </th>
                        <th class="px-4 py-2">
                            <h1 class="text-xs font-vietnam font-semibold text-start">Tanggal Selesai</h1>
                        </th>
                        <th class="px-4 py-2">
                            <h1 class="text-xs font-vietnam font-semibold text-start">Aksi</h1>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="flex items-center mt-1 px-4 py-2 text-start gap-5">
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="selected[]"
                                    class="form-checkbox  h-5 w-5 text-[#BA2B60] rounded">
                            </label>
                            <div class="flex items-center gap-5">
                                <img src="../assets/images/marsha.png" alt="" class="w-10 h-10 ">
                                <h1 class="text-xs font-vietnam font-medium">Aigway testimoni 1</h1>
                            </div>
                        </td>
                        <td class=" px-4 py-2">
                            <h1 class="text-xs font-vietnam font-medium">02-01-2023</h1>
                        </td>
                        <td class=" px-4 py-2">
                            <h1 class="text-xs font-vietnam font-medium">10-01-2023</h1>
                        </td>
                        <td class=" px-4 py-2">
                            <div class="flex gap-2">
                                <button data-modal-toggle="delete-file"
                                    class="bg-[#E8FBE8] px-2 py-2 rounded-lg hover:bg-[#BA2B60]/20">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.74799 3.83327H6.61547C6.68836 3.83327 6.74799 3.77364 6.74799 3.70075V3.83327H11.7836V3.70075C11.7836 3.77364 11.8432 3.83327 11.9161 3.83327H11.7836V5.02591H12.9762V3.70075C12.9762 3.11603 12.5008 2.64062 11.9161 2.64062H6.61547C6.03075 2.64062 5.55535 3.11603 5.55535 3.70075V5.02591H6.74799V3.83327ZM15.0965 5.02591H3.43509C3.1419 5.02591 2.90503 5.26278 2.90503 5.55597V6.08604C2.90503 6.15892 2.96466 6.21855 3.03755 6.21855H4.03804L4.44718 14.8818C4.47369 15.4466 4.9408 15.8922 5.50565 15.8922H13.0259C13.5924 15.8922 14.0579 15.4483 14.0844 14.8818L14.4935 6.21855H15.494C15.5669 6.21855 15.6265 6.15892 15.6265 6.08604V5.55597C15.6265 5.26278 15.3897 5.02591 15.0965 5.02591ZM12.8984 14.6996H5.6332L5.23234 6.21855H13.2992L12.8984 14.6996Z"
                                            fill="#272727" />
                                    </svg>
                                </button>
                                <a href="" class="bg-[#E8FBE8] px-2 py-2 rounded-lg hover:bg-[#BA2B60]/20">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_321_2714)">
                                            <path
                                                d="M5.28125 5.2249C5.14118 5.2249 5.00685 5.28054 4.90781 5.37959C4.80877 5.47863 4.75312 5.61296 4.75312 5.75303C4.75312 5.89309 4.80877 6.02743 4.90781 6.12647C5.00685 6.22551 5.14118 6.28115 5.28125 6.28115V5.2249ZM7.39375 6.28115C7.53382 6.28115 7.66815 6.22551 7.76719 6.12647C7.86623 6.02743 7.92188 5.89309 7.92188 5.75303C7.92188 5.61296 7.86623 5.47863 7.76719 5.37959C7.66815 5.28054 7.53382 5.2249 7.39375 5.2249V6.28115ZM5.28125 8.92178C5.14118 8.92178 5.00685 8.97742 4.90781 9.07646C4.80877 9.1755 4.75312 9.30983 4.75312 9.4499C4.75312 9.58997 4.80877 9.7243 4.90781 9.82334C5.00685 9.92239 5.14118 9.97803 5.28125 9.97803V8.92178ZM11.6187 9.97803C11.7588 9.97803 11.8931 9.92239 11.9922 9.82334C12.0912 9.7243 12.1469 9.58997 12.1469 9.4499C12.1469 9.30983 12.0912 9.1755 11.9922 9.07646C11.8931 8.97742 11.7588 8.92178 11.6187 8.92178V9.97803ZM5.28125 11.0343C5.14118 11.0343 5.00685 11.0899 4.90781 11.189C4.80877 11.288 4.75312 11.4223 4.75312 11.5624C4.75312 11.7025 4.80877 11.8368 4.90781 11.9358C5.00685 12.0349 5.14118 12.0905 5.28125 12.0905V11.0343ZM11.6187 12.0905C11.7588 12.0905 11.8931 12.0349 11.9922 11.9358C12.0912 11.8368 12.1469 11.7025 12.1469 11.5624C12.1469 11.4223 12.0912 11.288 11.9922 11.189C11.8931 11.0899 11.7588 11.0343 11.6187 11.0343V12.0905ZM5.28125 13.1468C5.14118 13.1468 5.00685 13.2024 4.90781 13.3015C4.80877 13.4005 4.75312 13.5348 4.75312 13.6749C4.75312 13.815 4.80877 13.9493 4.90781 14.0483C5.00685 14.1474 5.14118 14.203 5.28125 14.203V13.1468ZM7.39375 14.203C7.53382 14.203 7.66815 14.1474 7.76719 14.0483C7.86623 13.9493 7.92188 13.815 7.92188 13.6749C7.92188 13.5348 7.86623 13.4005 7.76719 13.3015C7.66815 13.2024 7.53382 13.1468 7.39375 13.1468V14.203ZM4.225 3.1124H12.675V2.05615H4.225V3.1124ZM13.2031 3.64053V15.2593H14.2594V3.64053H13.2031ZM12.675 15.7874H4.225V16.8437H12.675V15.7874ZM3.69687 15.2593V3.64053H2.64062V15.2593H3.69687ZM4.225 15.7874C4.08493 15.7874 3.9506 15.7318 3.85156 15.6327C3.75252 15.5337 3.69687 15.3993 3.69687 15.2593H2.64062C2.64062 15.6795 2.80755 16.0825 3.10468 16.3796C3.40181 16.6767 3.8048 16.8437 4.225 16.8437V15.7874ZM13.2031 15.2593C13.2031 15.3993 13.1475 15.5337 13.0484 15.6327C12.9494 15.7318 12.8151 15.7874 12.675 15.7874V16.8437C13.0952 16.8437 13.4982 16.6767 13.7953 16.3796C14.0925 16.0825 14.2594 15.6795 14.2594 15.2593H13.2031ZM12.675 3.1124C12.8151 3.1124 12.9494 3.16804 13.0484 3.26709C13.1475 3.36613 13.2031 3.50046 13.2031 3.64053H14.2594C14.2594 3.22032 14.0925 2.81733 13.7953 2.52021C13.4982 2.22308 13.0952 2.05615 12.675 2.05615V3.1124ZM4.225 2.05615C3.8048 2.05615 3.40181 2.22308 3.10468 2.52021C2.80755 2.81733 2.64062 3.22032 2.64062 3.64053H3.69687C3.69687 3.50046 3.75252 3.36613 3.85156 3.26709C3.9506 3.16804 4.08493 3.1124 4.225 3.1124V2.05615ZM5.28125 6.28115H7.39375V5.2249H5.28125V6.28115ZM5.28125 9.97803H11.6187V8.92178H5.28125V9.97803ZM5.28125 12.0905H11.6187V11.0343H5.28125V12.0905ZM5.28125 14.203H7.39375V13.1468H5.28125V14.203Z"
                                                fill="#272727" />
                                            <path
                                                d="M11.6186 6.01689C11.7644 6.01689 11.8826 5.89867 11.8826 5.75283C11.8826 5.60699 11.7644 5.48877 11.6186 5.48877C11.4727 5.48877 11.3545 5.60699 11.3545 5.75283C11.3545 5.89867 11.4727 6.01689 11.6186 6.01689Z"
                                                fill="#272727" stroke="#272727" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_321_2714">
                                                <rect width="16.962" height="16.962" fill="white"
                                                    transform="translate(0.468262 0.784668)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="flex items-center mt-1 px-4 py-2 text-start gap-5">
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="selected[]"
                                    class="form-checkbox  h-5 w-5 text-[#BA2B60] rounded">
                            </label>
                            <div class="flex items-center gap-5">
                                <img src="../assets/images/marsha.png" alt="" class="w-10 h-10 ">
                                <h1 class="text-xs font-vietnam font-medium">Aigway testimoni 1</h1>
                            </div>
                        </td>
                        <td class=" px-4 py-2">
                            <h1 class="text-xs font-vietnam font-medium">02-01-2023</h1>
                        </td>
                        <td class=" px-4 py-2">
                            <h1 class="text-xs font-vietnam font-medium">10-01-2023</h1>
                        </td>
                        <td class=" px-4 py-2">
                            <div class="flex gap-2">
                                <button data-modal-toggle="delete-file"
                                    class="bg-[#E8FBE8] px-2 py-2 rounded-lg hover:bg-[#BA2B60]/20">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.74799 3.83327H6.61547C6.68836 3.83327 6.74799 3.77364 6.74799 3.70075V3.83327H11.7836V3.70075C11.7836 3.77364 11.8432 3.83327 11.9161 3.83327H11.7836V5.02591H12.9762V3.70075C12.9762 3.11603 12.5008 2.64062 11.9161 2.64062H6.61547C6.03075 2.64062 5.55535 3.11603 5.55535 3.70075V5.02591H6.74799V3.83327ZM15.0965 5.02591H3.43509C3.1419 5.02591 2.90503 5.26278 2.90503 5.55597V6.08604C2.90503 6.15892 2.96466 6.21855 3.03755 6.21855H4.03804L4.44718 14.8818C4.47369 15.4466 4.9408 15.8922 5.50565 15.8922H13.0259C13.5924 15.8922 14.0579 15.4483 14.0844 14.8818L14.4935 6.21855H15.494C15.5669 6.21855 15.6265 6.15892 15.6265 6.08604V5.55597C15.6265 5.26278 15.3897 5.02591 15.0965 5.02591ZM12.8984 14.6996H5.6332L5.23234 6.21855H13.2992L12.8984 14.6996Z"
                                            fill="#272727" />
                                    </svg>
                                </button>
                                <a href="" class="bg-[#E8FBE8] px-2 py-2 rounded-lg hover:bg-[#BA2B60]/20">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_321_2714)">
                                            <path
                                                d="M5.28125 5.2249C5.14118 5.2249 5.00685 5.28054 4.90781 5.37959C4.80877 5.47863 4.75312 5.61296 4.75312 5.75303C4.75312 5.89309 4.80877 6.02743 4.90781 6.12647C5.00685 6.22551 5.14118 6.28115 5.28125 6.28115V5.2249ZM7.39375 6.28115C7.53382 6.28115 7.66815 6.22551 7.76719 6.12647C7.86623 6.02743 7.92188 5.89309 7.92188 5.75303C7.92188 5.61296 7.86623 5.47863 7.76719 5.37959C7.66815 5.28054 7.53382 5.2249 7.39375 5.2249V6.28115ZM5.28125 8.92178C5.14118 8.92178 5.00685 8.97742 4.90781 9.07646C4.80877 9.1755 4.75312 9.30983 4.75312 9.4499C4.75312 9.58997 4.80877 9.7243 4.90781 9.82334C5.00685 9.92239 5.14118 9.97803 5.28125 9.97803V8.92178ZM11.6187 9.97803C11.7588 9.97803 11.8931 9.92239 11.9922 9.82334C12.0912 9.7243 12.1469 9.58997 12.1469 9.4499C12.1469 9.30983 12.0912 9.1755 11.9922 9.07646C11.8931 8.97742 11.7588 8.92178 11.6187 8.92178V9.97803ZM5.28125 11.0343C5.14118 11.0343 5.00685 11.0899 4.90781 11.189C4.80877 11.288 4.75312 11.4223 4.75312 11.5624C4.75312 11.7025 4.80877 11.8368 4.90781 11.9358C5.00685 12.0349 5.14118 12.0905 5.28125 12.0905V11.0343ZM11.6187 12.0905C11.7588 12.0905 11.8931 12.0349 11.9922 11.9358C12.0912 11.8368 12.1469 11.7025 12.1469 11.5624C12.1469 11.4223 12.0912 11.288 11.9922 11.189C11.8931 11.0899 11.7588 11.0343 11.6187 11.0343V12.0905ZM5.28125 13.1468C5.14118 13.1468 5.00685 13.2024 4.90781 13.3015C4.80877 13.4005 4.75312 13.5348 4.75312 13.6749C4.75312 13.815 4.80877 13.9493 4.90781 14.0483C5.00685 14.1474 5.14118 14.203 5.28125 14.203V13.1468ZM7.39375 14.203C7.53382 14.203 7.66815 14.1474 7.76719 14.0483C7.86623 13.9493 7.92188 13.815 7.92188 13.6749C7.92188 13.5348 7.86623 13.4005 7.76719 13.3015C7.66815 13.2024 7.53382 13.1468 7.39375 13.1468V14.203ZM4.225 3.1124H12.675V2.05615H4.225V3.1124ZM13.2031 3.64053V15.2593H14.2594V3.64053H13.2031ZM12.675 15.7874H4.225V16.8437H12.675V15.7874ZM3.69687 15.2593V3.64053H2.64062V15.2593H3.69687ZM4.225 15.7874C4.08493 15.7874 3.9506 15.7318 3.85156 15.6327C3.75252 15.5337 3.69687 15.3993 3.69687 15.2593H2.64062C2.64062 15.6795 2.80755 16.0825 3.10468 16.3796C3.40181 16.6767 3.8048 16.8437 4.225 16.8437V15.7874ZM13.2031 15.2593C13.2031 15.3993 13.1475 15.5337 13.0484 15.6327C12.9494 15.7318 12.8151 15.7874 12.675 15.7874V16.8437C13.0952 16.8437 13.4982 16.6767 13.7953 16.3796C14.0925 16.0825 14.2594 15.6795 14.2594 15.2593H13.2031ZM12.675 3.1124C12.8151 3.1124 12.9494 3.16804 13.0484 3.26709C13.1475 3.36613 13.2031 3.50046 13.2031 3.64053H14.2594C14.2594 3.22032 14.0925 2.81733 13.7953 2.52021C13.4982 2.22308 13.0952 2.05615 12.675 2.05615V3.1124ZM4.225 2.05615C3.8048 2.05615 3.40181 2.22308 3.10468 2.52021C2.80755 2.81733 2.64062 3.22032 2.64062 3.64053H3.69687C3.69687 3.50046 3.75252 3.36613 3.85156 3.26709C3.9506 3.16804 4.08493 3.1124 4.225 3.1124V2.05615ZM5.28125 6.28115H7.39375V5.2249H5.28125V6.28115ZM5.28125 9.97803H11.6187V8.92178H5.28125V9.97803ZM5.28125 12.0905H11.6187V11.0343H5.28125V12.0905ZM5.28125 14.203H7.39375V13.1468H5.28125V14.203Z"
                                                fill="#272727" />
                                            <path
                                                d="M11.6186 6.01689C11.7644 6.01689 11.8826 5.89867 11.8826 5.75283C11.8826 5.60699 11.7644 5.48877 11.6186 5.48877C11.4727 5.48877 11.3545 5.60699 11.3545 5.75283C11.3545 5.89867 11.4727 6.01689 11.6186 6.01689Z"
                                                fill="#272727" stroke="#272727" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_321_2714">
                                                <rect width="16.962" height="16.962" fill="white"
                                                    transform="translate(0.468262 0.784668)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    </div>

    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
    integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function sidebar() {
        return {
            sidebarOpen: true,
            sidebarProductMenuOpen: false,
            openSidebar() {
                this.sidebarOpen = true
            },
            closeSidebar() {
                this.sidebarOpen = false
            },
            sidebarProductMenu() {
                if (this.sidebarProductMenuOpen === true) {
                    this.sidebarProductMenuOpen = false
                    window.localStorage.setItem('sidebarProductMenuOpen', 'close');
                } else {
                    this.sidebarProductMenuOpen = true
                    window.localStorage.setItem('sidebarProductMenuOpen', 'open');
                }
            },
            checkSidebarProductMenu() {
                if (window.localStorage.getItem('sidebarProductMenuOpen')) {
                    if (window.localStorage.getItem('sidebarProductMenuOpen') === 'open') {
                        this.sidebarProductMenuOpen = true
                    } else {
                        this.sidebarProductMenuOpen = false
                        window.localStorage.setItem('sidebarProductMenuOpen', 'close');
                    }
                }
            },
        }
    }
</script>
<script>
    $(document).ready(function() {
        if (window.File && window.FileList && window.FileReader) {
            $("#files").on("change", function(e) {
                var files = e.target.files,
                    filesLength = files.length;
                var maxFiles = 1; // batas maksimal upload gambar
                if (filesLength > maxFiles) {
                    alert("Maaf gambar yang dapat di upload hanya" + maxFiles + " gambar");
                    return false;
                }
                for (var i = 0; i < filesLength; i++) {
                    var f = files[i]
                    var fileReader = new FileReader();
                    fileReader.onload = (function(e) {
                        var file = e.target;
                        $("<span class=\"pip\">" +
                            "<img class=\"imageThumb\" src=\"" + e.target.result +
                            "\" title=\"" + file.name + "\"/>" +
                            "<br/><span class=\"remove\">Remove image</span>" +
                            "</span>").insertAfter("#files");
                        $(".remove").click(function() {
                            $(this).parent(".pip").remove();
                        });

                    });
                    fileReader.readAsDataURL(f);
                }
                console.log(files);
            });
        } else {
            alert("Your browser doesn't support to File API")
        }
    });
</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="//unpkg.com/alpinejs" defer></script>
@livewireScripts

</html>
