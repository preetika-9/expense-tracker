<?php

namespace App\Http\Controllers;

use App\Http\Requests\IncomeRequest;
use App\Models\Account;
use App\Models\Income;
use App\Models\IncomeCategory;

class IncomeController extends Controller
{
    public function index()
    {
        $incomes = Income::all();
        $incomeCategories = IncomeCategory::all();
        return view('incomes.income', compact('incomes', 'incomeCategories'));
    }

    public function create()
    {
        $incomeCategories = IncomeCategory::all();
        $accounts = Account::all();
        return view('incomes.create-income', compact('incomeCategories', 'accounts'));
    }

    public function store(IncomeRequest $request)
    {

        $name = $request->input('name');
        $amount = $request->input('amount');
        $category = $request->input('category');
        $account = $request->input('account');
        $description = $request->input('description');

        $income = new Income();
        $income->name = $name;
        $income->amount = $amount;
        $income->category = $category;
        $income->account = $account;
        $income->description = $description;
        // dd('create income', $income);
        $income->save();
        return redirect()->back()->with('status', 'Income Created Successfully');
    }
    public function edit(Income $incomes, IncomeCategory $incomeCategories, Account $accounts)
    {
    //    dd($incomeCategories);
        return view('incomes.edit-income', compact('incomes','incomeCategories','accounts'));
    }
    public function update(IncomeRequest $request, Income $incomes)
    {
        $name = $request->input('name');
        $amount = $request->input('amount');
        $category = $request->input('category');
        $account = $request->input('account');

        $description = $request->input('description');

        $incomes->name = $name;
        $incomes->amount = $amount;
        $incomes->category = $category;
        $incomes->account = $account;
        $incomes->description = $description;

        $incomes->save();
        return redirect()->back()->with('status', 'Incomes Edited SUccessfully');
    }

    public function destroy(Income $incomes)
    {
        $incomes->delete();
        return redirect()->back()->with('status', 'Incomes Deleted Successfully');
    }
}
