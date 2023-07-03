<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Product;
use Google_Client;
use Livewire\Component;

class ChartComponent extends Component
{
    public function render()
    {
        $products = Product::with('category')->get();

        $label = $products->pluck('name')->toArray();

        $chartData = [
            'label' => $label,
            'product' => $products,
        ];

        return view('dashboard.chart-component', compact('chartData'));
    }

    // public function getVisitsFromGoogleAnalytics()
    // {
    //     $client = new Google_Client();
    //     $client->setApplicationName('aigway-master');
    //     $client->setAuthConfig('/storage/app/analytics/service-account-credentials.json');
    //     $client->setScopes([Google_Service_Analytics::ANALYTICS_READONLY]);
    //     $analytics = new Google_Service_Analytics($client);

    //     $profileId = 'G-S8H94F5F56'; // Ganti dengan ID profil Google Analytics Anda

    //     $results = $analytics->data_ga->get(
    //         $profileId,
    //         '30daysAgo', // Tanggal mulai
    //         'today', // Tanggal akhir
    //         'ga:sessions', // Metrik yang ingin Anda ambil (misalnya, jumlah sesi)
    //         [
    //             'dimensions' => 'ga:productName', // Dimensi yang ingin Anda ambil (misalnya, nama produk)
    //             'sort' => '-ga:sessions', // Mengurutkan berdasarkan sesi terbanyak
    //             'filters' => 'ga:productName!=(not set)', // Filter produk yang tidak diketahui
    //             'max-results' => 10, // Jumlah produk teratas yang ingin Anda ambil
    //         ]
    //     );

    //     $labels = [];
    //     $data = [];

    //     foreach ($results->getRows() as $row) {
    //         $labels[] = $row[0]; // Nama produk
    //         $data[] = $row[1]; // Jumlah sesi
    //     }

    //     $chartData = [
    //         'labels' => $labels,
    //         'data' => $data,
    //     ];

    //     return $chartData;
    // }
}
