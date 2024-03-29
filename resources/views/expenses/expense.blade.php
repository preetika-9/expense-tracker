@extends('layouts')
@section('main')
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Spending
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg  p-10">

                    @if (session()->has('status'))
                        <div class="text-red-900">
                            {{ session()->get('status') }}
                        </div>
                    @endif
                    <div class="flex justify-between">

                        <p class="text-3xl pb-6">Expenses Report</p>
                        <div class="flex ">
                            <div class="mb-10 pr-6">
                                <a href="{{ route('expenseCategory.create') }}"
                                    class=" bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                    type="button">
                                    <span class="text-2xl">+</span> Add Expense Category
                                </a>
                            </div>
                            <div class="mb-10">
                                <a href="{{ route('expense.create') }}"
                                    class=" bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                    type="button">
                                    <span class="text-2xl">+</span> Add Expenses
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- {{ $expenses }} --}}

                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                {{-- <th class="border border-slate-600 px-2 py-1 text-lg font-semibold text-black">Title</th>
                                <th class="border border-slate-600 px-2 py-1 text-lg font-semibold text-black">Date</th> --}}
                                <th class="border border-slate-600 px-2 py-1 text-lg font-semibold text-black">Category</th>
                                <th class="border border-slate-600 px-2 py-1 text-lg font-semibold text-black">Account</th>
                                <th class="border border-slate-600 px-2 py-1 text-lg font-semibold text-black">Description
                                </th>
                                <th class="border border-slate-600 px-2 py-1 text-lg font-semibold text-black">Amount</th>
                                <th class="border border-slate-600 px-2 py-1 text-lg font-semibold text-black">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($expenses as $expense)
                                <tr>
                                    {{-- <td class="border border-slate-700 px-2 py-1">{{ $expense->name }}</td> --}}
                                    {{-- <td class="border border-slate-700 px-2 py-1">{{ $expense->date }}</td> --}}
                                    <td class="border border-slate-700 px-2 py-1">{{ $expense->expenseCategory->name }}</td>

                                    <td class="border border-slate-700 px-2 py-1">{{ $expense->account->name }}</td>
                                    <td class="border border-slate-700 px-2 py-1">{{ $expense->description }}</td>
                                    <td class="border border-slate-700 px-2 py-1">{{ $expense->amount }}</td>
                                    <td class="border border-slate-700 px-2 py-1 flex">
                                        <a href="{{ route('expense.edit', $expense) }}" class="edit-btn">Edit
                                            {{-- <img src="{{ asset('images/edit.svg') }}" /> --}}
                                        </a>
                                        <form action="{{ route('expense.destroy', $expense) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" value="Delete"
                                                style="padding: 10px; background: red; color: white; border: 1px solid red;  border-radius: 5px" />
                                            {{-- <img src="{{ asset('images/delete.svg') }}" /> --}}
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </x-app-layout>
@endsection
