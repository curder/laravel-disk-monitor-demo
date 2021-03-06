<?php
namespace Curder\DiskMonitor\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DiskMonitorEntry
 *
 * @property string disk_name
 * @property int file_count
 *
 * @package \Curder\DiskMonitor\Models
 */
class DiskMonitorEntry extends Model
{
    public $guarded = [];

    /**
     * @return static|null
     */
    public static function last(): ?self
    {
        return static::orderByDesc('id')->first();
    }
}
