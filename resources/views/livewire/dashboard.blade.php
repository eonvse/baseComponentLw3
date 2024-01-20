<div>
    <div class="fixed right-0 top-0">
        <x-button.dark-mode-wire />
    </div>

    <x-head.h1>Components</x-head.h1>
    <div class="grid grid-cols-3 space-x-10 px-5">
<!-- 
----------------------Head------------------------------
-->
        <div>
            <x-head.h2>Head</x-head.h2>
            <x-head.h1>x-head.h1</x-head.h1>
            <x-head.h2>x-head.h2</x-head.h2>
            <x-head.h3>x-head.h3</x-head.h3>
        </div>

<!-- 
----------------------Modal wire------------------------------
-->
        <div>
            <x-head.h2>Modal wire</x-head.h2>
            <div class="flex flex-col space-y-2">
                <x-button.primary wire:click="ShowModalWire">x-modal-wire</x-button.primary>
                <x-modal-wire wire:model="modalWire"><div class="p-10">Пустой div всплывающего окна</div></x-modal-wire>
        
                <x-button.create wire:click="ShowModalWireDialog">x-modal-wire.dialog</x-button.create>
                <x-modal-wire.dialog wire:model="modalWireDialog" maxWidth="md">
                    <x-slot name="title">
                        <span class="grow">x-modal-wire.dialog slot title</span>
                        <x-button.icon-cancel @click="show = false" wire:click="closeModalWireDialog" /></x-slot>
                    <x-slot name="content">
                        <div class="flex-col space-y-2">
                            <div>slot content</div>
                            <div>$type=='info' ? 'bg-blue-500 text-white dark:bg-indigo-600 dark:text-gray-300' : ''</div> 
                            <div>$type=='warn' ? 'bg-red-600 text-white dark:bg-rose-500 dark:text-gray-200' : ''</div>
                            <x-button.secondary @click="show = false" wire:click="closeModalWireDialog">Закрыть</x-button.secondary>
                        </div>                            
                    </x-slot>
                </x-modal-wire.dialog>
                <div>
                    <x-button.create wire:click="ShowModalWireDropdown">x-modal-wire.dropdown</x-button.create>
                    <x-modal-wire.dropdown wire:model="modalWireDropdown" maxWidth="sm">
                        SLOT
                        <x-button.secondary @click="show = false" wire:click="closeModalWireDropdown">Закрыть</x-button.secondary>
                    </x-modal-wire.dropdown>
                </div>
                <div>
                    <x-button.create wire:click="ShowModalWireInline">x-modal-wire.inline</x-button.create>
                    <x-modal-wire.inline wire:model="modalWireInline" maxWidth="sm">
                        SLOT
                        <x-button.icon-cancel @click="show = false" wire:click="closeModalWireInline" />
                    </x-modal-wire.inline>.
                </div>
            </div> 
        </div>
    

<!-- 
----------------------Sidebar------------------------------
-->
        <div>
            <x-head.h2>Sidebar</x-head.h2>
            <div>
                <x-button.primary wire:click="ShowSidebar">x-sidebar</x-button.primary>
                <x-sidebar wire:model="sidebar">                
                    <div class="p-10 flex-col space-y-2">
                        <div>slot content x-sidebar</div>
                        <x-button.secondary @click="show = false" wire:click="closeSidebar">Закрыть</x-button.secondary>
                    </div>
                </x-sidebar>

                <x-button.create wire:click="ShowSidebarRight">x-sidebar.right</x-button.create>
                <x-sidebar.right wire:model="sidebarRight">                
                    <div class="p-10 flex-col space-y-2">
                        <div>slot content x-sidebar.right</div>
                        <x-button.secondary @click="show = false" wire:click="closeSidebarRight">Закрыть</x-button.secondary>
                    </div>
                </x-sidebar.right>
        
            </div>
        </div>
    </div>

    <div class="grid grid-cols-3 space-x-10 px-5 mt-5">
<!-- 
----------------------Link------------------------------
-->
        <div>
            <x-head.h2>Link</x-head.h2>
            <x-link.a>x-link.a</x-link.a>
        </div>
