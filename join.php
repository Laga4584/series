<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <link rel="stylesheet" type="text/css" href="css/join.css">
    <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="js/join.js"></script>
</head>

<body>
    <?php include "inc/header.php" ?>
    <main>
        <form name="join_form" action="insert.php" method="post">
            <fieldset>
                <legend class="screen_out">회원가입 정보입력</legend>
                <div class="input_wrap">
                    <div class="input_cont">
                        <label id="dsp_id" for="uid" class="screen_out
                        ">아이디(4~12자)</label>
                        <input type="text" name="uid" id="uid" placeholder="아이디" onfocus="dsp_id()" onblur="check_id()">
                    </div>
                    <div id="err_id"></div>
                </div>
                <div class="input_wrap add_margin">
                    <div class="input_cont">
                        <label id="dsp_pwd" class="screen_out for=" pwd">비밀번호(8~12자)</label>
                        <input type="password" name="pwd" id="pwd" placeholder="비밀번호" onfocus="dsp_pwd()"
                            onblur="check_pwd()">
                    </div>
                    <div id="err_pwd"></div>
                </div>
                <div class="input_wrap">
                    <div class="input_cont">
                        <label id="dsp_pwd_check" class="screen_out for=" pwd_check">비밀번호 확인</label>
                        <input type="password" name="pwd_check" id="pwd_check" placeholder="비밀번호 확인"
                            onfocus="dsp_pwd_check()" onblur="check_pwd_check()">
                    </div>
                    <div id="err_pwd_check"></div>
                </div>
                <div class="input_wrap">
                    <div class="input_cont">
                        <label id="dsp_name" class="screen_out for=" name">이름</label>
                        <input type="text" name="name" id="name" placeholder="이름" onfocus="dsp_name()"
                            onblur="check_name()">
                    </div>
                    <div id="err_name"></div>
                </div>
                <div class="input_wrap">
                    <div class="input_cont_wrap">
                        <div class="input_cont year">
                            <label id="dsp_year" class="screen_out for=" year">년(4자)</label>
                            <input type="text" name="year" id="year" placeholder="년(4자)" onfocus="dsp_year()"
                                onblur="check_year()">
                        </div>
                        <label class="screen_out" for="month">월</label>
                        <select name="month" id="month" onblur="check_month()">
                            <option value="">월</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                        <div class="input_cont day">
                            <label id="dsp_day" class="screen_out for=" day">일</label>
                            <input type="text" name="day" id="day" placeholder="일" onfocus="dsp_day()"
                                onblur="check_day()">
                        </div>
                    </div>
                    <div id="err_birth"></div>
                </div>
                <div class="input_wrap">
                    <label class="screen_out" for="gender">성별</label>
                    <select name="gender" id="gender" onblur="check_gender()">
                        <option value="">성별</option>
                        <option value="M">남자</option>
                        <option value="F">여자</option>
                        <option value="N">선택 안함</option>
                    </select>
                    <div id="err_gender"></div>
                </div>
                <div class="input_wrap add_margin">
                    <div class="input_cont">
                        <label id="dsp_email" class="screen_out for=" email">본인 확인 이메일(선택)</label>
                        <input type="text" name="email" id="email" placeholder="본인 확인 이메일(선택)" onfocus="dsp_email()">
                    </div>
                    <div id="err_email"></div>
                </div>
                <div class="input_wrap">
                    <div class="input_cont_wrap">
                        <label class="screen_out" for="mobile">휴대전화</label>
                        <select name="country" id="country" onblur="check_country()">
                            <option value="+82">대한민국 +82</option>
                            <option value="+233">가나 +233</option>
                            <option value="+241">가봉 +241</option>
                            <option value="+592">가이아나 +592</option>
                        </select>
                        <div class="input_cont mobile">
                            <label id="dsp_mobile" class="screen_out for=" mobile">전화번호</label>
                            <input type="text" name="mobile" id="mobile" placeholder="전화번호 입력" onfocus="dsp_mobile()"
                                onblur="check_mobile()">
                        </div>
                    </div>
                    <div id="err_mobile"></div>
                </div>
                <!--
                    <div class="input_wrap">
                        <div class="input_cont certification">
                            <label class="dsp_txt" for="certification">인증번호</label>
                            <input type="text" name="certification" id="certification" placeholder="인증번호를 입력하세요">
                        </div>
                        <button type="button" class="send">인증번호 받기</button>
                        <div id="err_certification" class="err_txt"></div>
                    </div>
                -->
                <button type="submit" class="submit" onclick="check_form()">가입하기</button>
            </fieldset>
        </form>
    </main>
    <?php include "inc/footer.html" ?>
</body>

</html>