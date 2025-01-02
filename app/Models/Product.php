<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{   use InteractsWithMedia;
    public function department(): BelongsTo {
        return $this->belongsTo(Department::class);
    }

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }
}
