<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'county',
        'date',
        'duration',
        'hotels',
        'amount',
    ];
    public function user(){
    	return $this->belongsTo(User::class);
    }
}
