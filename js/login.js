function fncGetXMLHttpRequest() {
  if (window.ActiveXObject) {
    try {
      return new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
      try {
        return new ActiveXObject("Microsoft.XMLHTTP");
      } catch (e1) {
        return null;
      }
    }
    //IE 외 파이어폭스 오페라 같은 브라우저에서 XMLHttpRequest 객체 구하기
  } else if (window.XMLHttpRequest) {
    return new XMLHttpRequest();
  } else {
    return null;
  }
}

function check_form() {
  var uid = document.getElementById("uid");
  var pwd = document.getElementById("pwd");
  var txt = document.getElementById("err_txt");
  if (!pwd.value) {
    txt.textContent = "비밀번호를 입력하세요";
    txt.className = "err_txt";
    return false;
  } else {
    var xmlhttp = fncGetXMLHttpRequest();
    // 아이디를 체크할 php 페이지에 체크 하려하는 id 값을 파라미터로 전송
    xmlhttp.open(
      "GET",
      "login_check_ajax.php?u_id=" + uid.value + "&pwd=" + pwd.value,
      false
    );
    xmlhttp.setRequestHeader(
      "Content-Type",
      "application/x-www-form-urlencoded; charset=UTF-8"
    );

    xmlhttp.onreadystatechange = function () {
      if (xmlhttp.readyState == "4" && xmlhttp.status == 200) {
        if (
          xmlhttp.status == 500 ||
          xmlhttp.status == 404 ||
          xmlhttp.status == 403
        ) {
          alert(xmlhttp.status);
          return false;
        } else {
          var res = xmlhttp.responseText;
          res = res.replace(/\n/g, ""); //행바꿈 제거
          res = res.replace(/\r/g, ""); //엔터값 제거
          res = res.replace(/\s+/, ""); //왼쪽 공백 제거
          res = res.replace(/\s+$/g, ""); //오른쪽 공백 제거
          console.log(res);
          if (res == "IN") {
            txt.textContent = "존재하지 않는 아이디입니다.";
            txt.className = "err_txt";
            return false;
          } else if (res == "PN") {
            txt.textContent = "비밀번호가 일치하지 않습니다.";
            txt.className = "err_txt";
            return false;
          } else {
            location.href = "index.php";
          }
        }
      }
    };
    xmlhttp.send();
  }
}
