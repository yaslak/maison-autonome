<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ContactForm extends Component
{
    public Contact $contact;

    protected $listeners = [
        'changePhone'
    ];

    protected array $rules = [
        'contact.last_name' => ['nullable','string', 'max:255'],
        'contact.first_name'    => ['nullable','string', 'max:255'],
        'contact.phone' => ['required', 'string', 'max:255', 'regex:/^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$/i'],
        'contact.address'   => ['nullable','string', 'max:255'],
        'contact.city'  => ['nullable','string', 'max:255']
    ];

    protected $attributes = [
        'contact.last_name' => 'nom',
        'contact.first_name'    => 'prénom',
        'contact.phone' => 'numéro de téléphone',
        'contact.address'   => 'adresse',
        'contact.city'  => 'ville'
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
        $this->validate(attributes: $this->attributes);
        $this->contact->save();
        $this->contact = new Contact();
    }

    public function changePhone(string $phone)
    {
        $this->contact->phone = $phone;
        $this->dispatchBrowserEvent('contactScroll');
        $this->validate();
        $this->contact->save();
    }
}
