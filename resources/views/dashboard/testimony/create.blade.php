<div :class="{ 'ml-56': sidebarOpen, 'ml-0': !sidebarOpen }"
    class="flex-col w-full ml-56 transition-all duration-300 md:flex md:flex-col min-h-screen p-20 bg-[#FFF3F3]">
    <div class="flex gap-[10px] items-center mb-[46px]">
        @foreach ($breadcrumb as $item)
            @if (isset($item['link']))
                <a href="{{ $item['link'] }}"
                    class="font-vietnam font-medium text-base text-[#272727]/50">{{ $item['label'] }}</a>
            @else
                <h1 class="font-vietnam font-semibold text-base text-black">{{ $testimonyId ? 'Ubah' : $item['label'] }}
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
            {{ $testimonyId ? 'Ubah Produk' : 'Buat Produk' }}</h1>

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
                <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Judul<label
                        class="text-[#FF0101]">*</label></h1>
                <input type="text" id="title" wire:model.defer="title"
                    class="bg-white border border-[#CACACA] text-[#A8A8A8] text-xs rounded-lg block w-full py-2.5 px-6"
                    placeholder="Masukkan judul testimoni" required>
                @error('title')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>




        </div>
        <div class="flex gap-5 items-center w-full mb-[30px]">
            <div class="w-full">
                <h1 class="text-[#272727] text-xs font-medium font-vietnam mb-[5px]">Upload Foto*</h1>
                <label for="file" class="w-full items-center justify-center">
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
                <h1 class="text-[8px] text-[#FF0101] font-vietnam">*maksimal 1 gambar, ukuran maksimum 2 MB</h1>
                <input type="file" id="file" name="file" class="hidden"
                    accept="image/png, image/jpeg, image/jpg" wire:model="image">

                <!-- Tambahkan pratinjau gambar di sini -->
                <div id="preview-container">
                    @if ($image)
                        <div class="preview-image-container">
                            <img src="{{ is_string($image) ? asset('storage/' . $image) : ($image instanceof \Livewire\TemporaryUploadedFile ? $image->temporaryUrl() : '') }}"
                                class="preview-image" alt="Preview Image">
                            <button class="delete-button">Hapus</button>
                        </div>
                    @endif



                </div>
                @error('image')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>

        </div>

        <div class="flex gap-5 justify-end">
            <a class="px-8 py-3 rounded-md text-[#861B43] bg-[#EEEEEE] hover:bg-[#EEEEEE]/50 text-sm"
                href="{{ route('dashboard.testimony.index') }}">Batal</a>

            <button class="px-8 py-3 rounded-md button text-sm text-white" wire:click="storeOrUpdateProduct">
                @if ($testimonyId)
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
            height: 150px;
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
        $(document).ready(function() {
            if (window.File && window.FileList && window.FileReader) {
                $("#files").on("change", function(e) {

                    var imageContainer = $("#preview-container"); // Kontainer untuk gambar

                    var f = files[0];
                    var fileReader = new FileReader();
                    fileReader.onload = function(e) {
                        $("<div class=\"preview-image-container\">" +
                            "<img class=\"preview-image\" src=\"" + e.target.result +
                            "\" title=\"" + f.name + "\"/>" +
                            "<button class=\"delete-button\">Hapus</button>" +
                            "</div>").appendTo(imageContainer);
                    };
                    fileReader.readAsDataURL(f);
                });

                $(document).on("click", ".delete-button", function() {
                    Livewire.emit('removePhoto');
                    $(this).parent(".preview-image-container").remove();
                });
            } else {
                alert("Browser Anda tidak mendukung File API");
            }
        });
    </script>
@endpush
