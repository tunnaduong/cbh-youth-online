$body = $("#load");
document.addEventListener("DOMContentLoaded", function () {
  var nav = document.querySelector("nav");
  nav.addEventListener("mouseclick", function (event) {
    if (event.target.tagName == "A") {
      nav.style.setProperty(
        "--decoration-left",
        event.target.offsetLeft + "px"
      );
      nav.style.setProperty(
        "--decoration-width",
        event.target.offsetWidth + "px"
      );
    }
  });
});

NProgress.configure({ showSpinner: false });
$(document).on({
  ajaxStart: function () {
    NProgress.start();
  },
  ajaxStop: function () {
    NProgress.done();
  },
});

$("html").on("click", "[href]", function (e) {
  e.preventDefault(); // cancel click
  var url = $(this).attr("href");
  url = url.replace("#", "");
  window.history.pushState({}, "", url);

  $.ajax({
    url: url + "?rel=page",
    success: function (data) {
      $("#load").html(data);
    },
  });
});
