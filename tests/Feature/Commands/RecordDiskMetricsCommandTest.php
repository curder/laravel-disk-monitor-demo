<?php
namespace Curder\DiskMonitor\Tests\Feature\Commands;

use Curder\DiskMonitor\Commands\RecordDiskMetricsCommand;
use Curder\DiskMonitor\Models\DiskMonitorEntry;
use Curder\DiskMonitor\Tests\TestCase;
use Illuminate\Support\Facades\Storage;

/**
 * Class RecordDiskMetricsCommandTest
 *
 * @package Curder\DiskMonitor\Tests\Feature\Commands
 */
class RecordDiskMetricsCommandTest extends TestCase
{
    public function setUp() : void
    {
        parent::setUp();

        Storage::fake('local');
    }

    /** @test */
     public function it_will_record_the_file_count_for_a_disk(): void
     {
         $this->artisan(RecordDiskMetricsCommand::class)->assertExitCode(0);
         $entry = DiskMonitorEntry::last();
         self::assertEquals(0, $entry->file_count);

         Storage::disk('local')->put('test.md', '# test');
         $this->artisan(RecordDiskMetricsCommand::class)->assertExitCode(0);
         $entry = DiskMonitorEntry::last();
         self::assertEquals(1, $entry->file_count);
     }
}
