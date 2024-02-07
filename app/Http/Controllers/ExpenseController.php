<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExpenseRequest;
use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        return view('expenses.expense');
    }
    public function create()
    {
        return view('expenses.create-expense');
    }
    public function store(ExpenseRequest $request)
    {
        
        

       

        $name = $request->input('name');
        $amount = $request->input('amount');
        $category = $request->input('category');
        $account = $request->input('account');
        $date = $request->input('date');
        $description = $request->input('description');


        $expense = new Expense();
        $expense->name = $name;
        $expense->amount = $amount;
        $expense->category = $category;
        $expense->account = $account;
        $expense->date = $date;
        $expense->description = $description;

        $expense->save();
        // dd($expense);
        return redirect()->back()->with('status' , 'Expenses Created Successfully');
    }
    public function edit()
    {
    }
}
