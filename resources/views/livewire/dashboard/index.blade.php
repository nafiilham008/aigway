<div :class="{ 'ml-56': sidebarOpen, 'ml-0': !sidebarOpen }"
    class="flex-col w-full ml-56 transition-all duration-300 md:flex md:flex-col min-h-screen p-20 bg-[#FFF3F3]">

    <h1 class="text-2xl font-vietnam font-semibold ">Analisis</h1>
    <h1 class="text-sm font-vietnam font-medium text-center">Paling Banyak Dilihat</h1>
    <div class="mt-10 grid grid-cols-12">
        {{-- Chart --}}
        <livewire:dashboard.chart-component>
            <div class="col-span-3 space-y-5">
                <div class="pr-2 w-full  bg-[#BA2B60] rounded-lg shadow-md">
                    <div class="flex py-3 w-full h-full px-4 bg-white rounded-lg justify-between">
                        <div class="my-auto">
                            <p class="font-vietnam text-lg font-medium text-start text-[#272727]">Ketegori</p>
                            <p class="text-[36px] font-vietnam font-semi-bold text-start text-[#272727]">
                                {{ $category->count() }}</p>
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
                            <p class="text-[36px] font-vietnam font-semi-bold text-start text-[#272727]">
                                {{ $product->count() }}</p>
                        </div>
                        <div class="my-auto">
                            <img src="../assets/images/widget-product.svg" alt="">

                        </div>
                    </div>
                </div>
                <div class="pr-2 w-full  bg-[#BA2B60] rounded-lg shadow-md">
                    <div class="flex py-3 w-full h-full px-4 bg-white rounded-lg justify-between">
                        <div class="my-auto">
                            <p class="font-vietnam text-lg font-medium text-start text-[#272727]">Reseller</p>
                            <p class="text-[36px] font-vietnam font-semi-bold text-start text-[#272727]">
                                {{ $reseller->count() }}</p>
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
        <livewire:dashboard.product.component.product-datatable />
    </div>
</div>

@push('css')
@endpush

