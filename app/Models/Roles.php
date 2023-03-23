<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Roles extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_documen'
    ];


    public function users(): HasOne
    {
        return $this->hasOne(User::class);
    }

}
