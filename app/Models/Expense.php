<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    public function expenseCategory(){
        return $this->belongsTo(ExpenseCategory::class);
    }
    public function account(){
        return $this->belongsTo(Account::class);
    }
}
