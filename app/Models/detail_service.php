<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class detail_service extends Model
{
    use HasFactory;

    protected $fillable =[
        'id_service',
        'sparepart',
        'harga',
    ];

    public function service():BelongsTo{
        return $this->belongsTo(service::class);
    }
}

