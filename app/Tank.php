<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tank extends Model
{
    public function photos()
    {
        return $this->hasMany(UploadTank::class);
    }
}
