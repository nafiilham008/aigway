<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <title>Edit Product</title>
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
            <h1 class="text-[#272B30] text-lg font-semibold font-vietnam mb-1">Ubah Produk</h1>
            <h1 class="text-[#737373] text-xs font-vietnam mb-8">Isi detail dibawah ini</h1>
            <div class="flex gap-5 items-center w-full mb-[30px]">
                <div class="w-full">
                    <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Nama Produk<label
                            class="text-[#FF0101]">*</label></h1>
                    <input type="text" id="name"
                        class="bg-white border border-[#CACACA] text-[#A8A8A8] text-xs rounded-lg block w-full py-2.5 px-6"
                        placeholder="name@flowbite.com" required>
                </div>
                <div class="w-full">
                    <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Tag<label
                            class="text-[#FF0101]">*</label></h1>
                    <input type="text" id="price" oninput="formatPrice()"
                        class="bg-white border border-[#CACACA] text-[#A8A8A8] text-xs rounded-lg block w-full py-2.5 px-6"
                        placeholder="masukkan harga produk ex : IDR 50.000">
                </div>
            </div>
            <div class="flex gap-5 items-center w-full mb-[30px]">
                <div class="w-full">
                    <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Tag<label
                            class="text-[#FF0101]">*</label></h1>
                    <input type="text" id="name"
                        class="bg-white border border-[#CACACA] text-[#A8A8A8] text-xs rounded-lg block w-full py-2.5 px-6"
                        placeholder="masukkan tag produk ex : cream" required>
                </div>
                <div class="w-full">
                    <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Kategori</h1>
                    <select id="service"
                        class="bg-white border border-[#CACACA] text-[#A8A8A8] text-xs rounded-lg block w-full py-2.5 px-6">
                        <option value="" disabled selected>-pilih kategori-</option>
                        <option value="">Tidak ada</option>
                        <option value="">Serum</option>
                        <option value="">Paket Skincare/option>

                    </select>
                </div>
            </div>
            <div class="flex gap-5 w-full mb-[30px]">
                <div class="w-full">
                    <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Tentang Produk<label
                            class="text-[#FF0101]">*</label></h1>
                    <textarea rows="4"
                        class="bg-white border border-[#CACACA] text-[#A8A8A8] text-xs rounded-lg block w-full py-2.5 px-6"
                        placeholder="masukkan detail produk "></textarea>
                </div>
                <div class="w-full">
                    <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Upload Foto*</h1>
                    <label for="files" class="w-full items-center justify-center">
                        <div
                            class="w-full h-[73px] flex flex-col justify-center border border-[#737373] rounded-xl cursor-pointer">
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
                <h1 class="text-[8px] text-[#FF0101] font-vietnam">*max 4 gambar, ukuran 30 MB</h1>
                <input type="file" id="files" name="files[]" multiple class="hidden" />
            </div>
        </div>
        <div class="flex gap-5 w-full mb-[30px]">
            <div class="w-full">
                <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Manfaat</h1>

                <div class="mb-6 repeater" id="manfaat">
                    <div data-repeater-list="manfaat">
                        <div data-repeater-item="" class="flex flex-row gap-3 items-center">
                            <input type="text" id="" name="" value=""
                                class="bg-white border border-[#CACACA] text-[#A8A8A8] text-xs rounded-lg block w-full py-2.5 px-6 mb-2 w-full"
                                placeholder="Tambahkan manfaat">
                            <button type="button" class="text-black rounded-lg" data-repeater-delete>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-trash-fill " viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div>
                        <button type="button"
                            class="bg-white border border-[#CACACA] mt-3 text-[#BC2B1C] w-max hover:bg-gray-300 hover:text-white rounded-lg p-2 flex items-center "
                            data-repeater-create="">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.75 11.25V6H11.25V11.25H6V12.75H11.25V18H12.75V12.75H18V11.25H12.75Z"
                                    fill="#737373" />
                            </svg>

                        </button>
                    </div>
                </div>

            </div>
            <div class="w-full">
                <div class="w-full">
                    <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Keterangan Tambahan (Optional)
                    </h1>
                    <textarea rows="4"
                        class="bg-white border border-[#CACACA] text-[#A8A8A8] text-xs rounded-lg block w-full py-2.5 px-6"
                        placeholder="masukkan detail produk"></textarea>
                </div>
            </div>
        </div>
        <div class="flex gap-5 justify-end">
            <button class="px-8 py-3 rounded-md text-[#861B43] bg-[#EEEEEE] hover:bg-[#EEEEEE]/50 text-sm">
                Batal
            </button>

            <button data-modal-toggle="add-product-success"
                class="px-8 py-3 rounded-md button text-sm text-white">Gabung</button>
        </div>
        <livewire:modal.add-product-success />
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.js"
    integrity="sha512-bZAXvpVfp1+9AUHQzekEZaXclsgSlAeEnMJ6LfFAvjqYUVZfcuVXeQoN5LhD7Uw0Jy4NCY9q3kbdEXbwhZUmUQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
<script>
    $(document).ready(function() {
        $('.repeater').repeater({
            // (Optional)
            // start with an empty list of repeaters. Set your first (and only)
            // "data-repeater-item" with style="display:none;" and pass the
            // following configuration flag
            initEmpty: false,
            defaultValues: {
                'text-input': 'foo'
            },
            show: function() {
                $(this).slideDown();
            },
            hide: function(deleteElement) {
                if (confirm('Are you sure you want to delete?')) {
                    $(this).slideUp(deleteElement);
                }
            },
            isFirstItemUndeletable: true
        })
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
                var maxFiles = 4; // batas maksimal upload gambar
                if (filesLength > maxFiles) {
                    alert("You can only upload maximum " + maxFiles + " files");
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
<script src="//unpkg.com/alpinejs" defer></script>
@livewireScripts

</html>
