<?php

namespace App\Http\Livewire\Dashboard\Category;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Index extends Component
{

    public $categoryId;
    public $label, $categoryCount;
    public $success, $errorMessage;
    public $resetLabel = false;
    public $error = [];


    protected $listeners = [
        'categoryDataUpdated' => 'storeOrEditCategory',
        'editCategory' => 'getDataCategory',
        'deleteCategory' => 'deleteCategory',
        'reset' => 'resetAll'
    ];


    public function mount()
    {
        $this->categoryCount = Category::all()->count();
    }

    public function closeModal()
    {
        session()->forget('success');
    }

    public function getDataCategory($categoryId = null)
    {
        $this->categoryId = $categoryId;
        $this->success = false;

        if ($this->categoryId) {
            $this->loadCategoryData();
        }
    }

    public function loadCategoryData()
    {
        $category = Category::findOrFail($this->categoryId);
        $this->emit('loadCategoryData', $category);
    }

    public function render()
    {
        $breadcrumb = $this->breadcrumb();

        return view('dashboard.category.index', compact('breadcrumb'))
            ->layout('layouts.dashboard.app')
            ->layoutData([
                'title' => 'Daftar Kategori',
                'breadcrumb' => $breadcrumb,
            ]);
    }

    public function breadcrumb()
    {
        return [
            [
                'label' => 'Dashboard',
                'link' => route('dashboard.index'),
            ],
            [
                'label' => 'Kategori',
            ]
        ];
    }

    public function resetAll()
    {
        // Memanggil fungsi reset pada state komponen Livewire
        // parent::reset();

        // Menghapus data inisialisasi atau mengatur ulang nilai properti yang digunakan untuk inisialisasi
        $this->label = null;
        $this->categoryId = null;
        $this->success = false;
        $this->resetLabel = true;
        $this->error = [];
        $this->resetValidation();
        $this->resetErrorBag();
    }


    public function storeOrEditCategory($data = null, $label)
    {
        try {
            if ($data) {
                $this->categoryId = $data['id'];
            }

            $this->label = $label;

            // dd($this->categoryId);

            $rules = [
                'label' => 'required|string',
            ];

            $messages = [
                'label.required' => 'Kolom kategori harus diisi.',
            ];


            // Buat validator
            $validator = Validator::make($this->all(), $rules, $messages);


            // Lakukan validasi
            if ($validator->fails()) {
                $errors = $validator->errors()->toArray();

                // Tambahkan pesan error ke dalam variabel error di komponen, jika perlu
                foreach ($errors as $field => $fieldErrors) {
                    foreach ($fieldErrors as $error) {
                        $this->addError($field, $error);
                    }
                }
                $error = $errors;
                // $this->errorMessage = 'Terjadi kesalahan validasi.';
            }
            $currentTime = Carbon::now('Asia/Jakarta');
            if ($this->categoryId) {

                // Mode edit, perbarui Kategori yang ada
                $category = Category::findOrFail($this->categoryId);

                // Perbarui data Kategori
                $category->label = $this->label;
                $category->updated_at = $currentTime;

                // Simpan perubahan Kategori

                $category->save();
            } else {
                // Mode create, buat Kategori baru
                $category = new Category();

                // Set data Kategori
                $category->label = $this->label;
                $category->created_at = $currentTime;
                $category->updated_at = $currentTime;

                // Simpan Kategori baru
                $category->save();
            }

            // $this->reset();
            if ($category) {

                $this->success = true;
                $this->emit('refreshDatatable');
                $this->emit('refreshLabel');


                $this->resetValidation();

                $this->resetAll();
                session()->flash('success', $data ? 'Berhasil edit kategori' : 'Berhasil menambahkan kategori');
            } else {
                // Redirect ke halaman error
                session()->flash('error', 'Gagal menambahkan Kategori.');
                $this->resetValidation();

                $this->resetAll();
                // return redirect()->back();
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function deleteCategory($categoryId)
    {
        // Cari produk berdasarkan ID
        $category = Category::findOrFail($categoryId);

        // Hapus produk
        $category->delete();
        $this->resetAll();

        $this->emit('refreshDatatable');
        $this->emit('refreshLabel');

        session()->flash('success', 'Berhasil menghapus kategori');
    }
}
