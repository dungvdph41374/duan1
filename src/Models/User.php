<?php

namespace Vujung\Duan1\Models;

use Vujung\Duan1\Model;

class User extends Model {
    protected $table = 'users';
    protected $columns = [
        'name',
        'email',
        'address',
        'password',
    ];
}