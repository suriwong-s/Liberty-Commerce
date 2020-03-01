window.load=checkCookie();

function checkCookie(){
 var user=getCookie("username");
  if (user == "") {
 document.getElementById('popup-overlay').style.display;

} else {
  document.getElementById('popup-overlay').style.display = "none";
 
}
}

function submitcookie() {
  setCookie( "username", "name", .0034722222 );
  document.getElementById('popup-overlay').style.display = "none";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
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

  function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }
