$(document).ready(function () {
  // header
  $(".menu_main li").hover(
    function () {
      $(this).css({ opacity: 0.5 });
    },
    function () {
      $(this).css({ opacity: 1 });
    }
  );
  $(".menu_sub li").hover(
    function () {
      $(this).css({ opacity: 0.7 });
    },
    function () {
      $(this).css({ opacity: 1 });
    }
  );

  // main banner
  var num_main = 10;
  var page_max_m = Math.round(num_main / 5);
  var page_cnt_m = 0;
  for (var i = 0; i < num_main; i++) {
    $(".main_banner_wrap ul").append(
      "<li class='novel_" +
        (i + 1) +
        "'><a href=''>작품" +
        (i + 1) +
        "</a></li>"
    );
    $(".main_banner_wrap a:eq(" + i + ")").css({
      background: "url(images/cover_m" + (i + 1) + ".png) no-repeat",
    });
    if (i % 5 == 4) {
      $(".main_banner_wrap a:eq(" + i + ")").css({ "margin-right": 0 });
    }
  }

  $.go_next = function (selector, page_cnt, page_max) {
    page_cnt++;
    if (page_cnt > 0) {
      $(selector + " .prev").css({ display: "block" });
    }
    if (page_cnt > page_max - 2) {
      $(selector + " .next").css({ display: "none" });
    }
    $(selector + " ul").animate({ left: -1200 * page_cnt });
    return page_cnt;
  };

  $.go_prev = function (selector, page_cnt, page_max) {
    page_cnt--;
    if (page_cnt < 1) {
      $(selector + " .prev").css({ display: "none" });
    }
    if (page_cnt < page_max - 1) {
      $(selector + " .next").css({ display: "block" });
    }
    $(selector + " ul").animate({ left: -1200 * page_cnt });
    return page_cnt;
  };

  $(".main_banner_wrap .next").click(function () {
    page_cnt_m = $.go_next(".main_banner_wrap", page_cnt_m, page_max_m);
  });
  $(".main_banner_wrap .prev").click(function () {
    page_cnt_m = $.go_prev(".main_banner_wrap", page_cnt_m, page_max_m);
  });

  // fp
  var num_fp = 12;
  var page_max_fp = Math.round(num_fp / 6);
  var page_cnt_fp = 0;
  for (var i = 0; i < num_fp; i++) {
    $(".freepass ul").append(
      "<li class='novel'><div class='cover'>표지</div><div class='novel_info'><h3>제목</h3><div><p>저자</p><p>이벤트 정보</p></div></div></li>"
    );
    $(".freepass .cover:eq(" + i + ")").css({
      background: "url(images/cover_fp" + (i + 1) + ".png) no-repeat",
    });
    if (i % 6 == 5) {
      $(".freepass .cover:eq(" + i + ")").css({ "margin-right": 0 });
    }
  }

  $(".freepass .next").click(function () {
    page_cnt_fp = $.go_next(".freepass", page_cnt_fp, page_max_fp);
  });
  $(".freepass .prev").click(function () {
    page_cnt_fp = $.go_prev(".freepass", page_cnt_fp, page_max_fp);
  });

  // mym
  var num_mym = 12;
  var page_max_mym = Math.round(num_main / 6);
  var page_cnt_mym = 0;
  for (var i = 0; i < num_mym; i++) {
    $(".mym ul").append(
      "<li class='novel'><div class='cover'>표지</div><div class='novel_info'><h3>제목</h3><div><p>저자</p><p>이벤트 정보</p></div></div></li>"
    );
    $(".mym .cover:eq(" + i + ")").css({
      background: "url(images/cover_mym" + (i + 1) + ".png) no-repeat",
    });
    if (i % 6 == 5) {
      $(".mym .cover:eq(" + i + ")").css({ "margin-right": 0 });
    }
  }

  $(".mym .next").click(function () {
    page_cnt_mym = $.go_next(".mym", page_cnt_mym, page_max_mym);
  });
  $(".mym .prev").click(function () {
    page_cnt_mym = $.go_prev(".mym", page_cnt_mym, page_max_mym);
  });

  // td
  var num_td = 12;
  var page_max_td = Math.round(num_td / 6);
  var page_cnt_td = 0;
  for (var i = 0; i < num_td; i++) {
    $(".timedeal ul").append(
      "<li class='novel'><div class='cover'>표지</div><div class='novel_info'><h3>제목</h3><div><p>저자</p><p>이벤트 정보</p></div></div></li>"
    );
    $(".timedeal .cover:eq(" + i + ")").css({
      background: "url(images/cover_td" + (i + 1) + ".png) no-repeat",
    });
    if (i % 6 == 5) {
      $(".timedeal .cover:eq(" + i + ")").css({ "margin-right": 0 });
    }
  }

  $(".timedeal .next").click(function () {
    page_cnt_td = $.go_next(".timedeal", page_cnt_td, page_max_td);
  });
  $(".timedeal .prev").click(function () {
    page_cnt_td = $.go_prev(".timedeal", page_cnt_td, page_max_td);
  });
  // new
  var num_n = 12;
  var page_max_n = Math.round(num_n / 6);
  var page_cnt_n = 0;
  for (var i = 0; i < num_n; i++) {
    $(".new ul").append(
      '<li class="novel"><div class="cover">표지</div><div class="novel_info"><h3>제목</h3><div><p>저자</p><p>별점</p><p>이벤트 정보</p></div></div></li>'
    );
    $(".new .cover:eq(" + i + ")").css({
      background: "url(images/cover_n" + (i + 1) + ".png) no-repeat",
    });
    if (i % 6 == 5) {
      $(".new .cover:eq(" + i + ")").css({ "margin-right": 0 });
    }
  }

  $(".new .next").click(function () {
    page_cnt_n = $.go_next(".new", page_cnt_n, page_max_n);
  });
  $(".new .prev").click(function () {
    page_cnt_n = $.go_prev(".new", page_cnt_n, page_max_n);
  });
  // serial
  var num_s = 12;
  var page_max_s = Math.round(num_s / 6);
  var page_cnt_s = 0;
  for (var i = 0; i < num_s; i++) {
    $(".serial ul").append(
      '<li class="novel"><div class="cover">표지</div><div class="novel_info"><h3>제목</h3><div><p>저자</p><p>별점</p><p>이벤트 정보</p></div></div></li>'
    );
    $(".serial .cover:eq(" + i + ")").css({
      background: "url(images/cover_s" + (i + 1) + ".png) no-repeat",
    });
    if (i % 6 == 5) {
      $(".serial .cover:eq(" + i + ")").css({ "margin-right": 0 });
    }
  }

  $(".serial .next").click(function () {
    page_cnt_s = $.go_next(".serial", page_cnt_s, page_max_s);
  });
  $(".serial .prev").click(function () {
    page_cnt_s = $.go_prev(".serial", page_cnt_s, page_max_s);
  });
});
