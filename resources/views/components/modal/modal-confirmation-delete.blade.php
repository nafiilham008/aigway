<div x-data="{ showModal: {{ session()->has('success') ? 'true' : 'false' }} }" x-cloak>
    <template x-if="showModal">
        <div class="relative bg-white rounded-lg shadow">
            <div
                class="bg-white rounded-lg shadow w-full text-center flex flex-col justify-center px-10 py-14 h-max">
                <div class="mb-10">
                    <h1 class="text-lg text-[#272727] font-vietnam font-medium mb-2">Apakah anda yakin ingin menghapus file ini ?</h1>
                    <h1 class="text-xs text-[#A8A8A8] font-vietnam ">File tidak bisa dipulihkan setelah anda menghapusnya.</h1>
                </div>
                <div class="flex gap-5 justify-end">
                    <button data-modal-toggle="delete-file" class="px-8 py-2 rounded-md text-[#861B43] bg-[#EEEEEE] hover:bg-[#EEEEEE]/50 text-sm">
                        Batal
                    </button>
        
                    <button class="px-8 py-2 rounded-md button text-sm text-white">Hapus</button>
                </div>
            </div>
        </div>
    </template>
</div>