<?php
namespace Curder\DiskMonitor\Tests\Feature\Http\Controllers;

use Curder\DiskMonitor\Tests\TestCase;

class DiskMetricsControllerTest extends TestCase
{
    /** @test */
    public function it_can_display_the_list_of_entries(): void
    {
        $this->get('disk-monitor')
            ->assertOk();
    }
}
