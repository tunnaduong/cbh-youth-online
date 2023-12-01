$body = $("#load");
document.addEventListener("DOMContentLoaded", function () {
  var nav = document.querySelector("nav");
  var curr = document.getElementsByClassName("nav-active");
  if (curr.length != 0) {
    nav.style.setProperty("--decoration-left", curr[0].offsetLeft + "px");
    nav.style.setProperty("--decoration-width", curr[0].offsetWidth + "px");
  }
  setTimeout(function () {
    var nav = document.querySelector("nav");
    nav.className += " nav-bar";
  }, 300);
  nav.addEventListener("click", function (event) {
    if (event.target.tagName == "A") {
      nav.style.setProperty(
        "--decoration-left",
        event.target.offsetLeft + "px"
      );
      nav.style.setProperty(
        "--decoration-width",
        event.target.offsetWidth + "px"
      );
      event.target.className += " nav-active";
    }
  });

  // Get all buttons with class="btn" inside the container
  var btns = document.getElementsByClassName("menu-btn");

  // Loop through the buttons and add the active class to the current/clicked button
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
      var current = document.getElementsByClassName("nav-active");
      if (current.length != 0) {
        current[0].className = current[0].className.replace(" nav-active", "");
      }
      //   this.className += " nav-active";
    });
  }

  document.getElementById("logo").addEventListener("click", function () {
    var current = document.getElementsByClassName("nav-active");
    if (current.length != 0) {
      current[0].className = current[0].className.replace(" nav-active", "");
    }
    var btns = document.getElementsByClassName("menu-btn");
    btns[3].className += " nav-active";
    var nav = document.querySelector("nav");
    var curr = document.getElementsByClassName("nav-active");
    nav.style.setProperty("--decoration-left", curr[0].offsetLeft + "px");
    nav.style.setProperty("--decoration-width", curr[0].offsetWidth + "px");
  });

  var goToHome = document.getElementById("goToHome");

  if (goToHome) {
    goToHome.addEventListener("click", function () {
      var current = document.getElementsByClassName("nav-active");
      if (current.length != 0) {
        current[0].className = current[0].className.replace(" nav-active", "");
      }
      var btns = document.getElementsByClassName("menu-btn");
      btns[3].className += " nav-active";
      var nav = document.querySelector("nav");
      var curr = document.getElementsByClassName("nav-active");
      nav.style.setProperty("--decoration-left", curr[0].offsetLeft + "px");
      nav.style.setProperty("--decoration-width", curr[0].offsetWidth + "px");
    });
  }
});

$(window).resize(function () {
  var nav = document.querySelector("nav");
  var curr = document.getElementsByClassName("nav-active");
  nav.style.setProperty("--decoration-left", curr[0].offsetLeft + "px");
  nav.style.setProperty("--decoration-width", curr[0].offsetWidth + "px");
});

NProgress.configure({ showSpinner: false });
$(document).on({
  ajaxStart: function () {
    NProgress.start();
  },
  ajaxStop: function () {
    openModal();
    NProgress.done();
  },
});

$(document).ready(function () {
  NProgress.start();
  NProgress.done();
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

window.onpopstate = function () {
  $.ajax({
    url: document.location + "?rel=page",
    success: function (data) {
      $("#load").html(data);
    },
  });
};

function openModal() {
  var modal = $("#myModal");
  var btn = $("#openModalBtn");
  var closeBtn = $(".close");

  // When the user clicks the button, open the modal
  btn.click(function () {
    modal.css("display", "block");
  });

  // When the user clicks on the close button, close the modal
  closeBtn.click(function () {
    modal.css("display", "none");
  });

  // When the user clicks outside the modal, close it
  $(window).click(function (event) {
    if (event.target == modal[0]) {
      modal.css("display", "none");
    }
  });
}

// When the DOM is ready
$(document).ready(function () {
  openModal();
});

// $(document).ready(function() {
//     $(window).resize(function() {
//         var bodyheight = $(this).height();
//         $("#sidebar").height(bodyheight);
//     }).resize();
// });
