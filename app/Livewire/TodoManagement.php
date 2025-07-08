<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class TodoManagement extends Component
{
    public $filterStatus = [];
    public $selectedStatus= 'all' ;
    public $desc;
    public $selectedTaskId;
    public $isEdit = false;
    public $is_completed;
    public $allTasks = []; //store all the existing tasks
    public $search;
    //this function is executed automitically on page load
    public function mount(){
        $this->is_completed = false;
        $this->filterStatus = ['all','completed','pending'];
        $this->isEdit = false;
        $this->getTasks();
    }

    public function updatedSelectedStatus(){
        $this->getTasks();
    }

    public function updatedSearch(){
        $this->allTasks = Task::where('description','like',"%{$this->search}%")->get();
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
    public function editTask($id){
        // $task = Task::where("id",'=', $id)->first();

        $task = Task::find($id); //when we search by PK we use the function find()
        $this->desc = $task->description;
        // $this->is_completed = $task->is_completed == 1 ? true : false;
        if($task->is_completed==1){
            $this->is_completed = true;
        }else{
            $this->is_completed = false;
        }
        $this->selectedTaskId = $id;
        $this->isEdit = true;
    }
    public function saveData(){
        if($this->isEdit == true){
            $task = Task::find($this->selectedTaskId);
            $task->description = $this->desc;
            $task->is_completed = $this->is_completed;
            $task->save();
            
            $this->isEdit = false;
            $this->getTasks();
            session()->flash('success', 'Task updated successfully');
            return;
        }        
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
    public function deleteTask($id){
        try{
            Task::destroy($id);
            session()->flash('success', 'Task deleted successfully');
        }catch(\Exception $e){
            session()->flash('error', $e->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.todo-management');
    }
}
