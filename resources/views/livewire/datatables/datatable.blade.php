<div>
    @includeIf($beforeTableSlot)
    <div class="relative">
        <div class="flex items-center justify-between mb-3">
            <div class="flex items-center ">
                @if ($this->searchableColumns()->count())
                    <div class="flex rounded-lg  h-9 shadow-sm">
                        <div class="relative flex w-80 focus-within:z-10">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" stroke="currentColor" fill="none">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <input wire:model.debounce.500ms="search"
                                class="block w-full py-3 pl-10 text-sm border-gray-300 leading-4 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 focus:outline-none"
                                placeholder="{{ __('Rechercher dans la table de données') }} {{--{{ $this->searchableColumns()->map->label->join(', ') }}--}}"
                                type="text" />
                            <div class="absolute inset-y-0 right-0 flex items-center pr-2">
                                <button wire:click="$set('search', null)"
                                    class="text-gray-300 hover:text-red-600 focus:outline-none">
                                    <x-icons.x-circle class="w-5 h-5 stroke-current" />
                                </button>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            {{-- @if ($this->activeFilters)
            <span class="text-xl text-blue-600 font-montserrat uppercase">@lang('filtre actif')</span>
        @endif --}}
        @if ($this->activeFilters)
        <button wire:click="clearAllFilters"
            class="flex items-center p-2 text-xl font-medium font-montserrat tracking-wider text-blue-700 uppercase  space-x-2 rounded-md leading-4 hover:text-buit2 focus:outline-none"><span>{{ __('Réinitialiser') }}</span>
                <svg class="w-8 fill-current" id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 308.92 281.9"><path d="M566.51,340.31c-.81,3.74-1.47,7.5-2.44,11.19-7.61,29.18-35.91,52.18-71,49.75-29.41-2-56.22-26.76-61-57.11-6.62-42.27,28.6-80.83,71.22-78a67.83,67.83,0,0,1,62.55,58.91,21.33,21.33,0,0,0,.6,2.45ZM499,281.86c-28.46,0-50.8,22.36-50.79,50.74a52,52,0,0,0,52.13,52c28.58,0,50.48-22.16,50.39-50.9C550.62,304.62,527.87,281.82,499,281.86Z" transform="translate(-257.58 -156.92)"/><path d="M390.36,156.92H513c8,0,10.56,2.57,10.56,10.48,0,9.07-.18,18.15.08,27.21.13,4.65-1.51,8.07-4.73,11.32q-45.44,45.76-90.74,91.68a7.25,7.25,0,0,0-2.33,5.59c.08,32.54,0,65.08.12,97.63,0,5.5-2.05,8.85-7,11.27-16.86,8.19-33.57,16.71-50.35,25.07-2.71,1.34-5.54,2.46-8.54.87a8,8,0,0,1-4.54-7.52q0-9.12,0-18.24,0-54.42,0-108.84a7.6,7.6,0,0,0-2.42-5.86q-45.75-46.15-91.4-92.39a12.93,12.93,0,0,1-4.11-9.94c.16-9.71,0-19.42.05-29.13,0-6.32,2.87-9.2,9.16-9.2ZM371,418c1.39-.62,2.35-1,3.27-1.48,11-5.38,22-10.84,33-16.11,2.16-1,2.85-2.21,2.85-4.57-.09-32.22,0-64.45-.1-96.67a12.82,12.82,0,0,1,3.91-9.71q40.67-41,81.22-82.2a18.31,18.31,0,0,1,3.48-2.19l-1-1.13H283c1.08,1.19,1.8,2.05,2.58,2.84q40.61,41.34,81.25,82.62a13.73,13.73,0,0,1,4.25,10.5C371,338,371,376.09,371,414.18ZM507.88,172.63H273.49V188H507.88Z" transform="translate(-257.58 -156.92)"/><path d="M510,333.71c6.16,6.15,12.09,12,17.88,17.93a13.87,13.87,0,0,1,3.27,5,8,8,0,0,1-3.71,9.08,7.42,7.42,0,0,1-9.1-1.45c-5.67-5.63-11.25-11.37-16.82-17.1a22.94,22.94,0,0,1-2-2.83c-6.66,6.67-12.74,12.77-18.83,18.85-4.08,4.08-8.43,4.58-11.76,1.39-3.58-3.44-3.28-8.59.8-12.7,5.92-6,11.89-11.9,18.08-18.1-5.46-5.46-10.79-10.77-16.11-16.1-1.13-1.13-2.32-2.21-3.34-3.44A8.19,8.19,0,0,1,469,303c3-2.86,7.34-2.81,10.61.41,6.44,6.36,12.76,12.86,19.17,19.34,3.35-3.24,6.5-6.22,9.57-9.28s6.24-6.43,9.41-9.6c3.67-3.67,8.08-3.9,11.3-.68a8.18,8.18,0,0,1-.17,11.76C522.75,321.14,516.49,327.24,510,333.71Z" transform="translate(-257.58 -156.92)"/></svg>
        </button>
    @endif
            <div class="flex flex-wrap items-center space-x-1">
                <x-icons.cog wire:loading class="text-gray-400 h-9 w-9 animate-spin" />






                @if ($mail)
                <button wire:click="sendMails" class=" text-red-600 hover:bg-red-600 hover:text-white  flex items-center text-xs  tracking-wider bg-white/70 p-2 space-x-2  leading-4 focus:outline-none  px-3  font-medium font-montserrat uppercase border border-red-400  rounded-md "><span>{{ __('notifier tout') }}</span>
                    <svg data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 40" class="w-6 h-4 fill-current"><path
                    d="M41 21.84V39h7.53A3.47 3.47 0 0 0 52 35.53v-19ZM41 19l11-7.33V6.24a6.22 6.22 0 0 0-2.33-4.95 6.05 6.05 0 0 0-7.66.15l-1 .79Zm-27.19 1.82L26 28l12.35-7.27L37.44 5 26 14 14.72 5.15Zm-2.66-1.72V2.35L10 1.44a6.07 6.07 0 0 0-7.66-.15A6.22 6.22 0 0 0 0 6.24v5.43ZM0 16.49v19A3.47 3.47 0 0 0 3.47 39H11V21.84Z" /></svg>
                </button>
            @endif

                @if (count($this->massActionsOptions))
                    <div class="flex flex-wrap items-center  justify-center space-x-1">
                        {{-- <label for="datatables_mass_actions">{{ __('Exporter en ') }}:</label> --}}
                        <select wire:model="massActionOption"
                            class="pl-3 pr-5 my-2 text-xs text-blue-500 font-medium font-montserrat tracking-wider uppercase bg-white/80 border border-blue-400 space-x-3 rounded-md leading-4 focus:outline-none"
                            id="datatables_mass_actions">

                            @foreach ($this->massActionsOptions as $group => $items)
                                @if (!$group)
                                    @foreach ($items as $item)
                                        <option value="{{ $item['value'] }}">{{ $item['label'] }}</option>
                                    @endforeach
                                @else
                                    <optgroup label="{{ $group }}">
                                        @foreach ($items as $item)
                                            <option value="{{ $item['value'] }}">{{ $item['label'] }}</option>
                                        @endforeach
                                    </optgroup>
                                @endif
                            @endforeach
                        </select>
                        <button wire:click="massActionOptionHandler"
                            class="flex items-center px-4 py-2 text-xs font-medium font-montserrat tracking-wider text-blue-500 uppercase bg-white border border-blue-400 rounded-md leading-4 hover:bg-blue-600 hover:text-white focus:outline-none"
                            type="submit" title="Submit">Exporter
                            <svg class="w-4 fill-current ml-2"id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 383.31 383.23"><defs><style>.cls-1{fill:#fff;}</style></defs><path d="M229,367.26c1.71-3,3.85-5.52,7.67-5.72,4.5-.23,8.12,3.29,8.19,8.28.12,8.23,0,16.47,0,24.7q0,26,0,52c0,17,9.78,26.82,26.63,26.83H569.82c16.61,0,26.51-9.93,26.52-26.56,0-25.32,0-50.65,0-76,0-6.67,4.54-10.57,10.15-8.91,3.71,1.1,5.72,4,5.73,8.61q0,23.38,0,46.78c0,10-.21,20,0,29.94.59,23.54-16.75,39.25-33.57,41.44-.32,0-.6.38-.9.58H263.43c-.79-.27-1.56-.59-2.37-.78-14.91-3.56-25-12.47-30.11-27-.76-2.19-1.31-4.45-1.95-6.68Z" transform="translate(-229 -106.05)"/><path class="cls-1" d="M229,454.84c.64,2.23,1.19,4.49,1.95,6.68,5.08,14.51,15.2,23.42,30.11,27,.81.19,1.58.51,2.37.78H229Z" transform="translate(-229 -106.05)"/><path d="M412.58,349.91V118.47c0-1.25,0-2.5,0-3.75.23-5.19,3.36-8.6,7.91-8.67s7.92,3.42,8.15,8.82c0,1.25,0,2.49,0,3.74V349.86c1.56-1.42,2.55-2.25,3.46-3.16q22.23-22.2,44.45-44.43a31.67,31.67,0,0,1,3-2.8,7.89,7.89,0,0,1,11.08,11.11,35.16,35.16,0,0,1-3.07,3.28l-60.51,60.65c-4.15,4.15-8.68,4.22-12.75.14L353,313.21a24.76,24.76,0,0,1-2.76-3,7.89,7.89,0,0,1,10.9-11.06,25.27,25.27,0,0,1,3.32,3q22.25,22.2,44.47,44.42C409.9,347.45,410.89,348.33,412.58,349.91Z" transform="translate(-229 -106.05)"/></svg></button>
                    </div>
                @endif



                @if ($exportable)
                    <div x-data="{
                        init() {
                            window.livewire.on('startDownload', link => window.open(link, '_blank'))
                        }
                    }" x-init="init">
                        <button wire:click="export"
                            class="flex items-center px-3 text-xs font-medium tracking-wider text-green-500 uppercase bg-white border border-green-400 space-x-2 rounded-md leading-4 hover:bg-green-200 focus:outline-none"><span>{{ __('Export') }}</span>
                            <x-icons.excel class="m-2" />
                        </button>
                    </div>
                @endif

                @if ($hideable === 'select')
                    @include('datatables::hide-column-multiselect')
                @endif

                @foreach ($columnGroups as $name => $group)
                    <button wire:click="toggleGroup('{{ $name }}')"
                        class="px-3 py-2 text-xs font-medium tracking-wider text-green-500 uppercase bg-white border border-green-400 rounded-md leading-4 hover:bg-green-200  focus:outline-none">
                        <span
                            class="flex items-center h-5">{{ isset($this->groupLabels[$name]) ? __($this->groupLabels[$name]) : __('Toggle :group', ['group' => $name]) }}</span>
                    </button>
                @endforeach
                @includeIf($buttonsSlot)
            </div>
        </div>

        @if ($hideable === 'buttons')
            <div class="p-2 grid grid-cols-8 gap-2">
                @foreach ($this->columns as $index => $column)
                    @if ($column['hideable'])
                        <button wire:click.prefetch="toggle('{{ $index }}')"
                            class="px-3 py-2 rounded text-white text-xs focus:outline-none
                        {{ $column['hidden'] ? 'bg-blue-100 hover:bg-blue-300 text-blue-600' : 'bg-blue-500 hover:bg-blue-800' }}">
                            {{ $column['label'] }}
                        </button>
                    @endif
                @endforeach
            </div>
        @endif

        <div wire:loading.class="opacity-50"
            class="rounded-lg @unless($complex || $this->hidePagination) rounded-b-none @endunless shadow-lg bg-white max-w-screen overflow-x-scroll border-2 @if ($this->activeFilters) border-blue-500 @else border-transparent @endif @if ($complex) rounded-b-none border-b-0 @endif">
            <div>
                <div class="table min-w-full align-middle">
                    @unless($this->hideHeader)
                        <div class="table-row divide-x divide-gray-200">
                            @foreach ($this->columns as $index => $column)
                                @if ($hideable === 'inline')
                                    @include('datatables::header-inline-hide', [
                                        'column' => $column,
                                        'sort' => $sort,
                                    ])
                                @elseif($column['type'] === 'checkbox')
                                    @unless($column['hidden'])
                                        <div
                                            class="flex justify-center table-cell w-12 h-10 px-6 py-4 overflow-hidden text-xs font-medium tracking-wider text-left text-gray-500 uppercase align-top border-b border-gray-200 bg-gray-50 leading-4 focus:outline-none">
                                            {{-- mail --}}

                                            <div
                                                class="px-3 py-1 rounded @if (count($selected)) bg-orange-400 @else bg-gray-200 @endif text-white text-center">
                                                {{ count($selected) }}
                                            </div>

                                        </div>
                                    @endunless
                                @else
                                    @include('datatables::header-no-hide', [
                                        'column' => $column,
                                        'sort' => $sort,
                                    ])
                                @endif
                            @endforeach
                        </div>
                    @endunless
                    <div class="table-row bg-blue-100 divide-x divide-blue-200">
                        @foreach ($this->columns as $index => $column)
                            @if ($column['hidden'])
                                @if ($hideable === 'inline')
                                    <div class="table-cell w-5 overflow-hidden align-top bg-blue-100"></div>
                                @endif
                            @elseif($column['type'] === 'checkbox')
                                @include('datatables::filters.checkbox')
                            @elseif($column['type'] === 'label')
                                <div class="table-cell overflow-hidden align-top">
                                    {{ $column['label'] ?? '' }}
                                </div>
                            @else
                                <div class="table-cell overflow-hidden align-top">
                                    @isset($column['filterable'])
                                        @if (is_iterable($column['filterable']))
                                            <div wire:key="{{ $index }}">
                                                @include('datatables::filters.select', [
                                                    'index' => $index,
                                                    'name' => $column['label'],
                                                    'options' => $column['filterable'],
                                                ])
                                            </div>
                                        @else
                                            <div wire:key="{{ $index }}">
                                                @include('datatables::filters.' .
                                                        ($column['filterView'] ?? $column['type']),
                                                    ['index' => $index, 'name' => $column['label']])
                                            </div>
                                        @endif
                                    @endisset
                                </div>
                            @endif
                        @endforeach
                    </div>
                    @foreach ($this->results as $row)
                        <div class="table-row p-1 {{ $this->rowClasses($row, $loop) }}">
                            @foreach ($this->columns as $column)
                                @if ($column['hidden'])
                                    @if ($hideable === 'inline')
                                        <div
                                            class="table-cell w-5 @unless($column['wrappable']) whitespace-nowrap truncate @endunless overflow-hidden align-top">
                                        </div>
                                    @endif
                                @elseif($column['type'] === 'checkbox')
                                    @include('datatables::checkbox', ['value' => $row->checkbox_attribute])
                                @elseif($column['type'] === 'label')
                                    @include('datatables::label')
                                @else
                                    <div
                                        class="table-cell px-6 py-2 @unless($column['wrappable']) whitespace-nowrap truncate @endunless @if ($column['contentAlign'] === 'right') text-right @elseif($column['contentAlign'] === 'center') text-center @else text-left @endif {{ $this->cellClasses($row, $column) }}">
                                        {!! $row->{$column['name']} !!}
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endforeach

                    @if ($this->hasSummaryRow())
                        <div class="table-row p-1">
                            @foreach ($this->columns as $column)
                                @unless($column['hidden'])
                                    @if ($column['summary'])
                                        <div
                                            class="table-cell px-6 py-2 @unless($column['wrappable']) whitespace-nowrap truncate @endunless @if ($column['contentAlign'] === 'right') text-right @elseif($column['contentAlign'] === 'center') text-center @else text-left @endif {{ $this->cellClasses($row, $column) }}">
                                            {{ $this->summarize($column['name']) }}
                                        </div>
                                    @else
                                        <div class="table-cell"></div>
                                    @endif
                                @endunless
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
            @if ($this->results->isEmpty())
                <p class="p-3 text-lg text-center">
                    {{ __("There's Nothing to show at the moment") }}
                </p>
            @endif
        </div>

        @unless($this->hidePagination)
            <div
                class="max-w-screen bg-white @unless($complex) rounded-b-lg @endunless border-4 border-t-0 border-b-0 @if ($this->activeFilters) border-blue-500 @else border-transparent @endif">
                <div class="items-center justify-between p-2 sm:flex">
                    {{-- check if there is any data --}}
                    @if (count($this->results))
                        <div class="flex items-center my-2 sm:my-0">
                            <select name="perPage"
                                class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 form-select leading-6 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5"
                                wire:model="perPage">
                                @foreach (config('livewire-datatables.per_page_options', [10, 25, 50, 100]) as $per_page_option)
                                    <option value="{{ $per_page_option }}">{{ $per_page_option }}</option>
                                @endforeach
                                <option value="99999999">{{ __('All') }}</option>
                            </select>
                        </div>

                        <div class="my-4 sm:my-0">
                            <div class="lg:hidden">
                                <span
                                    class="space-x-2">{{ $this->results->links('datatables::tailwind-simple-pagination') }}</span>
                            </div>

                            <div class="justify-center hidden lg:flex">
                                <span>{{ $this->results->links('datatables::tailwind-pagination') }}</span>
                            </div>
                        </div>

                        <div class="flex justify-end text-gray-600">
                            {{ __('Results') }} {{ $this->results->firstItem() }} - {{ $this->results->lastItem() }}
                            {{ __('of') }}
                            {{ $this->results->total() }}
                        </div>
                    @endif
                </div>
            </div>
            @endif
        </div>

        @if ($complex)
            <div
                class="bg-gray-50 px-4 py-4 rounded-b-lg rounded-t-none shadow-lg border-2 @if ($this->activeFilters) border-blue-500 @else border-transparent @endif @if ($complex) border-t-0 @endif">
                <livewire:complex-query :columns="$this->complexColumns" :persistKey="$this->persistKey" :savedQueries="method_exists($this, 'getSavedQueries') ? $this->getSavedQueries() : null" />
            </div>
        @endif

        @includeIf($afterTableSlot)

        <span
            class="hidden text-sm text-left text-center text-right text-gray-900 bg-gray-100 bg-yellow-100 leading-5 bg-gray-50"></span>
    </div>
