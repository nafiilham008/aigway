<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href='{{ asset('assets/images/logo2.svg') }}'>
    <title>{{ $title }}</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
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

        .button {
            background: linear-gradient(to right, #BA2B60, #c6537b, #d27b98);
        }

        .nav {
            position: -webkit-sticky;
            position: -moz-sticky;
            position: -o-sticky;
            position: -ms-sticky;
            position: sticky;
        }
        .cover {
            object-fit: cover;
            height: 400px;
            width: 800px;
        }
        @media only screen and (max-width: 600px) {
            .cover {
                width: 600px;
                height: 400px;
                object-fit: cover;
            }
        }
    </style>
    <style>
        /* Gaya untuk scrollbar */
        .scrollbar::-webkit-scrollbar {
            width: 11px;
            /* Lebar scrollbar */
        }

        .scrollbar::-webkit-scrollbar-track {
            /* Warna latar belakang track scrollbar */
            border-style: solid;
            border-radius: 6px;
            border-color: #861B43;
        }

        .scrollbar::-webkit-scrollbar-thumb {
            background-color: #861B43;
            /* Warna thumb scrollbar */
            border-radius: 6px;
            width: 11px;
            height: 10px;
        }

        .scrollbar::-webkit-scrollbar-thumb:hover {
            background-color: #555;
            /* Warna thumb scrollbar saat dihover */
        }
    </style>
</head>

<body class="bg-white">
    <div class="flex flex-col min-h-screen">
        <div class="flex-grow">
            <div class="nav sticky z-20 top-0">
                <livewire:navbar.index />
            </div>
            {{ $slot }}
        </div>

        <div class="mt-20">
            <livewire:footer.index />
        </div>

    </div>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-S8H94F5F56"></script>
    <script src="../assets/js/navigation/navbarActive.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>



    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-S8H94F5F56');
    </script>
    @livewireScripts
    @stack('js')
</body>

</html>
