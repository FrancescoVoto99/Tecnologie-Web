<?php

namespace App\Models;


use App\Models\Event;

class Admin {

    public function getEvent() {
        return Event::where('id', '!=', 0)->get();
    }

}
