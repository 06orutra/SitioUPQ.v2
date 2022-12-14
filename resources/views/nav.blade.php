<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />

</head>
<body>
<nav class="p-3 bg-gray-50 rounded border-gray-200 dark:bg-gray-800 dark:border-gray-700">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
    <a href="#" class="flex items-center">
        <img src="{{asset('img/svg/upq_logo_color.svg')}}" class="mr-3 h-6 sm:h-10" alt="Flowbite Logo" />
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
    </a>
    <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex justify-center items-center ml-3 text-gray-400 rounded-lg md:hidden hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 dark:text-gray-400 dark:hover:text-white dark:focus:ring-gray-500" aria-controls="navbar-solid-bg" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
      <ul class="flex flex-col mt-4 bg-gray-50 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
        <li>
          <a href="#" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-white dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
        </li>
        <li>
          <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
        </li>
        <li>
          <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
        </li>
      </ul>
    </div>
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button>
  </div>
</nav>


<nav class="p-3 bg-gray-50 rounded border-gray-200 dark:bg-gray-800 dark:border-gray-700">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
    <a href="#" class="flex items-center">
        <img src="{{asset('img/main/logoupq.png')}}" class="mr-3 h-6 sm:h-10" alt="Flowbite Logo" />
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
    </a>
    <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex justify-center items-center ml-3 text-gray-400 rounded-lg md:hidden hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 dark:text-gray-400 dark:hover:text-white dark:focus:ring-gray-500" aria-controls="navbar-solid-bg" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
      <ul class="flex flex-col mt-4 bg-gray-50 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
        <li>
          <a href="#" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-white dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
        </li>
        <li>
          <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
        </li>
        <li>
          <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
        </li>
      </ul>
    </div>
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button>
  </div>
</nav>

<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
        <a href="https://flowbite.com" class="flex items-center">
            <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
        </a>
        <div class="flex items-center">
            <a href="tel:5541251234" class="mr-6 text-sm font-medium text-gray-500 dark:text-white hover:underline">(555) 412-1234</a>
            <a href="#" class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">Login</a>
        </div>
        <div class="">
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button>
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button>
        </div>
    </div>
</nav>


<nav class="p-3 bg-gray-50 rounded border-gray-200 dark:bg-gray-800 dark:border-gray-700">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
    <a href="#" class="flex items-center">
        <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-10" alt="Flowbite Logo" />
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
    </a>
    <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex justify-center items-center ml-3 text-gray-400 rounded-lg md:hidden hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 dark:text-gray-400 dark:hover:text-white dark:focus:ring-gray-500" aria-controls="navbar-solid-bg" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
      <ul class="flex flex-col mt-4 bg-gray-50 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
        <li>
          <a href="#" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-white dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
        </li>
        <li>
          <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
        </li>
        <li>
          <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
        </li>
      </ul>
    </div>
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button>
  </div>
</nav>


<nav class="px-2 bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
    <a href="#" class="flex items-center">
        <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-10" alt="Flowbite Logo">
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
    </a>
    <button data-collapse-toggle="navbar-multi-level" type="button" class="inline-flex justify-center items-center ml-3 text-gray-400 rounded-lg md:hidden hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 dark:text-gray-400 dark:hover:text-white dark:focus:ring-gray-500" aria-controls="navbar-multi-level" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
      <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="#" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-white dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Home</a>
        </li>
        <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Dropdown <svg class="ml-1 w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="hidden z-10 w-44 font-normal bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                  <li>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                  </li>
                  <li aria-labelledby="dropdownNavbarLink">
                    <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown" data-dropdown-placement="right-start" type="button" class="flex justify-between items-center py-2 px-4 w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dropdown<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></button>
                    <div id="doubleDropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="right-start" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(10px, 0px, 0px);">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdownButton">
                          <li>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Overview</a>
                          </li>
                          <li>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">My downloads</a>
                          </li>
                          <li>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Billing</a>
                          </li>
                          <li>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Rewards</a>
                          </li>
                        </ul>
                    </div>
                  </li>
                  <li>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                  </li>
                </ul>
                <div class="py-1">
                  <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign out</a>
                </div>
            </div>
        </li>
        <li>
          <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
        </li>
        <li>
          <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
        </li>
        <li>
          <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<p>
