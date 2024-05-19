<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Reminders extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = 'reminders';


    protected $fillable = [
        'habit_id',
        'reminder_time',
    ];

    public function habit()
    {
        return $this->belongsTo(Habits::class);
    }
}
