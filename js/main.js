function menu() {
    var menuChange = document.getElementById("headermenuid");
    if (menuChange.className === "headermenu") {
        menuChange.className += " responsive";
    } 
    else {
        menuChange.className = "headermenu";
    }
}
  