<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-purple-100 to-purple-500 py-8">
    <form wire:submit.prevent="saveData" class="bg-white shadow-xl rounded-xl p-8 w-full max-w-md border border-gray-100 flex flex-col gap-6">
        <h2 class="text-2xl font-semibold text-purple-800 mb-2 tracking-tight">Add a New Task</h2>
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
                positive
            />
        </div>
        <div class="flex items-center justify-between">
         <x-button type="button" flat label="Cancel" />
         <x-button type="submit" label="Save" class="bg-purple-600 hover:bg-pink-700 transition text-white rounded-lg px-6 py-2 font-medium shadow-sm mt-4"/>
        
        </div>
    </form>
</div>
