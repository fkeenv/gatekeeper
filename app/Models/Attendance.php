<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * @mixin IdeHelperAttendance
 */
class Attendance extends Pivot
{
    /** @use HasFactory<\Database\Factories\AttendanceFactory> */
    use HasFactory;

    /** @return BelongsTo<Service, $this> */
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    /** @return BelongsTo<Child, $this> */
    public function child(): BelongsTo
    {
        return $this->belongsTo(Child::class);
    }

    /** @return BelongsTo<Guardian, $this> */
    public function checkedInBy(): BelongsTo
    {
        return $this->belongsTo(Guardian::class, 'checked_in_by');
    }

    /** @return BelongsTo<Guardian, $this> */
    public function checkedOutBy(): BelongsTo
    {
        return $this->belongsTo(Guardian::class, 'checked_out_by');
    }
}
