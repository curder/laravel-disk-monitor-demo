<?php

namespace Curder\DiskMonitor;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Curder\DiskMonitor\DiskMonitor
 */
class DiskMonitorFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-disk-monitor';
    }
}
