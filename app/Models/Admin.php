<?php

namespace App\Models;


use App\Models\Resources\Event;

class Admin {

    public function getProdsCats() {
        return Event::where('id', '!=', 0)->get();
    }

}
