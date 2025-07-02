<div>
   <form wire:submit.prevent="addTodo">
      <x-input type="text" wire:model="newTodo" label="Todo"
      placeholder="Enter new todo" />
      <x-button type="submit" label="Add Todo" class="bg-purple-500 text-white"/>
   </form>
</div>
