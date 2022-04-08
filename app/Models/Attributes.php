<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AttributesValues;

class Attributes extends Model
{
    use HasFactory;

    protected $table = 'attributes';

    public function values(){
        return $this->hasMany(
            AttributesValues::class,
            'attribute_id',
            'id'
        );
    }
}
