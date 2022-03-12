// To disable right click
document.addEventListener('contextmenu', event => event.preventDefault());

// To disable F12 options
document.onkeypress = function (event) {
event = (event || window.event);
if (event.keyCode == 168) {
return false;
}
}
document.onmousedown = function (event) {
event = (event || window.event);
if (event.keyCode == 168) {
return false;
}
}
document.onkeydown = function (event) {
event = (event || window.event);
if (event.keyCode == 168) {
return false;
}
}

// To To Disable ctrl+c, ctrl+u

jQuery(document).ready(function($){
$(document).keydown(function(event) {
var pressedKey = String.fromCharCode(event.keyCode).toLowerCase();

if (event.ctrlKey && (pressedKey == "c" || pressedKey == "u")) {
alert('~Undangan Online~');
//disable key press porcessing
return false;
}
});
});