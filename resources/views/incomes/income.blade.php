@extends('layouts')
@section('main')
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Earning
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg  p-10">

                    @if (session()->has('status'))
                        <div class="text-red-900 text-center text-2xl">
                            {{ session()->get('status') }}
                        </div>
                    @endif

                    <div class="flex justify-between">
                        <p class="text-3xl pb-6">Income Report</p>
                        <div class="flex">

                            <div class="mb-10 pr-6">
                                <a href="{{ route('incomeCategory.create') }}"
                                    class=" bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                    type="button">
                                    <span class="text-2xl">+</span> Add Income Category
                                </a>
                            </div>
                            <div class="mb-10">
                                <a href="{{ route('income.create') }}"
                                    class=" bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                    type="button">
                                    <span class="text-2xl">+</span> Add Income
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- {{ $expenses }} --}}

                    <table class="table-auto w-full">
                        <thead>
                            <tr>


                                <th class="border border-slate-600 px-2 py-1 text-lg font-semibold text-black">Category</th>
                                <th class="border border-slate-600 px-2 py-1 text-lg font-semibold text-black">Account</th>
                                <th class="border border-slate-600 px-2 py-1 text-lg font-semibold text-black">Description
                                </th>
                                <th class="border border-slate-600 px-2 py-1 text-lg font-semibold text-black">Amount</th>
                                <th class="border border-slate-600 px-2 py-1 text-lg font-semibold text-black">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($incomes as $income)
                                <tr>
                                    {{-- <td class="border border-slate-700 px-2 py-1">{{ $income->name }}</td> --}}
                                    <td class="border border-slate-700 px-2 py-1">{{ $income->incomeCategory->name }}</td>

                                    <td class="border border-slate-700 px-2 py-1">{{ $income->account->name }}</td>
                                    <td class="border border-slate-700 px-2 py-1">{{ $income->description }}</td>
                                    <td class="border border-slate-700 px-2 py-1">{{ $income->amount }}</td>
                                    <td class="border border-slate-700 px-2 py-1 flex">
                                        <a href="{{ route('income.edit', $income) }}" class="edit-btn">Edit

                                        </a>
                                        <form action="{{ route('income.destroy', $income) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" value="Delete"
                                                style="padding: 10px; background: red; color: white; border: 1px solid red;  border-radius: 5px" />

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
