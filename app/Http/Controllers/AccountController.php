<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(Request $request)
    {
        $accounts = Account::all();
        return view('account.account', compact('accounts'));
    }
    public function create()
    {
        return view('account.create-account');
    }
    public function store(AccountRequest $request)
    {
        // dd('account');
        $name = $request->input('name');
        $amount = $request->input('amount');
        $account = new Account();
        $account->name = $name;
        $account->amount = $amount;

        $account->save();
        return redirect()->back()->with('status', 'Account Create Successfully');
    }

    public function edit(Account $account)
    {

        return view('account.edit-account', compact('account'));
    }

    public function update(AccountRequest $request, Account $account)
    {
        // dd('account');
        $name = $request->input('name');
        $amount = $request->input('amount');

        $account->name = $name;
        $account->amount = $amount;

        $account->save();
        return redirect()->back()->with('status', 'Account Edited Successfully');
    }

    public function destroy(Account $account){
        $account->delete();
        return redirect()->back()->with('status', 'Account Edited Successfully');
    }
}
