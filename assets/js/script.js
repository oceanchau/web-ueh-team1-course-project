function zoom(t) {
    var e = t.currentTarget;
    t.offsetX ? (offsetX = t.offsetX) : (offsetX = t.touches[0].pageX),
        t.offsetY ? (offsetY = t.offsetY) : (offsetX = t.touches[0].pageX),
        (x = (offsetX / e.offsetWidth) * 100),
        (y = (offsetY / e.offsetHeight) * 100),
        (e.style.backgroundPosition = x + "% " + y + "%");
}

function handleCheckout(e) {
    const listOrder = shoppingCart.listOrder();

    $.ajax({
        url: "/?controller=shop&action=checkoutOrder",
        type: "post",
        data: {data: JSON.stringify(listOrder)},
    }).then((data) => {
        if (data && data !== "FAIL") {
            shoppingCart.clearCart();
            window.location = "/?controller=shop&action=checkout&id=" + data;
        }
    });
}

$("#submitSearch").submit(function (t) {
    !function (t) {
        t.preventDefault();
        const search = $("#search").val();
        if (search) {
            window.location = "/?controller=shop&search=" + search;
        }
    }(t)
}), function () {
    var t = window.location + "", e = t.replace(window.location.protocol + "//" + window.location.host + "/", "");
    $("ul#sidebarnav a").filter((function () {
        return this.href === t || this.href === e
    })).parentsUntil(".sidebar-nav").each((function (t) {
        $(this).is("li") && 0 !== $(this).children("a").length ? ($(this).children("a").addClass("active"), $(this).parent("ul#sidebarnav").length, $(this).addClass("active")) : $(this).is("ul") || 0 !== $(this).children("a").length ? $(this).is("ul") && $(this).addClass("in") : $(this).addClass("active")
    }))
}(), function () {
    if ($(".dropdown-menu a.dropdown-toggle").length && $(".dropdown-menu a.dropdown-toggle").on("click", (function (t) {
        return $(this).next().hasClass("show") || $(this).parents(".dropdown-menu").first().find(".show").removeClass("show"), $(this).next(".dropdown-menu").toggleClass("show"), $(this).parents("li.nav-item.dropdown.show").on("hidden.bs.dropdown", (function (t) {
            $(".dropdown-submenu .show").removeClass("show")
        })), !1
    })), $('[data-bs-toggle="tooltip"]').length) [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).map((function (t) {
        return new bootstrap.Tooltip(t)
    }));
    if ($('[data-bs-toggle="popover"]').length) [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]')).map((function (t) {
        return new bootstrap.Popover(t)
    }));
    if ($("[data-countdown]").length && $("[data-countdown]").each((function () {
        var t = $(this), e = $(this).data("countdown");
        t.countdown(e, (function (t) {
            $(this).html(t.strftime('<span class="countdown-section"><span class="countdown-amount hover-up">%D</span><span class="countdown-period"> days </span></span><span class="countdown-section"><span class="countdown-amount hover-up">%H</span><span class="countdown-period"> hours </span></span><span class="countdown-section"><span class="countdown-amount hover-up">%M</span><span class="countdown-period"> mins </span></span><span class="countdown-section"><span class="countdown-amount hover-up">%S</span><span class="countdown-period"> sec </span></span>'))
        }))
    })), $(".category-slider").length && $(".category-slider").slick({
        infinite: !0,
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: !0,
        dots: !1,
        arrows: !0,
        prevArrow: '<button type="button" class="slick-prev slick-prev-icon"><i class="feather-icon icon-chevron-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="feather-icon icon-chevron-right slick-next-icon"></i></button>',
        responsive: [{breakpoint: 1400, settings: {slidesToShow: 4, slidesToScroll: 4}}, {
            breakpoint: 600, settings: {slidesToShow: 2, slidesToScroll: 2}
        }, {breakpoint: 480, settings: {slidesToShow: 2, slidesToScroll: 1}}]
    }), $(".product-slider").length && $(".product-slider").slick({
        infinite: !0,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: !0,
        dots: !1,
        arrows: !0,
        prevArrow: '<button type="button" class="slick-prev slick-prev-icon"><i class="feather-icon icon-chevron-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="feather-icon icon-chevron-right slick-next-icon"></i></button>',
        responsive: [{breakpoint: 1400, settings: {slidesToShow: 4, slidesToScroll: 4}}, {
            breakpoint: 600, settings: {slidesToShow: 2, slidesToScroll: 2}
        }, {breakpoint: 480, settings: {slidesToShow: 2, slidesToScroll: 1}}]
    }), $(".hero-slider").length && $(".hero-slider").slick({
        infinite: !0, slidesToShow: 1, slidesToScroll: 1, autoplay: !0, dots: !0, arrows: !1
    }), $("#priceRange").length) {
        var t = document.getElementById("priceRange");
        noUiSlider.create(t, {
            connect: !0,
            step: 1000,
            behaviour: "tap",
            start: [10000, 300000],
            range: {min: [10000], max: [1000000]}
        });
        t.noUiSlider.on("update", (function (t) {
            let searchParams = new URLSearchParams(window.location.search);
            $('#priceStart-value').val(t[0]);
            $('#priceEnd-value').val(t[1]);
        }));
    }

    $(".input-group").on("click", "#priceSubmit", (function (t) {
        t.preventDefault();

        var t = document.getElementById("priceRange");
        t.noUiSlider.destroy();
        let url = `?controller=shop&priceStart=${$(
            "#priceStart-value"
        ).val()}&priceEnd=${$("#priceEnd-value").val()}`;

        let searchParams = new URLSearchParams(window.location.search);
        if (searchParams.has("search")) {
            url += "&search=" + searchParams.get("search");
        }
        window.location.href = url;
    }))
    if ($(".productModal").length > 0) tns({
        container: "#productModal",
        items: 1,
        startIndex: 1,
        navContainer: "#productModalThumbnails",
        navAsThumbnails: !0,
        autoplay: !1,
        autoplayTimeout: 1500,
        swipeAngle: !1,
        speed: 1500,
        controls: !1,
        autoplayButtonOutput: !1
    });
    if ($(".product").length > 1) tns({
        container: "#product",
        items: 1,
        startIndex: 1,
        navContainer: "#productThumbnails",
        navAsThumbnails: !0,
        autoplay: !1,
        autoplayTimeout: 1500,
        swipeAngle: !1,
        speed: 1500,
        controls: !1,
        autoplayButtonOutput: !1
    });


    $("#submitLogin").click(function (t) {
        t.preventDefault();
        const inputEmail4 = $("#inputEmail4").val();
        const inputPassword4 = $("#inputPassword4").val();

        $.ajax({
            url: "/?controller=account&action=signIn",
            type: "post",
            data: {inputEmail4, inputPassword4},
            success: function (response) {
                let error = "";
                if (response !== 0) {
                    $("#userModal").modal("hide");
                    $(".current-user").html(
                        '<div class="nav-item dropdown">' +
                        '<a class="nav-link dropdown-toggle text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">' +
                        response.substr(0, response.indexOf("@")) +
                        "</a>" +
                        '<ul class="dropdown-menu">' +
                        '   <li><a class="dropdown-item" href="/?controller=account&action=orders">Tài khoản của tôi</a></li>' +
                        '   <li><a class="dropdown-item" href="/?controller=account&action=orders">Orders</a></li>' +
                        '   <li><a class="dropdown-item" href="/?controller=account&action=logout">Đăng xuất</a></li>' +
                        "</ul>" +
                        "</div>"
                    );
                    $("#submitPlaceOrder").trigger("click");
                } else {
                    error = "Tên tài khoản hoặc mật khẩu không đúng.";
                }
                $("#login-error").html(error);
            },
        });
    });

    $("#submitPlaceOrder").click(function (t) {
        t.preventDefault();
        let searchParams = new URLSearchParams(window.location.search);
        const notes = $('#DeliveryInstructions').val();
        const payment = $('input[name="flexRadioPayment"]:checked').val();
        $.ajax({
            url: "/?controller=shop&action=placeOrder",
            type: "post",
            data: {
                id: searchParams.get('id'),
                payment,
                notes
            },
            success: function (response) {
                let error = "";
                if (response === "LOGIN") {
                    $("#userModal").modal("show");
                    $("#userModalLabel").html("Đăng nhập trước khi thanh toán");
                } else {
                    alert("Đặt hàng thành công.");
                    window.location = "/?controller=account&action=orders"
                }
            },
        });
    });

    $("#deleteModal").on("show.bs.modal", function (event) {
        const button = event.relatedTarget;
        const id = button.getAttribute("data-id");
        console.log("deleting id " + id);
        $(document).on("click", ".deleteAddress", function () {
            console.log("deleted id " + id);
            $("#deleteModal").modal("hide");
        });
    });
}();