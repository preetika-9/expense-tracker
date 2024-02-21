<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExpenseRequest;
use App\Models\Account;
use App\Models\Expense;
use App\Models\ExpenseCategory;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index(Request $request)
    {
        $expenses = Expense::all();
        $expenseCategories = ExpenseCategory::all();
        return view('expenses.expense', compact('expenses', 'expenseCategories'));
    }
    public function create()
    {
        $expenseCategories = ExpenseCategory::all();
        $accounts = Account::all();
        return view('expenses.create-expense', compact('expenseCategories', 'accounts'));
    }
    public function store(ExpenseRequest $request)
    {
        
        $amount = $request->input('amount');
        $expense_category_id = $request->input('expense_category_id');
        $account_id = $request->input('account_id');
        $description = $request->input('description');

        $expense = new Expense();
        
        $expense->amount = $amount;
        $expense->expense_category_id = $expense_category_id;
        $expense->account_id = $account_id;
        $expense->description = $description;

        $expense->save();
   
        return redirect()->back()->with('status', 'Expenses Created Successfully');
    }
    public function edit(Expense $expenses)
    {
        // dd($expenses);
        $expenseCategories = ExpenseCategory::all();
        $accounts = Account::all();
        return view('expenses.edit-expense', compact('expenses', 'expenseCategories', 'accounts'));
    }

    public function update(ExpenseRequest $request, Expense $expenses)
    {

        // dd($expenses->id);

        $amount = $request->input('amount');
        $expense_category_id = $request->input('expense_category_id');
        $account_id = $request->input('account_id');
        $description = $request->input('description');


        $expenses->amount = $amount;
        $expenses->expense_category_id = $expense_category_id;
        $expenses->account_id = $account_id;
        $expenses->description = $description;

        $expenses->save();
        return redirect()->back()->with('status', 'Expenses Edited Successfully');
    }

    public function destroy(Expense $expenses)
    {
        $expenses->delete();
        return redirect()->back()->with('status', 'Expense Deleted Successfully');
    }
}
