<?php
include "session.php";
?>
<header id="header" class="header">
    <div class="wrap_1">
        <h1 class="logo"><a href="index.php">네이버 시리즈</a></h1>
        <div class="naver_menu">
            <h2 class="screen_out">네이버 메뉴</h2>
            <ul>
                <?php if (!$s_idx) { ?>
                    <li class="login"><a href="login.php">로그인</a></li>
                <?php } else { ?>
                    <li class="user_name">
                        <?php echo $s_name; ?> 님
                    </li>
                    <li class="logout"><a href="logout.php">로그아웃</a></li>
                <?php }
                ; ?>
                <li class="service"><a href="">서비스 더보기</a></li>
            </ul>
        </div>
    </div>
    <div class="wrap_2">
        <nav class="gnb">
            <h2 class="blind">메뉴</h2>
            <ul class="menu_main">
                <li class="menu_novel"><a href="">장르소설</a></li>
                <li class="menu_comics"><a href="">만화</a></li>
                <li class="menu_ebook"><a href="">e북</a></li>
            </ul>
        </nav>
        <div class="side_menu">
            <h2 class="screen_out">사이드 메뉴</h2>
            <form class="search">
                검색창
                <div></div>
            </form>
            <ul class="user_menu">
                <li class="library"><a href="">서재</a></li>
                <li class="cart"><a href="cart.php">카트</a></li>
                <li class="mypage"><a href="">마이페이지</a></li>
            </ul>
        </div>
    </div>

    <div class="menu_sub_wrap">
        <ul class="menu_sub">
            <li class="menu_romance"><a href="">로맨스</a></li>
            <li class="menu_rf"><a href="">로판</a></li>
            <li class="menu_fantasy"><a href="">판타지</a></li>
            <li class="menu_mf"><a href="">현판</a></li>
            <li class="menu_oriental"><a href="">무협</a></li>
            <li class="menu_se"><a href="">시리즈에디션</a></li>
        </ul>
    </div>
</header>