const shoppingCart = (function () {
    let cart = [];

    function Item(name, price, img, code, count) {
        this.name = name;
        this.price = price;
        this.code = code;
        this.img = img;
        this.count = count;
    }

    function saveCart(cart) {
        sessionStorage.setItem("shoppingCart", JSON.stringify(cart));
    }

    function loadCart() {
        cart = JSON.parse(sessionStorage.getItem("shoppingCart"));
    }

    if (sessionStorage.getItem("shoppingCart") != null) {
        loadCart();
    }

    let exportObj = {};

    exportObj.addItemToCart = (name, price, img, code, count) => {
        for (let item in cart) {
            if (cart[item].code === code) {
                const quantity = cart[item].count;
                cart[item].count = Number(quantity) + Number(count);
                saveCart(cart);
                return;
            }
        }

        const item = new Item(name, price, img, code, count);
        cart.push(item);
        saveCart(cart);
    };

    exportObj.setCountForItem = (code, count) => {
        for (let item in cart) {
            if (cart[item].code === code) {
                cart[item].count = count;
                saveCart(cart);
                break;
            }
        }
    };

    exportObj.removeItemFromCart = (code) => {
        for (let item in cart) {
            if (cart[item].code === code) {
                cart[item].count--;
                if (cart[item].count === 0) {
                    cart.splice(item, 1);
                }
                break;
            }
        }
        saveCart(cart);
    };

    exportObj.removeItemFromCartAll = function (code) {
        for (let item in cart) {
            if (cart[item].code === code) {
                cart.splice(item, 1);
                break;
            }
        }
        saveCart(cart);
    };

    exportObj.clearCart = function () {
        cart = [];
        saveCart(cart);
    };

    exportObj.totalCount = function () {
        return cart.reduce((a, b) => a + b.count, 0);
    };

    exportObj.totalCart = function () {
        let totalCart = cart.reduce((a, b) => a + b.price * b.count, 0);
        return Number(totalCart.toFixed(2));
    };

    exportObj.listCart = function () {
        let cartCopy = [];
        for (let i in cart) {
            const item = cart[i];
            let itemCopy = {};
            for (let p in item) {
                itemCopy[p] = item[p];
            }
            itemCopy.total = item.price * item.count;
            cartCopy.push(itemCopy);
        }
        return cartCopy;
    };

    exportObj.listOrder = function () {
        return cart;
    };

    return exportObj;
})();

$(".clear-cart").click(function () {
    shoppingCart.clearCart();
    displayCart();
});

function displayCart() {
    const cartArray = shoppingCart.listCart();
    let output = "";
    if (!cartArray || cartArray.length === 0) {
        output = '<div class="align-items-center">Chưa Có Sản Phẩm</div>';
        $('.go-checkout').hide();
    } else {
        $('.go-checkout').show();
    }
    for (let i in cartArray) {
        output +=
            "" +
            '<li class="list-group-item py-3 ps-0 border-top">\n' +
            "                    <!-- row -->\n" +
            '                    <div class="row align-items-center">\n' +
            '                        <div class="col-3 col-md-2">\n' +
            '                            <!-- img --> <img src="./assets/images/products/product-img-1.jpg" alt="Ecommerce"\n' +
            '                                              class="img-fluid"></div>\n' +
            '                        <div class="col-4 col-md-6 col-lg-5">\n' +
            "                            <!-- title -->\n" +
            '                            <a href="/?controller=shop&action=single" class="text-inherit">\n' +
            '                                <h6 class="mb-0">' + cartArray[i].name + "</h6>\n" +
            "                            </a>\n" +
            "                            <span><small class=\"text-muted\">đ" + cartArray[i].price + "</small></span>" +
            "                            <!-- text -->\n" +
            '                            <div class="mt-2 small lh-1"><a href="#!" class="text-decoration-none text-inherit"> <span\n' +
            '                                            class="me-1 align-text-bottom">\n' +
            '                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"\n' +
            '                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"\n' +
            '                         class="feather feather-trash-2 text-success">\n' +
            '                      <polyline points="3 6 5 6 21 6"></polyline>\n' +
            '                      <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">\n' +
            "                      </path>\n" +
            '                      <line x1="10" y1="11" x2="10" y2="17"></line>\n' +
            '                      <line x1="14" y1="11" x2="14" y2="17"></line>\n' +
            '                    </svg></span><span data-code="' + cartArray[i].code + '" class="text-muted delete-item">Xóa</span></a></div>\n' +
            "                        </div>\n" +
            "                        <!-- input group -->\n" +
            '                        <div class="col-3 col-md-3 col-lg-3">\n' +
            "                            <!-- input -->\n" +
            "                            <!-- input -->\n" +
            '                            <div class="input-group input-spinner  ">\n' +
            '                                <input type="button" value="-" class="button-minus btn  btn-sm " data-field="quantity" data-code="' + cartArray[i].code + '">' +
            '                                <input type="number" step="1" max="10" value="' + cartArray[i].count + '" name="quantity"' +
            '                                       class="quantity-field form-control-sm form-input   ">\n' +
            '                                <input type="button" value="+" data-code="' + cartArray[i].code + '" class="button-plus btn btn-sm " data-field="quantity">\n' +
            "                            </div>\n" +
            "                        </div>\n" +
            "                        <!-- price -->\n" +
            '                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">\n' +
            '                            <span class="fw-bold">đ' + cartArray[i].total + "</span>\n" +
            "                        </div>\n" +
            "                    </div>\n" +
            "</li>" +
            "";
    }
    $(".show-cart").hide().html(output).fadeIn('slow');
    $(".cart-count").hide().text(cartArray.length ? cartArray.length : 0).fadeIn('slow');
    $(".total-checkout").hide().text(`đ ${shoppingCart.totalCart()}`).fadeIn('slow');

}

