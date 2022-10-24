{{-- Titre --}}
<div class="p-4 my-8 ">
    <div class="flex justify-start items-center">
        <div class="text-2xl leading-7 font-'Raleway' font-semibold text-buit1">Bienvenue dans votre BUIT Tableau de bord
        </div>
    </div>
</div>

<div class="mt-4">
    <div class="flex flex-row flex-wrap justify-around items-center">

        {{-- Historique --}}
        <a href="oldIssuesList">
            <div
                class="p-4 max-w-sm mx-auto bg-white rounded-xl shadow-lg flex items-center space-x-4 border-x-4  border-green-500 active:bg-gray-100">

                <div class="shrink-0 active:fill-gray-100">
                    <img class="w-10" src="img/historique.svg" alt="historique Logo">
                </div>

                <div>
                    <div class="text-xl  text-buit1 uppercase font-'Raleway'">Historique</div>
                </div>

            </div>
        </a>


        {{-- en cours --}}

        <a href="issuesList">
            <div class="p-4 max-w-sm mx-auto bg-white rounded-xl shadow-lg flex items-center space-x-4 border-x-4  border-buit2 active:bg-gray-100">
                <div class="shrink-0 active:fill-gray-100">
                    <img class="w-10" src="img/emprunter-book.svg" alt="emprunter Logo">
                </div>
                <div>
                    <div class="text-xl  text-buit1 uppercase font-'Raleway'">en cours</div>
                </div>
            </div>
        </a>

        {{-- en retard --}}

        <a href="delayIssuesList">
            <div
                class="p-4 max-w-sm mx-auto bg-white rounded-xl shadow-lg flex items-center space-x-4 border-x-4  border-red-500 active:bg-gray-100">

                <div class="shrink-0 ">
                    <img class="w-10" src="img/retard.svg" alt="retard Logo">
                </div>

                <div class="text-xl  text-buit1 uppercase font-'Raleway'">en retard</div>

            </div>
        </a>
    </div>


    {{-- <div class="flex justify-around ">
        <button formaction=" {{ url('livewire\these') }}" class="flex justify-around items-center p-4 w-60 h-20 mt-10 bg-white rounded-xl shadow-lg  border-x-4  border-buit1 active:bg-gray-100 ">
                <img class="w-12" src="img/graduation-cap-fill.svg" alt="these Logo">
                <div class=" text-buit1 text-right text-xl uppercase font-'Raleway'">les theses</div>
        </button>
    </div> --}}


</div>
{{-- LES THESE --}}
