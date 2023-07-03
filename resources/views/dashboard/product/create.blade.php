<div :class="{ 'ml-56': sidebarOpen, 'ml-0': !sidebarOpen }"
    class="flex-col w-full ml-56 transition-all duration-300 md:flex md:flex-col min-h-screen p-20 bg-[#FFF3F3]">
    <div class="flex gap-[10px] items-center mb-[46px]">
        @foreach ($breadcrumb as $item)
            @if (isset($item['link']))
                <a href="{{ $item['link'] }}"
                    class="font-vietnam font-medium text-base text-[#272727]/50">{{ $item['label'] }}</a>
            @else
                <h1 class="font-vietnam font-semibold text-base text-black">{{ $productId ? 'Ubah' : $item['label'] }}
                </h1>
            @endif


            @if (!$loop->last)
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
            @endif
        @endforeach
    </div>
    <x-modal.modal-notification />

    <div class=" bg-white rounded-xl py-[27px] px-20 ">
        <h1 class="text-[#272B30] text-lg font-semibold font-vietnam mb-1">
            {{ $productId ? 'Ubah Produk' : 'Buat Produk' }}</h1>

        <h1 class="text-[#737373] text-xs font-vietnam mb-8">Isi detail dibawah ini</h1>
        <div>
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </div>
        <div class="flex gap-5 items-center w-full mb-[30px]">
            <div class="w-full">
                <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Nama Produk<label
                        class="text-[#FF0101]">*</label></h1>
                <input type="text" id="name" wire:model.defer="name"
                    class="bg-white border border-[#CACACA] text-[#A8A8A8] text-xs rounded-lg block w-full py-2.5 px-6"
                    placeholder="name@flowbite.com" required>
                @error('name')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full">
                <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Harga Produk<label
                        class="text-[#FF0101]">*</label></h1>
                <input type="text" id="price" onchange="formatPrice()" wire:model.defer="price"
                    class="bg-white border border-[#CACACA] text-[#A8A8A8] text-xs rounded-lg block w-full py-2.5 px-6"
                    pattern="[0-9]+" placeholder="masukkan harga produk ex: 50000" required>
                @error('price')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>

        </div>
        <div class="flex gap-5 items-center w-full mb-[30px]">
            <div class="w-full">
                <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Tag<label
                        class="text-[#FF0101]">*</label></h1>
                <input type="text" id="name" wire:model.defer="tag"
                    class="bg-white border border-[#CACACA] text-[#A8A8A8] text-xs rounded-lg block w-full py-2.5 px-6"
                    placeholder="masukkan tag produk ex : cream" required>
                @error('tag')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full">
                <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                <div class="relative">
                    <select id="category" name="category" wire:model.defer="category"
                        class="appearance-none block w-full px-4 py-2 pr-8 leading-5 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        <option value="" selected>-pilih kategori-</option>
                        @if ($categoryData)
                            @foreach ($categoryData as $categoryItem)
                                <option value="{{ $categoryItem['id'] }}">{{ $categoryItem['label'] }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                @error('category')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>


        </div>
        <div class="flex gap-5 w-full mb-[30px]">
            <div class="w-full">
                <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Tentang Produk<label
                        class="text-[#FF0101]">*</label></h1>
                <textarea rows="4" wire:model.defer="description"
                    class="bg-white border border-[#CACACA] text-[#A8A8A8] text-xs rounded-lg block w-full py-2.5 px-6"
                    placeholder="masukkan detail produk "></textarea>
                @error('description')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>

            <div class="w-full">
                <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Upload Foto</h1>
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
                    </div>
                </label>
                <h1 class="text-[8px] text-[#FF0101] font-vietnam">*max 4 gambar, ukuran 5MB</h1>
                <input type="file" id="files" name="files[]" multiple class="hidden"
                    accept="image/png, image/jpeg, image/jpg" wire:model="photo" />

                <!-- Tambahkan pratinjau gambar di sini -->
                <div id="preview-container">
                    <div class="flex gap-4 flex-wrap">
                        @if ($photo)
                            @foreach ($photo as $index => $image)
                                <div class="preview-image-container" data-index="{{ $index }}">
                                    <img src="{{ is_string($image) ? asset('storage/' . $image) : ($image instanceof \Livewire\TemporaryUploadedFile ? $image->temporaryUrl() : '') }}"
                                        class="preview-image" alt="Preview Image">
                                    <button class="delete-button" data-index="{{ $index }}">Hapus</button>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>

                
                @error('photo')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>

            {{-- <div class="w-full">
                <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Upload Foto</h1>
                <label for="file-upload" class="w-full items-center justify-center">
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
                    </div>
                </label>
                <h1 class="text-[8px] text-[#FF0101] font-vietnam">*max 4 gambar, ukuran 5MB</h1>
                <input type="file" id="file-upload" name="file-upload" accept="image/png, image/jpeg, image/jpg"
                    class="hidden" wire:model="photo" />

                <!-- Tambahkan pratinjau gambar di sini -->
                <div id="preview-container">
                    <div class="flex gap-4 flex-wrap">
                        @if ($photo)
                            @foreach ($photo as $index => $image)
                                <div class="preview-image-container" data-index="{{ $index }}">
                                    <img src="{{ is_string($image) ? asset('storage/' . $image) : ($image instanceof \Livewire\TemporaryUploadedFile ? $image->temporaryUrl() : '') }}"
                                        class="preview-image" alt="Preview Image">
                                    <button class="delete-button" data-index="{{ $index }}">Hapus</button>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                @error('photo')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div> --}}
        </div>
        <div class="flex gap-5 w-full mb-[30px]">
            <div class="w-full">
                <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Manfaat</h1>

                <div class="mb-6 repeater" id="manfaat">
                    <div data-repeater-list="benefits">
                        @foreach ($benefits as $index => $benefit)
                            <div data-repeater-item class="flex flex-row gap-3 items-center"
                                wire:key="benefit_{{ $index }}">
                                <input type="text" name="benefits[]"
                                    wire:model.lazy="benefits.{{ $index }}"
                                    class="bg-white border border-[#CACACA] text-[#A8A8A8] text-xs rounded-lg block w-full py-2.5 px-6 mb-2"
                                    placeholder="Tambahkan manfaat">
                                <button type="button" class="text-black rounded-lg"
                                    wire:click="removeBenefit({{ $index }})" data-repeater-delete>
                                    <!-- SVG -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />

                                    </svg>
                                </button>
                            </div>
                        @endforeach
                        @error('benefits')
                            <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror

                        <button type="button" class="text-black rounded-lg" wire:click="addBenefit"
                            data-repeater-create>
                        </button>
                    </div>


                    <div>
                        <button type="button"
                            class="bg-white border border-[#CACACA] mt-3 text-[#BC2B1C] w-max hover:bg-gray-300 hover:text-white rounded-lg p-2 flex items-center"
                            wire:click="addBenefit" data-repeater-create>
                            <!-- SVG -->
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
                    <textarea rows="4" wire:model.defer="additional_information"
                        class="bg-white border border-[#CACACA] text-[#A8A8A8] text-xs rounded-lg block w-full py-2.5 px-6"
                        placeholder="masukkan detail produk"></textarea>
                </div>
                @error('additional_information')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>

        </div>
        <div class="flex gap-5 justify-end">
            <a class="px-8 py-3 rounded-md text-[#861B43] bg-[#EEEEEE] hover:bg-[#EEEEEE]/50 text-sm"
                href="{{ route('dashboard.product.index') }}">Batal</a>

            <button class="px-8 py-3 rounded-md button text-sm text-white" wire:click="storeOrUpdateProduct">
                @if ($productId)
                    Ubah
                @else
                    Simpan
                @endif
            </button>
            <div wire:loading wire:target="storeOrUpdateProduct">process...</div>

        </div>
    </div>
</div>


@push('css')
    <style>
        .preview-image-container {
            position: relative;
            display: inline-block;
            margin-right: 10px;
            margin-bottom: 10px;
        }

        .preview-image {
            width: 150px;
            height: auto;
            object-fit: cover;
            border-radius: 8px;
        }

        .delete-button {
            position: absolute;
            top: 5px;
            right: 5px;
            padding: 4px 8px;
            background-color: #FF0101;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .delete-button:hover {
            background-color: #FF3030;
        }
    </style>
@endpush

@push('js')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            formatPrice();

            const priceInput = document.getElementById("price");
            priceInput.addEventListener("input", formatPrice);
        });

        function formatPrice() {
            const priceInput = document.getElementById("price");
            let price = priceInput.value.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            priceInput.value = "IDR." + price;
        }
    </script>
    <script>
        $(document).ready(function() {
            if (window.File && window.FileList && window.FileReader) {
                $("#files").on("change", function(e) {
                    var files = e.target.files,
                        filesLength = files.length;

                    for (var i = 0; i < filesLength; i++) {
                        var f = files[i];
                        var fileReader = new FileReader();
                        fileReader.onload = (function(file) {
                            return function(e) {
                                var imageIndex = Date
                                    .now(); // Menggunakan timestamp sebagai indeks unik
                                $("<div class=\"preview-image-container\" data-index=\"" +
                                    imageIndex + "\">" +
                                    "<img class=\"preview-image\" src=\"" + e.target
                                    .result +
                                    "\" title=\"" + file.name + "\"/>" +
                                    "<button class=\"delete-button\" data-index=\"" +
                                    imageIndex + "\">Hapus</button>" +
                                    "</div>").appendTo("#preview-container");
                                Livewire.emit('addPhoto', e.target.result, imageIndex);
                            };
                        })(f);
                        fileReader.readAsDataURL(f);
                    }

                    // Reset input file setelah pengunggahan gambar
                    $("#files").val('');
                });

                $(document).on("click", ".delete-button", function() {
                    var index = $(this).data("index");
                    $(this).parent(".preview-image-container").remove();
                    Livewire.emit('removePhoto', index);
                });
            } else {
                alert("Browser Anda tidak mendukung File API");
            }
        });
    </script>
@endpush
