<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ExperienceTask;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Experience extends Model
{
    protected $guarded = [];
    
    public function experience_task(): HasMany
    {
        return $this->hasMany(ExperienceTask::class, 'experience_id', 'id');
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
