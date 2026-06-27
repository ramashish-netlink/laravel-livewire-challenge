<?php

use Livewire\Volt\Component;
use App\Models\Task;

new class extends Component {
    public string $title = '';

    public function addTask(): void
    {
        $this->validate([
            'title' => 'required|string|max:255',
        ]);

        Task::create([
            'title' => $this->title,
        ]);

        $this->reset('title');
    }

    public function toggle($id): void
    {
        $task = Task::find($id);
        if ($task) {
            $task->update([
                'completed' => !$task->completed,
            ]);
        }
    }

    public function with(): array
    {
        return [
            'tasks' => Task::all(),
        ];
    }
}; ?>

<div>
    <form wire:submit="addTask">
        <input type="text" wire:model="title" placeholder="New Task">
        <button type="submit">Add</button>
        @error('title') <span>{{ $message }}</span> @enderror
    </form>

    <ul>
        @foreach($tasks as $task)
            <li>
                <span style="{{ $task->completed ? 'text-decoration: line-through;' : '' }}">
                    {{ $task->title }}
                </span>
                <button wire:click="toggle({{ $task->id }})">
                    {{ $task->completed ? 'Undo' : 'Complete' }}
                </button>
            </li>
        @endforeach
    </ul>
</div>
