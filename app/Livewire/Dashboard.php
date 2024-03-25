<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    
    public $modalWire, $modalWireDialog, $modalWireDropdown,$modalWireInline, $sidebar, $sidebarRight;

    public $itemsSelect, $inputText, $markerCheck;

    public $search, $sortField, $sortDirection;

    public $divEditable, $showDivEditable;

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
        $this->inputText='x-input.text + x-button.icon-clear';
        $this->divEditable='x-input.div-editable props-editable';
        $this->showDivEditable=false;
        $this->markerCheck = 0;

    }
    public function rules()
    {
        $rules = [];
    
        $rules['inputText'] = 'nullable|string|max:255';
    
        return $rules;
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

    public function editDiv()
    {
        $this->showDivEditable = !$this->showDivEditable;
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

    public function clearField ($field){
        $this->reset($field);
    }
    
    public function checkMarker()
    {
        if ($this->markerCheck == 1) $this->markerCheck = 0;
        else $this->markerCheck = 1;
    }

    public function render()
    {
        return view('livewire.dashboard');
    }

}
