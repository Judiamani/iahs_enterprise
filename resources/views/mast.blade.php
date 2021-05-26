<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.rawgit.com/jackmoore/colorbox/master/example1/colorbox.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.3/js.cookie.min.js"></script>
<style>
body,
html {
  font-family: arial;
  background: #fffff0;
  color: #8f1f08;
  font-size: 20px;
  line-height: 1.3;
  margin: 0;
  padding: 0;
}

#container {
  width: 650px;
  padding: 10px;
  margin: 0 auto;
}

h1,
h2 {
  color: #2B292E
}

input {
  border: 1px solid #333;
  margin-bottom: 15px;
  min-width: 250px;
  padding: 8px;
}

.button {
  transition-duration: 0.4s;
  background: #720000;
  border: none;
  color: white;
  padding: 10px 20px;
  display: block;
  font-size: 16px;
  margin: 10px 2px;
  cursor: pointer;
}

button.button:hover {
  background: #990000
}

#cboxLoadedContent {
  padding: 10px;
  background: #fffff0;
}

#modal-content {
  display: none;
}

#modal-content label {
  display: block;
  margin-bottom: 5px;
}

#modal-content input {
  width: 95%;
}
</style>
</head>
<body>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdn.rawgit.com/jackmoore/colorbox/master/jquery.colorbox-min.js"></script>

<div id="container">
  <h1>My Awesome Site</h1>

  <p>Please subscribe to my newsletter.</p>
  <p>It's very important and I promise not to misuse your email address.</p>
  <p>Although, saying that, I might sell it.</p>
  <p>I mean, I gotta earn a living, right?</p>

  <label for="myInput">Type something:</label>
  <input placeholder="Type something" id="myInput">
  
  <button class="button clear-cookie">Clear Cookie</button>
</div>

<div id="modal-content">
  <h2>I Can Haz Email?</h2>
  <label for="yurEmail">Yur Email Adress:</label>
  <input placeholder="I needz it" id="yurEmail">
  <button class="button order-cheezburger">Order Cheezburger</button>
</div>


<script type="text/javascript">
$(".clear-cookie").on("click", function() {
  Cookies.remove('colorboxShown');
  $(this).replaceWith("<p><em>Cookie cleared. Re-run demo</em></p>");
});

$(".order-cheezburger").on("click", function() {
  $.colorbox.close();
});

function onPopupOpen() {
  $("#modal-content").show();
  $("#yurEmail").focus();
}

function onPopupClose() {
  $("#modal-content").hide();
  Cookies.set('colorboxShown', 'yes', {
    expires: 1
  });
  $(".clear-cookie").fadeIn();
  lastFocus.focus();
}

function displayPopup() {
  $.colorbox({
    inline: true,
    href: "#modal-content",
    className: "cta",
    width: 600,
    height: 350,
    onComplete: onPopupOpen,
    onClosed: onPopupClose
  });
}

var lastFocus;
var popupShown = Cookies.get('colorboxShown');

if (popupShown) {
  console.log("Cookie found. No action necessary");
  $(".clear-cookie").show();
} else {
  console.log("No cookie found. Opening popup in 3 seconds");
  $(".clear-cookie").hide();
  setTimeout(function() {
    lastFocus = document.activeElement;
    displayPopup();
  }, 3000);
}
</script>



</body>
</html>
