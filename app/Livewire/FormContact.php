<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class FormContact extends Component
{
    public $name, $email, $phone;

    public function newContact()
    {
        // validation
        $this->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|min:5|max:50',
            'phone' => 'required|min:5|max:20',
        ]);

        // temporay store in log file
        Log::info('Novo contacto: ' . $this->name . ' - ' . $this->email . ' - ' . $this->phone);

        // // Option 1 - clear form
        // $this->name = '';
        // $this->email = '';
        // $this->phone = '';

        // Option 2 
        $this->reset();
    }

    public function render()
    {
        return view('livewire.form-contact');
    }
}
