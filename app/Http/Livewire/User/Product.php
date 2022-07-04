<?php

namespace App\Http\Livewire\User;

use App\Models\Product as ModelsProduct;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Product extends Component
{
    public $product_name, $domain, $key;
    public $search;


    public function render()
    {
        if ($this->search != "") {
            $products = ModelsProduct::orderBy('created_at', 'desc')->where(['user_id' => Auth::user()->id])->orWhere('product_name', 'LIKE', '%' . $this->search . '%')->get();
            return view('livewire.user.product', compact('products'))->layout('layouts.app');
        }
        $products = ModelsProduct::orderBy('created_at', 'desc')->where('user_id', Auth::user()->id)->get();
        return view('livewire.user.product', compact('products'))->layout('layouts.app');
    }

    public function generateKey()
    {
        function generateRandomString($length = 5)
        {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
        //usage 
        $string1 = generateRandomString(5);
        $string2 = generateRandomString(5);
        $string3 = generateRandomString(5);
        $string4 = generateRandomString(5);
        $string5 = generateRandomString(5);
        $string6 = generateRandomString(5);
        $string7 = generateRandomString(5);
        $license = $string1 . '-' . $string2 . '-' . $string3 . '-' . $string4 . '-' . $string5 . '-' . $string6 . '-' . $string7;
        $this->key = $license;
    }

    public function create()
    {
        $this->validate([
            'product_name' => ['required'],
            'domain' => ['required', 'unique:products'],
            'key' => ['required']
        ]);

        $products = new ModelsProduct();
        $products->product_name = $this->product_name;
        $products->domain = $this->domain;
        $products->user_id = Auth::user()->id;
        $products->key = $this->key;
        $products->product_id = rand(1000, 9999) . rand(1000, 9999);
        $result = $products->save();
        if ($result) {
            session()->flash('success', 'Product saved successfully');
            $this->dispatchBrowserEvent('close-model');
            $this->product_name = "";
            $this->domain = "";
            $this->key = "";
            $this->product_id = "";
        }
    }

    public function delete($id)
    {
        $products = ModelsProduct::findOrFail($id)->delete();
        if ($products) {
            session()->flash('success', 'Product Delete Successfully');
        }
    }
}
