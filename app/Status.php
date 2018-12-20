<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function events() {
        return $this->hasOn('App\Event');
    }
}
