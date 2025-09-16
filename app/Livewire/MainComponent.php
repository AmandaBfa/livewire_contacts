<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class MainComponent extends Component
{
    // adiciona um tito na aba do navegador (pagina web)
    #[Title('Livewire Contacts')]

    public function render()
    {
        return view('livewire.main-component');
    }
}
