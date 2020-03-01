
var shoppingCart = (function() {
  
  cart = [];

  function Item(id, name, price, count) {
    this.id = id;
    this.name = name;
    this.price = price;
    this.count = count;
  }
 
  function saveCart() {
    localStorage.setItem('shoppingCart', JSON.stringify(cart));
  }
  
  function loadCart() {
    cart = JSON.parse(localStorage.getItem('shoppingCart'));
  }
  if (localStorage.getItem("shoppingCart") != null) {
    loadCart();
  }
  
  var obj = {};
  
  obj.addItemToCart = function(id, name, price, count) {
    for(var item in cart) {
      if(cart[item].id === id) {
        cart[item].count ++;
        saveCart();
        return;
      }
    }
    var item = new Item(id, name, price, count);
    cart.push(item);
    saveCart();
  }
  
  obj.setCountForItem = function(id, count) {
    for(var i in cart) {
      if (cart[i].id === id) {
        cart[i].count = count;
        break;
      }
    }
    saveCart();
  }

  obj.removeItemFromCartAll = function(id) {
    for(var item in cart) {
      if(cart[item].id === id) {
        cart.splice(item, 1);
        break;
      }
    }
    saveCart();
  }

  obj.totalCount = function() {
    var totalCount = 0;
    for(var item in cart) {
      totalCount += cart[item].count;
    }
    return totalCount;
  }

  obj.totalPrice = function() {
    var totalPrice = 0;
    for(var item in cart) {
      totalPrice += cart[item].price * cart[item].count;
    }
    return totalPrice;
  }

  obj.listCart = function() {
    var cartCopy = [];
    for(i in cart) {
      item = cart[i];
      itemCopy = {};
      for(p in item) {
        itemCopy[p] = item[p];

      }
      itemCopy.total = Number(item.price * item.count).toFixed(2);
      cartCopy.push(itemCopy)
    }
    return cartCopy;
  }

  return obj;
})();

  $('.addtocart').click(function(event) {
  event.preventDefault();
  var id = Number($(this).data('id'));
  var name = $(this).data('name');
  var price = Number($(this).data('price'));
  shoppingCart.addItemToCart(id, name, price, 1);
});


function displayCart() {
  var cartArray = shoppingCart.listCart();
  var output = "";
  for(var i in cartArray) {
    output += "<tr>"
      + "<td id='titre' name='titre' type='text'>" + cartArray[i].name + "</td>" 
      + "<td>" + cartArray[i].price + "<span>€</span></td>"
      + "<td><div class='input-group'>"
      + "<input id='qty' name='qty' type='number' class='item-count form-control' data-id='" + cartArray[i].id + "' value='" + cartArray[i].count + "'>"   
      + "<td><button type='button' class='delete-item btn btn-danger btn-sm trash' data-id=" + cartArray[i].id + ">remove</button></td>"
      + " = " 
      + "<td id='prixtotal' name='prixtotal'>" + cartArray[i].total + "<span>€</span></td>" 
      +  "</tr>";
  }
  $('.show-cart').html(output);
  $('.total-price').html(shoppingCart.totalPrice());
  $('.totalcount').html(shoppingCart.totalCount());
 
}

  $('.show-cart').on("click", ".delete-item", function(event) {
  var id = $(this).data('id')
  shoppingCart.removeItemFromCartAll(id);
  displayCart();
})

 $('.show-cart').on("change", ".item-count", function(event) {
   var id = $(this).data('id')
   var count = Number($(this).val());
  shoppingCart.setCountForItem(id, count);
  displayCart();
});

displayCart();

