<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BUIT</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>

<body class="min-h-screen bg-slate-100">

    {{-- background --}}

    {{-- header --}}



    <img src="img/ellipse.png " alt="rond1" class="absolute opacity-70 w-[5%] right-[60%] top-[2%] ">
    <img src="img/background-buit.png " alt="background buit" class="fixed opacity-80  object-cover min-w-0 right-0 bottom-0 ">


    <div
        class="absolute min-w-0 bg-slate-50/90 flex flex-row items-top justify-between py-1 shadow-md shadow-gray-20 rounded-lg top-8 left-12 right-12">
        <img src="img/LOGO-BIBLIO-UIT-V2.png " alt="logo bibliotheque" class="w-[8rem] ml-6">
        <img src="img/UIT-LOGO1.png " alt="logo université" class=" w-[11rem] mr-6 "></a>
    </div>

    <form action="POST" class="relative flex justify-center items-center align-middle my-auto">
        <div class="static bg-slate-50/90 rounded-lg h-[56%] w-96 mt-52">
            {{--  left-[35%] right-[35%] bottom-[30%] top-[30%]--}}
            <div class=" flex flex-col justify-center items-stretch py-8 px-4 " >

                <img src="img/BUIT-TABLEAU-DE BORD.png" alt="BUIT-Caractere" class="w-80 min-w-0 self-center pb-6 px-3 mx-auto ">

                <!-- User profile image -->
                <img src="img/USER-orange.png" alt="avatar utilisateur" class="w-[25%] self-center pb-3"/>

                <div class="font-'Raleway' text-center text-buit1 pb-6">Connectez-vous <br>Au Tableau de Bord <span class="font-bold">BUIT</span></div>

                {{-- bouton connexion google --}}
                <button type="submit" formaction="{{ url('auth/google') }}" class="w-[85%] flex flex-row  items-center  px-4 py-1  bg-white/80 text-indigo-900 font-normal font-'Raleway' text-lg leading-tight rounded shadow-md hover:bg-gray-100 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-300 active:shadow-lg transition duration-150 ease-in-out self-center">
                    <img src="img/logo-google.png" alt="logo google" class=" w-[10%]">
                    <div class="pl-4 tracking-widest">Connecter Avec Google</div>
                </button>

            </div>
        </div>
    </form>
    {{-- <footer
        class="absolute flex justify-center min-w-0 bg-slate-50/90  py-1 shadow-md shadow-gray-20 rounded-lg bottom-[2%] w-[60%] items-center">
        <div>@ss</div>

    </footer> --}}


</body>
