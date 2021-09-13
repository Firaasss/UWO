(function(global, factory) {
    typeof exports === "object" && typeof module !== "undefined" ? factory() : typeof define === "function" && define.amd ? define(factory) : factory();
})(this, function() {
    "use strict";
    var accordian = function() {
        Array.from(document.querySelectorAll(".collapse")).forEach(function(e) {
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
                arrowShape: "M11.6003681,55.3759993 C12.1017005,54.8746669 12.8909602,54.8746669 13.3922926,55.3759993 C13.876688,55.8603947 13.876688,56.6665914 13.3922926,57.1498577 L4.30620794,66.2359424 L34.2890452,66.2359424 C34.9879748,66.2359424 35.5615713,66.7914728 35.5615713,67.4904024 C35.5615713,68.189332 34.9879748,68.7629285 34.2890452,68.7629285 L4.30620794,68.7629285 L13.3922926,77.8320762 C13.876688,78.3334086 13.876688,79.1407344 13.3922926,79.6240007 C12.8909602,80.1253331 12.1017005,80.1253331 11.6003681,79.6240007 L0.363296599,68.3869292 C-0.121098866,67.9025338 -0.121098866,67.0963371 0.363296599,66.6130708 L11.6003681,55.3759993 Z"
            });
        };
        initSlider(document.getElementById("slider"));
    };
    var form = function() {
        var form = document.getElementById("getMoreInfo");
        form.addEventListener("submit", function(event) {
            event.preventDefault();
            form.reset();
        });
    };
    window.addEventListener("load", function() {
        accordian();
        slider();
        form();
    });
});
//# sourceMappingURL=app.js.map
