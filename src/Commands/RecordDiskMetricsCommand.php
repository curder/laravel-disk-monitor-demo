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
        collect(config('disk-monitor.disk_names'))
            ->each(fn($disk_name) => $this->recordMetrics($disk_name) );

        $this->comment('All done');
    }

    protected function recordMetrics(string $disk_name): void
    {
        $this->comment("Recording metrics for disk `{$disk_name}` ...");

        $disk = Storage::disk($disk_name);

        $file_count = count($disk->allFiles());

        DiskMonitorEntry::create([
            'disk_name' => $disk_name,
            'file_count' => $file_count,
        ]);

    }
}
