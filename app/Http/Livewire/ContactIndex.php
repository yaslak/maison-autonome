<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;
use Livewire\WithPagination;

class ContactIndex extends Component
{
    use WithPagination;

    public string $search = '';

    public string $order = 'desc';

    protected $queryString = [
        'search' => ['except' => '', 'as' => 'q'],
        'order'
    ];

    public function updatingSearch(): void
    {
        $this->resetPage('page');
    }

    public function render(): View
    {
        return view('livewire.contact-index',[
            'contacts'      => $this->contacts()
        ]);
    }

    public function mount(): void
    {
        $this->search = (request()->q) ?? '';
    }

    private function contacts(): LengthAwarePaginator
    {
        return $this->filter()
            ->paginate()
            ->withPath('/admin/contact?q='.$this->search.'&order='.$this->order);
    }

    private function filter(): Builder
    {
        return Contact::when($this->search, function (Builder $query)
        {
            return $query->filter($this->search);
        })->orderBy('id', $this->order);
    }
}
