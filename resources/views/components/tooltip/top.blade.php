@props(['translateY'])

@php
  
$translateY = [
    'one' => '-translate-y-16',
    'two' => '-translate-y-24',
    'three' => '-translate-y-28',
][$translateY ?? 'one'];

@endphp

<div  {{ $attributes->merge(['class'=>'overflow-y-auto z-[100] cursor-pointer dark:text-gray-300']) }}
    x-data="{ tooltip: false }" 
    x-on:mouseover="tooltip = true" 
    x-on:mouseleave="tooltip = false">
    {{ $slot }}
    @isset($tooltip)
    <div x-cloak x-show="tooltip" class="px-2 border fixed {{ $translateY }} bg-yellow-100 text-black p-1 overflow-hidden transform transition-all rounded my-1 dark:bg-gray-500" }}
                    x-trap.inert.noscroll="show"
                    x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 sm:scale-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 sm:scale-100"
                    x-transition:leave-end="opacity-0 sm:scale-95">
        {{ $tooltip }}
    </div>
    @endisset
</div>