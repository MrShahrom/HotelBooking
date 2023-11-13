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
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }

    public function client(){
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }
}

