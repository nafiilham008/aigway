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
    <title>Setting</title>
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

        <h1 class="text-2xl font-vietnam font-semibold ">Analisis</h1>
        <h1 class="text-sm font-vietnam font-medium text-center">Paling Banyak Dilihat</h1>
        <div class="mt-10 grid grid-cols-12">
            <div class="col-span-9">
                <canvas id="myChart"></canvas>
            </div>
            <div class="col-span-3 space-y-5">
                <div class="pr-2 w-full  bg-[#BA2B60] rounded-lg shadow-md">
                    <div class="flex py-3 w-full h-full px-4 bg-white rounded-lg justify-between">
                        <div class="my-auto">
                            <p class="font-vietnam text-lg font-medium text-start text-[#272727]">Ketegori</p>
                            <p class="text-[36px] font-vietnam font-semi-bold text-start text-[#272727]">4</p>
                        </div>
                        <div class="my-auto">
                            <img src="../assets/images/widget-kategori.svg" alt="">

                        </div>
                    </div>
                </div>
                <div class="pr-2 w-full  bg-[#BA2B60] rounded-lg shadow-md">
                    <div class="flex py-3 w-full h-full px-4 bg-white rounded-lg justify-between">
                        <div class="my-auto">
                            <p class="font-vietnam text-lg font-medium text-start text-[#272727]">Produk</p>
                            <p class="text-[36px] font-vietnam font-semi-bold text-start text-[#272727]">10</p>
                        </div>
                        <div class="my-auto">
                            <img src="../assets/images/widget-product.svg" alt="">

                        </div>
                    </div>
                </div>
                <div class="pr-2 w-full  bg-[#BA2B60] rounded-lg shadow-md">
                    <div class="flex py-3 w-full h-full px-4 bg-white rounded-lg justify-between">
                        <div class="my-auto">
                            <p class="font-vietnam text-lg font-medium text-start text-[#272727]">Testimoni</p>
                            <p class="text-[36px] font-vietnam font-semi-bold text-start text-[#272727]">19</p>
                        </div>
                        <div class="my-auto">
                            <img src="../assets/images/widget-testimoni.svg" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-10">
            <h1 class="text-2xl font-vietnam font-semibold mb-5">Daftar Produk</h1>
            <livewire:table.product />
        </div>
    </div>
    </div>

    </div>

    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
    integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#select-all').click(function() {
        $('input[name="selected[]"]').prop('checked', this.checked);
    });
</script>
<script>
    function formatPrice() {
        const priceInput = document.getElementById("price");
        const price = priceInput.value.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        priceInput.value = "IDR." + price;
    }
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
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Product 1', 'Product 2', 'Product 3', 'Product 4'],
            datasets: [{
                label: 'Penjualan',
                data: [12, 19, 3, 5],
                fill: false,
                borderColor: 'rgb(134, 27, 67)',
                lineTension: 0.1
            }]
        },
        options: {

        }
    });
</script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script>
    $(function() {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                .format('YYYY-MM-DD'));
        });
    });
</script>
<script src="//unpkg.com/alpinejs" defer></script>
@livewireScripts

</html>
