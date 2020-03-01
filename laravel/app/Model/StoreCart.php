<?php

namespace App\Model;

use App\Model\Produit;

class StoreCart
{
    public $items = null;
    public $totlalqty = 0;
    public $subtotal = 0;

    public function __construct($oldcart)
    {
    	if($oldcart){
    		$this->items = $oldcart->items;
    		$this->totalqty = $oldcart->totalqty;
    		$this->subtotal = $oldcart->subtotal;
    	} 
    }

    public function add($item, $id)
    {
    	$storeitem = ['quantity' => 0, 'price' => $item->prix, 'item' => $item->titre ];
    	if($this->items) {
    		if (array_key_exists($id, $this->items)) {
    			$storeitem = $this->$item[$id];
    		}
    	} 

    	$storeitem['quantity']++;
    	$storeitem['price'] = $item->prix * $storeitem['quantity'];
    	$this->items[$id] = $storeitem;
    	$this->totalqty = $storeitem['quantity']++;
    	$this->subtotal += $item->prix;

    }
}
