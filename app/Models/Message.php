<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    
    /**
     * Get chats associated with the specified message.
     */
    public function chats()
    {
        return $this->hasMany(Chat::class);
    }
}
