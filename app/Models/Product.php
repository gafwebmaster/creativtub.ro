<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'name',
    //     'description',
    //     'imahe',
    //     'price',
    //     'type'
    // ];
    protected $guarded = [];

    public $table = 'products';

    public function getPriceAttribute($value){
        $newForm = $value;
        return $newForm;
    }
}
