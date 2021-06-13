<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
use Gloudemans\Shoppingcart\CartItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartComponent extends Component
{
    public function increaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty);
        $this->emitTo('cart-count-component', 'refreshComponent');
    }

    public function decreaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId, $qty);
        $this->emitTo('cart-count-component', 'refreshComponent');
    }

    public function destroy($rowId)
    {
        Cart::remove($rowId);
        $this->emitTo('cart-count-component', 'refreshComponent');
        session()->flash('success_message', 'Item has been removed');
    }

    public function destroyAll()
    {
        Cart::destroy();
        $this->emitTo('cart-count-component', 'refreshComponent');
    }

//    public function removeCoupon()
//    {
//        session()->forget('coupon');
//    }

    public function checkout()
    {
        if (Auth::check()) {
            return redirect()->route('checkout');
        } else {
            return redirect()->route('login');
        }
    }

    public function setAmountForCheckout()
    {
        session()->put('checkout', [
            'discount' => session::get('checkout')->discount,
            'subtotal' => session::get('checkout')->subtotal,
            'tax' => session::get('checkout')->tax,
            'total' => session::get('checkout')->total
        ]);
    }

    public function calculateMoney()
    {
        $Subtotal = 0;
        $Tax = 0;
        $ShippingFree = 0;

        $cartArray = Session::get('cart');
        if ($cartArray != null) {
            foreach ($cartArray as $items) {
                foreach ($items as $item) {
                    $Subtotal += $item->model->regular_price * $item->qty;
                    $Tax += $item->tax * $item->qty;
                }
            }
        } else {
            session()->forget('checkout');
        }

        if ($cartArray != null) {
            if (count(Session::get('cart')) > 0) {
                $Total = $Subtotal + $Tax + $ShippingFree;

                session()->put('checkout', [
                    'discount' => 0,
                    'subtotal' => $Subtotal,
                    'tax' => $Tax,
                    'total' => $Total
                ]);
            } else {
                session()->forget('checkout');
            }
        }
    }

    public function render()
    {
//        $this->setAmountForCheckout();

        $this->calculateMoney();
        return view('livewire.cart-component')->layout("layouts.base");
    }
}
