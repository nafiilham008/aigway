<?php

namespace App\Http\Livewire\Dashboard\Banner\Component;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class BannerDatatable extends DataTableComponent
{
    protected $model = Banner::class;

    public $selectedBanner;


    public function configure(): void
    {
        $this->setAdditionalSelects(['banners.id as id']);
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
            // Column::make("Id", "id")
            //     ->sortable(),
            Column::make("Judul Banner", "name")
                ->sortable()
                ->searchable(),
            Column::make("Jadwal Mulai", "start_date")
                ->sortable()
                ->searchable(),
            Column::make("Jadwal Selesai", "end_date")
                ->sortable()
                ->searchable(),
            Column::make("Status", "status")->sortable()->searchable()->format(function ($value, $model) {
                return $value ? "Ditampilkan" : "Disembunyikan";
            })
                ->searchable(),
            Column::make('Action')->label(function ($model) {
                return view('dashboard.banner.component.actions', ['selectedBanner' => $model]);
            }),
        ];
    }

    public function detailBanner($selectedBanner)
    {
        $this->selectedBanner = $selectedBanner;

        // return redirect()->route('dashboard.Banner.detail', ['BannerId' => $this->selectedBanner]);
    }

    public function editBanner($selectedBanner)
    {
        $this->selectedBanner = $selectedBanner;

        return redirect()->route('dashboard.banner.edit', ['bannerId' => $this->selectedBanner]);
    }

    public function deleteBanner($bannerId)
    {
        // Cari Banner berdasarkan ID
        $banner = Banner::findOrFail($bannerId);

        // Hapus foto terkait Banner jika ada
        if (!empty($banner->image)) {
            Storage::disk('public')->delete($banner->image);
        }

        // Hapus Banner
        $banner->delete();


        // Redirect ke halaman sukses
        return redirect()->route('dashboard.banner.index')->with('success', 'Banner berhasil dihapus.');
    }

    public function deleteProductSelected()
    {
        foreach ($this->getSelected() as $item) {

            $banner = Banner::findOrFail($item);

            // Hapus foto terkait Banner jika ada
            if (!empty($banner->image)) {
                Storage::disk('public')->delete($banner->image);
            }

            // Hapus Banner
            $banner->delete();
        }


        // Redirect ke halaman sukses
        return redirect()->route('dashboard.banner.index')->with('success', 'Banner berhasil dihapus.');
    }
}
