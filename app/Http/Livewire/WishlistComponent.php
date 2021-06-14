<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class WishlistComponent extends Component
{

    public function removeFromWishlist($product_id){
        foreach(Cart::instance('wishlist')->content() as $witem){
            if($witem->id == $product_id){
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-count-component','refreshComponent');
                return;
            }
        }
    }

    public function moveProductFromWishlistToCart($rowid){
        $item = Cart::instance('wishlist')->get($rowid);
        Cart::instance('wishlist')->remove($rowid);
        Cart::instance('cart')->add($item->id,$item->name,1,$item->price)->associate('App\Models\Product');
        $this->emitTo('wishlist-count-component','refreshComponent');
        $this->emitTo('cart-count-component','refreshComponent');
    }

    public function render()
    {
        return view('livewire.wishlist-component')->layout('layouts.base');
    }
}
