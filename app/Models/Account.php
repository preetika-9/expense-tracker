<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    public function income(){
        return $this->hasMany(Income::class);
    }
    public function expense(){
        return $this->hasMany(Expense::class);
    }
}
