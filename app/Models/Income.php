<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    public function incomeCategory()
    {
        return $this->belongsTo(IncomeCategory::class);
    }
    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
