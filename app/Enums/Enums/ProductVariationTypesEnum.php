<?php

namespace App\Enums\Enums;

enum ProductVariationTypesEnum : string
{
    case Select = 'Select';
    case Radio = 'Radio';
    case image = 'Image';

    public static function labels(): array
    {
        return [
            self::Select->value => __('Select'),
            self::Radio->value => __('Radio'),
            self::image->value => __('image'),
        ];
    }
}
