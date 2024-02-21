@extends('layouts')
@section('main')
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Transaction
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg  p-10 ">

                    {{-- expenses --}}


                    <p class="text-3xl">Edit Expenses</p>
                    {{-- @include('includes.flash-message') --}}

                    <div class="w-1/2  ">
                        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
                            action="{{ route('expense.update', $expenses) }}" method="post">
                            @csrf
                            @method('put')

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="amount">
                                    Amount
                                </label>
                                <input
                                    class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                    id="amount" name="amount" type="text" placeholder="Amount"
                                    value="{{ $expenses->amount }}">
                                @error('amount')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                           
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="category">
                                    Category
                                </label>
                                <select
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="category" name="expense_category_id" type="text" placeholder=" Category">
                                    <option disabled>Select Category</option>
                                    @foreach ($expenseCategories as $expenseCategorie)
                                        <option {{ $expenseCategorie->id === $expenses->expenseCategory->id ? 'selected' : ''}} value="{{ $expenseCategorie->id }}">{{ $expenseCategorie->name }}</option>
                                    @endforeach
                                </select>
                                @error('expense_category_id')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="account">
                                    Account
                                </label>
                                <select
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="account" name="account_id" type="text" placeholder=" account">
                                <option selected disabled>Select Account</option>
                                @foreach ($accounts as $account)
                                    <option  {{ $account->id === $expenses->account->id ? 'selected' : '' }} value="{{ $account->id }}">{{ $account->name }}</option>
                                @endforeach
                            </select>
                                @error('account_id')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                                    Description
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="description" name="description" type="text" placeholder="Add Notes"
                                    value="{{ $expenses->description }}">
                                @error('description')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex items-center justify-between">
                                <input
                                    class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                    type="submit" value="Submit" />
                            </div>
                        </form>


                    </div>

                </div>
            </div>

        </div>
    </x-app-layout>
@endsection
