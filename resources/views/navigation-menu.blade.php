
<nav class="fixed z-40 min-w-0 w-full  border-b">
    <div x-data="{showMenu : false}" class="max-w-screen mx-auto flex justify-between  bg-white rounded-b-xl drop-shadow-md">
        <!-- Brand-->
        <a href="dashboard" class="flex items-center  p-2 ml-6">
            <!-- Logo-->
            <img src="img/LOGO-BIBLIO-UIT-V2.png" alt="logo buit" class="w-32">
        </a>
        <!-- Navbar Toggle Button -->
        <button @click="showMenu = !showMenu" class="block md:hidden text-gray-700 p-2 rounded hover:border focus:border focus:bg-gray-100 my-2 mr-5" type="button" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </button>

        <!-- Nav Links-->
        <div class="md:flex font-normal text-[14px] "
            :class="{ 'flex-row absolute top-24 rounded-b-xl border-b bg-white w-full px-1': showMenu, 'hidden': !showMenu}"
            id="navbar-main" x-cloak>
            <x-jet-nav-link
                        class="hover:shadow-inner  active:bg-gray-50"
                        href="dashboard" :active="request()->routeIs('dashboard')">
                            <svg class="w-4 h-4 fill-current mr-2" id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 360.04 360.04"><path d="M174,153.91c0-15.5,0-31,0-46.48.05-22,15.49-37.49,37.5-37.52q46.49-.06,93,0c22,0,37.49,15.45,37.52,37.49q.06,46.48,0,93c0,22-15.46,37.49-37.5,37.53q-46.47.06-93,0c-22,0-37.48-15.51-37.53-37.5C174,184.89,174,169.4,174,153.91Zm84.18-60c-15.75,0-31.49,0-47.24,0-7.91,0-12.92,5-12.93,12.84q0,47.06,0,94.11c0,8.11,5,13,13.13,13q46.86,0,93.73,0c8.2,0,13.11-4.88,13.12-13q0-46.86,0-93.73c0-8.37-4.89-13.2-13.32-13.22Q281.44,93.87,258.18,93.9Z" transform="translate(-173.98 -69.88)"/><path d="M450.28,69.9c15.37,0,30.74,0,46.11,0C518.48,70,534,85.32,534,107.32q.06,46.67,0,93.33c0,21.6-15.51,37.18-37,37.23q-47,.1-94.08,0c-21.28-.05-36.81-15.68-36.85-37q-.11-46.84,0-93.7c0-21.73,15.59-37.18,37.42-37.23C419.05,69.86,434.67,69.9,450.28,69.9Zm-.08,24q-23.43,0-46.87,0c-8.41,0-13.32,4.86-13.32,13.21q0,46.68,0,93.36c0,8.62,4.83,13.42,13.49,13.42q46.5,0,93,0c8.71,0,13.51-4.76,13.51-13.39q0-46.68,0-93.36c0-8.38-4.88-13.22-13.3-13.24Q473.46,93.87,450.2,93.9Z" transform="translate(-173.98 -69.88)"/><path d="M342,346q0,23,0,46.1c0,22.33-15.37,37.76-37.61,37.79q-46.29.06-92.58,0c-22.31,0-37.77-15.41-37.79-37.62q0-46.49,0-93c0-21.81,15.5-37.36,37.24-37.4q46.67-.07,93.33,0c22,0,37.36,15.52,37.41,37.61C342,315,342,330.5,342,346Zm-24,.08c0-15.75,0-31.5,0-47.24,0-7.92-5-12.92-12.85-12.93q-47.06,0-94.11,0c-8.1,0-13,5-13,13.12q0,46.88,0,93.74c0,8.16,4.91,13.11,13,13.12q46.87,0,93.74,0c8.39,0,13.2-4.87,13.21-13.32Q318,369.32,318,346.08Z" transform="translate(-173.98 -69.88)"/><path d="M449.92,429.9q-23.06,0-46.1,0c-22.49,0-37.8-15.41-37.81-38q0-46.11,0-92.21c0-22.46,15.42-37.79,38-37.81q46.11,0,92.21,0c22.49,0,37.79,15.39,37.8,38q0,46.11,0,92.21c0,22.51-15.37,37.78-38,37.81Q473,429.94,449.92,429.9Zm-.3-24q23.63,0,47.25,0c8.2,0,13.11-4.88,13.12-13q0-46.87,0-93.74c0-8.37-4.89-13.21-13.31-13.22H403.32c-8.41,0-13.31,4.87-13.31,13.22q0,46.68,0,93.36c0,8.61,4.84,13.4,13.51,13.41Q426.57,405.92,449.62,405.9Z" transform="translate(-173.98 -69.88)"/></svg>
                        {{ __('Dashboard') }}
            </x-jet-nav-link>
            <x-jet-nav-link
                        class="hover:shadow-inner active:bg-gray-50"
                        href="oldIssuesList" :active="request()->routeIs('oldIssuesList')">
                            <svg class="w-5 h-5 fill-current mr-2" id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 382.51 335.62"><path d="M547.08,250.4c-1,6.77-1.7,13.6-3,20.32-7.07,37.5-25,69-53.33,94.45C466,387.43,437,401.61,403.91,405.91c-62.72,8.15-114.73-12.28-155.64-60.64-.48-.56-.87-1.18-1.53-2.1l18.59-14.53c47.42,61.1,131.43,70.11,189.21,33.84C512.68,326,537.1,256.94,514.84,192c-21.37-62.39-84.05-102.17-151.36-95.15-67.55,7-116.61,59.94-126,119H282l-58.82,58.83L164.57,216h47.8c2.4-9.42,4-18.7,7.11-27.44C242,125.15,286,85.54,352.5,74.41c79.71-13.35,154,30.55,183.57,105.89a157.13,157.13,0,0,1,10.34,45.48,35.37,35.37,0,0,0,.67,3.62Z" transform="translate(-164.57 -72.03)"/><path d="M435.4,302.74l-17.17,17.13c-.65-.61-1.56-1.44-2.43-2.31-18.56-18.55-37.08-37.16-55.73-55.63A16.12,16.12,0,0,1,355,249.61c.14-25.87.08-51.75.08-77.62v-3.88h24V172c0,23.5,0,47-.07,70.49a9.45,9.45,0,0,0,3,7.52c16.9,16.68,33.64,33.53,50.45,50.31C433.42,301.25,434.56,302,435.4,302.74Z" transform="translate(-164.57 -72.03)"/></svg>
                        {{ __('Historique') }}
            </x-jet-nav-link>
            <x-jet-nav-link
                        class="hover:shadow-inner active:bg-gray-50"
                        href="issuesList" :active="request()->routeIs('issuesList')">
                            <svg class="w-5 h-5 fill-current mr-2"  id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 404.69 331.69"><path d="M146.38,202.76c3.91-3.64,7.88-7.23,11.72-10.95,2-1.92,3.76-4.07,5.71-6.2L187.5,209.7C212,134.93,260.93,90.13,339.57,84.26c58.1-4.33,105.52,19.34,142.33,64.88l-20.09,15.22c-41.7-48.25-93.16-66.84-154.81-48.3-45.54,13.69-75.31,45.33-91.46,90.92l21.35-21.44,17.78,18c-17.5,17.51-35.67,35.69-54.77,54.78a10.87,10.87,0,0,0-1.75-2.94Q174,231.08,149.68,206.9a32.93,32.93,0,0,0-3.3-2.55Z" transform="translate(-146.38 -83.76)"/><path d="M234.82,331.93c41.19,49.64,92.4,69.33,154.53,51.8,47.3-13.34,78-45.8,93.48-92.55l-21.28,21.58-17.89-17.83,53.43-53.42,54,54-17,17.21-22.93-23.3c-23.53,73.48-71.56,117.93-148.28,125.22-61.09,5.81-110.55-19-148.5-67.92Z" transform="translate(-146.38 -83.76)"/><path d="M255.53,323.2V190.32c.82-2.76,2.75-4.39,5.28-5.61,3.6-1.74,7.09-3.69,10.66-5.48,18.68-9.37,38-11,57.78-4.22,6.2,2.14,12,5.43,17.95,8.27a3.54,3.54,0,0,0,3.23-.12c2.48-1.36,5-2.64,7.54-3.91,18.74-9.41,38.14-11.13,57.94-4.17,7.15,2.51,13.81,6.43,20.72,9.64a8.89,8.89,0,0,1,5.28,5.6V323.2c-2.8,5.52-5.87,6.48-11.47,3.58-3.56-1.84-7.09-3.71-10.66-5.51-15.25-7.67-31.09-9.17-47.19-3.44-6.92,2.46-13.39,6.19-20,9.48a7.78,7.78,0,0,1-7.74,0q-5.82-3.18-11.77-6.12c-16.56-8.21-33.49-9.07-50.62-2.06-5.53,2.27-10.73,5.33-16.11,8a10.87,10.87,0,0,1-3.39,1.18C259.08,328.73,256.9,326.51,255.53,323.2Zm13.33-12.48c24.45-12.73,48.65-12.75,73.14,0V206.42c0-3.15-.05-6.31,0-9.46a2,2,0,0,0-1.29-2.11c-2.56-1.24-5.05-2.61-7.6-3.89a60,60,0,0,0-42-5c-7.35,1.72-13.89,5.29-20.52,8.68a2.79,2.79,0,0,0-1.75,2.92q.06,55.5,0,111Zm159.72,0V200.23a23.34,23.34,0,0,0-.05-3.45,2.77,2.77,0,0,0-1.11-1.76c-2.58-1.46-5.23-2.8-7.88-4.13a60.07,60.07,0,0,0-43.63-4.5c-6.75,1.79-12.77,5.19-18.93,8.3a2.55,2.55,0,0,0-1.57,2.68q.06,55.59,0,111.18c0,.64.05,1.28.08,2.1C380,298,404.17,298,428.58,310.71Z" transform="translate(-146.38 -83.76)"/></svg>
                        {{ __('Prêts') }}
            </x-jet-nav-link>
            <x-jet-nav-link
                        class="hover:shadow-inner active:bg-gray-50"
                        href="delayIssuesList" :active="request()->routeIs('delayIssuesList')">
                        <svg class="w-4 h-4 fill-current mr-2" id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 408.83 408.61"><path d="M559.6,154.21H527.66c0-8.76,0-17.23,0-25.7a31.84,31.84,0,0,0-.42-6.34,15.5,15.5,0,0,0-14.6-12.57c-6.5-.26-13,0-20,0V141.2H460.8V109.76H249.94v31.36h-32V109.66c-7.44,0-14.49-.44-21.45.12a15,15,0,0,0-13.59,14.44c-.33,12.75-.09,25.51-.09,38.63H312.26l-2.75,2.59c-9.74,9-19.57,17.95-29.17,27.12a7.71,7.71,0,0,1-5.88,2.43q-43.51-.11-87-.05h-4.7V403.61c0,12.94,6.06,18.94,19.11,18.94,24.09,0,48.17,0,72.26-.05a8.51,8.51,0,0,1,6.54,2.75c9.39,9,19,17.75,28.58,26.59,1,.88,1.91,1.77,2.86,2.66h-119l-5-1.22c-22.44-5.41-37.28-24.17-37.32-47.55q-.1-65.07,0-130.13,0-74.66,0-149.3c0-23.37,14.83-42.56,37.37-47.33,8.07-1.71,16.65-1,25-1.41,1.52-.07,3,0,4.85,0V45.88h31.85V77.33H460.69V45.91h32V77.58c6.91,0,13.54-.2,20.15,0,15.42.55,27.81,7.08,37.27,19.3,5.26,6.8,7.69,14.74,9.5,23Z" transform="translate(-150.77 -45.88)"/><path d="M559.6,274H472V242.14h32.9c-19.54-29.95-65.69-54.89-115.06-43.68-55.46,12.59-90.92,62.07-88.74,114.86,1.33,32.3,14.24,59.46,38.48,80.86s52.7,30,84.89,28c.94,10.67,1.85,21,2.77,31.27l-4.19,1H406.3c-4.07-.53-8.15-1-12.2-1.6-44.69-6.84-79.18-29.5-103.3-67.61-17.68-28-24.52-58.82-20.87-91.56,4.56-41,23.5-74.3,56.06-99.71,21.39-16.71,45.72-26.71,72.62-29.23,50.12-4.7,92.22,11.94,125.85,49.6.79.89,1.6,1.77,2.93,3.25V186.16H559.6Z" transform="translate(-150.77 -45.88)"/><path d="M559.6,319.53q-1.89,11.14-3.8,22.28c-.13.76-.35,1.52-.65,2.79L524.78,337c1.16-9.29,2.28-18.3,3.47-27.86H559.6Z" transform="translate(-150.77 -45.88)"/><path d="M385.22,354.68,364.64,330.5c10.48-8.93,20.65-17.69,30.95-26.29a7.07,7.07,0,0,0,2.78-6.08c-.1-21.67-.06-43.34-.06-65.33h31.76c.06,1.15.17,2.42.17,3.7,0,25.53,0,51.05.07,76.58a6.65,6.65,0,0,1-2.67,5.72c-13.32,11.22-26.53,22.57-39.78,33.86C387.06,353.34,386.2,353.93,385.22,354.68Z" transform="translate(-150.77 -45.88)"/><path d="M494.75,431.05l-32.18,16-10.64-30.26L477,404.31Z" transform="translate(-150.77 -45.88)"/><path d="M522.09,407.68c-8.5-7.77-16.14-14.74-23.72-21.65l16.29-22.85,28.18,15.19Z" transform="translate(-150.77 -45.88)"/></svg>
                        {{ __('Retard') }}
            </x-jet-nav-link>
        </div>
        <div class="flex items-center font-montserrat font-light text-gray-700  text-[14px] text-center mr-6">
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <div class=" hover:text-buit1 align-midlle">
                        <a href="{{ route('logout') }}" @click.prevent="$root.submit(); " class="mr-6">
                            <svg class="absolute w-6 fill-current top-10 right-4"id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 363.32 331.18"><path d="M239,163.53c1.54-4.3,2.52-8.91,4.74-12.83,7.12-12.61,18.33-18.74,32.73-18.76,44-.07,88-.16,132,0,19.58.08,34.12,12.27,37.43,30.65a34.36,34.36,0,0,1,.47,6q.06,16.84,0,33.7c0,5-2.84,8.08-7,8s-6.75-3.09-6.78-7.89c-.05-10.65,0-21.29,0-31.93,0-15.06-9.56-24.63-24.62-24.65q-65.45,0-130.91,0c-14.57,0-24,9.38-24,24q0,127.71,0,255.43c0,14.49,9.27,23.73,23.73,23.75q65.81,0,131.62,0c14.64,0,24.09-9.54,24.14-24.27.05-11,0-22,0-33,0-4.08,1.93-6.76,5.12-7.53a6.76,6.76,0,0,1,8.63,6.79c.09,12.89.35,25.8-.17,38.66-.73,17.88-17,33.12-35.31,33.27-23.53.2-47.07.06-70.6.07h-62.8c-19.95,0-33.43-10.84-37.88-30.39a3.12,3.12,0,0,0-.55-.86Z" transform="translate(-239 -131.86)"/><path d="M578.3,290.52,540.68,252.9c-5-5-10.06-10-15-15.06-3.52-3.57-3.85-7.67-1-10.65s7.24-2.78,10.9.88q32.16,32.06,64.28,64.16c3.14,3.14,3.3,6.76.41,10.09q-32.21,37.1-64.45,74.17c-3,3.44-5.81,4.25-9,2.77-2.95-1.36-4.77-4.41-3.85-7.55a15.34,15.34,0,0,1,3.24-5.35q25.73-29.81,51.58-59.5c.45-.52.86-1.08,1.87-2.36H338.35a27.33,27.33,0,0,1-4.25-.17,6.7,6.7,0,0,1-5.94-7.17,6.85,6.85,0,0,1,6.63-6.59c1.29-.1,2.6,0,3.9,0H578.3Z" transform="translate(-239 -131.86)"/></svg>
                            {{ __('Deconnecté') }}
                        </a>
                    </div>
                </form>
            </div>
    </div>
</nav>