<!-- 
----------------------Button------------------------------
-->        <div>
            <x-head.h2 class="text-center basis-full ml-5 mt-5">Button</x-head.h2>
            <div class="flex">
            <div class="flex flex-col flex-wrap items-center space-y-2 space-x-2">
                
                <x-button.create class="w-full">x-button.create</x-button.create>
                <x-button.secondary class="w-full">x-button.secondary</x-button.secondary>
                <x-button.primary class="w-full">x-button.primary</x-button.primary>
                <x-button.danger class="w-full">x-button.danger</x-button.danger>
                <x-button.text-cancel class="w-full">x-button.text-cancel</x-button.text-cancel>
                <x-button.text-edit class="w-full">x-button.text-edit</x-button.text-edit>
            </div>
            <div class="flex flex-wrap items-center content-center space-x-2 px-2">
                <x-tooltip.bottom>
                    <x-button.dark-mode />
                    <x-slot name="tooltip">x-button.dark-mode</x-slot>
                </x-tooltip.bottom>
                <x-tooltip.bottom class="">
                    <x-button.edit />?
                    <x-slot name="tooltip">?? icon ??? x-button.edit ????</x-slot>
                </x-tooltip.bottom>
                <x-tooltip.bottom class="">
                    <x-button.icon-edit />
                    <x-slot name="tooltip">x-button.icon-edit</x-slot>
                </x-tooltip.bottom>
                <x-tooltip.bottom class="">
                    <x-button.icon-del />
                    <x-slot name="tooltip">x-button.icon-del</x-slot>
                </x-tooltip.bottom>
                <x-tooltip.bottom class="">
                    <x-button.icon-plus />
                    <x-slot name="tooltip">x-button.icon-plus</x-slot>
                </x-tooltip.bottom>
                <x-tooltip.bottom class="">
                    <x-button.icon-minus />
                    <x-slot name="tooltip">x-button.icon-minus</x-slot>
                </x-tooltip.bottom>
                <x-tooltip.bottom class="">
                    <x-button.icon-ok />
                    <x-slot name="tooltip">x-button.icon-ok</x-slot>
                </x-tooltip.bottom>
                <x-tooltip.bottom class="">
                    <x-button.icon-cancel />
                    <x-slot name="tooltip">x-button.icon-cancel</x-slot>
                </x-tooltip.bottom>
                <x-tooltip.bottom class="">
                    <x-button.radio />
                    <x-slot name="tooltip">x-button.radio</x-slot>
                </x-tooltip.bottom>
            </div>
            </div>
        </div>
        <div>
            <div class="flex flex-wrap items-center space-y-2 mb-2">
                <x-head.h2 class="ml-5 mt-5 basis-full">Input</x-head.h2>
                <x-input.label>x-input.label</x-input.label>
                <x-input.select :items="$itemsSelect" noneTxt="x-input.select" />
                <x-input.textarea>x-input.textarea</x-input.textarea>
                <x-input.text value="x-input.text"></x-input.text>
            </div>
            <x-input.switch />x-input.switch
            <div class="flex items-center content-center space-x-2 bg-blue-100 p-2">
                <x-button.icon-edit wire:click="editDiv" title="Редактировать div" />
                <x-input.div-editable editable="{{ $showDivEditable ? 'true' : 'false' }}" class="text-lg text-red-800" wire:model="divEditable">
                    {!! $divEditable !!}
                </x-input.div-editable>
            </div>
        </div>
    </div>
<!-- 
----------------------Tooltip------------------------------
-->
        <div>
            <x-head.h2 class="ml-5 mt-5">Tooltip</x-head.h2>
            @php
                $percent = 100;
                $percent_class = 'bg-green-600 text-white';
                if ($percent<80) $percent_class = 'bg-yellow-300';
                if ($percent<40) $percent_class = 'bg-red-600 text-white';
            @endphp
            <div class="flex mx-5 space-x-2">
                <x-tooltip.absolute-bottom class="px-2 {{ $percent_class }}">
                    x-tooltip.absolute-bottom slot
                    <x-slot name='tooltip'>
                        absolute-bottom tooltip 
                    </x-slot>   
                </x-tooltip.absolute-bottom>
                <x-tooltip.absolute-right class="px-2 {{ $percent_class }}">
                    x-tooltip.absolute-right slot
                    <x-slot name='tooltip'>
                        absolute-right tooltip 
                    </x-slot>   
                </x-tooltip.absolute-right>
                <x-tooltip.bottom class="px-2">
                    x-tooltip.bottom slot
                    <x-slot name='tooltip'>
                        <div>x-tooltip.bottom x-slot name='tooltip' tooltip</div>
                        <div>dfgdfkgjlkdfghdfhgljksdfglsdfgglhsdflkghdflkghldfg</div>
                    </x-slot>   
                </x-tooltip.bottom>
                <x-tooltip.top class="px-2" translateY='two'>
                    x-tooltip.top slot
                    <x-slot name='tooltip'>
                        <div>x-tooltip.top x-slot name='tooltip' tooltip</div>
                        <div>dfgdfkgjlkdfghdfhgljksdfglsdfgglhsdflkghdflkghldfg</div>
                    </x-slot>   
                </x-tooltip.top>
                <x-tooltip.bottom-translate-x class="px-2" translateX="50%">
                    x-tooltip.bottom-translate-x slot
                    <x-slot name='tooltip'>
                        bottom-translate-x translateX="50%" tooltip 
                    </x-slot>   
                </x-tooltip.bottom-translate-x>    
            </div> 
        </div>

