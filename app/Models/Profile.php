<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profile';


    // @var array<int, string>
     
    
    
        protected $primaryKey = 'profile_id';
    
        protected $fillable = [
            'user_id', 'first_name', 'last_name', 'phone_number', 'credit_card_number'
        ];
    
        public function user()
        {
            return $this->belongsTo(User::class, 'user_id');
        }
    

}
