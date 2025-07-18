<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class TodoManagement extends Component
{
    public $filterStatus = [];
    public $selectedStatus= 'all' ;
    public $desc;
    public $selectedTaskId;
    public $isEdit = false;
    public $is_completed;
    public $search;
    //this function is executed automitically on page load
    public function mount(){
        $this->is_completed = false;
        $this->filterStatus = ['all','completed','pending'];
        $this->isEdit = false;
    }

    public function getTasks()
    {
        $user = Auth::user(); //store the current user in $user
        // $query = $user->tasks(); //get all tasks of the current user
        $query = $user->tasks();

        if ($this->selectedStatus !== 'all') {
            $status = $this->selectedStatus == 'completed' ? true : false;
            $query->where('is_completed', $status);
        }

        if (!empty($this->search)) {
            $query->where('description', 'like', '%' . $this->search . '%');
        }

        return $query->orderBy('id', 'desc')->paginate(4);
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
            session()->flash('success', 'Task updated successfully');
            return;
        }        
        try{
            //save the data
            Task::create([
                'description' => $this->desc,
                'is_completed' =>$this->is_completed,
                'user_id'=>Auth::user()->id //also store the authenticated user id
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
        $allTasks = $this->getTasks();
        return view('livewire.todo-management',
            [
                'allTasks' => $allTasks
            ]
        );
    }
}
