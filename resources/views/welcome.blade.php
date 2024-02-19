<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Expense Tracker</title>
    @vite('resources/css/app.css')
    @vite('public/css/styles.css')
</head>

<body>
    <header>
        <div class="fixed w-full bg-white">
            <div class="shadow py-4 ">
                <div class="container mx-auto ">
                    <div class="flex justify-between ">
                        <p class="text-xl font-medium text-green">Lenden Khata</p>
                        <div>
                            <a href="{{ route('login') }}"
                                class="border-b-2 px-4 py-2 rounded-full text-green">Login</a>
                            <a href="{{ route('register') }}"
                                class="bg-green px-4 py-2 rounded-full text-white">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" pt-20  bg-green">
            <div class="container mx-auto flex items-center justify-between py-10 h-1/4">
                <div>
                    <h1 class="font-bold text-7xl pb-4 leading-tight text-white">How it Works
                    </h1>
                    <p class="text-xl leading-8 text-white">Lenden Khata is a budget tracker for the<br />
                        modern age. Say no more to carrying<br />
                        paper envelopes. This virtual<br />
                        budget program keeps<br />
                        you on track.
                    </p>
                </div>
                <div>
                    <img src="{{ asset('images/home_icon.svg') }}"
                        style="height: 500px; width: 500px; border-radius: 100%" />
                </div>
            </div>

        </div>

    </header>

    <main>
        <div class="container mx-auto ">
            <div class="py-20 flex justify-between ">
                <div class="flex items-center">
                    <p class="text-green text-5xl font-bold pt-10">Great Budget<br /> Software</p>
                </div>
                <div class="flex justify-between w-3/5">
                    <div>
                        <p class="text-green text-center">Budgeting<br /> that works</p>
                        <div class="flex justify-center py-4">
                            <img src="{{ asset('images/budget.svg') }}" style="height: 100px; width:100px" />
                        </div>
                        <p class="text-center">Based on the envelope<br /> budgeting method – a<br /> time-tested
                            system<br>
                            that works!</p>
                    </div>
                    <div>
                        <p class="text-green text-center">Save for <br /> big expenses</p>
                        <div class="flex justify-center py-4">
                            <img src="{{ asset('images/save.svg') }}" style="height: 100px; width:100px" />
                        </div>
                        <p class="text-center">Plan ahead and<br /> be prepared.<br /> No more<br> surprises!</p>
                    </div>
                    <div>
                        <p class="text-green text-center">Pay<br /> off  debt</p>
                        <div class="flex justify-center py-4">
                            <img src="{{ asset('images/budget.svg') }}" style="height: 100px; width:100px" />
                        </div>
                        <p class="text-center">Plan ahead and<br /> be prepared.<br /> No more<br /> surprises!</p>
                    </div>
                </div>
            </div>
            <div>
                <div class=" text-center">
                    <p class="text-green text-5xl font-bold pt-10">Get Started Now</p>
                    <button class="px-10 bg-green rounded-full text-white py-4 mt-3 font-bold">Sign Up</button>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="bg-green pt-10 pb-20">

            <div class="container mx-auto  flex justify-between">
                <div>
                    <p class="text-white text-3xl font-bold">Lenden Khata</p>
                    <p class="text-white font-medium">Budget well. Live life. Do good.</p>
                </div>

                <div>
                    <div class="flex">
                        <img src="{{ asset('images/location.svg') }}" style="width: 20px" />
                        <p class="text-white flex text-center pl-1 font-semibold">location: Mulpani, Kathmandu</p>
                    </div>
                    <div class="flex">
                        <img src="{{ asset('images/mail.svg') }}" style="width: 20px" />
                        <p class="text-white flex text-center pl-1 font-semibold">mail: kutruke100@gmail.com</p>
                    </div>
                    <div class="flex">
                        <img src="{{ asset('images/call.svg') }}" style="width: 20px" />
                        <p class="text-white flex text-center pl-1 font-semibold">call: 01-9987665</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-dark-green py-4">
            <p class="text-white">Copyright @ 2024 Lenden Khata. All rights reserved</p>
        </div>
    </footer>
</body>

</html>
