<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class VariationTypeOption extends Model implements HasMedia
{   
    public $timestamps = false;
    use InteractsWithMedia;
    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
        ->width(100);
        $this->addMediaConversion('small')
        ->width(480);
        $this->addMediaConversion('large')
        ->width(1200);
    }
}
