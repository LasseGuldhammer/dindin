
function loadDoc(generator) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("weekgenerator").innerHTML =
      this.responseText;

    }
  };
  xhttp.open("GET", "generator.php", true);
  xhttp.send();
}

