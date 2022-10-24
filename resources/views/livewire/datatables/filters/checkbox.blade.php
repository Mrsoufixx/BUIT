<div
    @if (isset($column['tooltip']['text'])) title="{{ $column['tooltip']['text'] }}" @endif
    class="flex flex-col items-center h-16 px-4 py-3 overflow-hidden text-xs font-medium tracking-wider text-center text-gray-500 uppercase align-top bg-blue-100 border-b border-gray-200 leading-4 space-y-2 focus:outline-none whitespace-nowrap">
    <div>{{ __('tout') }}</div>
    <div >

        <input
        type="checkbox"
        wire:click="toggleSelectAll"
        class="w-4 h-4  text-blue-600 form-checkbox transition duration-150 ease-in-out"
        @if(count($selected) === $this->results->total()) checked @endif
        />
    </div>
</div>
