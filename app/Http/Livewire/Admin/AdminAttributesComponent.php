<?php

namespace App\Http\Livewire\Admin;

use App\Models\ProductAttribute;
use Livewire\Component;

class AdminAttributesComponent extends Component
{

    public function deleteAttribute($id){
        $attribute = ProductAttribute::find($id);
        $attribute->delete();
        session()->flash('message', 'Attribute has been deleted successfully!');
    }
    public function render()
    {
        $attributes = ProductAttribute::paginate(10);
        return view('livewire.admin.admin-attributes-component',['attributes'=>$attributes])->layout('layouts.base');;
    }
}
