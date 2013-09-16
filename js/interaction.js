(function ($) {
    $(document).ready(function () {
        function getSub(li) {
            return li.find("> ul");
        }

        function place(elem, nextTo, direction) {
            var offset = nextTo.offset(),
                w = nextTo.width(),
                h = nextTo.height();

            console.log(offset, w);
            elem.css('left', offset.left + w);
        }

        function hoverDelay(over, out, delayOver, delayOut) {

            var overT = 0, outT = 0;
            wrappedOver = function () {
                clearTimeout(outT);
                overT = setTimeout(over, delayOver);
            }

            wrappedOut = function () {
                clearTimeout(overT);
                outT = setTimeout(out, delayOut);
            }

            return {over: wrappedOver, out: wrappedOut}
        }


        function touchSubmenus(ul) {
            ul.find("> li").each(function () {
                var sub = getSub($(this));
                if (sub.length > 0) {
                    console.log("Yo");
                    /*
                    self = this;
                    var wrapped = hoverDelay(function () {
                        place(sub, $(self));
                        sub.show();
                    }, function () {
                        sub.hide();
                    }, 200, 500);
                    */
                    $(this).mouseover(function () {
                        place(sub, $(this));
                        sub.show("fast");
                    }).mouseout(function () {
                        sub.hide("fast");
                    });

                    $(this).find(" > a").addClass("menu-has-more");
                    touchSubmenus(sub);
                }
            });
        }

      root = $(".real-menu > ul");
      root.superfish();
//      touchSubmenus(root);
       $(".menu-trigger").click(function () {
           root.show();
       });
    });
})(jQuery);
