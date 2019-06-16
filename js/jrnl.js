// javascript for JRNL


$(document).ready(function () {


    // NAVBAR

    //  Login/logout: page display css rules
    if (top.location.pathname === '/ctec-227-final-project-kvolltaylor/entry.php'){
        $("#login_section").css({"display":"none"});
        $("#logout_section").css({"display":"inline-block"});
    };

    if (top.location.pathname === '/ctec-227-final-project-kvolltaylor/read-entries.php'){
        $("#login_section").css({"display":"none"});
        $("#logout_section").css({"display":"inline-block"});
    };

    // Modal: login Jquery and AJAX
    $("#login_popup").on("submit", function(e){
        console.log('login_popup submit is fired off');
        e.preventDefault();
        submitForm();
    });


    function submitForm(){
        console.log('submitForm function is fired off');
        $.ajax({
        type: 'POST',
        url: 'inc/content/session-backend.inc.php',
        data: $('#login_popup').serialize(),
            success: function(response){
                $('#submit').css({"display":"none"});
                $('#login_msg').css({"color":"#28a745", "font-size":"1.5em", "font-weight":"bold","margin-right":"15%"});
                $('#login_msg').html('Welcome back, ' + response + '!');
                $('#login_entryTitle').html('You are currently logged in');
                $('#login_entryTitle').css({"margin-left":"15%"});
                $('#modal-body').html('<div id="modal_image"><img src="img/aaron-burden-64849-unsplash.jpg" width="100%" alt="photo of pen and diary"></div>');
                $('#login_section').css({"display":"none"});
                $('#logout_section').css({"display":"inline-block"});  
            },
            error: function(){
                console.log("Error with submitForm function");
            }
        });

    };

    // Navbar: logout

    // logout button clicked
    $('#logout_section').on('click',function(e){
        // prevent anchor link from going somewhere
        e.preventDefault();
        // log them out via ajax call to php script
        $.ajax({
            url : 'inc/content/logout.inc.php',
            method : 'get',
            dataType : 'json'
        }).done(function(data){
            // update ui elements
            if(data.status == 'success'){
                $('#login_section').css({"display":"inline-block"});
                $('#logout_section').css({"display":"none"});                
                alert('You have signed out!');
                window.location = window.location;
            }
        }).fail(function(){
            alert('SOMETHING HAS GONE WRONG!');
        });
    
    });

    // FRONTPAGE

    // quote of the day

    $("#quotes").ready(function() {
        console.log('qotd loaded');
        qotd();
      });

    $("#quotes").on("click", function(){
        console.log('qotd click event is fired off');
        qotd();
    });

    function qotd(){
        $.ajax({
            url: "https://favqs.com/api/qotd",
            type: "application/json",
            method: "GET"
        })
        .done(function(data){
            data = displayResults(data);
            $('#quotes').html(data);
        })
        .fail(function(){
            console.log('Something went wrong when calling the API');
        });

        function displayResults(data){
            var output = '';

            // display each quote of the day and its author
            output += '<div class="border border-info rounded m-4 p-4 bg-white shadow">';
            output += '<div class="row"><div class="col-2">';
            output += '<i class="fas fa-pen-nib fa-9x text-light pl-2 pt-3"></i></div>';
            output += '<div class="col-10">';
            output += '<div class="mt-4 mb-4 p3 col-12 text-right">';
            output += '<i class="fas fa-quote-left fa-3x d-inline text-info mr-4"></i>';
            output += '<p class="d-inline h3"><span class="quote_style text-secondary">' + data.quote.body + '</span></p>';
            output += '<i class="fas fa-quote-right fa-3x d-inline text-info ml-4"></i>';
            output += '</div>';
            output += '<div class="mr-4 pr-4 text-right">'
            output += '<p class="h4 text-info">' + data.quote.author + '</p>';
            output += '</div></div></div>';


            return output;
        };
    }

    // REGISTER    
    
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

        }
        
    });

    // ENTRY

    // bind anxiety/panic attack form input display to radio button events
    $('#apy').change(function() {
        if(this.checked) {
            $('#event_toggle').css({"display":"inline-block"});
            $('#ap_entry').removeClass("collapse");
                        
        };
    });
    $('#apn').change(function() {
        if(this.checked) {
            $('#event_toggle').css({"display":"none"});
            $('#ap_entry').addClass("collapse");
        };
    });

}); 





