<?php

namespace Vujung\Duan1\Models;

use Vujung\Duan1\Model;

class Category extends Model {
    protected $table = 'categories';
    protected $columns = [
        'name',
    ];
}