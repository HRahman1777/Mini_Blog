<?php

namespace App\Http\Livewire\Adm;

use App\Models\Category;
use Livewire\Component;

class CatagoryDetails extends Component
{
    public $catName;
    public $uCatName;

    public $tempId;


    public function OpenModalEdit($i)
    {
        $this->tempId = $i;
        $cf = Category::find($i);
        $this->uCatName = $cf->name;
        $this->dispatchBrowserEvent('OpenEditModal');
    }

    public function OpenModalDelete($i)
    {
        $this->tempId = $i;
        $this->dispatchBrowserEvent('OpenDeleteModal');
    }

    public function delete()
    {
        $id = $this->tempId;
        $del = Category::find($id)->delete();
        if ($del) {
            $this->dispatchBrowserEvent('delAlert');
        }
    }

    public function update()
    {
        $id = $this->tempId;
        $this->validate([
            'uCatName' => 'required',
        ]);

        $edit = Category::find($id)->update([
            'name' => $this->uCatName,
        ]);

        if ($edit) {
            $this->dispatchBrowserEvent('editdAlert');
        }
    }

    public function addCat()
    {
        $NewCat = new Category();
        $NewCat->name = $this->catName;
        $NewCat->save();
        $this->catName = '';
    }

    public function render()
    {
        $allCat = Category::orderBy('created_at', 'ASC')->get();
        return view('livewire.adm.catagory-details', ['allcat' => $allCat])->layout('layouts.adminDeshboardBase');
    }
}
