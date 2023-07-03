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
            <h1 class="text-[26px] text-black font-bold font-vietnam text-center mb-[5px]">Welcome Back!</h1>
            <h1 class="text-xs text-[#737373] font-vietnam text-center">Please enter your login detail bellow</h1>

            <div class="px-[133px] mt-[53px]">
                @if (session()->has('error'))
                    <div class="alert alert-danger text-red-600 text-center mb-5 font-semibold">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session()->has('success'))
                    <div class="alert alert-success text-pink-600 text-center mb-5 font-semibold">
                        {{ session('success') }}
                    </div>
                @endif
                <form wire:submit.prevent="login">
                    <div class="relative">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-[#272727] font-vietnam">Email</label>
                        <input wire:model="email" type="text" name="email" id="email" :value="old('email')"
                            class="bg-transparent border border-[#272727] text-[#A8A8A8] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-3 px-[22px] placeholder-[#A8A8A8]"
                            placeholder="Enter Email" required>
                    </div>
                    <div class="relative mt-2.5">
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-[#272727] font-vietnam">Password</label>
                        <div class="relative">
                            <input wire:model="password" id="password" type="password" name="password" id="password"
                                class="bg-transparent border border-[#272727] text-[#A8A8A8] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-3 px-[22px] placeholder-[#A8A8A8]"
                                placeholder="Enter Password" autocomplete="current-password" required>
                            <div class="flex absolute top-4 right-3 items-center pr-3 text-gray-600 cursor-pointer">
                                <iconify-icon id="toggler1" icon="bxs:show"></iconify-icon>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-2.5">
                        <div class="flex items-center">
                            <input wire:model="remember" id="checkbox" type="checkbox"
                                class="form-checkbox border-2 checked:bg-pink-400 border-[#737373] w-5 h-5 mr-2">
                            <label for="checkbox" class="text-xs font-vietnam text-[#737373] font-medium">Keep me logged
                                in
                            </label>
                        </div>
                        <a href="/forgot" class="text-[#BA2B60] text-sm font-medium font-vietnam">Forgot password?</a>
                    </div>
                    <button type="submit" class="login-button font-vietnam font-medium mt-[30px]">Sign in</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script>
        var password = document.getElementById('password');
        var toggler1 = document.getElementById('toggler1')
        showHidePassword = (input, toggler) => {
            if (input.type === 'password') {
                input.setAttribute('type', 'text');
                toggler.removeAttribute('icon');
                toggler.setAttribute('icon', 'bxs:hide');
            } else {
                toggler.removeAttribute('icon');
                toggler.setAttribute('icon', 'bxs:show');
                input.setAttribute('type', 'password');
            }
        };
        toggler1.addEventListener('click', () => showHidePassword(password, toggler1));
    </script>
</div>
