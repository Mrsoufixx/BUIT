
<div class="flex items-center justify-around font-montserrat pt-20">
    <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4  xl:grid-cols-4 pt-3 ">
        <!-- 1 card -->
        <div class="relative bg-white px-4 py-4 rounded-3xl border-b-4 border-x-2 w-72 h-60 mt-16 sm:mt-16 lg:mt-16  shadow-xl hover:-translate-y-6 ease-in duration-500 font-montserrat ">
            <div class=" text-white font-bold flex items-center absolute rounded-full py-3 px-3 shadow-xl bg-green-500 left-4 -top-6 hover:animate-spin">
                <!-- svg  -->
                <svg class="w-9 h-9 fill-current" id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 382.51 335.62"><path d="M547.08,250.4c-1,6.77-1.7,13.6-3,20.32-7.07,37.5-25,69-53.33,94.45C466,387.43,437,401.61,403.91,405.91c-62.72,8.15-114.73-12.28-155.64-60.64-.48-.56-.87-1.18-1.53-2.1l18.59-14.53c47.42,61.1,131.43,70.11,189.21,33.84C512.68,326,537.1,256.94,514.84,192c-21.37-62.39-84.05-102.17-151.36-95.15-67.55,7-116.61,59.94-126,119H282l-58.82,58.83L164.57,216h47.8c2.4-9.42,4-18.7,7.11-27.44C242,125.15,286,85.54,352.5,74.41c79.71-13.35,154,30.55,183.57,105.89a157.13,157.13,0,0,1,10.34,45.48,35.37,35.37,0,0,0,.67,3.62Z" transform="translate(-164.57 -72.03)"/><path d="M435.4,302.74l-17.17,17.13c-.65-.61-1.56-1.44-2.43-2.31-18.56-18.55-37.08-37.16-55.73-55.63A16.12,16.12,0,0,1,355,249.61c.14-25.87.08-51.75.08-77.62v-3.88h24V172c0,23.5,0,47-.07,70.49a9.45,9.45,0,0,0,3,7.52c16.9,16.68,33.64,33.53,50.45,50.31C433.42,301.25,434.56,302,435.4,302.74Z" transform="translate(-164.57 -72.03)"/></svg>
            </div>
            <div class="mt-8">
                <p class="flex text-xl font-semibold my-2">Historique de prêts</p>
                <div class="border-t-2 "></div>
                <div class="grid grid-cols-2 divide-x-2 text-center my-2">
                    <div class="flex-col text-gray-400 text-lg  hover:text-gray-600">
                        <!-- svg  -->
                        <div class="text-3xl">{{$count_oldissue}}</div>
                        <div class="pt-1 ">Prêts </div>
                    </div>
                    <div class="flex-col  text-gray-400  text-lg  hover:text-gray-600">
                        <!-- svg  -->
                        <div class="text-3xl">{{$count_borrower}}</div>
                        <div class="pt-1 ">Prêteurs </div>

                    </div>
                </div>
                <div class="border-t-2 "></div>

                <div class="absolute mt-3 right-6 top-44">
                    <a href="oldIssuesList" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-green-600 rounded-lg hover:bg-green-700 focus:ring-2 focus:outline-none focus:ring-green-300">
                        Details
                        <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </div>
        </div>

        {{--  2   card   2  --}}
        <div class="relative bg-white px-4 py-4 rounded-3xl border-b-4 border-x-2 w-72 h-60 sm:mt-16 lg:mt-16 shadow-xl hover:-translate-y-6 ease-in duration-500">
            <div class=" text-white font-bold flex items-center absolute rounded-full py-3 px-3 shadow-xl bg-buit2 left-4 -top-6 hover:animate-spin">
                <!-- svg  -->
                <svg class=" fill-current w-10 h-10 text-semibold " id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 404.69 331.69"><path d="M146.38,202.76c3.91-3.64,7.88-7.23,11.72-10.95,2-1.92,3.76-4.07,5.71-6.2L187.5,209.7C212,134.93,260.93,90.13,339.57,84.26c58.1-4.33,105.52,19.34,142.33,64.88l-20.09,15.22c-41.7-48.25-93.16-66.84-154.81-48.3-45.54,13.69-75.31,45.33-91.46,90.92l21.35-21.44,17.78,18c-17.5,17.51-35.67,35.69-54.77,54.78a10.87,10.87,0,0,0-1.75-2.94Q174,231.08,149.68,206.9a32.93,32.93,0,0,0-3.3-2.55Z" transform="translate(-146.38 -83.76)"/><path d="M234.82,331.93c41.19,49.64,92.4,69.33,154.53,51.8,47.3-13.34,78-45.8,93.48-92.55l-21.28,21.58-17.89-17.83,53.43-53.42,54,54-17,17.21-22.93-23.3c-23.53,73.48-71.56,117.93-148.28,125.22-61.09,5.81-110.55-19-148.5-67.92Z" transform="translate(-146.38 -83.76)"/><path d="M255.53,323.2V190.32c.82-2.76,2.75-4.39,5.28-5.61,3.6-1.74,7.09-3.69,10.66-5.48,18.68-9.37,38-11,57.78-4.22,6.2,2.14,12,5.43,17.95,8.27a3.54,3.54,0,0,0,3.23-.12c2.48-1.36,5-2.64,7.54-3.91,18.74-9.41,38.14-11.13,57.94-4.17,7.15,2.51,13.81,6.43,20.72,9.64a8.89,8.89,0,0,1,5.28,5.6V323.2c-2.8,5.52-5.87,6.48-11.47,3.58-3.56-1.84-7.09-3.71-10.66-5.51-15.25-7.67-31.09-9.17-47.19-3.44-6.92,2.46-13.39,6.19-20,9.48a7.78,7.78,0,0,1-7.74,0q-5.82-3.18-11.77-6.12c-16.56-8.21-33.49-9.07-50.62-2.06-5.53,2.27-10.73,5.33-16.11,8a10.87,10.87,0,0,1-3.39,1.18C259.08,328.73,256.9,326.51,255.53,323.2Zm13.33-12.48c24.45-12.73,48.65-12.75,73.14,0V206.42c0-3.15-.05-6.31,0-9.46a2,2,0,0,0-1.29-2.11c-2.56-1.24-5.05-2.61-7.6-3.89a60,60,0,0,0-42-5c-7.35,1.72-13.89,5.29-20.52,8.68a2.79,2.79,0,0,0-1.75,2.92q.06,55.5,0,111Zm159.72,0V200.23a23.34,23.34,0,0,0-.05-3.45,2.77,2.77,0,0,0-1.11-1.76c-2.58-1.46-5.23-2.8-7.88-4.13a60.07,60.07,0,0,0-43.63-4.5c-6.75,1.79-12.77,5.19-18.93,8.3a2.55,2.55,0,0,0-1.57,2.68q.06,55.59,0,111.18c0,.64.05,1.28.08,2.1C380,298,404.17,298,428.58,310.71Z" transform="translate(-146.38 -83.76)"/></svg>
            </div>
            <div class="mt-8">
                <p class="text-xl font-semibold my-2">Prêt en cours</p>
                <div class="border-t-2 "></div>
                <div class="flex-col  text-gray-400 justify-center text-center text-6xl my-1 hover:text-gray-600">
                    <!-- svg  -->

                    <div class="my-3">{{$count_livre_op}}</div>

                </div>
                <div class="border-t-2 "></div>

                <div class="absolute mt-3 right-6 top-44">
                    <a href="issuesList" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-buit2 rounded-lg hover:bg-amber-500 focus:ring-2 focus:outline-none focus:ring-amber-300">
                        Details
                        <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </div>
        </div>

        {{--  3   card   3  --}}
        <div class="relative bg-white px-4 py-4 rounded-3xl border-b-4 border-x-2 w-72 h-60 sm:mt-8 lg:mt-16 shadow-xl hover:-translate-y-6 ease-in duration-500">
            <div class=" text-white font-bold flex items-center absolute rounded-full py-4 px-4 shadow-xl bg-red-600 left-4 -top-6 hover:animate-spin">
                <!-- svg  -->
                <svg class=" fill-current w-8 h-8 "id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 408.83 408.61"><path d="M559.6,154.21H527.66c0-8.76,0-17.23,0-25.7a31.84,31.84,0,0,0-.42-6.34,15.5,15.5,0,0,0-14.6-12.57c-6.5-.26-13,0-20,0V141.2H460.8V109.76H249.94v31.36h-32V109.66c-7.44,0-14.49-.44-21.45.12a15,15,0,0,0-13.59,14.44c-.33,12.75-.09,25.51-.09,38.63H312.26l-2.75,2.59c-9.74,9-19.57,17.95-29.17,27.12a7.71,7.71,0,0,1-5.88,2.43q-43.51-.11-87-.05h-4.7V403.61c0,12.94,6.06,18.94,19.11,18.94,24.09,0,48.17,0,72.26-.05a8.51,8.51,0,0,1,6.54,2.75c9.39,9,19,17.75,28.58,26.59,1,.88,1.91,1.77,2.86,2.66h-119l-5-1.22c-22.44-5.41-37.28-24.17-37.32-47.55q-.1-65.07,0-130.13,0-74.66,0-149.3c0-23.37,14.83-42.56,37.37-47.33,8.07-1.71,16.65-1,25-1.41,1.52-.07,3,0,4.85,0V45.88h31.85V77.33H460.69V45.91h32V77.58c6.91,0,13.54-.2,20.15,0,15.42.55,27.81,7.08,37.27,19.3,5.26,6.8,7.69,14.74,9.5,23Z" transform="translate(-150.77 -45.88)"/><path d="M559.6,274H472V242.14h32.9c-19.54-29.95-65.69-54.89-115.06-43.68-55.46,12.59-90.92,62.07-88.74,114.86,1.33,32.3,14.24,59.46,38.48,80.86s52.7,30,84.89,28c.94,10.67,1.85,21,2.77,31.27l-4.19,1H406.3c-4.07-.53-8.15-1-12.2-1.6-44.69-6.84-79.18-29.5-103.3-67.61-17.68-28-24.52-58.82-20.87-91.56,4.56-41,23.5-74.3,56.06-99.71,21.39-16.71,45.72-26.71,72.62-29.23,50.12-4.7,92.22,11.94,125.85,49.6.79.89,1.6,1.77,2.93,3.25V186.16H559.6Z" transform="translate(-150.77 -45.88)"/><path d="M559.6,319.53q-1.89,11.14-3.8,22.28c-.13.76-.35,1.52-.65,2.79L524.78,337c1.16-9.29,2.28-18.3,3.47-27.86H559.6Z" transform="translate(-150.77 -45.88)"/><path d="M385.22,354.68,364.64,330.5c10.48-8.93,20.65-17.69,30.95-26.29a7.07,7.07,0,0,0,2.78-6.08c-.1-21.67-.06-43.34-.06-65.33h31.76c.06,1.15.17,2.42.17,3.7,0,25.53,0,51.05.07,76.58a6.65,6.65,0,0,1-2.67,5.72c-13.32,11.22-26.53,22.57-39.78,33.86C387.06,353.34,386.2,353.93,385.22,354.68Z" transform="translate(-150.77 -45.88)"/><path d="M494.75,431.05l-32.18,16-10.64-30.26L477,404.31Z" transform="translate(-150.77 -45.88)"/><path d="M522.09,407.68c-8.5-7.77-16.14-14.74-23.72-21.65l16.29-22.85,28.18,15.19Z" transform="translate(-150.77 -45.88)"/></svg>
            </div>
            <div class="mt-8">
                <p class="text-xl font-semibold my-2">Prêts en retard</p>
                <div class="border-t-2 "></div>
                <div class="flex-col text-gray-400 text-center items-center text-6xl my-1 hover:text-gray-600">
                    <!-- svg  -->

                    <div class="my-3">{{$countretard}}</div>
                </div>
                <div class="border-t-2 "></div>

                <div class="absolute mt-3 right-6 top-44">
                    <a href="delayIssuesList" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-2 focus:outline-none focus:ring-red-300">
                        Details
                        <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </div>
        </div>

        {{--  4   card   4  --}}
        <div class="relative bg-white px-4 py-4 rounded-3xl border-b-4 border-x-2 w-72 h-60 sm:mt-8 lg:mt-16 shadow-xl hover:-translate-y-6 ease-in duration-500">
            <div class=" text-white font-bold flex items-center absolute rounded-full py-4 px-4 shadow-xl bg-buit1 left-4 -top-6 hover:animate-spin">
                <!-- svg  -->
                <svg class=" fill-current w-8 h-8 "id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 294.68 384"><path d="M246,57.9H490.52c8.19,3,10.9,9,10.87,17.51q-.25,104.58-.1,209.17,0,39.18,0,78.35a25.35,25.35,0,0,1-.83,7.39c-2,6.27-7.12,9.35-15,9.35H254.9c-1.38,0-2.76-.09-4.13,0-7.26.64-12.57,4.27-15.08,11.1s-1.2,13.06,4,18.29c3.86,3.89,8.68,5,14,5q115.1-.06,230.19,0c1.62,0,3.25,0,4.87.08a13.7,13.7,0,0,1,12.4,12.46c.56,7-2.41,11.22-10.65,15.27H246c-3.68-1.08-7.48-1.88-11-3.28-17.77-7-28.23-23.38-28.23-44q0-144.87,0-289.74c0-1.38,0-2.75.09-4.12,1-15.7,8.06-28,21.55-36C233.71,61.52,240.09,60.11,246,57.9Zm46,28V351.6H473.17V85.89ZM263.65,351.13V85.67c-3.28,0-6.28.21-9.25,0-11.16-.9-20,7-20,19.81.27,81.72.14,163.43.14,245.14v3.3Z" transform="translate(-206.72 -57.9)"/></svg>
            </div>
            <div class="mt-8">
                <p class="text-xl font-semibold my-2">Fonds documentaires</p>
                <div class="border-t-2 "></div>
                <div class="grid grid-cols-2 divide-x-2 text-center my-2">
                    <div class="flex-col  text-gray-400 text-lg  hover:text-gray-600">
                        <!-- svg  -->
                        <div class="text-3xl">{{$count_notices}}</div>
                        <div class="pt-1">Notices </div>
                    </div>
                    <div class="flex-col  text-gray-400 text-lg  hover:text-gray-600">
                        <!-- svg  -->
                        <div class="text-3xl">{{$count_exemplaire}}</div>
                        <div class="pt-1">Exemplaires </div>

                    </div>
                </div>

                <div class="border-t-2 "></div>
                <div class="absolute mt-3 right-6 top-44">
                    <a href="itemsList" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-buit1 rounded-lg hover:bg-indigo-900 focus:ring-2 focus:outline-none focus:ring-indigo-300">
                        Details
                        <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{--les charts--}}
