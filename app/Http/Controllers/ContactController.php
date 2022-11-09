<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('admin.contact.index', [
            'contacts'  => Contact::paginate()
        ]);
    }
}
