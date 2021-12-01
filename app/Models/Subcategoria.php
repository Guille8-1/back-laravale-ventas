<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategoria extends Model
{
    use HasFactory;
    public function categoria()
    {
        return $this->belongsTo(categoria::class);
    }
}
