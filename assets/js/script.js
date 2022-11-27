function zoom(t) {
    var e = t.currentTarget;
    t.offsetX ? offsetX = t.offsetX : offsetX = t.touches[0].pageX, t.offsetY ? offsetY = t.offsetY : offsetX = t.touches[0].pageX, x = offsetX / e.offsetWidth * 100, y = offsetY / e.offsetHeight * 100, e.style.backgroundPosition = x + "% " + y + "%"
}

$(".input-group").on("click", ".button-plus", (function (t) {
    !function (t) {
        t.preventDefault();
        var e = $(t.target).data("field"), n = $(t.target).closest("div"),
            o = parseInt(n.find("input[name=" + e + "]").val(), 10);
        isNaN(o) ? n.find("input[name=" + e + "]").val(0) : n.find("input[name=" + e + "]").val(o + 1)
    }(t)
})), $(".input-group").on("click", ".button-minus", (function (t) {
    !function (t) {
        t.preventDefault();
        var e = $(t.target).data("field"), n = $(t.target).closest("div"),
            o = parseInt(n.find("input[name=" + e + "]").val(), 10);
        !isNaN(o) && o > 0 ? n.find("input[name=" + e + "]").val(o - 1) : n.find("input[name=" + e + "]").val(0)
    }(t)
})), function () {
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
    }), $(".team-slider").length && $(".team-slider").slick({
        infinite: !0,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: !0,
        dots: !1,
        arrows: !0,
        prevArrow: '<button type="button" class="slick-prev slick-prev-icon"><i class="feather-icon icon-chevron-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="feather-icon icon-chevron-right slick-next-icon"></i></button>',
        responsive: [{breakpoint: 1024, settings: {slidesToShow: 3, slidesToScroll: 3}}, {
            breakpoint: 600, settings: {slidesToShow: 2, slidesToScroll: 2}
        }, {breakpoint: 480, settings: {slidesToShow: 1, slidesToScroll: 1}}]
    }), $(".hero-slider").length && $(".hero-slider").slick({
        infinite: !0, slidesToShow: 1, slidesToScroll: 1, autoplay: !0, dots: !0, arrows: !1
    }), $("#priceRange").length) {
        var t = document.getElementById("priceRange");
        noUiSlider.create(t, {
            connect: !0,
            step: 1000,
            behaviour: "tap",
            start: [10000, 300000],
            range: {min: [10000], max: [1000000]},
            format: wNumb({decimals: 0})
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
        let url = `?controller=shop&priceStart=${$('#priceStart-value').val()}&priceEnd=${$('#priceEnd-value').val()}`;

        let searchParams = new URLSearchParams(window.location.search);
        if (searchParams.has('search')) {
            url += '&search=' + searchParams.get('search');
        }
        window.location.href = url;
    }))

    if ($("#rater").length) raterJs({
        starSize: 20, element: document.querySelector("#rater"), rateCallback: function (t, e) {
            this.setRating(t), e()
        }
    });
    if ($("#rate-2").length) raterJs({
        starSize: 20, element: document.querySelector("#rate-2"), rateCallback: function (t, e) {
            this.setRating(t), e()
        }
    });
    if ($("#rate-3").length) raterJs({
        starSize: 20, element: document.querySelector("#rate-3"), rateCallback: function (t, e) {
            this.setRating(t), e()
        }
    });
    if ($("#rate-4").length) raterJs({
        starSize: 20, element: document.querySelector("#rate-4"), rateCallback: function (t, e) {
            this.setRating(t), e()
        }
    });
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
    if ($(".sidebar-nav-fixed a").length && $(".sidebar-nav-fixed a").on("click", (function (t) {
        if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
            var e = $(this.hash);
            (e = e.length ? e : $("[name=" + this.hash.slice(1) + "]")).length && (t.preventDefault(), $("html, body").animate({scrollTop: e.offset().top - 90}, 1e3, (function () {
                var t = $(e);
                if (t.focus(), t.is(":focus")) return !1;
                t.attr("tabindex", "-1"), t.focus()
            })))
        }
        $(".sidebar-nav-fixed a").each((function () {
            $(this).removeClass("active")
        })), $(this).addClass("active")
    })), $(".flatpickr").length && flatpickr(".flatpickr", {disableMobile: !0}), $(".stopevent").length && $(document).on("click.bs.collapse.data-api", ".stopevent", (function (t) {
        t.stopPropagation()
    })), $("input").length && Inputmask().mask(document.querySelectorAll("input")), $("#checkAll").length && $("#checkAll").on("click", (function () {
        $("input:checkbox").not(this).prop("checked", this.checked)
    })), $("#liveAlertPlaceholder").length) {
        const t = document.getElementById("liveAlertPlaceholder"), e = (e, n) => {
            const o = document.createElement("div");
            o.innerHTML = [`<div class="alert alert-${n} alert-dismissible" role="alert">`, `   <div>${e}</div>`, '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', "</div>"].join(""), t.append(o)
        }, n = document.getElementById("liveAlertBtn");
        n && n.addEventListener("click", (() => {
            e("Nice, you triggered this alert message!", "success")
        }))
    }

    $("#submitSearch").click(function (t) {
        t.preventDefault();
        const search = $("#search").val();
        if (search) {
            window.location = '?controller=shop&search=' + search;
        }
    })

    $("#submitLogin").click(function (t) {
        t.preventDefault();
        const inputEmail4 = $("#inputEmail4").val();
        const inputPassword4 = $("#inputPassword4").val();

        $.ajax({
            url: '?controller=account&action=signIn',
            type: 'post',
            data: {inputEmail4, inputPassword4},
            success: function (response) {
                let error = "";
                if (response == 1) {
                    window.location = "/";
                } else {
                    error = "Tên tài khoản hoặc mật khẩu không đúng.";
                }
                $("#login-error").html(error);
            }
        });
    })
}();