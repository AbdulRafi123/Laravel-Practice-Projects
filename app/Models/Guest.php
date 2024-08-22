<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    // inserting table name becuase the default criteria of 
    // table name and model name does not match 
    // to work by default table name should be 'guests' if
    // model name is 'Guest'
    protected $table='guest_table';

    public function noOfGuests(){
        return "There is 1 guest only";
    }
}
