function initiate() {
    var click_button = document.getElementById('action');
    click_button.addEventListener('click', animate);
}

function animate() {
    var element = document.getElementsByClassName('span_1_of_7');
    element.forEach(function(element) {
        element.className = "animated wobble";
    };
    
}