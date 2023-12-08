<?php

namespace App\Console;

use App\Jobs\ContenuInfoFile;
use App\Jobs\ContenuInfoLatest;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->job(new ContenuInfoFile)->weekly();
        $schedule->job(new ContenuInfoLatest)->monthly();
        $schedule->command('backup:clean')->weekly()->at('01:00');
        $schedule->command('backup:run')->weekly()->at('01:30');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
