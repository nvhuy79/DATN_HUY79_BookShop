<?php



// namespace App\Helper;

// class Cart
// {
//     private $items = [];
//     private $total_quantity = 0;
//     private $total_price = 0;

//     public function __construct()
//     {
//         $this->items = session('cart') ?? [];
//         $this->calculateTotals();
//     }

//     public function list()
//     {
//         return $this->items;
//     }

//     public function addCart($product, $quantity = 1)
//     {

//         $item = [
//             'productId' => $product->id,
//             'price' => $product->sale_price > 0 ? $product->sale_price : $product->price,
//             'image' => $product->image,
//             'quantity' => $quantity
//         ];
//         $this->items[] = $item;
//         $this->calculateTotals();
//         $this->saveCart();
//     }

//     public function getTotalQuantity()
//     {
//         return $this->total_quantity;
//     }

//     public function getTotalPrice()
//     {
//         return $this->total_price;
//     }

//     private function calculateTotals()
//     {
//         $this->total_quantity = 0;
//         $this->total_price = 0;

//         foreach ($this->items as $item) {
//             if (is_array($item) && isset($item['price'], $item['quantity'])) {
//                 $this->total_quantity += $item['quantity'];
//                 $this->total_price += $item['price'] * $item['quantity'];
//             }
//         }
//     }

//     private function saveCart()
//     {
//         session(['cart' => $this->items]);
//     }
// }
