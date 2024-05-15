<?php
namespace App\Models;
use MongoDB\Laravel\Eloquent\Model;

class Habits extends Model
{
    protected $connection = 'mongodb';

    protected $collection = 'habits';


protected $fillable = [
    'user_id',
    'name',
    'description',
    'frequency',
    'category', // Add this line
    'start_date',
    'end_date',
    'created_at',
    'updated_at',
];

public function user()
{
    return $this->belongsTo(User::class);

}


}
