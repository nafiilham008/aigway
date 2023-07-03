<?php

namespace App\Http\Livewire\Dashboard\Reseller\Component;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Reseller;
use Livewire\Livewire;

class ResellerDatatable extends DataTableComponent
{
    protected $model = Reseller::class;

    // public $selectedReseller;


    public function configure(): void
    {
        $this->setAdditionalSelects(['resellers.id as id']);
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
            Column::make("Nama Reseller", "name")
                ->sortable()
                ->searchable(),
            Column::make("Kota", "city")
                ->sortable()
                ->searchable(),
            Column::make("Nomer HP", "phone")
                ->sortable()
                ->searchable(),
            Column::make("Ditambahkan pada", "created_at")
                ->sortable(),
            Column::make('Action')->label(function ($model) {
                return view('dashboard.reseller.component.actions', ['selectedReseller' => $model]);
            }),
        ];
    }

    public function detailReseller($selectedReseller)
    {
        return redirect()->route('dashboard.reseller.detail', ['resellerId' => $selectedReseller]);
    }

    public function editReseller($selectedReseller)
    {
        $this->emit('editReseller', $selectedReseller);
    }

    public function deleteReseller($selectedReseller)
    {
        // Cari produk berdasarkan ID
        $Reseller = Reseller::findOrFail($selectedReseller);

        // Hapus produk
        $Reseller->delete();


        // Redirect ke halaman sukses
        return redirect()->route('dashboard.reseller.index')->with('success', 'Produk berhasil dihapus.');
    }

    public function deleteProductSelected()
    {
        // Cari produk berdasarkan ID
        foreach ($this->getSelected() as $item) {
            $Reseller = Reseller::findOrFail($item);

            // Hapus produk
            $Reseller->delete();
        }
        // Redirect ke halaman sukses
        return redirect()->route('dashboard.reseller.index')->with('success', 'Produk terpilih berhasil dihapus.');
    }
}
