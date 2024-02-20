@extends('layouts')
@section('main')
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Account
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg  p-10 ">



                    @include('includes.flash-message')

                    <p class="text-3xl">Create New Account</p>


                    <div class="w-1/2  ">
                        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('account.store') }}"
                            method="post">
                            @csrf
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                    Name
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="name" name="name" type="text" placeholder= "Name">
                                @error('name')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="amount">
                                    Amount
                                </label>
                                <input
                                    class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                    id="amount" name="amount" type="text" placeholder="Amount">
                                @error('amount')
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
