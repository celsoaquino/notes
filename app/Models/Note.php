<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{
    use softDeletes;
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
