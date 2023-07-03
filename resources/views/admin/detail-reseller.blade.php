<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <title>Detail Reseller</title>
    @livewireStyles

    @vite('resources/css/app.css')
    @stack('css')

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

</head>

<body>
    <livewire:sidebar.index />

    <div :class="{ 'ml-56': sidebarOpen, 'ml-0': !sidebarOpen }"
        class="flex-col w-full ml-56 transition-all duration-300 md:flex md:flex-col min-h-screen p-20 bg-[#FFF3F3]">
        <div class="flex gap-[10px] items-center mb-[46px]">
            <a href="/" class="font-vietnam font-medium text-base text-[#272727]/50">Offline Store</a>
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
            <h1 class="font-vietnam font-semibold text-base text-black">Detail Reseller</h1>
        </div>
        <div class="grid grid-cols-12">
            <div class="col-span-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.6039893506263!2d110.4039267!3d-7.831669000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5721bf4121af%3A0x8e36f7d51931f6a5!2sJl.%20Belimbing%20No.86%2C%20Mutilan%2C%20Wirokerten%2C%20Kec.%20Banguntapan%2C%20Kabupaten%20Bantul%2C%20Daerah%20Istimewa%20Yogyakarta%2055173!5e0!3m2!1sid!2sid!4v1684851295407!5m2!1sid!2sid"
                    width="496" height="372" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-span-6 flex flex-col justify-center w-full">
             
                    <div class="flex justify-between border-b p-2 border-black">
                        <h1 class="font-vietnam font-semibold text-base text-black">Nama</h1>
                        <h1 class="font-vietnam font-semibold text-base text-black text-start">Marsha Lenathea</h1>
                    </div>
                    <div class="flex justify-between border-b p-2 border-black">
                        <h1 class="font-vietnam font-semibold text-base text-black">Kota</h1>
                        <h1 class="font-vietnam font-semibold text-base text-black text-start">Isekai</h1>
                    </div>
                    <div class="flex justify-between border-b p-2 border-black">
                        <h1 class="font-vietnam font-semibold text-base text-black">No. Telepon</h1>
                        <h1 class="font-vietnam font-semibold text-base text-black text-start">+62 822-2133-3561</h1>
                    </div>
                    <div class="flex justify-between border-b p-2 border-black">
                        <h1 class="font-vietnam font-semibold text-base text-black">Email</h1>
                        <h1 class="font-vietnam font-semibold text-base text-black text-start">marshaloveiqbal@gmail.com</h1>
                    </div>
                    <div class="flex justify-between border-b p-2 border-black">
                        <h1 class="font-vietnam font-semibold text-base text-black">Alamat Kantor</h1>
                        <h1 class="font-vietnam font-semibold text-base text-black text-start">Isekai</h1>
                    </div>
                    <div class="flex justify-between border-b p-2 border-black">
                        <h1 class="font-vietnam font-semibold text-base text-black">Longitude</h1>
                        <h1 class="font-vietnam font-semibold text-base text-black text-start">903.002003.10230</h1>
                    </div>
                    <div class="flex justify-between border-b p-2 border-black">
                        <h1 class="font-vietnam font-semibold text-base text-black">Latitude</h1>
                        <h1 class="font-vietnam font-semibold text-base text-black text-start">903.002003.10230</h1>
                    </div>
                    
           
            </div>
        </div>
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
<script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script>
    var newpassword = document.getElementById('password');
    var togglernew = document.getElementById('togglernew');
    showHidePasswordNew = () => {
        if (newpassword.type == 'password') {
            newpassword.setAttribute('type', 'text');
            togglernew.removeAttribute('icon')
            togglernew.setAttribute('icon', 'bxs:hide')
        } else {
            togglernew.removeAttribute('icon')
            togglernew.setAttribute('icon', 'bxs:show')
            newpassword.setAttribute('type', 'password');
        }
    };

    togglernew.addEventListener('click', showHidePasswordNew);
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#select-all').click(function() {
        $('input[name="selected[]"]').prop('checked', this.checked);
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
<script type="text/javascript">
    let thumbnails = document.getElementsByClassName('thumbnail')

    let activeImages = document.getElementsByClassName('active')

    for (var i = 0; i < thumbnails.length; i++) {

        thumbnails[i].addEventListener('mouseover', function() {
            console.log(activeImages)

            if (activeImages.length > 0) {
                activeImages[0].classList.remove('active')
            }


            this.classList.add('active')
            document.getElementById('featured').src = this.src
        })
    }


    let buttonRight = document.getElementById('slideRight');
    let buttonLeft = document.getElementById('slideLeft');

    buttonLeft.addEventListener('click', function() {
        document.getElementById('slider').scrollLeft -= 180
    })

    buttonRight.addEventListener('click', function() {
        document.getElementById('slider').scrollLeft += 180
    })
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

</html>`
