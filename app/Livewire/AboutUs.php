<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class AboutUs extends Component
{
    public function render()
    {
        //get all tasks and group by is_completed
        $incomplete = Task::where('is_completed','=',false)->count();
        $complete = Task::where('is_completed','=',true)->count();
        $totalTask = $incomplete + $complete;
        $labels = ['Incompleted','Completed'];
        $data = [$incomplete,$complete];
        $totalData = [$totalTask,$incomplete,$complete];
        $colors = ['#FF6384', '#36A2EB'];
        return view('livewire.about-us',[
            'labels'=>$labels,
            'data'=>$data,
            'colors'=>$colors,
            'totalData'=>$totalData
        ]);
    }
}
