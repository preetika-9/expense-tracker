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

                    {{-- expenses --}}

                    <p class="text-3xl pb-6">Expenses Report</p>
                    <a href="{{ route('expense.create') }}" class=" bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="button">
                        <span class="text-2xl">+</span> Add Expenses
                    </a>


                </div>
            </div>

        </div>
    </x-app-layout>
@endsection
