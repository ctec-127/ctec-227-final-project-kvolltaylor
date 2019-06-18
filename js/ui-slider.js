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
        $('.fa-sad-tear').removeClass('bg-light');
        $('.fa-sad-tear').addClass('bg-white');
        $('.fa-meh-blank').css({"color":"#868e96"});
        $('.fa-meh-blank').removeClass('bg-white');
        $('.fa-meh-blank').addClass('bg-light');
        $('.fa-grin').css({"color":"#868e96"});
        $('.fa-grin').removeClass('bg-white');
        $('.fa-grin').addClass('bg-light');
        $('.fa-angry').css({"color":"#868e96"});
        $('.fa-angry').removeClass('bg-white');
        $('.fa-angry').addClass('bg-light');   
    } 
    if (sliderVal > 19){
        $('.fa-sad-tear').css({"color":"#868e96"});
        $('.fa-sad-tear').removeClass('bg-white');
        $('.fa-sad-tear').addClass('bg-light');
        $('.fa-meh-blank').css({"color":"#b7b7e7"});
        $('.fa-sad-blank').removeClass('bg-light');
        $('.fa-sad-blank').addClass('bg-white');
        $('.fa-grin').css({"color":"#868e96"});
        $('.fa-grin').removeClass('bg-white');
        $('.fa-grin').addClass('bg-light');
        $('.fa-angry').css({"color":"#868e96"});
        $('.fa-angry').removeClass('bg-white');
        $('.fa-angry').addClass('bg-light');
    }
    if (sliderVal > 49){
        $('.fa-sad-tear').css({"color":"#868e96"});
        $('.fa-sad-tear').removeClass('bg-white');
        $('.fa-sad-tear').addClass('bg-light');
        $('.fa-meh-blank').css({"color":"#868e96"});
        $('.fa-meh-blank').removeClass('bg-white');
        $('.fa-meh-blank').addClass('bg-light');
        $('.fa-grin').css({"color":"#fafa5a"});
        $('.fa-grin').removeClass('bg-light');
        $('.fa-grin').addClass('bg-white');
        $('.fa-angry').css({"color":"#868e96"});
        $('.fa-angry').removeClass('bg-white');
        $('.fa-angry').addClass('bg-light');
    }
    if (sliderVal > 79){
        $('.fa-sad-tear').css({"color":"#868e96"});
        $('.fa-sad-tear').removeClass('bg-white');
        $('.fa-sad-tear').addClass('bg-light');
        $('.fa-meh-blank').css({"color":"#868e96"});
        $('.fa-meh-blank').removeClass('bg-white');
        $('.fa-meh-blank').addClass('bg-light');
        $('.fa-grin').css({"color":"#868e96"});
        $('.fa-grin').removeClass('bg-white');
        $('.fa-grin').addClass('bg-light');
        $('.fa-angry').css({"color":"#f7aeae"});
        $('.fa-angry').removeClass('bg-light');
        $('.fa-angry').addClass('bg-white');
    }
});