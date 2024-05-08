<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobDuty extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['job_id', 'duty'];

    /**
     * Get the job that owns the duty.
     */
    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}