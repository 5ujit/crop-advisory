<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Console\Commands\ExportSQLiteData;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        ExportSQLiteData::class,
    ];

    protected function schedule(Schedule $schedule): void
    {
        // Scheduled tasks
    }

    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');
    }
}
