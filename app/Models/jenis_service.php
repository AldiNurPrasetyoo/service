<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class jenis_service extends Model
{
    use HasFactory;

    protected $fillable =[
        'jenis_service',
        'keterangan',
    ];

    public function jenis_service():HasMany{
        return $this->hasMany(jenis_service::class);
    }
}
