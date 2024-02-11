<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExepnseCategoryRequest;
use App\Models\ExpenseCategory;


class ExpenseCategoryController extends Controller
{
    public function index()
    {
        $expenseCategory = ExpenseCategory::all();
        return view('expenseCategory.expense-category', compact('expenseCategory'));
    }
    public function create()
    {
        return view('expenseCategory.create-expense-category');
    }

    public function store(ExepnseCategoryRequest $request, ExpenseCategory $expenseCategory)
    {
        $name = $request->input('name');

        $expenseCategory = new ExpenseCategory();
        $expenseCategory->name = $name;

        $expenseCategory->save();
        return redirect()->back()->with('status', 'Expense Category Created Successfully');
    }
    public function edit(ExpenseCategory $expenseCategories)
    {
        // dd($expenseCategories);
        return view('expenseCategory.edit-expense-category', compact('expenseCategories'));
    }
    public function update(ExepnseCategoryRequest $request, ExpenseCategory $expenseCategories)
    {
        $name = $request->input('name');

        $expenseCategories->name = $name;

        $expenseCategories->save();
        return redirect()->back()->with('status', 'Expense Category Edited Successfully');
    }
    public function destroy(ExpenseCategory $expenseCategories)
    {
        $expenseCategories->delete();
        return redirect()->back()->with('status', 'Expense Category Deleted Successfully');
    }
}
