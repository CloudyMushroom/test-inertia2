<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ikeepaccount extends Model
{
    use HasFactory;
    protected $table = 'ikeepaccounts';
    protected $fillable = [
        'accnt_NAME',
        'accnt_PASS',
        'seed_PHRASE'
    ];

    public function user()
    {
        return $this->belongsTo(ikeepuser::class,'seed_PHRASE', 'seed_PHRASE');
    }
}
