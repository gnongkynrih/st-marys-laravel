<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class TodoManagement extends Component
{
    public $desc;
    public $is_completed;

    //this function is executed automitically on page load
    public function mount(){
        $this->is_completed = false;
    }
    public function saveData(){
        
        try{
            //save the data
            Task::create([
                'description' => $this->desc,
                'is_completed' =>$this->is_completed
            ]);

            // $task = new Task();
            // $task->description = $this->desc;
            // $task->save();

            //flash message in the session success
            session()->flash('success', 'Task created successfully');
            return redirect()->route('add-todo');
        }catch(\Exception $e){
            //flash message in the session error
            session()->flash('error', $e->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.todo-management');
    }
}
