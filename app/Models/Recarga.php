<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recarga extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function jugadore() {
        return $this->belongsTo(Jugadore::class);
    }

    public function medio() {
        return $this->belongsTo(Medio::class);
    }

    public function cuenta() {
        return $this->belongsTo(Cuenta::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function updatedBy(){
        return $this->belongsTo(User::class, 'updated_by');
    }
}
