<?php

namespace App\Http\Livewire\Dashboard\Product\Component;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductDatatable extends DataTableComponent
{
    protected $model = Product::class;
    protected $listeners = [
        'deleteProduct' => 'deleteProduct',
    ];

    public $selectedProduct;
    public $selectedItems = [];



    public function configure(): void
    {
        $this->setAdditionalSelects(['products.id as id']);
        $this->setPrimaryKey('id');

        $this->setEmptyMessage('Data belum tersedia');

        $this->setPaginationEnabled();
        $this->setPaginationMethod('simple');
        $this->setPaginationStatus(true);
        $this->setPerPageAccepted([3, 5, 10, 25, 50]);
    }

    public function bulkActions(): array
    {
        $actions = [
            'deleteProductSelected' => 'Delete',
        ];

        return $actions;
    }


    public function columns(): array
    {
        return [
            Column::make("Nama", "name")
                ->sortable()
                ->searchable(),
            Column::make("Harga Produk", "price")
                ->sortable()
                ->searchable()
                ->format(function ($value) {
                    return $value ? "IDR. " . number_format($value, 0, ',', '.') : " - ";
                }),
            Column::make("Kategori", "category.label")
                ->sortable()
                ->searchable()
                ->format(function ($value) {
                    return $value !== null ? $value : " - ";
                }),
            Column::make("Di Unggah Pada", "created_at")
                ->sortable()
                ->searchable(),
            Column::make('Action')->label(function ($model) {
                return view('dashboard.product.component.actions', ['selectedProduct' => $model]);
            }),
        ];
    }

    public function detailProduct($selectedProduct)
    {
        $this->selectedProduct = $selectedProduct;

        return redirect()->route('dashboard.product.detail', ['productId' => $this->selectedProduct]);
    }

    public function editProduct($selectedProduct)
    {
        $this->selectedProduct = $selectedProduct;

        return redirect()->route('dashboard.product.edit', ['productId' => $this->selectedProduct]);
    }

    public function deleteProduct($productId)
    {
        // Cari produk berdasarkan ID
        $product = Product::findOrFail($productId);

        // Hapus foto terkait produk jika ada
        if (!empty($product->photo)) {
            $photos = json_decode($product->photo);
            foreach ($photos as $photo) {
                Storage::disk('public')->delete($photo);
            }
        }

        // Hapus produk
        $product->delete();


        // Redirect ke halaman sukses
        return redirect()->route('dashboard.product.index')->with('success', 'Produk berhasil dihapus.');
    }

    public function deleteProductSelected()
    {

        foreach ($this->getSelected() as $item) {
            // These are strings since they came from an HTML element
            $product = Product::findOrFail($item);
            $product->delete();

            // Hapus foto terkait produk jika ada
            if (!empty($product->photo)) {
                $photos = json_decode($product->photo);
                foreach ($photos as $photo) {
                    Storage::disk('public')->delete($photo);
                }
            }
        }

        // Redirect ke halaman sukses
        return redirect()->route('dashboard.product.index')->with('success', 'Produk terpilih berhasil dihapus.');
    }
}
