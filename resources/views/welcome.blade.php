@extends('layouts.templatebase')

@section('content')


    

        <!--Hero-->
        <div class="pt-0">
            <div class="container flex flex-col flex-wrap items-center px-3 mx-auto mb-8 md:flex-row">
                <!--Left Col-->
                <div
                    class="flex flex-col items-start justify-center w-full min-h-screen text-center md:w-2/5 md:text-center  ml-6">
                    <h1 class="my-4 text-5xl font-bold leading-tight text-center">
                        <!-- cambiar por el nombre de la empresa -->
                        ARTTI
                    </h1>
                    <p class="mb-8 text-2xl leading-normal ">
                        Somos una empresa líder en el sector que busca hacer más cortas las brechas de empleo y facilita el trabajo de los reclutadores encontrando a los mejores desarrolladores del mercado.
                    </p>
                    
                </div>
                <!--Right Col-->
                <div class="  ">
                    <img class="object-cover "
                        src="vendor/adminlte/dist/img/desarrolladora.png" />

                </div>
            </div>
        </div>

        <livewire:job-list>

        <section class="py-8 my-8  ">
            <div class="container   ">
                <h1 class="w-full my-2 text-3xl font-bold leading-tight text-center text-black-800 ">
                    ¿Buscas empleo?
                </h1>
                <div class="w-full mb-4">
                    <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient"></div>
                </div>
                <div class="flex flex-wrap text-center">
                    <div class="w-full p-6 sm:w-1/2">
                        <!--ventajas para empresas-->
                        <h3 class="mb-3 text-2xl font-bold leading-none text-black-800">
                            ¡Encuentra oportunidades laborales!
                        </h3>
                        <!--una imagen de beneficios-->
                        <img class="" width="100%"
                            src="vendor/adminlte/dist/img/comunidad.png"
                            alt="contrata">
                        <p class="mb-8 text-black-600">
                            <br />
                            <br />
                            Si eres un desarrollador entusiasta y crees tener todas las habilidades necesarias, regístrate y
                            aplica.

                            <br />
                            <br />
                        </p>
                        <a href="{{ url('register') }}">
                            <button
                                class="px-8 py-4 mx-auto my-6 font-bold text-white transition duration-300 ease-in-out transform rounded-full shadow-lg lg:mx-0 hover:underline gradient focus:outline-none focus:shadow-outline hover:scale-105">
                                Unete
                            </button>
                        </a>

                    </div>
                    <div class="w-full p-6 sm:w-1/2">
                        <!--ventajas para empresas-->
                        <h3 class="mb-3 text-2xl font-bold leading-none text-black-800">
                            Contrata el mejor talento
                        </h3>
                        <!--una imagen de beneficios-->
                        <img class="" width="100%"
                            src="vendor/adminlte/dist/img/idea.png"
                            alt="">
                        <p class="mb-8 text-black-600">
                            <br />
                            <br />
                            Si eres una compañía de marca mundial y requieres talento, regístrate con nosotros para tener al
                            mejor equipo de TI.


                            <br />
                            <br />
                        </p>
                        <a href="{{ url('register') }}">
                            <button
                                class="px-8 py-4 mx-auto my-6 font-bold text-white transition duration-300 ease-in-out transform rounded-full shadow-lg lg:mx-0 hover:underline gradient focus:outline-none focus:shadow-outline hover:scale-105">
                                Contratar
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
                    <g class="wave" fill="#fff">
                        <path
                            d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z">
                        </path>
                    </g>
                    <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
                        <g
                            transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                            <path
                                d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                                opacity="0.100000001"></path>
                            <path
                                d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                                opacity="0.100000001"></path>
                            <path
                                d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                                opacity="0.200000003"></path>
                        </g>
                    </g>
                </g>
            </g>
        </svg>
            
        
        </div>
        </section>
       

       
        

    @endsection
