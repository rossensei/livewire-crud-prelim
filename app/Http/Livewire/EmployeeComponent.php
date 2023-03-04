<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employee;
use Livewire\WithPagination;

class EmployeeComponent extends Component
{
    public $sortByGender = 'all', $sortByDept = 'all', $search;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    // public function loadEmployees(){
    //     $employees = Employee::first();

    //     return compact('employees');
    // }

    public function render()
    {   
        $query = Employee::orderBy('empname')->search($this->search);

        if($this->sortByDept != 'all'){
            $query->where('department', $this->sortByDept);
        }
        if($this->sortByGender != 'all'){
            $query->where('gender', $this->sortByGender);
        }

        $employees = $query->paginate(10);

        return view('livewire.crud.employee-component', ['employees' => $employees])->layout('livewire.layouts.base');
    }
}
