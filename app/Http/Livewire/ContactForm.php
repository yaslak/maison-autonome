<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ContactForm extends Component
{
    public Contact $contact;

    protected array $rules = [
        'contact.last_name' => ['nullable','string', 'max:255'],
        'contact.first_name'    => ['nullable','string', 'max:255'],
        'contact.phone' => ['required', 'string', 'max:255'],
        'contact.address'   => ['nullable','string', 'max:255'],
        'contact.city'  => ['nullable','string', 'max:255']
    ];

    public function render(): View
    {
        return view('livewire.contact-form');
    }

    public function mount()
    {
        $this->contact = new Contact();
    }

    public function submit()
    {
        $this->validate();
        $this->contact->save();
        $this->contact = new Contact();
    }
}
