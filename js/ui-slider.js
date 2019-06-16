$(function(){
    $("#slider").slider();
});

$("#slider").on("slidechange", function (event, ui) {
    event.preventDefault();
    console.log('slider on change fired off');
    console.log($('#slider').slider("option","value"));

    var sliderVal = $('#slider').slider("option","value");
    console.log(sliderVal);

    var mood = $('#mood').attr('value',sliderVal);
    console.log(mood.val());

    // NOTE TO BRUCE: cannot use if else statements here to make face "light up"
    // must use seperate if statements to check new conditions as slider moves
    if (sliderVal > 0){
        $('.fa-sad-tear').css({"color":"#17a2b8"});
        $('.fa-meh-blank').css({"color":"#868e96"});
        $('.fa-grin').css({"color":"#868e96"});
        $('.fa-angry').css({"color":"#868e96"});
        
    } 
    if (sliderVal > 19){
        $('.fa-sad-tear').css({"color":"#868e96"});
        $('.fa-meh-blank').css({"color":"#17a2b8"});
        $('.fa-grin').css({"color":"#868e96"});
        $('.fa-angry').css({"color":"#868e96"});
    }
    if (sliderVal > 49){
        $('.fa-sad-tear').css({"color":"#868e96"});
        $('.fa-meh-blank').css({"color":"#868e96"});
        $('.fa-grin').css({"color":"#17a2b8"});
        $('.fa-angry').css({"color":"#868e96"});
    }
    if (sliderVal > 79){
        $('.fa-sad-tear').css({"color":"#868e96"});
        $('.fa-meh-blank').css({"color":"#868e96"});
        $('.fa-grin').css({"color":"#868e96"});
        $('.fa-angry').css({"color":"#17a2b8"});
    }
});