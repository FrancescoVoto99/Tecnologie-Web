<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {
    protected $table = 'events';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function getPrice($withDiscount = false) {
        $price = $this->prezzo;
        if (($this->sconto)!= null && true == $withDiscount) {
            $discount = ($price * $this->sconto) / 100;
            $price = round($price - $discount, 2);
        }
        return $price;
    }

    // Realazione One-To-One con Category
   // public function prodCat() {
        //attento etrarre relazione one to one slide 37
    //    return $this->hasOne(Category::class, 'catId', 'catId');
    //}

}
