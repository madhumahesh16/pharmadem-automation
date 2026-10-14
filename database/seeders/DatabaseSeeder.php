<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Campaign;
use App\Models\Lead;
use App\Models\FollowUp;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::updateOrCreate(['email' => 'admin@pharmadem.local'], ['name' => 'PharmaDEM Admin', 'password' => 'Admin@123', 'role' => 'admin']);
        $sales = User::updateOrCreate(['email' => 'sales@pharmadem.local'], ['name' => 'Demo Sales Executive', 'password' => 'Sales@123', 'role' => 'sales']);
        User::updateOrCreate(['email' => 'marketing@pharmadem.local'], ['name' => 'Demo Marketer', 'password' => 'Marketing@123', 'role' => 'marketer']);
        $c = Campaign::firstOrCreate(['name' => 'B2B LinkedIn Outreach'], ['channel' => 'LinkedIn', 'objective' => 'Connect with qualified B2B decision makers', 'target_audience' => 'B2B decision makers', 'start_date' => today(), 'end_date' => today()->addDays(30), 'budget' => 5000, 'status' => 'active']);
        $l = Lead::firstOrCreate(['email' => 'alex.morgan@example.com'], ['first_name' => 'Alex', 'last_name' => 'Morgan', 'company' => 'Northstar Labs', 'job_title' => 'Operations Director', 'phone' => '+1 555 010 2200', 'linkedin_url' => 'https://www.linkedin.com/', 'website' => 'https://example.com', 'industry' => 'Technology', 'location' => 'Austin, TX', 'source' => 'LinkedIn Sales Navigator', 'status' => 'qualified', 'lead_score' => 82, 'notes' => 'Demo record only.', 'owner_id' => $sales->id, 'campaign_id' => $c->id]);
        FollowUp::firstOrCreate(['lead_id' => $l->id, 'status' => 'pending'], ['assigned_to' => $sales->id, 'due_at' => now()->addDay(), 'type' => 'Email', 'notes' => 'Personalized follow-up']);
    }
}
