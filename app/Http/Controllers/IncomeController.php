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


        $amount = $request->input('amount');
        $income_category_id = $request->input('income_category_id');
        $account_id = $request->input('account_id');
        $description = $request->input('description');

        $income = new Income();

        $income->amount = $amount;
        $income->income_category_id = $income_category_id;
        $income->account_id = $account_id;
        $income->description = $description;
        // dd('create income', $income);
        $income->save();
        return redirect()->back()->with('status', 'Income Created Successfully');
    }
    public function edit(Income $incomes, IncomeCategory $incomeCategories, Account $accounts)
    {
        //    dd($incomeCategories);
        $incomeCategories = IncomeCategory::all();
        $accounts = Account::all();
        return view('incomes.edit-income', compact('incomes', 'incomeCategories', 'accounts'));
    }
    public function update(IncomeRequest $request, Income $incomes)
    {

        $amount = $request->input('amount');
        $income_category_id = $request->input('income_category_id');
        $account_id = $request->input('account_id');

        $description = $request->input('description');


        $incomes->amount = $amount;
        $incomes->income_category_id = $income_category_id;
        $incomes->account_id = $account_id;
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
