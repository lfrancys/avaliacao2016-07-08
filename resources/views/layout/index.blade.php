<!DOCTYPE html>
<html>
    <head>
        <title>Controle de Produtos</title>

        @include('layout.css')

        @include('layout.js')

    </head>
    <body>

        <body>

        <nav class="w3-sidenav w3-collapse w3-white w3-animate-left w3-card-2" style="z-index:3;width:250px;" id="mySidenav">
            <a href="#" class="w3-border-bottom w3-large"><img src="http://www.w3schools.com/images/w3schools.png" style="width:80%;"></a>
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-text-teal w3-hide-large w3-closenav w3-large">Close <i class="fa fa-remove"></i></a>
            <a href="{{ route('index') }}" class="w3-light-grey w3-medium">Home</a>
            <a href="{{ route('produto.index') }}">Produto</a>
        </nav>

        <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

        <div class="w3-main" style="margin-left:250px;">

            <div id="myTop" class="w3-top w3-container w3-padding-16 w3-theme w3-large">
                <i class="fa fa-bars w3-opennav w3-hide-large w3-xlarge w3-margin-left w3-margin-right" onclick="w3_open()"></i>
                <span id="myIntro" class="w3-hide">Controle de Produtos</span>
            </div>

            <header class="w3-container w3-theme w3-padding-20" style="padding-left:32px">
                <h1 class="w3-xxxlarge w3-padding-6">Controle de Produtos</h1>
            </header>

            <div class="w3-container w3-padding-32" style="padding-left:32px">



                @yield('content')

            </div>

        </div>

        <script>
            // Open and close the sidenav on medium and small screens
            function w3_open() {
                document.getElementById("mySidenav").style.display = "block";
                document.getElementById("myOverlay").style.display = "block";
            }
            function w3_close() {
                document.getElementById("mySidenav").style.display = "none";
                document.getElementById("myOverlay").style.display = "none";
            }

            // Change style of top container on scroll
            window.onscroll = function() {myFunction()};
            function myFunction() {
                if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                    document.getElementById("myTop").classList.add("w3-card-4");
                    document.getElementById("myIntro").classList.add("w3-show-inline-block");
                } else {
                    document.getElementById("myIntro").classList.remove("w3-show-inline-block");
                    document.getElementById("myTop").classList.remove("w3-card-4");
                }
            }


        </script>


        </body>


    </body>
</html>
