
// ************************************************
// Shopping Cart API
// ************************************************

var shoppingCart = (function() {
    // =============================
    // Private methods and propeties
    // =============================
    cart = [];
    
    // Constructor
    function Item(id, name, price, discount, count, image) {
      this.id = id;
      this.name = name;
      this.price = price;
      this.discount = discount;
      this.count = count;
      this.image = image;
      this.salePrice = Math.round( ((this.price * ( 1 - this.discount)) / 100) * 100 ) ;
    }
    
    // Save cart
    function saveCart() {
      localStorage.setItem('shoppingCart', JSON.stringify(cart));
    }
    
      // Load cart
    function loadCart() {
      cart = JSON.parse(localStorage.getItem('shoppingCart'));
    }
    if (localStorage.getItem("shoppingCart") != null) {
      loadCart();
    }
    
  
    // =============================
    // Public methods and propeties
    // =============================
    var obj = {};
    
    // Add to cart
    obj.addItemToCart = function(id, name, price, discount, count, image) {
      for(var item in cart) {
        if(cart[item].id === id) {
          cart[item].count ++;
          saveCart();
          return;
        }
      }
      var item = new Item(id, name, price, discount, count, image);
      cart.push(item);
      saveCart();
    }
    // Set count from item
    obj.setCountForItem = function(id, count) {
      for(var i in cart) {
        if (cart[i].id === id) {
          cart[i].count = count;
          break;
        }
      }
    };
    // Remove item from cart
    obj.removeItemFromCart = function(id) {
        for(var item in cart) {
          if(cart[item].id === id) {
            cart[item].count --;
            if(cart[item].count === 0) {
              cart.splice(item, 1);
            }
            break;
          }
      }
      saveCart();
    }
  
    // Remove all items from cart
    obj.removeItemFromCartAll = function(id) {
      for(var item in cart) {
        if(cart[item].id === id) {
          cart.splice(item, 1);
          break;
        }
      }
      saveCart();
    }
  
    // Clear cart
    obj.clearCart = function() {
      cart = [];
      saveCart();
    }
  
    // Count cart 
    obj.totalCount = function() {
      var totalCount = 0;
      for(var item in cart) {
        totalCount += cart[item].count;
      }
      return totalCount;
    }
  
    // Total cart
    obj.totalCart = function() {
      var totalCart = 0;
      for(var item in cart) {
        totalCart += (cart[item].price * cart[item].count * ( 1 -  cart[item].discount));
      }
      return Number(totalCart.toFixed(2));
    }
  
    // List cart
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
  
    // cart : Array
    // Item : Object/Class
    // addItemToCart : Function
    // removeItemFromCart : Function
    // removeItemFromCartAll : Function
    // clearCart : Function
    // countCart : Function
    // totalCart : Function
    // listCart : Function
    // saveCart : Function
    // loadCart : Function
    return obj;
  })();
  
  
  // *****************************************
  // Triggers / Events
  // ***************************************** 
  // Add item
  $('.add-to-cart').click(function(event) {
    event.preventDefault();
    var id = $(this).data('id');
    var name = $(this).data('name');
    var price = Number($(this).data('price'));
    var image = $(this).data('image');
    var discount = Number($(this).data('discount'));
    if (id != null && name != null && price != null && image != null) {
      shoppingCart.addItemToCart(id, name, price, discount, 1, image);
    }
    displayCart();
  });
  
  // Clear items
  $('.clear-cart').click(function() {
    shoppingCart.clearCart();
    displayCart();
  });
  
  
  function displayCart() {
    var cartArray = shoppingCart.listCart();
    var output = "";
    for(var i in cartArray) {
      output += "<li>"
        + "<div class='row justify-content-center align-items-center'>" 
          + "<div class='col-3'><img class='img-responsive card-img p-3' src='" + cartArray[i].image +"'></div>"
          + "<div class='col-7'>"
            + "<div class='container-fluid price-content'><div class='row'><div class='name-content mb-2'>"+ cartArray[i].name +"</div></div></div>"
            + "<div class='container-fluid price-content'>"
              + "<div class='row justify-content-center align-items-center'>"
                + "<div class='col-6 price-group pl-0'>"
                  + "<button class='minus-item btn-dark rounded-0' data-id='" + cartArray[i].id + "'>-</button>"
                  + "<input type='number' class='item-count rounded-0 form-control' data-id='" + cartArray[i].id + "' value='" + cartArray[i].count + "'>"
                  + "<button class='plus-item btn-dark rounded-0' data-id='" + cartArray[i].id + "'>+</button>"
                + "</div>"
             
                + "<div class='col-2'>x</div><span class='col-4 align-middled'>$"+ cartArray[i].salePrice +"</span>"
              + "</div>"
            + "</div>"
          + "</div>"
          + "<a class='delete-item col-2 text-center' data-id='" + cartArray[i].id + "'><span class='align-bottom'><i class='fal fa-trash-alt'></i></span></a>"
        + "</div>"
        + "<div class='border-bottom mr-4 ml-4'></div>"
      + "</li>";
    }
    $('.show-cart').html(output);
    $('.total-cart').html('$' + shoppingCart.totalCart());
    $('.total-count').html(shoppingCart.totalCount());
    displayOverview();
  }
  
  // Delete item button
  
  $('.show-cart').on("click", ".delete-item", function(event) {
    var id = $(this).data('id')
    shoppingCart.removeItemFromCartAll(id);
    displayCart();
  })
  
  
  // -1
  $('.show-cart').on("click", ".minus-item", function(event) {
    var id = $(this).data('id')
    shoppingCart.removeItemFromCart(id);
    displayCart();
  })
  // +1
  $('.show-cart').on("click", ".plus-item", function(event) {
    var id = $(this).data('id')
    shoppingCart.addItemToCart(id);
    displayCart();
  })
  
  // Item count input
  $('.show-cart').on("change", ".item-count", function(event) {
     var id = $(this).data('id');
     var count = Number($(this).val());
    shoppingCart.setCountForItem(id, count);
    displayCart();
  });
  
  displayCart();

  function displayOverview() { }
  
// goto detail
$('.product-card').on("click", ".go-to-detail-product", function(event) {
  const id = $(this).data('id');
  console.log(id);

  $.ajax({
    type: "POST",
    url: "http://localhost:8080/01/index.php/shop/increaseView_Ajax/",
    dataType: 'json',
    data: {
        id: id,
    },
  });
  
})


