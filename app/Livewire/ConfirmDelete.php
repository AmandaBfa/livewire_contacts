<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class ConfirmDelete extends Component
{
    public Contact $contact;

    public function mount($id)
    {
        $this->contact = Contact::findOrFail($id);
    }

    // link para cancelar
    public function cancel()
    {
        return redirect()->route('home');
    }

    // link para confirmar
    public function delete()
    {
        $this->contact->delete();

        // Redireciona para lista de contatos com mensagem de sucesso
        return redirect()
            ->route('home');
    }

    #[Layout('components.layouts.app')]
    #[Title('Confirm delete')]
    public function render()
    {
        return view('livewire.confirm-delete');
    }
}
