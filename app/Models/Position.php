<?php

namespace App\Models;

use App\Http\Controllers\EmployeeController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    public function employees(){
        return $this->hasMany(EmployeeController::class);
    }

}
