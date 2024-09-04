<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Withpagination;

class Addtask extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function delete($idd){

        $model = User::find($idd);
        $model->deleted_by = auth()->Auth::user()->id;
        $model->save();
        $model->delete();
    }

    public function render()
    {
        $data = User::Paginate(10);
        return view('livewire.addtask')->with(compact('data'));
    }
}
