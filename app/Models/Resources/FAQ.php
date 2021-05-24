<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model {
    protected $table = 'faq';
    protected $primaryKey = 'id';
    public $timestamps = false;

    // Realazione One-To-One con Category
   // public function prodCat() {
        //attento etrarre relazione one to one slide 37
    //    return $this->hasOne(Category::class, 'catId', 'catId');
    //}

}

