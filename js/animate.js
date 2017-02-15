function initiate() {

click_btn = document.getElementById('action');
click_btn.addEventListener('click', animate);

}

function animate()
{

var box = document.getElementById('box');

box.className = 'animated wobble';

}
