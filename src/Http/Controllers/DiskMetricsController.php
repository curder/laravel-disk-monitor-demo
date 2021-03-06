<?php
namespace Curder\DiskMonitor\Http\Controllers;

use Curder\DiskMonitor\Models\DiskMonitorEntry;

/**
 * Class DiskMetricsController
 *
 * @package \Curder\DiskMonitor\Http\Controllers
 */
class DiskMetricsController
{
    public function __invoke()
    {
        $entries = DiskMonitorEntry::latest()->get();

        return view('disk-monitor::entries', compact('entries'));
    }
}
