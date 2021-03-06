<?php

namespace Curder\DiskMonitor\Commands;

use Curder\DiskMonitor\Models\DiskMonitorEntry;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class RecordDiskMetricsCommand extends Command
{
    public $signature = 'disk-monitor:record-metrics';

    public $description = 'Record the metrics of disk';

    public function handle()
    {
        $this->comment('Recording metrics...');

        $disk_name = config('disk-monitor.disk_name');
        $file_count = count(Storage::disk($disk_name)->allFiles());

        DiskMonitorEntry::create([
            'disk_name' => $disk_name,
            'file_count' => $file_count,
        ]);

        $this->comment('All done');
    }
}
