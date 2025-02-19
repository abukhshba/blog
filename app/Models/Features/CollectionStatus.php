<?php

namespace App\Models\Features;

use Sushi\Sushi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CollectionStatus extends Model
{
    use Sushi;

    public const NOT_COLLECTED = 1;
    public const COLLECTED = 2;
    public const CANCELED = 3;
    public const RECEIVED = 4;
    public function getRows(): array
    {
        return [
            [
                'name' => 'لم يتم التحصيل',
                'color' => 'warning',
                'icon' => 'heroicon-o-exclamation-circle',
            ],
            [
                'name' => 'تم التحصيل',
                'color' => 'success',
                'icon' => 'heroicon-o-check-circle',
            ],
            [
                'name' => 'تم الالغاء',
                'color' => 'danger',
                'icon' => 'heroicon-o-x-circle',
            ],
            [
                'name' => 'تم الاستلام',
                'color' => 'info',
                'icon' => 'heroicon-o-check-circle',
            ],
        ];
    }

}
