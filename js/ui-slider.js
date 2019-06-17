// Code to grab numeric value from slider
// Code to "light up" font-awesome faces as slider is moved by user

$(function(){
    // $("#slider").slider();
    $(".mood-slider").slider();
});

$("#slider").on("slidechange", function (event, ui) {
    event.preventDefault();
    console.log('slider on change fired off');

    var sliderVal = $('#slider').slider("option","value");

    var mood = $('#mood').attr('value',sliderVal);
    console.log(mood.val());

    // NOTE: cannot use if else statements here to make face "light up"
    // must use seperate if statements to check for new conditions as slider moves
    if (sliderVal === 0){
        $('.fa-sad-tear').css({"color":"#868e96"});
        $('.fa-meh-blank').css({"color":"#868e96"});
        $('.fa-grin').css({"color":"#868e96"});
        $('.fa-angry').css({"color":"#868e96"});   
    } 
    if (sliderVal > 0){
        $('.fa-sad-tear').css({"color":"#fac7fa"});
        $('.fa-meh-blank').css({"color":"#868e96"});
        $('.fa-grin').css({"color":"#868e96"});
        $('.fa-angry').css({"color":"#868e96"});   
    } 
    if (sliderVal > 19){
        $('.fa-sad-tear').css({"color":"#868e96"});
        $('.fa-meh-blank').css({"color":"#b7b7e7"});
        $('.fa-grin').css({"color":"#868e96"});
        $('.fa-angry').css({"color":"#868e96"});
    }
    if (sliderVal > 49){
        $('.fa-sad-tear').css({"color":"#868e96"});
        $('.fa-meh-blank').css({"color":"#868e96"});
        $('.fa-grin').css({"color":"#fafa5a"});
        $('.fa-angry').css({"color":"#868e96"});
    }
    if (sliderVal > 79){
        $('.fa-sad-tear').css({"color":"#868e96"});
        $('.fa-meh-blank').css({"color":"#868e96"});
        $('.fa-grin').css({"color":"#868e96"});
        $('.fa-angry').css({"color":"#f7aeae"});
    }
});