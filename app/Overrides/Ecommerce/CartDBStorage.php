<?php

namespace App\Overrides\Ecommerce;

use App\Models\Ecommerce\CartStorage;
use Darryldecode\Cart\CartCollection;

class CartDBStorage
{

    public function has($key)
    {
        return CartStorage::find($key);
    }

    public function get($key)
    {
        if ($this->has($key)) {
            return new CartCollection(CartStorage::find($key)->cart_data);
        } else {
            return [];
        }
    }

    public function put($key, $value)
    {
        if ($row = CartStorage::find($key)) {
            // update
            $row->cart_data = $value;
            $row->save();
        } else {
            CartStorage::create([
                'id'        => $key,
                'cart_data' => $value,
            ]);
        }
    }
}
