<div class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-br from-purple-100 to-purple-500 py-10 px-4">
    <div class="w-full max-w-5xl flex flex-col md:flex-row gap-8">
        <!-- Task Form Card -->
        <form wire:submit.prevent="saveData" class="bg-white shadow-2xl rounded-2xl p-8 w-full md:basis-1/3 border border-gray-100 flex flex-col gap-6">
            <h2 class="text-3xl font-bold text-purple-800 mb-3 tracking-tight">Add a New Task</h2>
            <x-input 
                type="text" 
                wire:model="desc" 
                label="Task"
                placeholder="Enter new todo" 
                class="mb-2"/>
            <div class="flex items-center justify-between mb-2">
                <span class="text-gray-500 text-sm">Completed</span>
                <x-toggle 
                    wire:model="is_completed"
                    class="{{ $is_completed ? 'positive' : 'negative' }}"
                    
                />
            </div>
            <div class="flex items-center gap-4 justify-end mt-4">
                <x-button type="button" flat label="Cancel" class="border border-gray-200 text-gray-600 hover:bg-gray-50" />
                <x-button type="submit" label="Save" class="bg-gradient-to-r from-purple-600 to-pink-500 hover:from-pink-600 hover:to-purple-700 transition text-white rounded-xl px-6 py-2 font-semibold shadow-md"/>
            </div>
        </form>

        <!-- Task List Card -->
        <div class="bg-white shadow-2xl rounded-2xl p-8 w-full md:basis-2/3 border border-gray-100 flex flex-col gap-4">
            <div class="flex items-center justify-between">
                <h3 class=" flex-1/2 text-2xl font-semibold text-purple-700 mb-4 flex items-center gap-2">
                    <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-3-3v6m9 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    Your Tasks
                </h3>
                <select wire:model.live="selectedStatus" class="flex-1/2 w-full p-2 border border-gray-200 rounded">
                    @foreach ($filterStatus as $status)
                        <option value="{{ $status }}">{{ $status }}</option>
                    @endforeach
                </select>
            </div>
            <x-input icon="magnifying-glass" placeholder="Search" wire:model.debounce.500ms.live="search"/>
            @forelse ($allTasks as $task)
                <div class="flex items-center justify-between p-4 rounded-xl border border-gray-100 shadow-sm bg-gray-50  mb-2">
                    <div class="flex items-center gap-3">
                        <span class="text-lg font-medium text-gray-800">{{ $task->description }}</span>
                    </div>
                    <div class="flex items-center gap-3">
                        @if($task->is_completed)
                            <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">Completed</span>
                        @else
                            <span class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-700 text-xs font-semibold">Pending</span>
                        @endif
                        <!-- Example action buttons: Edit/Delete -->
                        <button class="text-purple-500
                             hover:text-purple-700 
                             transition" 
                             wire:click="editTask({{ $task->id }})">
                            <x-icon name="pencil-square" />
                        </button>
                        <button class="text-red-400
                            hover:text-red-600 transition"
                            onclick="return confirm('Are you sure you want to delete this task?')"
                            wire:click="deleteTask({{ $task->id }})">
                            <x-icon name="trash" />
                        </button>
                    </div>
                </div>
            @empty
                <div class="text-gray-400 text-center py-8">
                    <svg class="mx-auto w-10 h-10 mb-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m9 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    No tasks yet. Add your first task!
                </div>
            @endforelse
            {{ $allTasks->links() }}
        </div>
    </div>

    
</div>
