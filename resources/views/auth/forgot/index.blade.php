<div>
    <div class="grid grid-cols-12 bg-[#FFF3F3] h-screen">
        <div class="col-span-6">
            <div class="relative">
                <img src="../assets/images/bg-login.png" alt="" class="w-full h-screen">
                <div class="absolute top-36 left-20">
                    <h1 class="font-inter font-semibold text-[48px] mb-[30px]">Aigway Skincare</h1>
                    <h1 class="text-lg font-vietnam font-medium text-[#272727]/90 w-3/5">Kami membuat perawatan kulit ini
                        untuk
                        anda dengan cinta. Produk kami menggunakan bahan alami & teknologi modern</h1>
                </div>
            </div>
        </div>
        <div class="col-span-6 flex flex-col justify-center w-full">
            <h1 class="text-[26px] text-black font-bold font-vietnam text-center mb-[5px]">Forgot Password?</h1>
            <h1 class="text-xs text-[#737373] font-vietnam text-center">No worries, we’ll send you reset instructions.
            </h1>

            <div class="px-[133px] mt-[53px]">
                @if (session()->has('error'))
                    <div class="alert alert-danger text-red-600 text-center mb-5 font-semibold">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="relative">
                    <label for="email"
                        class="block mb-2 text-sm font-medium text-[#272727] font-vietnam">Email</label>
                    <input type="email" email="email" id="email" wire:model="recipientEmail"
                        class="bg-transparent border border-[#272727] text-[#A8A8A8] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-3 px-[22px] placeholder-[#A8A8A8]"
                        placeholder="Enter email" required>
                </div>
                <button wire:click='sendEmail' class="login-button font-vietnam font-medium mt-[30px]">Reset</button>
            </div>
        </div>
    </div>
    @if (session()->has('success'))
        <x-modal.modal-notification />
    @endif
</div>
