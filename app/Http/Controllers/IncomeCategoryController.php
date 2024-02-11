<?php

namespace App\Http\Controllers;

use App\Http\Requests\IncomeCategoryRequest;
use App\Models\IncomeCategory;
use Illuminate\Http\Request;

class IncomeCategoryController extends Controller
{
    public function index()
    {
        $incomeCategory = IncomeCategory::all();
        return view('incomeCategory.income-category', compact('incomeCategory'));
    }

    public function create()
    {
        return view('incomeCategory.create-income-category');
    }
    public function store(IncomeCategoryRequest $request, IncomeCategory $incomeCategories)
    {
        $name = $request->input('name');

        $incomeCategory = new IncomeCategory();
        $incomeCategory->name = $name;

        $incomeCategory->save();
        return redirect()->back()->with('status', 'Income Category Created SUccessfully');
    }
    public function edit(IncomeCategory $incomeCategories)
    {
        return view('incomeCategory.edit-income-category', compact('incomeCategories'));
    }
    public function update(IncomeCategoryRequest $request, IncomeCategory $incomeCategories)
    {
        $name = $request->input('name');

        $incomeCategories->name = $name;

        $incomeCategories->save();
        return redirect()->back()->with('status', 'Income Category Edited Successfully');
    }
    public function destroy(IncomeCategory $incomeCategories){
        $incomeCategories->delete();
        return redirect()->back()->with('status','Income Category Deleted Successfully');
    }
}
