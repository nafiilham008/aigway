<div>
    @if (session()->has('success'))
        <div id="add-product-success" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-xl h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <div
                        class="bg-white rounded-lg shadow w-full text-center flex flex-col justify-center px-10 py-14 h-max">
                        <div class="flex justify-center">
                            <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M43 73L78.25 37.75L71.25 30.75L43 59L28.75 44.75L21.75 51.75L43 73ZM50 100C43.0833 100 36.5833 98.6867 30.5 96.06C24.4167 93.4333 19.125 89.8717 14.625 85.375C10.125 80.875 6.56333 75.5833 3.94 69.5C1.31667 63.4167 0.00333333 56.9167 0 50C0 43.0833 1.31333 36.5833 3.94 30.5C6.56667 24.4167 10.1283 19.125 14.625 14.625C19.125 10.125 24.4167 6.56333 30.5 3.94C36.5833 1.31667 43.0833 0.00333333 50 0C56.9167 0 63.4167 1.31333 69.5 3.94C75.5833 6.56667 80.875 10.1283 85.375 14.625C89.875 19.125 93.4383 24.4167 96.065 30.5C98.6917 36.5833 100.003 43.0833 100 50C100 56.9167 98.6867 63.4167 96.06 69.5C93.4333 75.5833 89.8717 80.875 85.375 85.375C80.875 89.875 75.5833 93.4383 69.5 96.065C63.4167 98.6917 56.9167 100.003 50 100ZM50 90C61.1667 90 70.625 86.125 78.375 78.375C86.125 70.625 90 61.1667 90 50C90 38.8333 86.125 29.375 78.375 21.625C70.625 13.875 61.1667 10 50 10C38.8333 10 29.375 13.875 21.625 21.625C13.875 29.375 10 38.8333 10 50C10 61.1667 13.875 70.625 21.625 78.375C29.375 86.125 38.8333 90 50 90Z"
                                    fill="#861B43" />
                            </svg>
                        </div>

                        <h1 class="text-lg py-5 text-black font-vietnam font-medium">{!! session('success') !!}
                        </h1>

                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
