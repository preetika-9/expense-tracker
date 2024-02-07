<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Expense Tracker</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header>
        <div class="fixed w-full bg-white">
            <div class="shadow py-4 ">
                <div class="container mx-auto ">
                    <div class="flex justify-between ">
                        <p class="text-xl font-medium">$Karobar.</p>
                        <div>
                            <a href="{{ route('login') }}" class="border-2 px-2 py-1 rounded">Login</a>
                            <a href="{{ route('register') }}" class="border-2 px-2 py-1 rounded">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" pt-20  bg-indigo-100">
            <div class="container mx-auto flex items-center justify-between py-10 h-1/4">
                <div>
                    <h1 class="font-bold text-7xl pb-4 leading-tight">Save on tools for your<br /> entire business
                    </h1>
                    <p class="text-xl leading-8">From inventory to projects, to payroll and<br /> people, QuickBooks
                        Online
                        brings it
                        all
                        <br />together.
                    </p>
                </div>
                <div>
                    <img src="{{ asset('images/homeImg1.jpg') }}"
                        style="height: 500px; width: 500px; border-radius: 100%" />
                </div>
            </div>
        </div>

    </header>

    <main>
        <div class="bg-blue-950">
            <p class="text-center text-white text-3xl font-semibold py-4">Save on Karobar Online plans that grow with
                you
            </p>
        </div>

        <div class="container mx-auto px-40">
            <p class="text-center text-6xl font-bold py-20">Explore the features</p>
            <div class="grid grid-cols-3 gap-28 pb-20">
                <div>
                    <p class="font-semibold">See profit at a glance</p>
                    <p>Get a clear view of what you<br /> make and spend over time.</p>
                </div>
                <div>
                    <p class="font-semibold">Get every tax deduction</p>
                    <p>More tax deductions, more<br /> money in your pocket.</p>
                </div>

                <div>
                    <p class="font-semibold">Manage & pay bills</p>
                    <p>Organize bills in one place, plus schedule and make payments online right in QuickBooks.</p>
                </div>
                <div>
                    <p class="font-semibold">Invoicing</p>
                    <p>Create and send professional<br /> invoices with smart invoicing<br /> software.</p>
                </div>

                <div>
                    <p class="font-semibold">Auto taxes and forms</p>
                    <p>We’ll calculate, file, and pay your <br />payroll taxes for you.**</p>
                </div>

                <div>
                    <p class="font-semibold">Pay your team</p>
                    <p>Get payroll done right, and<br /> payroll taxes done for you.</p>
                </div>

            </div>
        </div>
    </main>
    <footer>
        <div class="bg-slate-700">
            <div class="container mx-auto">
                <div class="grid grid-cols-2 gap-28 py-20">
                    <div>
                        <p class="text-xl font-medium text-white pb-4">$Karobar.</p>

                        <p class="text-white">Karobar believes everyone should have the opportunity to prosper and we
                            never stop working
                            to
                            find
                            new innovative ways to make that possible.</p>
                    </div>
                    <div>
                        <p class="text-white pb-4">location: Mulpani, Kathmandu</p>
                        <p class="text-white pb-4"> mail: kutruke100@gmail.com</p>
                        <p class="text-white pb-4">call: 01-9987665</p>
                    </div>
                </div>

                <p class="text-white pb-6 text-center"> Copyright @ 2024 Karobar. All rights reserved</p>
            </div>
        </div>
    </footer>
</body>

</html>
