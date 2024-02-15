<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExpenseRequest;
use App\Models\Expense;
use App\Models\ExpenseCategory;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index(Request $request)
    {
        $expenses = Expense::all();
        $expenseCategories = ExpenseCategory::all();
        return view('expenses.expense', compact('expenses','expenseCategories'));
    }
    public function create()
    {
        $expenseCategories = ExpenseCategory::all();
        return view('expenses.create-expense', compact('expenseCategories'));
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
        return redirect()->back()->with('status', 'Expenses Created Successfully');
    }
    public function edit(Expense $expenses)
    {
        // dd($expenses);
        return view('expenses.edit-expense', compact('expenses'));
    }

    public function update(ExpenseRequest $request, Expense $expenses){

        // dd($expenses->id);
        $name = $request->input('name');
        $amount = $request->input('amount');
        $category = $request->input('category');
        $account = $request->input('account');
        $date = $request->input('date');
        $description = $request->input('description');

        $expenses->name = $name;
        $expenses->amount = $amount;
        $expenses->category = $category;
        $expenses->account = $account;
        $expenses->date = $date;
        $expenses->description = $description;

        $expenses->save();
        return redirect()->back()->with('status' , 'Expenses Edited Successfully');
    }

    public function destroy(Expense $expenses)
    {
        $expenses->delete();
        return redirect()->back()->with('status', 'Expense Deleted Successfully');
    }
}
