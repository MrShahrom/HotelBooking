<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bron extends Model
{
    protected $table = 'brons';
    protected $primaryKey = 'id';
    protected $fillable = ['room_id', 'time_of_bron', 'time_of_free', 'client_id'];

    public function room(){
        return $this->hasMany(Room::class, 'id', 'room_id');
    }

    public function client(){
        return $this->hasMany(Client::class, 'id', 'client_id');
    }
}
