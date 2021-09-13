(function(global, factory) {
    typeof exports === "object" && typeof module !== "undefined" ? factory() : typeof define === "function" && define.amd ? define(factory) : factory();
})(this, function() {
    "use strict";
    NodeList.prototype.forEach = NodeList.prototype.forEach || Array.prototype.forEach;
    var accordian = function() {
        var accordion = document.querySelectorAll(".collapse");
        accordion.forEach(function(e) {
            return e.addEventListener("click", function() {
                this.classList.toggle("active");
                this.querySelector(".content").classList.toggle("open");
            });
        });
    };
    var slider = function() {
        var initSlider = function initSlider(slider) {
            return new Flickity(slider, {
                pageDots: true,
                prevNextButtons: true,
                autoPlay: false,
                lazyLoad: 1,
                cellAlign: "center",
                adaptiveHeight: true,
                contain: true,
                fade: true,
                wrapAround: true,
                arrowShape: "M11.6003681,55.3759993 C12.1017005,54.8746669 12.8909602,54.8746669 13.3922926,55.3759993 C13.876688,55.8603947 13.876688,56.6665914 13.3922926,57.1498577 L4.30620794,66.2359424 L34.2890452,66.2359424 C34.9879748,66.2359424 35.5615713,66.7914728 35.5615713,67.4904024 C35.5615713,68.189332 34.9879748,68.7629285 34.2890452,68.7629285 L4.30620794,68.7629285 L13.3922926,77.8320762 C13.876688,78.3334086 13.876688,79.1407344 13.3922926,79.6240007 C12.8909602,80.1253331 12.1017005,80.1253331 11.6003681,79.6240007 L0.363296599,68.3869292 C-0.121098866,67.9025338 -0.121098866,67.0963371 0.363296599,66.6130708 L11.6003681,55.3759993 Z"
            });
        };
        initSlider(document.getElementById("slider"));
    };
    var form = function() {
        var form = document.getElementById("getMoreInfo");
        form.addEventListener("submit", function(event) {});
    };
    NodeList.prototype.forEach = NodeList.prototype.forEach || Array.prototype.forEach;
    var init = function init(hashLinks) {
        var browser = navigator.userAgent;
        if (hashLinks && browser.indexOf("Version/8.0") === -1) {
            hashLinks.forEach(function(link) {
                link.addEventListener("click", function(e) {
                    var href = link.href, target = document.getElementById(href.split("#")[1]);
                    if (target) {
                        e.preventDefault();
                        animateScroll(target);
                    }
                });
            });
        }
    };
    var animateScroll = function animateScroll(target) {
        var elem = document.scrollingElement || document.documentElement;
        var start = new Date().getTime(), timer = setInterval(function() {
            var step = Math.min(1, (new Date().getTime() - start) / 500);
            elem["scrollTop"] = window.pageYOffset + step * (target.offsetTop - window.pageYOffset);
            if (step === 1) {
                clearInterval(timer);
            }
        }, 25);
        elem["scrollTop"] = window.pageYOffset;
    };
    var smoothScroll = function() {
        return init(document.querySelectorAll('a[href*="#"]'));
    };
    document.addEventListener("readystatechange", function() {
        if (document.readyState === "complete") {
            accordian();
            slider();
            form();
            smoothScroll();
        }
    });
});
//# sourceMappingURL=app.js.map