Un nuevo año implica nuevos retos, nuevas metas y más empuje.
Es por eso que la Universidad Politécnica de Querétaro (UPQ) está lista para recibir y formar a líderes en la industria automotriz.

Sin duda, el 2020 y 2021 obligaron a que el sector educativo se reinventara y la UPQ no fue la excepción: reflexionamos, evolucionamos y mejoramos para adaptarnos a esta nueva normalidad.
Hoy, estamos preparados para afianzar nuestro lugar en el sector educativo estatal, nacional e internacional.

Uno de los motores que nos dará fortaleza este 2022 será la vinculación de nuestros estudiantes con la industria automotriz a través del Modelo de Formación Dual, un sistema característico de nuestra institución.

También sabemos que la salud física y mental de nuestros alumnos es primordial, por eso a través de la cultura y el deporte fortaleceremos las destrezas y competencias de nuestros alumnos.
Así que ¡vamos, Cardenales! ¡Volemos alto y formemos al talento automotriz que Querétaro y México necesitan!
Un nuevo año implica nuevos retos, nuevas metas y más empuje.
Es por eso que la Universidad Politécnica de Querétaro (UPQ) está lista para recibir y formar a líderes en la industria automotriz.

Sin duda, el 2020 y 2021 obligaron a que el sector educativo se reinventara y la UPQ no fue la excepción: reflexionamos, evolucionamos y mejoramos para adaptarnos a esta nueva normalidad.
Hoy, estamos preparados para afianzar nuestro lugar en el sector educativo estatal, nacional e internacional.

Uno de los motores que nos dará fortaleza este 2022 será la vinculación de nuestros estudiantes con la industria automotriz a través del Modelo de Formación Dual, un sistema característico de nuestra institución.

También sabemos que la salud física y mental de nuestros alumnos es primordial, por eso a través de la cultura y el deporte fortaleceremos las destrezas y competencias de nuestros alumnos.
Así que ¡vamos, Cardenales! ¡Volemos alto y formemos al talento automotriz que Querétaro y México necesitan!
Un nuevo año implica nuevos retos, nuevas metas y más empuje.
Es por eso que la Universidad Politécnica de Querétaro (UPQ) está lista para recibir y formar a líderes en la industria automotriz.

Sin duda, el 2020 y 2021 obligaron a que el sector educativo se reinventara y la UPQ no fue la excepción: reflexionamos, evolucionamos y mejoramos para adaptarnos a esta nueva normalidad.
Hoy, estamos preparados para afianzar nuestro lugar en el sector educativo estatal, nacional e internacional.

Uno de los motores que nos dará fortaleza este 2022 será la vinculación de nuestros estudiantes con la industria automotriz a través del Modelo de Formación Dual, un sistema característico de nuestra institución.

También sabemos que la salud física y mental de nuestros alumnos es primordial, por eso a través de la cultura y el deporte fortaleceremos las destrezas y competencias de nuestros alumnos.
Así que ¡vamos, Cardenales! ¡Volemos alto y formemos al talento automotriz que Querétaro y México necesitan!
</p>
<p>
Un nuevo año implica nuevos retos, nuevas metas y más empuje.
Es por eso que la Universidad Politécnica de Querétaro (UPQ) está lista para recibir y formar a líderes en la industria automotriz.

Sin duda, el 2020 y 2021 obligaron a que el sector educativo se reinventara y la UPQ no fue la excepción: reflexionamos, evolucionamos y mejoramos para adaptarnos a esta nueva normalidad.
Hoy, estamos preparados para afianzar nuestro lugar en el sector educativo estatal, nacional e internacional.

