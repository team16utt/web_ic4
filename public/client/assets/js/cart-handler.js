let cart = []; //gio hang (save sesion)
const pricesDOM = document.querySelectorAll('.price');
const prices = Array.from(pricesDOM);
prices.map(price => {
  price.textContent = price.textContent !== 'Liên hệ' ? (+price.textContent.split('.').join('')).toLocaleString('vn') : 'Liên hệ';
})
addToCart = (event, element) => {
  //ham add
  event.preventDefault();
  //   console.log(element.dataset.id);
  var pathArray = window.location.pathname.split('/');
  const quantity = document.querySelector('input[name="quantity"]') ? +document.querySelector('input[name="quantity"]').value : 0;
  let pid = element.dataset.id;
  if (!pid) pid = pathArray[pathArray.length - 1];
  let check = countProductInCart(pid, quantity); //kiem tra mat hang da ton tai trong cart hay chua, neu ton tai thi quantity++
  if (check == -1) {
    //truong hop k ton tai
    getProductById(pid, quantity);
  }
  $.toast({
    heading: 'Đã thêm vào giỏ hàng',
    text: '<a href="http://localhost:8080/web_ic4/checkout">Xem giỏ hàng</a>',
    showHideTransition: 'slide',
    icon: 'success',
    position: 'bottom-right',
    hideAfter: 3000,
    loaderBg: '#9EC600'
  })
};

deleteItem = (event, element) => {
  event.preventDefault();
  let pid = element.dataset.id;
  getCart();
  let allItem = [...cart];
  let affterDelete = allItem.filter(e => e.id != pid);
  cart = affterDelete;
  setCart();
  renderCart();
};

getProductById = (id, quantity) => {
  //get product from sv
  $.ajax({
    url: "http://localhost:8080/web_ic4/product/getById",
    type: "GET",
    dataType: "json",
    data: {
      pid: id,
    },

    success: function (result) {
      if (result.status == 200) {
        let { data } = result;
        const product = {
          id: data.product_id,
          name: data.name,
          image: data.image,
          price: data.price,
          quantity: quantity ? quantity : 1,
        };

        getCart();
        cart.push(product);
        setCart();
        renderCart();
      }
    },
  });
};

countProductInCart = (pid, quantity) => {
  getCart(); //lay ve cart moi nhat
  let allItem = [...cart];
  let itemIndex = allItem.findIndex((i) => i.id == pid); //tim kiem product

  if (itemIndex === -1) {
    return -1;
  }
  console.log(quantity);
  let newQuantity = quantity ? allItem[itemIndex].quantity + quantity : allItem[itemIndex].quantity + 1; //quantity++

  let newItem = {
    ...cart[itemIndex],
    quantity: newQuantity, //update quantity vao item moi
  };

  cart[itemIndex] = newItem; //thya item moi vao item cu

  setCart();
  getCart();
  renderCart();
  return 1;
};

function setCart() {
  localStorage.setItem("cart", JSON.stringify(cart));
}

function getCart() {
  if (localStorage.getItem("cart") != null) {
    cart = JSON.parse(localStorage.getItem("cart"));
  }
}

// herehrehrehrhehhr
function renderCart() {
  getCart();
  let list = document.querySelector(".cart_list");
  let cartTotal = document.querySelector(".cart_total");
  let html = "";

  var totalPrice = 0;

  cart
    .slice()
    .reverse()
    .forEach((i) => {
      html += ` <li>
      <a href="#" class="item_remove" data-id="${i.id}" onclick="deleteItem(event, this)"><i class="ion-close"></i></a>
      <a  href="product/${i.id}"><img src="${i.image}" alt="cart_thumb1">${i.name}</a>
      <span class="cart_quantity"> ${i.quantity} x <span class="cart_amount">${i.price}</span>
  </li>`;
    });

  cart.every((i) => {
    if (i.price == "Liên hệ") {
      totalPrice = "Liên hệ";
      return false;
    } else {
      // console.log(i)
      let bef = i.price.replaceAll(".", "");
      var t = Number(bef);
      totalPrice += t * +i.quantity;
      // console.log(totalPrice);
      return true;
    }
  });

  if (html == "") {
    html = "<li><p>Không có sản phẩm nào trong giỏ hàng !!</p></li>";
  }

  let totalPricehtml = `<strong>Tổng cộng:</strong> <span class="cart_price">${totalPrice} VND</span>`; //cart_totatl

  let cart_count = document.querySelectorAll(".cart_count");

  cart_count.forEach((e) => {
    e.classList.add("shake");
    setTimeout(() => {
      e.classList.remove("shake");
    }, 1000);
    e.innerHTML = cart.length;
  });

  cartTotal.innerHTML = totalPricehtml;

  list.innerHTML = html;
}

renderCart();

rendetListProductCheckOut = () => {
  let list = document.querySelector(".checkout-cart");
  if (list != null) {
    getCart();
    html = "";
    cart.forEach((e) => {
      html += ` <tr>
        <td>${e.name} <span class="product-qty">x ${e.quantity}</span></td>
        <td>$${e.price}</td>
    </tr>`;
    });
    list.innerHTML = html;
  }
};

rendetListProductCheckOut();
