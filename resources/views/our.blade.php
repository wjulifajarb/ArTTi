@extends('layouts.templatebase')


@section('content')
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

    <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
        <!--Nav-->
        <!--Hero-->
      

        <section class=" border-b py-8 rounded-3xl">
            <div class="container max-w-5xl mx-auto m-8">
                <h1 class="w-full my-2 text-3xl font-bold leading-tight text-center text-black-800">
                    ¿Como Funciona?
                </h1>
                <div class="w-full mb-4">
                    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                </div>
                <div class="flex flex-wrap">
                    <div class="w-5/6 sm:w-1/2 p-6">
                        <h3 class="text-2xl text-black-800 font-bold leading-none mb-3 ">
                            Paso 1
                        </h3>
                        <p class=" text-2xl text-black-600 mb-8">
                            Reclutamiento
                            Contamos con una plataforma administable para lograr  publicar facilmente de las ofertas laborales.
                            <br />
                            <br />

                        </p>
                    </div>
                    <div class="w-full sm:w-1/2 p-6">
                        <img src="vendor/adminlte/dist/img/convocatoria.png" alt="">
                    </div>
                </div>
                <div class="flex flex-wrap flex-col-reverse sm:flex-row">
                    <div class="w-full sm:w-1/2 p-6 mt-6">
                    
                    <img src="vendor/adminlte/dist/img/diseño.png" alt="">
                    </div>
                    <div class="w-full sm:w-1/2 p-6 mt-6">
                        <div class="align-middle">
                            <h3 class="text-2xl text-black-800 font-bold leading-none mb-3">
                                Paso 2
                            </h3>
                            <p class=" text-2xl text-black-600 mb-8">
                                Selección
                                Automaticamente se filtrar perfiles idoneos  candidatos/as que cumplan con tus requisitos.
                                <br />
                                <br />

                            </p>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 p-6 mt-6">
                        <div class="align-middle">
                            <h3 class=" text-2xl text-black-800 font-bold leading-none mb-3">
                                Paso 3
                            </h3>
                            <p class="  text-2xl  text-black-600 mb-8">
                                Contratación
                                Manejamos los temas legales y de nómina de tu nuevo empleado remoto, sin importar el país.
                                <br />
                                <br />

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <livewire:job-list>

        
        <section class="py-8  border-radius">
            <div class="container flex flex-wrap pt-4 pb-12 mx-auto">
                <h1 class="w-full my-2 text-3xl font-bold leading-tight text-center text-gray-800">
                    Testimonios
                </h1>
                <div class="w-full mb-4">
                    <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient"></div>
                </div>
                <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3">
                    <div class="">
                      
                            <p class="w-full px-6 text-xs text-gray-600 md:text-sm">
                                Desarrollador Frontend
                            </p>
                            <div class="w-full px-6 text-xl font-bold text-gray-800">
                                Paula Rodriguez
                            </div>
                            <img class="w-2/4 mx-auto my-8 rounded-full shadow-lg"
                                src="https://media-exp1.licdn.com/dms/image/C5603AQGVkr9xrmKuuA/profile-displayphoto-shrink_800_800/0/1616168065115?e=1627516800&v=beta&t=br4ZGBAy8L1el5AmVpGS_VssQMPM1zsGEUObXkfhaM0"
                                alt="Juliana fajardo">
                            <br />
                            <br />
                            <p class="px-6 mx-auto my-5 text-center text-gray-800">
                                Esta plataforma me ayudo a acercarme a las posibilidades de empleo que estaba buscando
                                ,agilizando el proceso de selección
                            </p>
                        
                    </div>
                </div>
                <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3">
                    <div class="">
                        
                            <p class="w-full px-6 text-xs text-gray-600 md:text-sm">
                                Desarrollador FullStack
                            </p>
                            <div class="w-full px-6 text-xl font-bold text-gray-800">
                                Kevin Dorado
                            </div>
                            <img class="w-2/4 mx-auto my-8 rounded-full shadow-lg"
                                src="vendor/adminlte/dist/img/kevin.jpg"
                                alt="Kevin Dorado">
                            <br />
                            <br />
                            <p class="px-6 mx-auto my-5 text-center text-gray-800">
                                Despues de aplicar en multiples plataformas de empleo artti me brindo una forma facil y
                                agil de aplicar a las vacantes que se ajustaban a mi perfil profesional.
                            </p>
                        
                    </div>

                </div>
                <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3">
                    <div class="">
                      
                            <p class="w-full px-6 text-xs text-gray-600 md:text-sm">
                                Desarrolladora de software
                            </p>
                            <div class="w-full px-6 text-xl font-bold text-gray-800">
                                Paola roa
                            </div>
                            <img class="w-2/4 mx-auto my-8 rounded-full shadow-lg"
                                src="https://media-exp1.licdn.com/dms/image/C4E03AQEg2-Fs4-3o3Q/profile-displayphoto-shrink_800_800/0/1604375333655?e=1626912000&v=beta&t=bYcLc34bH8fKV7fmpOxVz2p7moJJoeJ4xcgJ7jEl_dU"
                                alt="Juliana fajardo">
                            <br />
                            <br />
                            <p class="px-6 mx-auto my-5 text-center text-gray-800">
                                Haber encontrado a artti fue lo mejor que me pudo haber pasado , despues de intentar en otras plataformas sin encontrar resultados efectivos.
                            </p>
                       
                    </div>
                </div>
                
            </div>
        </section>
        <!-- Change the colour #f8fafc to match the previous section colour -->
       
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


@endsection
