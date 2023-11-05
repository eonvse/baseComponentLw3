<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    
    public $modalWire, $modalWireDialog, $modalWireDropdown,$modalWireInline, $sidebar, $sidebarRight;

    public $itemsSelect;

    public $search, $sortField, $sortDirection;

    public function mount()
    {
        $this->modalWire = false;
        $this->modalWireDialog = false;
        $this->modalWireDropdown = false;
        $this->modalWireInline=false;
        $this->sidebar=false;
        $this->sidebarRight=false;

        $this->itemsSelect = array (
            ['id'=>1,'name'=>'input.select'],
            ['id'=>2,'name'=>'input.select-color'],
            ['id'=>3,'name'=>'input.select-user'],
        );

    }

    public function ShowModalWire()
    {
        $this->modalWire=true;
    }

    public function CloseModalWire()
    {
        $this->modalWire=false;
    }


    public function ShowModalWireDialog()
    {
        $this->modalWireDialog=true;
    }

    public function closeModalWireDialog()
    {
        $this->modalWireDialog=false;
    }

    public function ShowModalWireDropdown()
    {
        $this->modalWireDropdown=true;
    }

    public function closeModalWireDropdown()
    {
        $this->modalWireDropdown=false;
    }

    public function ShowModalWireInline()
    {
        $this->modalWireInline=true;
    }

    public function closeModalWireInline()
    {
        $this->modalWireInline=false;
    }

    public function ShowSidebar()
    {
        $this->sidebar=true;
    }

    public function closeSidebar()
    {
        $this->sidebar=false;
    }

    public function ShowSidebarRight()
    {
        $this->sidebarRight=true;
    }

    public function closeSidebarRight()
    {
        $this->sidebarRight=false;
    }

    //------------------------------------------------    
    //-------Сортировка-------------------------------
    //------------------------------------------------    
    public function sortBy($field)
    {

        $this->sortDirection = $this->sortField === $field
                            ? $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc'
                            : 'asc';

        $this->sortField = $field;
        
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
