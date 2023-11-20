<div  {{ $attributes->merge(['class'=>'overflow-y-auto z-50 cursor-pointer']) }}
    x-data="{ tooltip: false }" 
    x-on:mouseover="tooltip = true" 
    x-on:mouseleave="tooltip = false">
    {{ $slot }}
    @isset($tooltip)
    <div x-cloak x-show="tooltip" {{ $attributes->merge(['class'=>'fixed bg-yellow-100 text-black p-1 overflow-hidden transform transition-all rounded my-1 dark:bg-gray-500']) }}
                    x-trap.inert.noscroll="show"
                    x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
        {{ $tooltip }}
    </div>
    @endisset
</div>