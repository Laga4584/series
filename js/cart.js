$(document).ready(function(){
    // prodcut list
        var num_prod = 5;
        for (var i = 0; i < num_prod; i++){
            var prod_title = "멸망 이후의 세계 50화";
            var prod_author = "싱숑";
            var prod_price = "100원";
            $(".product_list ul").append('<li><input type="checkbox"name="prod_select"id="prod_select"><div class="prod_cover">표지</div><div class="prod_info"><p class="prod_title">'+prod_title+'</p><p class="prod_author">'+prod_author+'</p><div class="prod_button"><div class="prod_wish">위시리스트로이동</div><div class="prod_delete">삭제</div></div></div><div class="prod_price">'+prod_price+'</div></li>');
            $(".prod_cover:eq("+i+")").css({background:"url(images/cover_cart.png) no-repeat"});
        };
    });