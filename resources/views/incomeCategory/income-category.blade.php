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
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg  p-10">

                    @if (session()->has('status'))
                        <div class="text-red-900 text-center text-2xl">
                            {{ session()->get('status') }}
                        </div>
                    @endif

                    <p class="text-3xl pb-6">Income Category</p>
                    <div class="mb-10">
                        <a href="{{ route('incomeCategory.create') }}"
                            class=" bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="button">
                            <span class="text-2xl">+</span> Add Income Category
                        </a>
                    </div>



                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="border border-slate-600 px-2 py-1 text-lg font-semibold text-black">Id</th>
                                <th class="border border-slate-600 px-2 py-1 text-lg font-semibold text-black">Title</th>
                                <th class="border border-slate-600 px-2 py-1 text-lg font-semibold text-black">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($incomeCategory as $incomeCat)
                                <tr>
                                    <td class="border border-slate-700 px-2 py-1">{{ $incomeCat->id }}</td>
                                    <td class="border border-slate-700 px-2 py-1">{{ $incomeCat->name }}</td>


                                    <td class="border border-slate-700 px-2 py-1 flex">
                                        <a href="{{ route('incomeCategory.edit', $incomeCat) }}"
                                            style="padding: 9px; background: green; color: white; margin-right: 4px">Edit
                                        </a>
                                        <form action="{{ route('incomeCategory.destroy', $incomeCat) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" value="Delete"
                                                style="padding: 10px; background: red; color: white; border: 1px solid red" />

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
