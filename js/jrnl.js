// javascript for JRNL

$(document).ready(function () {

    // enable submit button
    $("input[type='submit']").removeAttr('disabled');

    // bind terms and conditions checkbox to event
    $('#tcbox').change(function() {
        if(this.checked) {
            $('#tcinfo').removeClass('gradient-background');
            $('#tcinfo').addClass('bg-white');
        } else if (this){
            $('#tcinfo').removeClass('bg-white');
            $('#tcinfo').addClass('gradient-background');
        };
    });

    // bind submit button to event
    $('#register_form').on('submit', function(evt) {
        
        // initialize an error array, & create flag for errors
        var errors = [];
        var flag = false;
        
        // check first name
        $('#err1').remove();
        if ($('#first').val() === '') {
            $('#first').after('<span id="err1" class="text-danger"> required</span>');
            flag = true;
            errors.push(['first','Please fill in your first name']);
        };

        // check last name
        $('#err2').remove();
        if ($('#last').val() === '') {
            $('#last').after('<span id="err2" class="text-danger"> required</span>');
            flag = true;
            errors.push(['last','Please fill in your last name']);
        };

         // check email
        $('#err3').remove();
        if ($('#email').val() === '') {
            $('#email').after('<span id="err3" class="text-danger"> required</span>');
            flag = true;
            errors.push(['email','Please fill in your email']);
        };

         // check password
        $('#err4').remove();
        if ($('#pw').val() === '') {
            $('#pw').after('<span id="err4" class="text-danger"> required</span>');
            flag = true;
            errors.push(['pw','Please create a password']);
        };

        // check terms and conditions
        $('#err5').remove();
        if (!$("input[name='tcbox']:checked").val()) {
            $('#tc').after('<span id="err5" class="text-danger"> you must agree</span>');
            flag = true;
            errors.push(['tc','Please agree to terms and conditions']);
        };

        // error bucket and form submission prevent
        if (flag) {
            var errorBucket = $('.errors');
            var output = '<ul class="pl-4">';
            for (let index = 0; index < errors.length; index++) {
                output += '<li class="error">' + errors[index][1] + '</li>';
            }
            output += '</ul>';
            errorBucket.html(output);

            evt.preventDefault();

            // $('#' + errors[0][0]).focus();
        }
        
    });

    // bind to fields for blur/tab
    // $('#first').on('blur',function(){
    // });

    
});





