<?php

namespace App\Http\Livewire\Dashboard\Testimony\Component;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Testimony;
use Illuminate\Support\Facades\Storage;

class TestimonyDatatable extends DataTableComponent
{
    protected $model = Testimony::class;

    public $selectedTestimony;


    public function configure(): void
    {
        $this->setAdditionalSelects(['testimonies.id as id']);
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
            Column::make("Judul", "title")
                ->sortable(),
            Column::make("Ditambahkan pada", "created_at")
                ->sortable(),
            Column::make('Action')->label(function ($model) {
                return view('dashboard.testimony.component.actions', ['selectedTestimony' => $model]);
            }),
        ];
    }

    public function detailTestimony($selectedTestimony)
    {
        $this->selectedTestimony = $selectedTestimony;

        // return redirect()->route('dashboard.testimony.detail', ['testimonyId' => $this->selectedTestimony]);
    }

    public function editTestimony($selectedTestimony)
    {
        $this->selectedTestimony = $selectedTestimony;

        return redirect()->route('dashboard.testimony.edit', ['testimonyId' => $this->selectedTestimony]);
    }

    public function deleteTestimony($testimonyId)
    {
        // Cari produk berdasarkan ID
        $testimony = Testimony::findOrFail($testimonyId);

        // Hapus foto terkait produk jika ada
        if (!empty($testimony->image)) {
            Storage::disk('public')->delete($testimony->image);
        }

        // Hapus produk
        $testimony->delete();


        // Redirect ke halaman sukses
        return redirect()->route('dashboard.testimony.index')->with('success', 'Produk berhasil dihapus.');
    }

    public function deleteProductSelected()
    {
        // Cari produk berdasarkan ID
        foreach ($this->getSelected() as $item) {
            $testimony = Testimony::findOrFail($item);

            // Hapus foto terkait produk jika ada
            if (!empty($testimony->image)) {
                Storage::disk('public')->delete($testimony->image);
            }

            // Hapus produk
            $testimony->delete();
        }

        // Redirect ke halaman sukses
        return redirect()->route('dashboard.testimony.index')->with('success', 'Produk berhasil dihapus.');
    }
}
