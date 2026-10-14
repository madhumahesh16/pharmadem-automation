<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    private function rules()
    {
        return ['name' => 'required|string|max:180', 'channel' => 'required|in:LinkedIn,Email,Website,Events,Multi-channel', 'objective' => 'required|string|max:1000', 'target_audience' => 'nullable|string|max:1000', 'start_date' => 'nullable|date', 'end_date' => 'nullable|date|after_or_equal:start_date', 'budget' => 'nullable|numeric|min:0', 'status' => 'required|in:draft,active,paused,completed', 'notes' => 'nullable|string|max:5000'];
    }
    public function index()
    {
        $campaigns = Campaign::withCount('leads')->latest()->paginate(12);
        return view('campaigns.index', compact('campaigns'));
    }
    public function create()
    {
        return view('campaigns.form', ['campaign' => new Campaign]);
    }
    public function store(Request $r)
    {
        Campaign::create($r->validate($this->rules()));
        return redirect()->route('campaigns.index')->with('success', 'Campaign created.');
    }
    public function edit(Campaign $campaign)
    {
        return view('campaigns.form', compact('campaign'));
    }
    public function update(Request $r, Campaign $campaign)
    {
        $campaign->update($r->validate($this->rules()));
        return redirect()->route('campaigns.index')->with('success', 'Campaign updated.');
    }
    public function destroy(Campaign $campaign)
    {
        $campaign->leads()->update(['campaign_id' => null]);
        $campaign->delete();
        return back()->with('success', 'Campaign deleted.');
    }
}
