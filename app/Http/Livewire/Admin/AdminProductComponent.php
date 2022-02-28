<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\File;


class AdminProductComponent extends Component
{

    use WithPagination;

    public $searchTerm;

    public function deleteProduct($id){
        $product = Product::find($id);
        if($product->image){
            File::delete(public_path('assets/images/products/').$product->image);
        }
        if($product->images){
            $images = explode(",",$product->images);
            foreach($images as $image){
                if($image){
                    File::delete(public_path('assets/images/products/').$image);
                }
            }
        }

        $product->delete();
        session()->flash('message', 'Product has been deleted successfully!');
    }
    public function render()
    {
        $search = '%'.$this->searchTerm.'%';
        $products = Product::where('name', 'LIKE',$search)
        ->orWhere('name', 'LIKE',$search)
        ->orWhere('stock_status', 'LIKE',$search)
        ->orWhere('regular_price', 'LIKE',$search)
        ->orWhere('sale_price', 'LIKE',$search)
        ->orWhere('SKU', 'LIKE',$search)
        ->orderBy('id', 'DESC')
        ->paginate(12);
        return view('livewire.admin.admin-product-component', ['products'=>$products])->layout('layouts.base');
    }
}
