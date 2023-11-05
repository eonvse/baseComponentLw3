<div>
    <div class="p-5">
    <x-head.h1>Components</x-head.h1>
    <x-head.h1 class="ml-5">Head</x-head.h1>
        <x-head.h1>x-head.h1</x-head.h1>
        <x-head.h2>x-head.h2</x-head.h2>
        <x-head.h3>x-head.h3</x-head.h3>

    <x-head.h1 class="ml-5 mt-5">Modal wire</x-head.h1>
    <div class="flex">
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

    <x-head.h1 class="ml-5 mt-5">Sidebar</x-head.h1>
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
 
    <x-head.h1 class="ml-5 mt-5">Button</x-head.h1>
    <div class="flex items-center space-x-2">
        <x-button.create>x-button.create</x-button.create>
        <x-button.danger>x-button.danger</x-button.danger>
        <x-button.dark-mode> x-button.dark-mode</x-button.dark-mode>
        <x-button.edit>??? icon ??? x-button.edit ????</x-button.edit>?
        <x-button.icon-cancel> x-button.icon-cancel</x-button.icon-cancel>
        <x-button.icon-del> x-button.icon-del</x-button.icon-del>
        <x-button.icon-edit> x-button.icon-edit</x-button.icon-edit>
        <x-button.icon-minus> x-button.icon-minus</x-button.icon-minus>
        <x-button.icon-ok> x-button.icon-ok</x-button.icon-ok>
        <x-button.icon-plus> x-button.icon-plus</x-button.icon-plus>
        <x-button.primary> x-button.primary</x-button.primary>
        <x-button.radio> x-button.radio</x-button.radio>
        <x-button.secondary>x-button.secondary</x-button.secondary>
        <x-button.text-cancel>x-button.text-cancel</x-button.text-cancel>
        <x-button.text-edit>x-button.text-edit</x-button.text-edit>
    </div>

    <x-head.h1 class="ml-5 mt-5">Input</x-head.h1>
    <div class="flex items-center space-x-8">
        <x-input.label>x-input.label</x-input.label>
        <x-input.select :items="$itemsSelect" noneTxt="x-input.select" />
        <x-input.textarea>x-input.textarea</x-input.textarea>
        <x-input.text value="x-input.text"></x-input.text>
    </div>
    <x-input.switch />x-input.switch

    <x-head.h1 class="ml-5 mt-5">Table</x-head.h1>
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

    <x-head.h1 class="ml-5 mt-5">Timetab ?</x-head.h1>

</div>
