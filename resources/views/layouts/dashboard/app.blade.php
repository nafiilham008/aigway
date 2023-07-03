<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href='{{ asset('../assets/images/logo 2.svg') }}'>

    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @livewireStyles

    @vite('resources/css/app.css')
    @stack('css')
    <title>{{ $title }}</title>
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



    {{ $slot }}



    </div>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
    integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.js"
    integrity="sha512-bZAXvpVfp1+9AUHQzekEZaXclsgSlAeEnMJ6LfFAvjqYUVZfcuVXeQoN5LhD7Uw0Jy4NCY9q3kbdEXbwhZUmUQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
<script src="//unpkg.com/alpinejs" defer></script>
<script>
    // Ambil semua elemen 
    var repeaters = document.querySelectorAll('.repeater');

    // Iterasi setiap elemen repeater
    repeaters.forEach(function(repeater) {
        // Ambil tombol "Tambah"
        var addButton = repeater.querySelector('[data-repeater-create]');

        // Tambahkan event listener 
        addButton.addEventListener('click', function() {
            var repeaterContainer = repeater.querySelector('[data-repeater-list="benefits"]');
            var repeaterTemplate = repeaterContainer.querySelector('[data-repeater-item]');
            var newRepeaterItem = repeaterTemplate.cloneNode(true);
            var inputs = newRepeaterItem.querySelectorAll('input');
            inputs.forEach(function(input) {
                input.value = '';
                input.setAttribute('name', 'benefits[]');
            });

            // Tambahkan item repeater baru ke kontainer
            repeaterContainer.appendChild(newRepeaterItem);
        });

        // Ambil semua tombol "Hapus"
        var deleteButtons = repeater.querySelectorAll('[data-repeater-delete]');

        // Iterasi setiap tombol "Hapus"
        deleteButtons.forEach(function(deleteButton) {
            deleteButton.addEventListener('click', function() {
                var repeaterItem = deleteButton.closest('[data-repeater-item]');
                repeaterItem.remove();
            });
        });
    });
</script>

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
<script src="../assets/js/navigation/sidebarActive.js"></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-S8H94F5F56"></script>
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


</html>