Uno de los motores que nos dará fortaleza este 2022 será la vinculación de nuestros estudiantes con la industria automotriz a través del Modelo de Formación Dual, un sistema característico de nuestra institución.

También sabemos que la salud física y mental de nuestros alumnos es primordial, por eso a través de la cultura y el deporte fortaleceremos las destrezas y competencias de nuestros alumnos.
Así que ¡vamos, Cardenales! ¡Volemos alto y formemos al talento automotriz que Querétaro y México necesitan!
Un nuevo año implica nuevos retos, nuevas metas y más empuje.
Es por eso que la Universidad Politécnica de Querétaro (UPQ) está lista para recibir y formar a líderes en la industria automotriz.

Sin duda, el 2020 y 2021 obligaron a que el sector educativo se reinventara y la UPQ no fue la excepción: reflexionamos, evolucionamos y mejoramos para adaptarnos a esta nueva normalidad.
Hoy, estamos preparados para afianzar nuestro lugar en el sector educativo estatal, nacional e internacional.

Uno de los motores que nos dará fortaleza este 2022 será la vinculación de nuestros estudiantes con la industria automotriz a través del Modelo de Formación Dual, un sistema característico de nuestra institución.

También sabemos que la salud física y mental de nuestros alumnos es primordial, por eso a través de la cultura y el deporte fortaleceremos las destrezas y competencias de nuestros alumnos.
Así que ¡vamos, Cardenales! ¡Volemos alto y formemos al talento automotriz que Querétaro y México necesitan!
Un nuevo año implica nuevos retos, nuevas metas y más empuje.
Es por eso que la Universidad Politécnica de Querétaro (UPQ) está lista para recibir y formar a líderes en la industria automotriz.

Sin duda, el 2020 y 2021 obligaron a que el sector educativo se reinventara y la UPQ no fue la excepción: reflexionamos, evolucionamos y mejoramos para adaptarnos a esta nueva normalidad.
Hoy, estamos preparados para afianzar nuestro lugar en el sector educativo estatal, nacional e internacional.

Uno de los motores que nos dará fortaleza este 2022 será la vinculación de nuestros estudiantes con la industria automotriz a través del Modelo de Formación Dual, un sistema característico de nuestra institución.

También sabemos que la salud física y mental de nuestros alumnos es primordial, por eso a través de la cultura y el deporte fortaleceremos las destrezas y competencias de nuestros alumnos.
Así que ¡vamos, Cardenales! ¡Volemos alto y formemos al talento automotriz que Querétaro y México necesitan!
</p>
<p>
Un nuevo año implica nuevos retos, nuevas metas y más empuje.
Es por eso que la Universidad Politécnica de Querétaro (UPQ) está lista para recibir y formar a líderes en la industria automotriz.

Sin duda, el 2020 y 2021 obligaron a que el sector educativo se reinventara y la UPQ no fue la excepción: reflexionamos, evolucionamos y mejoramos para adaptarnos a esta nueva normalidad.
Hoy, estamos preparados para afianzar nuestro lugar en el sector educativo estatal, nacional e internacional.

Uno de los motores que nos dará fortaleza este 2022 será la vinculación de nuestros estudiantes con la industria automotriz a través del Modelo de Formación Dual, un sistema característico de nuestra institución.

También sabemos que la salud física y mental de nuestros alumnos es primordial, por eso a través de la cultura y el deporte fortaleceremos las destrezas y competencias de nuestros alumnos.
Así que ¡vamos, Cardenales! ¡Volemos alto y formemos al talento automotriz que Querétaro y México necesitan!
Un nuevo año implica nuevos retos, nuevas metas y más empuje.
Es por eso que la Universidad Politécnica de Querétaro (UPQ) está lista para recibir y formar a líderes en la industria automotriz.

Sin duda, el 2020 y 2021 obligaron a que el sector educativo se reinventara y la UPQ no fue la excepción: reflexionamos, evolucionamos y mejoramos para adaptarnos a esta nueva normalidad.
Hoy, estamos preparados para afianzar nuestro lugar en el sector educativo estatal, nacional e internacional.

