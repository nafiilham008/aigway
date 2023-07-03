<?php

namespace App\Http\Livewire\Dashboard\Category\Component;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Category;

class CategoryDatatable extends DataTableComponent
{

    public $selectedCategory;

    protected $listeners = [
        'refreshDatatable' => '$refresh',
    ];

    protected $model = Category::class;

    public function configure(): void
    {
        $this->setAdditionalSelects(['categories.id as id']);
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
            // Column::make("Id", "id"),
            Column::make("Nama Kategori", "label")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
            Column::make('Action')->label(function ($model) {
                return view('dashboard.category.component.actions', ['selectCategory' => $model]);
            }),
        ];
    }

    public function refresh()
    {
        $this->setRefreshVisible();
    }

    public function editProduct($selectedCategory)
    {
        $this->selectedCategory = $selectedCategory;

        $this->emit('editCategory', $this->selectedCategory);
        $this->emit('modalOpen');

        // return redirect()->route('dashboard.product.detail', ['productId' => $this->selectedCategory]);
    }

    public function deleteCategory($categoryId)
    {
        $this->emit('deleteCategory', $categoryId);
    }

    public function deleteProductSelected()
    {
        // Cari produk berdasarkan ID
        foreach ($this->getSelected() as $item) {

            $category = Category::findOrFail($item);

            // Hapus produk
            $category->delete();
            
        }
        return redirect()->route('dashboard.category.index')->with('success', 'Berhasil menghapus kategori yang dipilih');
    }
}
