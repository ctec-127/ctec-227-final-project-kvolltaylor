
$(document).ready(function(){
    // code to enable/disable login/logout
    // var email = $('#email_login').val();
    // var password = $('#pw_login').val();
    
    
    $.ajax({
        url : '/ctec-227-final-project-kvolltaylor/login-logout/is_logged_in.php', 
        dataType : 'json'
    }).done(function(data){
        // check to see if they are logged in
        if (data.status == "yes") {
            $('#login').css({"display":"none"});
            $('#logout').css({"display":"inline-block"});
            $('#nav_login').css({"display":"none"});
            $('#nav_logout').css({"display":"inline-block"});                 
        } else {
            $('#login').css({"display":"inline-block"});
            $('#logout').css({"display":"none"}); 
            $('#nav_login').css({"display":"inline-block"});
            $('#nav_logout').css({"display":"none"});                  
        }
    });

    // logout button clicked
    $('.logout').on('click',function(e){
        // prevent anchor link from going somewhere
        e.preventDefault();
        // log them out via ajax call to php script
        $.ajax({
            url : '/ctec-227-final-project-kvolltaylor/login-logout/logout_ajax.php', 
            dataType : 'json'
        }).done(function(data){
            // update ui elements
            if(data.status == 'no'){
                $('#login').css({"display":"inline-block"});
                $('#logout').css({"display":"none"});
                $('#nav_login').css({"display":"inline-block"});
                $('#nav_logout').css({"display":"none"});                    
            }
        }).fail(function(){
            alert('SOMETHING HAS GONE WRONG!');
        });
    });

});