Uno de los motores que nos dará fortaleza este 2022 será la vinculación de nuestros estudiantes con la industria automotriz a través del Modelo de Formación Dual, un sistema característico de nuestra institución.

También sabemos que la salud física y mental de nuestros alumnos es primordial, por eso a través de la cultura y el deporte fortaleceremos las destrezas y competencias de nuestros alumnos.
Así que ¡vamos, Cardenales! ¡Volemos alto y formemos al talento automotriz que Querétaro y México necesitan!
Un nuevo año implica nuevos retos, nuevas metas y más empuje.
Es por eso que la Universidad Politécnica de Querétaro (UPQ) está lista para recibir y formar a líderes en la industria automotriz.

Sin duda, el 2020 y 2021 obligaron a que el sector educativo se reinventara y la UPQ no fue la excepción: reflexionamos, evolucionamos y mejoramos para adaptarnos a esta nueva normalidad.
Hoy, estamos preparados para afianzar nuestro lugar en el sector educativo estatal, nacional e internacional.

Uno de los motores que nos dará fortaleza este 2022 será la vinculación de nuestros estudiantes con la industria automotriz a través del Modelo de Formación Dual, un sistema característico de nuestra institución.

También sabemos que la salud física y mental de nuestros alumnos es primordial, por eso a través de la cultura y el deporte fortaleceremos las destrezas y competencias de nuestros alumnos.
Así que ¡vamos, Cardenales! ¡Volemos alto y formemos al talento automotriz que Querétaro y México necesitan!
</p>
<p>
Un nuevo año implica nuevos retos, nuevas metas y más empuje.
Es por eso que la Universidad Politécnica de Querétaro (UPQ) está lista para recibir y formar a líderes en la industria automotriz.

Sin duda, el 2020 y 2021 obligaron a que el sector educativo se reinventara y la UPQ no fue la excepción: reflexionamos, evolucionamos y mejoramos para adaptarnos a esta nueva normalidad.
Hoy, estamos preparados para afianzar nuestro lugar en el sector educativo estatal, nacional e internacional.

Uno de los motores que nos dará fortaleza este 2022 será la vinculación de nuestros estudiantes con la industria automotriz a través del Modelo de Formación Dual, un sistema característico de nuestra institución.

También sabemos que la salud física y mental de nuestros alumnos es primordial, por eso a través de la cultura y el deporte fortaleceremos las destrezas y competencias de nuestros alumnos.
Así que ¡vamos, Cardenales! ¡Volemos alto y formemos al talento automotriz que Querétaro y México necesitan!
Un nuevo año implica nuevos retos, nuevas metas y más empuje.
Es por eso que la Universidad Politécnica de Querétaro (UPQ) está lista para recibir y formar a líderes en la industria automotriz.

Sin duda, el 2020 y 2021 obligaron a que el sector educativo se reinventara y la UPQ no fue la excepción: reflexionamos, evolucionamos y mejoramos para adaptarnos a esta nueva normalidad.
Hoy, estamos preparados para afianzar nuestro lugar en el sector educativo estatal, nacional e internacional.

Uno de los motores que nos dará fortaleza este 2022 será la vinculación de nuestros estudiantes con la industria automotriz a través del Modelo de Formación Dual, un sistema característico de nuestra institución.

También sabemos que la salud física y mental de nuestros alumnos es primordial, por eso a través de la cultura y el deporte fortaleceremos las destrezas y competencias de nuestros alumnos.
Así que ¡vamos, Cardenales! ¡Volemos alto y formemos al talento automotriz que Querétaro y México necesitan!
Un nuevo año implica nuevos retos, nuevas metas y más empuje.
Es por eso que la Universidad Politécnica de Querétaro (UPQ) está lista para recibir y formar a líderes en la industria automotriz.

