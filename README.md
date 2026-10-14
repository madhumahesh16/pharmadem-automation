# PharmaDEM — Digital Marketing & Sales Navigator Workspace

A Laravel 11 prospect and campaign workspace with lead management, pipeline visibility, campaign planning, scheduled follow-ups, CSV import/export, and a personalized outreach draft studio.

## Highlights

- **Growth dashboard:** prospect KPIs, stage-by-stage pipeline, recent leads and upcoming follow-ups.
- **Lead management:** create/update/delete prospects, search and filter by status, assign an owner/campaign, score leads, import CSV and export contacts.
- **Campaign studio:** plan LinkedIn, email, website, event and multichannel campaigns with budgets and status tracking.
- **Outreach studio:** generate editable, personalized connection requests, introductions, follow-ups and meeting requests from saved prospect details; adjust tone and copy the draft.
- **Follow-up planner:** assign calls, emails, LinkedIn messages and meetings, then mark completed activities.
- **Responsive UI:** mobile navigation, clear feedback messages, accessible form labels, reduced-motion support and responsive tables.

> Outreach Studio creates drafts only. It does not scrape LinkedIn, log in as a user, auto-send messages or bypass platform controls. Review and send messages manually through an approved channel.

## Requirements

- PHP 8.2+
- Composer
- Laravel-supported database: SQLite or MySQL
- For SQLite, enable `pdo_sqlite` and `sqlite3` in your PHP configuration.

## Run locally (Windows / XAMPP)

1. Extract the project and open a terminal in the `PharmaDEM_Base2` folder.
2. Install dependencies if needed:

   ```bash
   composer install
   ```

3. Create your environment file:

   ```bash
   copy .env.example .env
   php artisan key:generate
   ```

4. Confirm `.env` uses SQLite (`DB_CONNECTION=sqlite`) and that `database/database.sqlite` exists. If your PHP build does not have `pdo_sqlite` enabled, enable it in `php.ini` and restart the terminal/Apache, or configure MySQL instead.
5. Run migrations and demo data:

   ```bash
   php artisan migrate --seed
   ```

6. Start the app:

   ```bash
   php artisan serve
   ```

7. Open `http://127.0.0.1:8000`.

If you are using MySQL, create a database (for example `pharmadem_salesnavigator`) and set `DB_CONNECTION=mysql`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME` and `DB_PASSWORD` in `.env` before migrating. Make sure MySQL is running first.

## Demo logins

- Admin: `admin@pharmadem.local` / `Admin@123`
- Sales: `sales@pharmadem.local` / `Sales@123`
- Marketing: `marketing@pharmadem.local` / `Marketing@123`

These are local demo credentials only. Change them before any deployment and never expose a local `.env` file or production credentials.

## CSV import

The first row must contain headers. Supported columns:

`first_name,last_name,company,job_title,email,phone,linkedin_url,website,industry,location,source,status,lead_score,notes`

Allowed source values: `LinkedIn Sales Navigator`, `Website`, `Referral`, `Event`, `CSV Import`, `Other`.

Allowed lead statuses: `new`, `contacted`, `qualified`, `proposal`, `customer`, `lost`.

## Notes

- The app is built on Laravel 11 and PHP 8.2+.
- `storage/` and `bootstrap/cache/` must be writable by the PHP process.
- This project is an interview-task prototype, not a production-ready mass outreach system. Before production, add role-based authorization policies, rate limits, audit logs, queue-backed jobs, stronger credential management and automated tests.
