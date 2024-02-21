<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    protected $fillable = ['amount','expense_category_id','account_id','description'];

    public function expenseCategory(){
        return $this->belongsTo(ExpenseCategory::class);
    }
    public function account(){
        return $this->belongsTo(Account::class);
    }
}