$(".add-to-cart").click(function (t) {
    !(function (t) {
        t.preventDefault();
        let product = $(t.target).data("product");
        let count = $('.quantity-product').find('input[name="quantity"]').val() ?? 1;
        if (!product) {
            return;
        }
        new bootstrap.Toast($('#basicToast')).show();
        product = product.replaceAll("'", '"');

        const {name, price, img, code} = JSON.parse(product);
        shoppingCart.addItemToCart(name, price, img, code, count);
        displayCart();
    })(t);
});
$('.show-cart').on("click", ".delete-item", function (t) {
    !(function (t) {
        const code = $(t.target).data('code');
        shoppingCart.removeItemFromCartAll(code);
        displayCart();
    })(t);
})


$(".quantity-product").on("click", ".button-plus", function (t) {
    !(function (t) {
        t.preventDefault();
        const code = $(t.target).data("code");
        const e = $(t.target).data("field"),
            n = $(t.target).closest("div"),
            o = parseInt(n.find("input[name=" + e + "]").val(), 10);

        let count;
        if (isNaN(o)) {
            count = 0;
        } else {
            count = o + 1;
        }
        n.find("input[name=" + e + "]").val(count);
    })(t);
})
$(".quantity-product").on("click", ".button-minus", function (t) {
    !(function (t) {
        t.preventDefault();
        const code = $(t.target).data("code");
        var e = $(t.target).data("field"),
            n = $(t.target).closest("div"),
            o = parseInt(n.find("input[name=" + e + "]").val(), 10);
        !isNaN(o) && o > 1
            ? n.find("input[name=" + e + "]").val(o - 1)
            : n.find("input[name=" + e + "]").val(1);
    })(t);
});

$(".show-cart").on("click", ".button-plus", function (t) {
    !(function (t) {
        t.preventDefault();
        const code = $(t.target).data("code");
        const e = $(t.target).data("field"),
            n = $(t.target).closest("div"),
            o = parseInt(n.find("input[name=" + e + "]").val(), 10);

        let count;
        if (isNaN(o)) {
            count = 0;
        } else {
            count = o + 1;
        }
        n.find("input[name=" + e + "]").val(count);
        shoppingCart.setCountForItem(code, count);
        displayCart();
    })(t);
})
$(".show-cart").on("click", ".button-minus", function (t) {
    !(function (t) {
        t.preventDefault();
        const code = $(t.target).data("code");
        var e = $(t.target).data("field"),
            n = $(t.target).closest("div"),
            o = parseInt(n.find("input[name=" + e + "]").val(), 10);
        !isNaN(o) && o > 0
            ? n.find("input[name=" + e + "]").val(o - 1)
            : n.find("input[name=" + e + "]").val(0);
        shoppingCart.removeItemFromCart(code);
        displayCart();
    })(t);
});

displayCart();