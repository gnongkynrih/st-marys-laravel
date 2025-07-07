<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class TodoManagement extends Component
{
    public $filterStatus = [];
    public $selectedStatus= 'all' ;
    public $desc;
    public $is_completed;
    public $allTasks = []; //store all the existing tasks
    //this function is executed automitically on page load
    public function mount(){
        $this->is_completed = false;
        $this->filterStatus = ['all','completed','pending'];

        $this->getTasks();
    }

    public function updatedSelectedStatus(){
        $this->getTasks();
    }
    public function getTasks(){
        //select * from tasks order by id descending
        if($this->selectedStatus == 'all'){
            $this->allTasks = Task::orderBy('id','desc')->get();
        }else{
            $status = $this->selectedStatus == 'completed' ? true : false;
            $this->allTasks = Task::where('is_completed','=', $status)
                ->orderBy('id','desc')
                ->get();
        }
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
