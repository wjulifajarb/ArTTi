<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ARTTI</title>

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <style>
      @import url("https://rsms.me/inter/inter.css");
      html {
        font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI",
          Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif,
          "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
          "Noto Color Emoji";
      }

      .gradient {
        background-image: linear-gradient(-225deg, #cbbacc 0%, #2580b3 100%);
      }

      button,
      .gradient2 {
        background-color: #f39f86;
        background-image: linear-gradient(315deg, #f39f86 0%, #f9d976 74%);
      }

      /* Browser mockup code
 * Contribute: https://gist.github.com/jarthod/8719db9fef8deb937f4f
 * Live example: https://updown.io
 */

      .browser-mockup {
        border-top: 2em solid rgba(230, 230, 230, 0.7);
        position: relative;
        height: 60vh;
      }

      .browser-mockup:before {
        display: block;
        position: absolute;
        content: "";
        top: -1.25em;
        left: 1em;
        width: 0.5em;
        height: 0.5em;
        border-radius: 50%;
        background-color: #f44;
        box-shadow: 0 0 0 2px #f44, 1.5em 0 0 2px #9b3, 3em 0 0 2px #fb5;
      }

      .browser-mockup > * {
        display: block;
      }

      /* Custom code for the demo */
    </style>
</head>

<body class="leading-normal tracking-normal  gradient" style="font-family: 'Source Sans Pro', sans-serif;">

    <header class="shadow-lg">

        @auth
            <a href="url('dashboard')" class="text-sm text-gray-700 underline ">Dashboard</a>
        @else
            <nav id="header" class="fixed w-full z-30  top-0 text-white">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
                    <div class="pl-4 flex items-center">
                        <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                            href="/">
                            <!--Icon from: http://www.potlabicons.com/ -->
                            <img src="vendor/adminlte/dist/img/logo.png" width="90px" class="rounded-full" height="90px"
                                alt="">
                        </a>
                    </div>
                    <div class="block lg:hidden pr-4">
                        <button id="nav-toggle"
                            class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Menu</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                            </svg>
                        </button>
                    </div>
                    <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20"
                        id="nav-content">
                        <ul class="list-reset lg:flex justify-end flex-1 items-center mr-6">
                            <li class="mr-3">
                                <a href="{{ url('/') }}"
                                    class="ml-4 text-l text-black-700 font-blod no-underline hover:no-underline">Inicio</a>
                            </li>
                            <li class="mr-3">
                                <a href="{{ url('/our') }}"
                                    class="ml-4 text-l text-black-700 font-blod no-underline hover:no-underline">Comunidad</a>
                            </li>
                            <li>
                                <a href="{{ url('login') }}"
                                    class="ml-4 text-ltext-black-700 font-blod no-underline hover:no-underline">
                                    <button id="navAction"
                                        class="mx-auto lg:mx-0 hover:no-underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-2 px-4 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">Ingresa
                                    </button>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('register') }}"
                                    class="ml-4 text-sm text-black-700 font-blod no-underline hover:no-underline">
                                    <button id="navAction"
                                        class="mx-auto lg:mx-0 hover:no-underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-2 px-4 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">Regístrate
                                    </button>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="border-b border-gray-100 opacity-25 my-0 py-0  " />
            </nav>
            @endif
        </header>


        <main class="my-20">
            <div class=" w-full  px-4 ">
                @yield('content')
            </div>
        </main>

        <footer class="py-1 text-center ">
            <div class="container mx-auto px-8">
                <div class="w-full flex flex-col md:flex-row py-6">


                    <div class="flex-1">
                        <p class="text-white-500 md:mb-6">Contáctanos</p>
                        <ul class="list-reset mb-6">
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-purple-500">3054359526</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="www.linkedin.com/in/julianafajardo"
                                    class="no-underline hover:underline text-gray-800 hover:text-purple-500">Linkedin</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-purple-500">Twitter</a>
                            </li>
                        </ul>
                    </div>

                </div>
              
            </div>
        </footer>

        <script>
            var scrollpos = window.scrollY;
            var header = document.getElementById("header");
            var navcontent = document.getElementById("nav-content");
            var navaction = document.getElementById("navAction");
            var brandname = document.getElementById("brandname");
            var toToggle = document.querySelectorAll(".toggleColour");

            document.addEventListener("scroll", function() {
                /*Apply classes for slide in bar*/
                scrollpos = window.scrollY;

                if (scrollpos > 10) {
                    header.classList.add("bg-white");
                    navaction.classList.remove("bg-white");
                    navaction.classList.add("gradient");
                    navaction.classList.remove("text-gray-800");
                    navaction.classList.add("text-white");
                    //Use to switch toggleColour colours
                    for (var i = 0; i < toToggle.length; i++) {
                        toToggle[i].classList.add("text-gray-800");
                        toToggle[i].classList.remove("text-white");
                    }
                    header.classList.add("shadow");
                    navcontent.classList.remove("bg-gray-100");
                    navcontent.classList.add("bg-white");
                } else {
                    header.classList.remove("bg-white");
                    navaction.classList.remove("gradient");
                    navaction.classList.add("bg-white");
                    navaction.classList.remove("text-white");
                    navaction.classList.add("text-gray-800");
                    //Use to switch toggleColour colours
                    for (var i = 0; i < toToggle.length; i++) {
                        toToggle[i].classList.add("text-white");
                        toToggle[i].classList.remove("text-gray-800");
                    }

                    header.classList.remove("shadow");
                    navcontent.classList.remove("bg-white");
                    navcontent.classList.add("bg-gray-100");
                }
            });

        </script>
        <script>
            /*Toggle dropdown list*/
            /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

            var navMenuDiv = document.getElementById("nav-content");
            var navMenu = document.getElementById("nav-toggle");

            document.onclick = check;

            function check(e) {
                var target = (e && e.target) || (event && event.srcElement);

                //Nav Menu
                if (!checkParent(target, navMenuDiv)) {
                    // click NOT on the menu
                    if (checkParent(target, navMenu)) {
                        // click on the link
                        if (navMenuDiv.classList.contains("hidden")) {
                            navMenuDiv.classList.remove("hidden");
                        } else {
                            navMenuDiv.classList.add("hidden");
                        }
                    } else {
                        // click both outside link and outside menu, hide menu
                        navMenuDiv.classList.add("hidden");
                    }
                }
            }

            function checkParent(t, elm) {
                while (t.parentNode) {
                    if (t == elm) {
                        return true;
                    }
                    t = t.parentNode;
                }
                return false;
            }

        </script>

    </body>

    </html>
