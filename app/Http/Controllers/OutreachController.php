<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class OutreachController extends Controller
{
    public function index(Request $request)
    {
        $leads = Lead::orderBy('first_name')->orderBy('last_name')->get();
        $selectedLead = $request->filled('lead') ? $leads->firstWhere('id', (int) $request->query('lead')) : null;

        return view('outreach.index', compact('leads', 'selectedLead'));
    }
}
