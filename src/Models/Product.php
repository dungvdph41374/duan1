<?php

namespace Vujung\Duan1\Models;

use Vujung\Duan1\Model;

class Product extends Model {
    protected $table = 'products';
    protected $columns = [
        'category_id',
        'name',
        'price',
        'price_sale',
        'img',
        'description',
        'is_active',
    ];
}