<!-- 
----------------------Table------------------------------
-->
    <x-head.h2 class="ml-5 mt-5">Table</x-head.h2>
                 <x-table>
                    <x-slot name="header">
                        <x-table.head rowspan=2>id</x-table.head>
                        <x-table.head scope="col" 
                                        sortable 
                                        wire:click="sortBy('surname')" 
                                        :direction="$sortField === 'surname' ? $sortDirection : null">Фамилия</x-table.head>
                        <x-table.head scope="col" 
                                        sortable 
                                        wire:click="sortBy('name')" 
                                        :direction="$sortField === 'name' ? $sortDirection : null">Имя</x-table.head>
                        <x-table.head rowspan=2 scope="col" 
                                        sortable 
                                        wire:click="sortBy('patronymic')" 
                                        :direction="$sortField === 'patronymic' ? $sortDirection : null">Отчество</x-table.head>
                        <x-table.head rowspan=2 scope="col">День рождения</x-table.head>
                        <x-table.head rowspan="2" >...</x-table.head>

                    </x-slot>
                    <x-slot name="searching">
                        <x-table.head colspan=2>
                            <div class="flex">
                                <x-input.text class="py-0 px-1 text-sm" wire:model.live="search" placeholder="Найти по ФИО..." />
                                @if (!empty($search))
                                <x-button.icon-cancel wire:click="$set('search', '')" title="Отменить" />
                                @endif
                            </div>    
                        </x-table.head>
                    </x-slot>
                        <x-table.row wire:loading.class.delay="bg-red-500">
                            <x-table.cell>
                                $user->id
                            </x-table.cell>
                            <x-table.cell>
                                $user->surname ?? '' 
                            </x-table.cell>
                            <x-table.cell>
                                $user->name
                            </x-table.cell>
                            <x-table.cell>
                                $user->patronymic ?? '' 
                            </x-table.cell>
                            <x-table.cell>
                                $user->birthday_format ?? '' 
                            </x-table.cell>
                            <x-table.cell>
                                <div class="flex items-center">
                                    <x-button.icon-edit title="Редактировать"/>
                                    <x-button.icon-del title="Удалить"/>
                                </div>
                            </x-table.cell>
                        </x-table.row>
                        <x-table.row wire:loading.class.delay="bg-red-500">
                            <x-table.cell>
                                $user->id
                            </x-table.cell>
                            <x-table.cell>
                                $user->surname ?? '' 
                            </x-table.cell>
                            <x-table.cell>
                                $user->name
                            </x-table.cell>
                            <x-table.cell>
                                $user->patronymic ?? '' 
                            </x-table.cell>
                            <x-table.cell>
                                $user->birthday_format ?? '' 
                            </x-table.cell>
                            <x-table.cell>
                                <div class="flex items-center">
                                    <x-button.icon-edit title="Редактировать"/>
                                    <x-button.icon-del title="Удалить"/>
                                </div>
                            </x-table.cell>
                        </x-table.row>
                        <x-table.row wire:loading.class.delay="bg-red-500">
                            <x-table.cell>
                                $user->id
                            </x-table.cell>
                            <x-table.cell>
                                $user->surname ?? '' 
                            </x-table.cell>
                            <x-table.cell>
                                $user->name
                            </x-table.cell>
                            <x-table.cell>
                                $user->patronymic ?? '' 
                            </x-table.cell>
                            <x-table.cell>
                                $user->birthday_format ?? '' 
                            </x-table.cell>
                            <x-table.cell>
                                <div class="flex items-center">
                                    <x-button.icon-edit title="Редактировать"/>
                                    <x-button.icon-del title="Удалить"/>
                                </div>
                            </x-table.cell>
                        </x-table.row>
                    </x-table>

<!-- 
----------------------Timetab------------------------------
-->
    <x-head.h2 class="ml-5 mt-5">Timetab ?</x-head.h2>

