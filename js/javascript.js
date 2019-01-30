function openNav() {
    document.getElementById("js-my-side").style = "left:0px";
    document.getElementById("js-my-bot").style = "display:block";
}
function closeNav() {
    document.getElementById("js-my-bot").style = "display:none";
    document.getElementById("js-my-side").style = "left: -250px";
}


var a = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = a.value;

a.oninput = function() {
  output.innerHTML = this.value;
}