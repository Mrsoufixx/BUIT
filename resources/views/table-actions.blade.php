<div class="flex space-x-1 justify-around">
    {{-- <x-modal :value="$email">
        <x-slot name="trigger">
            <button class="p-1  text-red-600 hover:bg-red-600 hover:text-white rounded">

            <svg data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 40" class="w-4 h-3 fill-current"><path d="M41 21.84V39h7.53A3.47 3.47 0 0 0 52 35.53v-19ZM41 19l11-7.33V6.24a6.22 6.22 0 0 0-2.33-4.95 6.05 6.05 0 0 0-7.66.15l-1 .79Zm-27.19 1.82L26 28l12.35-7.27L37.44 5 26 14 14.72 5.15Zm-2.66-1.72V2.35L10 1.44a6.07 6.07 0 0 0-7.66-.15A6.22 6.22 0 0 0 0 6.24v5.43ZM0 16.49v19A3.47 3.47 0 0 0 3.47 39H11V21.84Z"/></svg>

            </button>
        </x-slot>
        <h1 class="text-2xl text-purple-700"></h1>
    </x-modal> --}}

    <button  wire:click="addToast" x-on:click="working = !working" class="p-1  text-red-600 hover:bg-red-600 hover:text-white rounded">

        <svg  wire:click='sendMail("{{$email}}", "{{$name}}","{{$title}}","{{$date}}","{{$subtitle}}")' data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 40" class="w-4 h-3 fill-current"><path d="M41 21.84V39h7.53A3.47 3.47 0 0 0 52 35.53v-19ZM41 19l11-7.33V6.24a6.22 6.22 0 0 0-2.33-4.95 6.05 6.05 0 0 0-7.66.15l-1 .79Zm-27.19 1.82L26 28l12.35-7.27L37.44 5 26 14 14.72 5.15Zm-2.66-1.72V2.35L10 1.44a6.07 6.07 0 0 0-7.66-.15A6.22 6.22 0 0 0 0 6.24v5.43ZM0 16.49v19A3.47 3.47 0 0 0 3.47 39H11V21.84Z"/></svg>

    </button>
</div>
