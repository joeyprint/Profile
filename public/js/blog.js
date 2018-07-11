var str = document.getElementById("description").textContent;
var res = str.substring(0, 170);
document.getElementById("description").innerHTML = "";
document.getElementById("description").innerHTML = res + '...';