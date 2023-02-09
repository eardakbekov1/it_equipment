<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{

    protected $fillable = ['id', 'name'];
    public function device_models()
    {
        return $this->hasMany(Device_model::class);
    }
}
