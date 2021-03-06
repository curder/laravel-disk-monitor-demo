<?php

namespace Curder\DiskMonitor;

use Curder\DiskMonitor\Commands\RecordDiskMetricsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DiskMonitorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-disk-monitor')
            ->hasConfigFile()
            ->hasRoute('disk-monitor')
            ->hasViews()
            ->hasMigration('create_disk_monitors_table')
            ->hasCommand(RecordDiskMetricsCommand::class);
    }
}
