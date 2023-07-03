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
        <div class=" bg-white rounded-xl py-[27px] px-20 ">
            <h1 class="text-[#272B30] text-lg font-semibold font-vietnam mb-1">Pengaturan Admin</h1>
            <h1 class="text-[#737373] text-xs font-vietnam mb-8">Isi detail dibawah ini</h1>
            <div class="flex gap-5 items-center w-full mb-[30px]">
                <div class="w-full">
                    <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Username<label
                            class="text-[#FF0101]">*</label></h1>
                    <input type="text" id="username"
                        class="bg-white border border-[#CACACA] text-[#A8A8A8] text-xs rounded-lg block w-full py-2.5 px-6"
                        placeholder="Admin" required>
                </div>
                <div class="w-full">
                    <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Email<label
                            class="text-[#FF0101]">*</label></h1>
                    <input type="email" id="email"
                        class="bg-white border border-[#CACACA] text-[#A8A8A8] text-xs rounded-lg block w-full py-2.5 px-6"
                        placeholder="aigwayofficial@gmail.com" required>
                </div>
            </div>
            <div class="flex gap-5 items-center w-full mb-1">
                <div class="w-full">
                    <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">No. Telepon<label
                            class="text-[#FF0101]">*</label></h1>
                    <input type="text" id="noTelepon"
                        class="bg-white border border-[#CACACA] text-[#A8A8A8] text-xs rounded-lg block w-full py-2.5 px-6"
                        placeholder="+62 822-2133-3561" required>
                </div>
                <div class="w-full">
                    <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Alamat Kantor<label
                            class="text-[#FF0101]">*</label></h1>
                    <input type="text" id="alamat"
                        class="bg-white border border-[#CACACA] text-[#A8A8A8] text-xs rounded-lg block w-full py-2.5 px-6"
                        placeholder="Jln Belimbing No. 86, Bantul, Bantul, Daerah Istimewa Yogyakarta" required>
                </div>
            </div>
            <button data-modal-toggle="show-password2" class="text-xs font-vietnam text-[#861B43] mb-[45px]">Lihat
                Password</button>


            <div class="flex gap-5 justify-end">
                <button class="px-8 py-2 rounded-md text-[#861B43] bg-[#EEEEEE] hover:bg-[#EEEEEE]/50 text-sm">
                    Batal
                </button>

                <button data-modal-toggle="add-product-success"
                    class="px-8 py-2 rounded-md button text-sm text-white">Simpan</button>
            </div>
            <livewire:modal.show-password />
            <livewire:modal.add-product-success />
            <hr class="my-5 h-[1px] border-[#737373] border">
            <div class="flex gap-5  w-full mb-[30px]">
                <div class="w-full">
                    <div class="w-full mb-3">
                        <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Nama Banner<label
                                class="text-[#FF0101]">*</label></h1>
                        <input type="text" id="username"
                            class="bg-white border border-[#CACACA] text-[#A8A8A8] text-xs rounded-lg block w-full py-2.5 px-6"
                            placeholder="Admin" required>
                    </div>
                    <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Atur Waktu<label
                            class="text-[#FF0101]">*</label></h1>
                    <input type="text" name="daterange" value="01/01/2018 - 01/15/2018"
                        class="bg-white border border-[#CACACA] text-[#A8A8A8] text-xs rounded-lg block w-full py-2.5 px-6" />
                </div>
                <div class="w-full">
                    <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Upload Foto*</h1>
                    <label for="files" class="w-full items-center justify-center">
                        <div
                            class="w-full h-[100px] flex flex-col justify-center border border-[#737373] rounded-xl cursor-pointer">
                            <div class="flex justify-center items-center">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 2L21 7V21.008C20.9997 21.2712 20.895 21.5235 20.7088 21.7095C20.5226 21.8955 20.2702 22 20.007 22H3.993C3.73038 21.9982 3.47902 21.8931 3.29322 21.7075C3.10742 21.5219 3.00209 21.2706 3 21.008V2.992C3 2.444 3.445 2 3.993 2H16ZM13 12H16L12 8L8 12H11V16H13V12Z"
                                        fill="#737373" />
                                </svg>
                            </div>
                            <h1 class="text-center text-[8px] font-vietnam">Tambahkan gambar PNG, JPG, JPEG</h1>
                    </label>
                </div>
                <h1 class="text-[8px] text-[#FF0101] font-vietnam">*Ukuran 30 MB</h1>
                <input type="file" id="files" name="files[]" multiple class="hidden" />
            </div>
        </div>
        <div class="flex gap-5 justify-end">
            <button class="px-8 py-2 rounded-md text-[#861B43] bg-[#EEEEEE] hover:bg-[#EEEEEE]/50 text-sm">
                Batal
            </button>

            <button data-modal-toggle="add-product-success"
                class="px-8 py-2 rounded-md button text-sm text-white">Tambah</button>
        </div>
        <hr class="my-5 h-[1px] border-[#737373] border">
        <table class="table-auto w-full">
            <thead>
                <tr class="bg-[#E8FBE8]">
                    <th class="flex items-center px-4 py-2 text-start gap-2">
                        <label class="inline-flex items-center ">
                            <input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-[#BA2B60] rounded">
                        </label>
                        <h1 class="text-xs font-vietnam font-semibold">Banner</h1>
                    </th>
                    <th class="px-4 py-2">
                        <h1 class="text-xs font-vietnam font-semibold text-start">Waktu</h1>
                    </th>
                    <th class="px-4 py-2">
                        <h1 class="text-xs font-vietnam font-semibold text-start">Aksi</h1>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="flex items-center mt-1 px-4 py-2 text-start gap-2">
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="selected[]"
                                class="form-checkbox  h-5 w-5 text-[#BA2B60] rounded">
                        </label>
                        <h1 class="text-xs font-vietnam font-medium">Promo 1</h1>
                    </td>
                    <td class=" px-4 py-2">
                        <h1 class="text-xs font-vietnam font-medium">02-01-2023 sd 10-01-2023</h1>
                    </td>
                    <td class=" px-4 py-2">
                        <button data-modal-toggle="delete-file"
                            class="bg-[#E8FBE8] px-2 py-2 rounded-lg hover:bg-[#BA2B60]/20">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.74799 3.83327H6.61547C6.68836 3.83327 6.74799 3.77364 6.74799 3.70075V3.83327H11.7836V3.70075C11.7836 3.77364 11.8432 3.83327 11.9161 3.83327H11.7836V5.02591H12.9762V3.70075C12.9762 3.11603 12.5008 2.64062 11.9161 2.64062H6.61547C6.03075 2.64062 5.55535 3.11603 5.55535 3.70075V5.02591H6.74799V3.83327ZM15.0965 5.02591H3.43509C3.1419 5.02591 2.90503 5.26278 2.90503 5.55597V6.08604C2.90503 6.15892 2.96466 6.21855 3.03755 6.21855H4.03804L4.44718 14.8818C4.47369 15.4466 4.9408 15.8922 5.50565 15.8922H13.0259C13.5924 15.8922 14.0579 15.4483 14.0844 14.8818L14.4935 6.21855H15.494C15.5669 6.21855 15.6265 6.15892 15.6265 6.08604V5.55597C15.6265 5.26278 15.3897 5.02591 15.0965 5.02591ZM12.8984 14.6996H5.6332L5.23234 6.21855H13.2992L12.8984 14.6996Z"
                                    fill="#272727" />
                            </svg>
                        </button>
                    </td>
                </tr>
                <td class="flex items-center mt-1 px-4 py-2 text-start gap-2">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="selected[]"
                            class="form-checkbox  h-5 w-5 text-[#BA2B60] rounded">
                    </label>
                    <h1 class="text-xs font-vietnam font-medium">Promo 1</h1>
                </td>
                <td class=" px-4 py-2">
                    <h1 class="text-xs font-vietnam font-medium">02-01-2023 sd 10-01-2023</h1>
                </td>
                <td class=" px-4 py-2">
                    <button data-modal-toggle="delete-file"
                        class="bg-[#E8FBE8] px-2 py-2 rounded-lg hover:bg-[#BA2B60]/20">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.74799 3.83327H6.61547C6.68836 3.83327 6.74799 3.77364 6.74799 3.70075V3.83327H11.7836V3.70075C11.7836 3.77364 11.8432 3.83327 11.9161 3.83327H11.7836V5.02591H12.9762V3.70075C12.9762 3.11603 12.5008 2.64062 11.9161 2.64062H6.61547C6.03075 2.64062 5.55535 3.11603 5.55535 3.70075V5.02591H6.74799V3.83327ZM15.0965 5.02591H3.43509C3.1419 5.02591 2.90503 5.26278 2.90503 5.55597V6.08604C2.90503 6.15892 2.96466 6.21855 3.03755 6.21855H4.03804L4.44718 14.8818C4.47369 15.4466 4.9408 15.8922 5.50565 15.8922H13.0259C13.5924 15.8922 14.0579 15.4483 14.0844 14.8818L14.4935 6.21855H15.494C15.5669 6.21855 15.6265 6.15892 15.6265 6.08604V5.55597C15.6265 5.26278 15.3897 5.02591 15.0965 5.02591ZM12.8984 14.6996H5.6332L5.23234 6.21855H13.2992L12.8984 14.6996Z"
                                fill="#272727" />
                        </svg>
                    </button>
                </td>
                </tr>
            </tbody>
        </table>
        <livewire:modal.delete-file />

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
