<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    /** @use HasFactory<\Database\Factories\ReportFactory> */
    use HasFactory;

    protected $fillable = [
        'reporter_id',
        'reported_user_id',
        'reason',
        'status'
    ];

    public function reporter()
    {
        return $this->belongsTo(Vehicle::class, 'reporter_id');
    }

    public function reportedUser()
    {
        return $this->belongsTo(Vehicle::class, 'reported_user_id');
    }
}