Sin duda, el 2020 y 2021 obligaron a que el sector educativo se reinventara y la UPQ no fue la excepción: reflexionamos, evolucionamos y mejoramos para adaptarnos a esta nueva normalidad.
Hoy, estamos preparados para afianzar nuestro lugar en el sector educativo estatal, nacional e internacional.

Uno de los motores que nos dará fortaleza este 2022 será la vinculación de nuestros estudiantes con la industria automotriz a través del Modelo de Formación Dual, un sistema característico de nuestra institución.

También sabemos que la salud física y mental de nuestros alumnos es primordial, por eso a través de la cultura y el deporte fortaleceremos las destrezas y competencias de nuestros alumnos.
Así que ¡vamos, Cardenales! ¡Volemos alto y formemos al talento automotriz que Querétaro y México necesitan!
</p>
<p>
Un nuevo año implica nuevos retos, nuevas metas y más empuje.
Es por eso que la Universidad Politécnica de Querétaro (UPQ) está lista para recibir y formar a líderes en la industria automotriz.

Sin duda, el 2020 y 2021 obligaron a que el sector educativo se reinventara y la UPQ no fue la excepción: reflexionamos, evolucionamos y mejoramos para adaptarnos a esta nueva normalidad.
Hoy, estamos preparados para afianzar nuestro lugar en el sector educativo estatal, nacional e internacional.

Uno de los motores que nos dará fortaleza este 2022 será la vinculación de nuestros estudiantes con la industria automotriz a través del Modelo de Formación Dual, un sistema característico de nuestra institución.

También sabemos que la salud física y mental de nuestros alumnos es primordial, por eso a través de la cultura y el deporte fortaleceremos las destrezas y competencias de nuestros alumnos.
Así que ¡vamos, Cardenales! ¡Volemos alto y formemos al talento automotriz que Querétaro y México necesitan!
Un nuevo año implica nuevos retos, nuevas metas y más empuje.
Es por eso que la Universidad Politécnica de Querétaro (UPQ) está lista para recibir y formar a líderes en la industria automotriz.

Sin duda, el 2020 y 2021 obligaron a que el sector educativo se reinventara y la UPQ no fue la excepción: reflexionamos, evolucionamos y mejoramos para adaptarnos a esta nueva normalidad.
Hoy, estamos preparados para afianzar nuestro lugar en el sector educativo estatal, nacional e internacional.

Uno de los motores que nos dará fortaleza este 2022 será la vinculación de nuestros estudiantes con la industria automotriz a través del Modelo de Formación Dual, un sistema característico de nuestra institución.

También sabemos que la salud física y mental de nuestros alumnos es primordial, por eso a través de la cultura y el deporte fortaleceremos las destrezas y competencias de nuestros alumnos.
Así que ¡vamos, Cardenales! ¡Volemos alto y formemos al talento automotriz que Querétaro y México necesitan!
Un nuevo año implica nuevos retos, nuevas metas y más empuje.
Es por eso que la Universidad Politécnica de Querétaro (UPQ) está lista para recibir y formar a líderes en la industria automotriz.

Sin duda, el 2020 y 2021 obligaron a que el sector educativo se reinventara y la UPQ no fue la excepción: reflexionamos, evolucionamos y mejoramos para adaptarnos a esta nueva normalidad.
Hoy, estamos preparados para afianzar nuestro lugar en el sector educativo estatal, nacional e internacional.

Uno de los motores que nos dará fortaleza este 2022 será la vinculación de nuestros estudiantes con la industria automotriz a través del Modelo de Formación Dual, un sistema característico de nuestra institución.

También sabemos que la salud física y mental de nuestros alumnos es primordial, por eso a través de la cultura y el deporte fortaleceremos las destrezas y competencias de nuestros alumnos.
Así que ¡vamos, Cardenales! ¡Volemos alto y formemos al talento automotriz que Querétaro y México necesitan!
</p>

    @if(Auth()->check())
    Hola Auth
    @endif
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>
</html>