$(document).ready(function() {
    $("#button").click(function() {

// make the button fade out when the mouse hovers over it
button.on('mouseover', function() {
        button.animate({
        opacity: 0.5
    }, {
        duration: 1000,
        easing: 'ease-out'
    });
});
// make the button fade in when the mouse leaves it
button.on('mouseout', function() {
    button.animate({
        opacity: 1
    }, 
    {
        duration: 1000,
        easing: 'ease-out'
    });
});

});
});
