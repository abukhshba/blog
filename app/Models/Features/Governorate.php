<?php

namespace App\Models\Features;

use Sushi\Sushi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Governorate extends Model
{
    use Sushi;

    public function getRows(): array
    {
        return [
            [
                'name' => 'القاهرة',
            ],
            [
                'name' => 'الجيزة',
            ],
            [
                'name' => 'الاسكندرية',
            ],
            [
                'name' => 'مرسى مطروح',
            ],
            [
                'name' => 'البحيرة',
            ],
            [
                'name' => 'كفر الشيخ',
            ],
            [
                'name' => 'دمياط',
            ],
            [
                'name' => 'بورسعيد',
            ],
            [
                'name' => 'الاسماعلية',
            ],
            [
                'name' => 'السويس',
            ],
            [
                'name' => 'شمال سيناء',
            ],
            [
                'name' => 'جنوب سيناء',
            ],
            [
                'name' => 'البحر الاحمر',
            ],
            [
                'name' => 'الغربية',
            ],
            [
                'name' => 'الدقهلية',
            ],
            [
                'name' => 'الشرقية',
            ],
            [
                'name' => 'المنوفية',
            ],
            [
                'name' => 'القليوبية',
            ],
            [
                'name' => 'الفيوم',
            ],
            [
                'name' => 'بنى سويف',
            ],
            [
                'name' => 'اسيوط',
            ],
            [
                'name' => 'الوادى الجديد',
            ],
            [
                'name' => 'المنيا',
            ],
            [
                'name' => 'قنا',
            ],
            [
                'name' => 'سوهاج',
            ],
            [
                'name' => 'الاقصر',
            ],
            [
                'name' => 'أسوان',
            ],
        ];
    }

}
