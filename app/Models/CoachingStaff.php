<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoachingStaff extends Model
{   
    use HasFactory;
    protected $primaryKey = 'coachingstaff_id';

    protected $fillable = [
        'avatar', 'description'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'coaching_staff_id');
    }
}