<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
</head>

<body>
    <?php include "inc/header.php" ?>
    <main>
        <section class="tabs">
            <a class="tab_id">ID 로그인</a>
            <a class="tab_num">일회용 번호</a>
            <a class="tab_qr">QR 코드</a>
        </section>
        <section class="login_data">
            <form name="login" action="" method="post">
                <fieldset>
                    <div class="login_wrap">
                        <legend class="screen_out">로그인</legend>
                        <p>
                            <input type="text" name="uid" id="uid" placeholder="아이디">
                        </p>
                        <p>
                            <input type="password" name="pwd" id="pwd" placeholder="비밀번호">
                        </p>
                        <div class="login_option">
                            <div class="maintain">
                                <input type="checkbox" name="maintain" id="maintain">
                                <label for="maintain">로그인 상태 유지</label>
                            </div>
                        </div>
                        <!--
                        <div class="secure">
                            <input type="checkbox" name="secure" id="secure">
                            <lablel for="secure">IP 보안</lablel>
                        </div>
                        -->
                    </div>
                    <div class="find_wrap">
                        <div class="find_id">아이디 찾기</div>
                        <div class="find_pwd">비밀번호 찾기</div>
                    </div>
                    <div id="err_txt"></div>
                    <div class="button_login" onclick="check_form()">로그인</div>
                    <div class="button_join" onclick="location.href='join.php'">회원가입</div>
                </fieldset>
            </form>
        </section>

    </main>
    <?php include "inc/footer.html" ?>
</body>

</html>