<div class="grid grid-cols-1 gap-4 mx-auto sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3  xl:grid-cols-3 font-montserrat mx-10 mt-8">

    {{-- chart 1 --}}
    <div class="shadow-lg rounded-lg overflow-hidden ">
       <div class="py-3 px-5 bg-white">Catégorie des emprunteurs</div>
       <div class="h-[28rem] ">
           <livewire:livewire-column-chart
               key="{{ $chart->reactiveKey() }}"
               :column-chart-model="$chart"/>
       </div>
    </div>

    {{-- chart 2 --}}
    <div class="shadow-lg rounded-lg overflow-hidden">
        <div class="py-3 px-5 bg-white">Prêts Par mois</div>
        <div class="h-[28rem]">
            <livewire:livewire-line-chart
                key="{{ $linechart->reactiveKey() }}"
                :line-chart-model="$linechart"/>
        </div>
    </div>

    {{-- chart 3 --}}
    <div class="shadow-lg rounded-lg overflow-hidden">
        <div class="py-3 px-5 bg-white">Pôles</div>
        <div class="h-[28rem]">
            <livewire:livewire-pie-chart
                key="{{ $piechart->reactiveKey() }}"
                :pie-chart-model="$piechart"/>
        </div>

    </div>
</div>

{{-- les 2 tables --}}
<div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 p-4 gap-4 mt-4 mx-auto font-montserrat mx-6">

    <!-- top livre -->
    <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-white dark:bg-gray-800 w-full shadow-lg rounded-xl border-b-4">
      <div class="rounded-t mb-0 px-0 border-0">
        <div class="flex flex-wrap items-center  px-4 py-2">
          <div class="relative w-full max-w-full flex-grow flex-1 ">
            <h3 class="font-semibold text-base  text-gray-900 dark:text-gray-50">Livres demandés</h3>
          </div>
          {{-- <div class="relative w-full max-w-full flex-grow flex-1 text-right">
            <button class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">Voir Tout</button>
          </div> --}}
        </div>
        <div class="block w-full overflow-x-auto">
          <table class="items-center w-full bg-transparent border-collapse">
            <thead>
              <tr>
                <th class="px-3 bg-gray-50 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Classé N°</th>
                <th class="px-4 bg-gray-50 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Les Livres</th>
                <th class="px-4 bg-gray-50 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px">Emprunteurs</th>
              </tr>
            </thead>
            <tbody>
                @foreach ( $tablivres as $livre=>$items)

              <tr class="text-gray-600 dark:text-gray-100 hover:bg-amber-50/70 hover:text-gray-900">
                <th class="border-t-0 px-3 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">{{$loop->iteration}}</th>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-wrap p-4">{{$items->title}}</td>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                {{$items->nombre}}</td>
              </tr>

              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- top lecteur -->
    <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-white dark:bg-gray-800 w-full shadow-lg rounded-xl border-b-4">

        <div class="rounded-t mb-0 px-0 border-0">
          <div class="flex flex-wrap items-center px-4 py-2">
            <div class="relative w-full max-w-full flex-grow flex-1">
              <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Emprunteurs actifs</h3>
            </div>
            {{-- <div class="relative w-full max-w-full flex-grow flex-1 text-right">
              <button class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">Voir Tout</button>
            </div> --}}
          </div>
          <div class="block w-full overflow-x-auto">
            <table class="items-center w-full bg-transparent border-collapse">
              <thead>
                <tr>
                  <th class="px-3 bg-gray-50 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-wrap font-semibold text-left">Classé N°</th>
                  <th class="px-4 bg-gray-50 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-wrap font-semibold text-left">Nom Complet</th>
                  <th class="px-4 bg-gray-50 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-wrap font-semibold text-left min-w-140-px">Nombre de prêt</th>
                  <th class="px-4 bg-gray-50 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px">Fonction</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ( $tabpret as $pret=>$items)

                <tr class="text-gray-600 dark:text-gray-100 hover:bg-indigo-100/20 hover:text-gray-900">
                  <th class="text-center border-t-0 px-3 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4  ">{{$loop->iteration}}</th>
                  <td class=" border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-wrap p-4 ">{{$items->fullname}}</td>
                  <td class="text-center border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                  {{$items->nombre}}</td>
                  <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-wrap p-4">
                    {{$items->description}}</td>
                </tr>

                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>




