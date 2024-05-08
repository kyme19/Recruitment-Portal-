<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'position',
        'job_group',
        'no_of_posts',
        'job_ref',
        'terms_of_service',
        'status',
    ];

    /**
     * Get the duties for the job.
     */
    public function duties()
    {
        return $this->hasMany(JobDuty::class);
    }

    /**
     * Get the requirements for the job.
     */
    public function requirements()
    {
        return $this->hasMany(JobRequirement::class);
    }
}