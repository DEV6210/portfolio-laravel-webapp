<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'customer';
    protected $primaryKey = 'id';

    // mutator
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }

    // accesssor
    public function getNameAttribute($value)
    {
        return 'user-' . $value;
    }
}
