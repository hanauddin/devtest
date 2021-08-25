<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'make',
        'model',
        'serial_number',
        'condition',
        'purchased',
        'cost_at_purchase',
        'os',
    ];

    protected $dates = [
        'purchased',
    ];

    /**
     * Returns the computer's path.
     *
     * @return string
     */
    public function path()
    {
        return '/computers/'.$this->id;
    }

    /**
     * Returns the computer's make and model as a name.
     *
     * @return string
     */
    public function name()
    {
        return $this->make.' '.$this->model;
    }

    /**
     * Returns the data of the person the computer is assigned to.
     *
     * @return object
     */
    public function assignedTo()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }
}
