<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Traits\ToastAlert;

class DelayIssuesList extends Component
{
    // use ToastAlert;

    // public function addToast(){
    //     $this->toast(message:'now message');

    // }

    public function render()
    {
        return view('livewire.delayIssuesList');
    }
}
