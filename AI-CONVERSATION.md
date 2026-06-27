
I need to build a Laravel Volt task list component. Here's the exact contract:

**Stack:** PHP 8.3+, Laravel 11, Livewire 3, Volt, Pest, MySQL

**What to build:**
- Migration: `tasks` table with `id`, `title` (string), `completed` (boolean, default false), timestamps
- Model: `App\Models\Task` (mass-assign `title`, `completed`)
- Volt Component: `resources/views/livewire/tasks.blade.php` mounted at `/tasks`

**Component must have:**
- Public property `$title` (string)
- Method `addTask()` - validates title as `required|string|max:255`, creates task, resets $title
- Method `toggle($id)` - flips completed status and saves

**Constraints:**
- Do NOT edit the test file
- Keep code simple and readable
- Use single-file Volt syntax

**For each file, provide:**
1. Exact code to paste
2. File path
3. Brief explanation

**After implementation, tests must pass:**
```bash
php artisan migrate
php artisan test
```

Let's build this. Start with the migration.

---

## OR Use This Even Simpler Version:

I need to build a Laravel Volt task list component in ~45 minutes. 

**Build me:**
1. Migration for `tasks` table (id, title string, completed boolean, timestamps)
2. `App\Models\Task` model (mass-assignable: title, completed)
3. Route at `/tasks` pointing to Volt component
4. Volt component at `resources/views/livewire/tasks.blade.php` with:
   - `$title` property
   - `addTask()` method (validates required|string|max:255, creates task, resets title)
   - `toggle($id)` method (flips completed, persists to DB)
   - View showing task list + add form + toggle buttons

**Stack locked:** PHP 8.3+, Laravel 11, Livewire 3, Volt, Pest, MySQL

Show me each file with path and exact code to paste. Tests must pass after.
