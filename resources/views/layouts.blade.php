<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - Karobar</title>
    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.17/tailwind.min.css">
    @yield('head')
</head>

<body>
    <div id="wrapper">
        <!-- header -->
        @yield('header')

        <!-- sidebar -->
        <div class="sidebar">
            <span class="closeButton">&times;</span>
            <p class="brand-title font-bold text-2xl"><a href="">$Karobar.</a></p>


            <div class="side-links">
                <ul>
                    <li><a href="{{ route('dashboard') }}" class="{{ Request::routeIs('dashboard') ? 'active' : '' }}">Dashboard</a>
                    </li>
                   
                    <li><a href="">Incomes</a>
                    </li>
                    <li><a href="{{ route('expense.index') }}" class="{{ Request::routeIs('expense.index') ? 'active' : '' }}">Expenses</a>
                    </li>
                    <li><a href="">Budget</a>
                    </li>
                    <li><a href="">Lists</a>
                    </li>
                    <li><a href="">Expenses Category</a>
                    </li>
                    <li><a href="">Income Category</a>
                    </li>
                </ul>
            </div>

            <!-- sidebar footer -->
            <footer class="sidebar-footer">
                <div>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                </div>

                <small style="color: grey">&copy 2021 Karobar</small>
            </footer>
        </div>
        <!-- Menu Button -->
        <div class="menuButton">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <!-- main -->
        @yield('main')

        <!-- Main footer -->
        <footer class="main-footer">
            <div style="color: grey">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
            </div>
            <small style="color: grey">&copy 2021 Karobar</small>
        </footer>
    </div>



    <!-- Click events to menu and close buttons using javaascript-->
    <script>
        document
            .querySelector(".menuButton")
            .addEventListener("click", function() {
                document.querySelector(".sidebar").style.width = "100%";
                document.querySelector(".sidebar").style.zIndex = "5";
            });

        document
            .querySelector(".closeButton")
            .addEventListener("click", function() {
                document.querySelector(".sidebar").style.width = "0";
            });
    </script>
    @yield('scripts')
</body>

</html>
