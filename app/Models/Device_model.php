<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device_model extends Model
{

    protected $fillable = ['id', 'name', 'manufacturer_id'];
    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }
}
