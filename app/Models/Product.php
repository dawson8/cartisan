<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use NumberFormatter;

class Product extends Model
{
    use HasFactory;

    public function formatPrice()
    {
        $fmt = new NumberFormatter( app()->getLocale(), NumberFormatter::CURRENCY );
        return $fmt->formatCurrency($this->price, config('app.currency'));
    }
}
