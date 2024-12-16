<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Experience;

class ExperienceTask extends Model
{
    protected $guarded = [];
    
    public function experience(): BelongsTo
    {
        return $this->belongsTo(Experience::class, 'experience_id', 'id');
    }
    
}
