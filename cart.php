<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <link rel="stylesheet" type="text/css" href="css/cart.css">
    <style></style>
    <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="js/cart.js"></script>
</head>

<body>
    <?php include "inc/header.php" ?>
    <main>
        <h2>카트</h2>
        <section class="cart_wrap">
            <div class="cart_tab">
                <div class="tab_rent">소장 2</div>
                <div class="tab_buy">대여</div>
            </div>
            <div class="cart_option">
                <div class="select_all">
                    <input type="checkbox" name="select_all" id="select_all">
                    <label for="select_all">전체 선택</label>
                </div>
                <div class="select_act">
                    <div class="wish_select">선택 위시리스트로 이동</div>
                    <div class="delete_select">선택 삭제</div>
                </div>
            </div>
            <div class="product_list">
                <ul>
                </ul>
            </div>
        </section>
        <section class="payment">
            <div class="payment_info">
                <p class="final">2권을 선택하셨습니다</p>
                <div class="price">
                    <p class="price_dsp">총 상품 금액</p>
                    <p class="price_val">200원</p>
                </div>
                <div class="discount">
                    <p class="discount_dsp">할인 금액</p>
                    <p class="discount_val">0원</p>
                </div>
                <div class="total">
                    <p class="total_dsp">합계</p>
                    <p class="total_val">200원</p>
                </div>
            </div>
            <button class="pay_button">소장으로 구매하기</button>
        </section>

    </main>
    <?php include "inc/footer.html" ?>
</body>

</html>