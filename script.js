//#region layout
$(document).ready(function () {
  var selector = '.nav li';
  setCSSBasedOnCookie();

  $(selector).on('click', function () {
    $(selector).removeClass('active');
    $(this).addClass('active');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#nav',
    offset: 54
  });

  $(function () {
    var navMain = $("#navbarResponsive");
    navMain.on("click", "a", null, function () {
      navMain.collapse('hide');
    });
  });
  $('#whatIOfferListener').click(function () {
    $("#container").load("whatIOffer.html", function () {
      scrollToAnchor('whatIOffer');
    });
  });

  $('#aboutMeListener').click(function () {
    $("#container").load("aboutMe.html", function () {
      scrollToAnchor('aboutMe');
    });
  });

  $('#contactListener').click(function () {
    $("#container").load("contact.html", function () {
      scrollToAnchor('contact');

      $('#zipCode').on('input', function () {
        if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);
        if (this.value.length == 4) {
          var location = $('#zipCode').val();
          $.getJSON("communities.php", {
            input: location
          }, function (data) {
            for (i = 0; i < data.length; i++) {
              var $dropdown = $("#location");
              $dropdown.append($('<option />').val(data[i]).text(data[i]));
              $dropdown.prop('disabled', false);
            }

          });
        } else {
          var $dropdown = document.getElementById("location");
          var length = $dropdown.options.length;
          for (i = $dropdown.options.length -1; i >= 0; i--) {
            $dropdown.remove(i);
          }
          $dropdown.setAttribute("style", "disabled: true");
        }
      });

    });
  });
  $('#canvasListener').click(function () {
    $("#container").load("canvas.html", function () {
      drawCanvas();
    });
  });
  $('#switchStyleListener').click(function () {

    var css = getCookie("css")
    if (css == "secondStyle.css") {
      changeCSS("style.css", 2);
      setCookie("css", "style.css");
    } else {
      changeCSS("secondStyle.css", 2);
      document.cookie = "css=secondStyle.css";
      setCookie("css", "secondStyle.css")
    }
    location.reload();
  });
  $('#homeListener').click(function () {
    location.reload();
  });
});

function changeCSS(cssFile, cssLinkIndex) {

  var oldlink = document.getElementsByTagName("link").item(cssLinkIndex);

  var newlink = document.createElement("link");
  newlink.setAttribute("rel", "stylesheet");
  newlink.setAttribute("type", "text/css");
  newlink.setAttribute("href", cssFile);

  document.getElementsByTagName("head").item(0).replaceChild(newlink, oldlink);
}

// Collapse the navbar when page is scrolled
$(window).scroll(function () {
  if ($("#nav").offset().top > 100) {
    $("#nav").addClass("navbar-shrink");
  } else {
    $("#nav").removeClass("navbar-shrink");
  }
});

function scrollToAnchor(aid) {
  var aTag = $("a[name='" + aid + "']");
  $('html,body').animate({
    scrollTop: aTag.offset().top
  }, 'slow');
}

function setCookie(cname, cvalue) {
  document.cookie = cname + "=" + cvalue + "; max-age=86400;";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function setCSSBasedOnCookie() {
  var css = getCookie("css");
  if (css != "") {
    changeCSS(css, 2);
  }
}

function validateForm() {
  var zipcode = $('#zipCode').val();
  var location = $('#location').val();
  var name = $("#fname").val();
  var lastname = $("#lname").val();
  var mail = $("#mail").val();
  var subject = $("#subject").val();

  if(name == "" || lastname == "" || location == "" || zipcode == "" || mail == "" || subject == ""){
    alert("Pleas fill in all fields");
    return false;
  }
  else{
    return true;
  }
}

function drawCanvas() {
  var canvas = document.getElementById("canvas");
  var ctx = canvas.getContext("2d");
  var radius = canvas.height / 2;
  ctx.translate(radius, radius);
  radius = radius * 0.90
  setInterval(drawClock, 1000);


  function drawClock() {
    drawFace(ctx, radius);
    drawNumbers(ctx, radius);
    drawTime(ctx, radius);
  }

  function drawFace(ctx, radius) {
    var grad;

    ctx.beginPath();
    ctx.arc(0, 0, radius, 0, 2 * Math.PI);
    ctx.fillStyle = 'white';
    ctx.fill();

    grad = ctx.createRadialGradient(0, 0, radius * 0.95, 0, 0, radius * 1.05);
    grad.addColorStop(0, '#333');
    grad.addColorStop(0.5, 'white');
    grad.addColorStop(1, '#333');
    ctx.strokeStyle = grad;
    ctx.lineWidth = radius * 0.1;
    ctx.stroke();

    ctx.beginPath();
    ctx.arc(0, 0, radius * 0.1, 0, 2 * Math.PI);
    ctx.fillStyle = '#333';
    ctx.fill();
  }

  function drawNumbers(ctx, radius) {
    var ang;
    var num;
    ctx.font = radius * 0.15 + "px arial";
    ctx.textBaseline = "middle";
    ctx.textAlign = "center";
    for (num = 1; num < 13; num++) {
      ang = num * Math.PI / 6;
      ctx.rotate(ang);
      ctx.translate(0, -radius * 0.85);
      ctx.rotate(-ang);
      ctx.fillStyle = "#3299BB";
      ctx.fillText(romanize(num), 0, 0);
      ctx.rotate(ang);
      ctx.translate(0, radius * 0.85);
      ctx.rotate(-ang);
    }
  }

  function drawTime(ctx, radius) {
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour = hour % 12;
    hour = (hour * Math.PI / 6) + (minute * Math.PI / (6 * 60)) + (second * Math.PI / (360 * 60));
    drawHand(ctx, hour, radius * 0.5, radius * 0.07, "#333");
    //minute
    minute = (minute * Math.PI / 30) + (second * Math.PI / (30 * 60));
    drawHand(ctx, minute, radius * 0.8, radius * 0.07, "#333");
    // second
    second = (second * Math.PI / 30);
    drawHand(ctx, second, radius * 0.9, radius * 0.02, "#FF6E00");
  }

  function drawHand(ctx, pos, length, width, color) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0, 0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.strokeStyle = color;
    ctx.stroke();
    ctx.rotate(-pos);
  }

  function romanize(num) {
    if (!+num)
      return NaN;
    var digits = String(+num).split(""),
      key = ["", "C", "CC", "CCC", "CD", "D", "DC", "DCC", "DCCC", "CM",
        "", "X", "XX", "XXX", "XL", "L", "LX", "LXX", "LXXX", "XC",
        "", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX"
      ],
      roman = "",
      i = 3;
    while (i--)
      roman = (key[+digits.pop() + (i * 10)] || "") + roman;
    return Array(+digits.join("") + 1).join("M") + roman;
  }
}
//#endregion