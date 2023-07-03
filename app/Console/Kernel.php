<?php

namespace App\Console;

use App\Models\Banner;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            // Mendapatkan semua banner yang berada di rentang waktu saat ini
            $banners = Banner::all();
            if ($banners) {
                # code...
                foreach ($banners as $banner) {
                    if ($banner->start_date <= now() && $banner->end_date >= now()) {
                        $banner->status = true;
                        $banner->status_change_at = now();
                    } elseif ($banner->start_date > now()) {
                        $banner->status = false;
                        $banner->status_change_at = null;
                    } else {
                        $banner->status = false;
                        $banner->status_change_at = null;
                    }
                    // if ($banner->start_date <= now() && $banner->end_date >= now()) {
                    //     $banner->status = true; 
                    //     $banner->status_change_at = now(); 
                    // } else {
                    //     $banner->status = false;
                    //     $banner->status_change_at = now(); 
                    // }

                    $banner->save();
                }
            }
        })->everyMinute();
    }

    // protected function schedule(Schedule $schedule)
    // {
    //     $schedule->call(function () {
    //         // Get the current active banner
    //         $activeBanner = Banner::where('status', true)->first();

    //         // Get the next banner to activate
    //         $nextBanner = Banner::where('status', false)
    //             ->where('start_date', '<=', now())
    //             ->where('end_date', '>=', now())
    //             ->orderBy('start_date')
    //             ->first();

    //         if ($activeBanner && $nextBanner) {
    //             // Deactivate the current active banner
    //             $activeBanner->status = false;
    //             $activeBanner->status_change_at = now();
    //             $activeBanner->save();
    //         }

    //         if ($nextBanner) {
    //             // Activate the next banner
    //             $nextBanner->status = true;
    //             $nextBanner->status_change_at = now();
    //             $nextBanner->save();
    //         }
    //     })->everyMinute();
    // }





    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
