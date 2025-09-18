{{-- <div class="card p-5">
    <p class="mb-3">Contacts</p>
    @if ($contacts->count() === 0)
        <div class="opacity-50">No contacts found</div>
    @else
        @foreach ($contacts as $contact)
            <div class="card bg-dark p-3 mb-1">
                <div class="row">
                    <div class="col-3">Name: {{ $contact->name }}</div>
                    <div class="col-4">Email: {{ $contact->email }}</div>
                    <div class="col-3">Phone: {{ $contact->phone }}</div>
                    <div class="col-2 text-end">
                        <a href="{{ route('contacts.delete', ['id' => $contact->id]) }}"
                            class="btn btn-sm btn-danger">Delete</a>
                        <a href="{{ route('contacts.edit', ['id' => $contact->id]) }}"
                            class="btn btn-sm btn-info">Edit</a>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div> --}}

<div class="card p-5">

    <div class="d-flex justify-content-between mb-3">
        <div>
            <h3>CONTACTS</h3>
        </div>
        <div>
            <div class="d-flex gap-2 aligh-itens-center">
                <span>Search:</span>
                <input type="text" wire:model.live="search" class="form-control form-control-sm">
                {{-- wire:model.live="search" ==> botão que faz a pesquisa pelo livewire --}}
            </div>
        </div>
    </div>

    @if ($contacts->count() === 0)
        <div class="opacity-50">No contacts found</div>
    @else
        @foreach ($contacts as $contact)
            <div class="card bg-dark text-light p-3 mb-2">
                <div class="d-flex align-items-center justify-content-between">

                    <!-- Informações -->
                    <div class="d-flex gap-4">
                        <div><strong>Name:</strong> {{ $contact->name }}</div>
                        <div><strong>Email:</strong> {{ $contact->email }}</div>
                        <div><strong>Phone:</strong> {{ $contact->phone }}</div>
                    </div>

                    <!-- Botões -->
                    <div class="d-flex gap-2">
                        <a href="{{ route('contacts.edit', ['id' => $contact->id]) }}"
                            class="btn btn-sm btn-success">Edit</a>
                        <a href="{{ route('contacts.delete', ['id' => $contact->id]) }}"
                            class="btn btn-sm btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
        <div>
            {{ $contacts->links() }}
        </div>
    @endif
</div>
