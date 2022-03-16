<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class FormsLivewire extends Component
{
    public $name;


    public $type = [];
    public $field;
    public $disName;
    public $i      = 1;

    public function render()
    {
        return view('livewire.admin.forms-livewire')->extends('layouts.admin-layout');
    }

    public function add()
    {
        array_push($this->type, [$this->field, $this->disName]);
    }

    public function remove($i)
    {
        unset($this->type[$i]);
    }

    public function store()
    {

        // dd($this->type);
        foreach ($this->type as $key => $input) {
            // dd($key);
            // dd($input);
            //    dd( $input[$key][0]);

            if ($input[0] != 'button') {
                $this->validate(
                    [
                        $input[1]      => 'required',

                    ],

                );
            }
        }
    }
}
