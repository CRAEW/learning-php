// jQuery Sweet Alerts
$(function(){
    $('#register').click(function(event){

        let valid = this.form.checkValidity();

        // set variables to connect input values to the database
        let firstname = $('#firstname').val();
        let lastname = $('#lastname').val();
        let username = $('#username').val();
        let userpwd = $('#userpwd').val();
        let confirmpwd = $('#confirmpwd').val();
        let linkedin = $('#linkedin').val();
        let github = $('#github').val();
        let email = $('#email').val();
        let language = $('#language').val();
        let avatar = $('#avatar').val();
        let video = $('#video').val();
        let quote = $('#quote').val();
        let author = $('#quote-author').val();

        let userId;

        if(valid){

            // prevent posting before validation
            event.preventDefault();

            // Check if user pwd are identical
            if(userpwd === confirmpwd) {
                
                // ajax request
                $.ajax({
                    type: 'POST',
                    url: './php/auth.php',
                    data: {
                        user_id: userId,
                        first_name: firstname,
                        last_name: lastname,
                        username: username,
                        userpwd: userpwd,
                        confirmpwd: confirmpwd,
                        linkedin: linkedin,
                        github: github,
                        email: email,
                        preferred_language: language,
                        avatar: avatar,
                        video: video,
                        quote: quote,
                        quote_author: author
                    },
                    success: function(data){
                        Swal.fire({
                            'title': "Successful",
                            'text': data,
                            'type': "success",
                            
                        }, function(){
                            userId = "<?php echo $user_id ?>";
                            // redirect
                            location.replace(`./profile.php?username=${username}`);
                        })
                    },

                    error: function(data){
                        Swal.fire({
                            'title': "Errors",
                            'text': "Your registration failed. Please try again.",
                            'type': "error"
                        })
                    }
                });


            } else {
                Swal.fire({
                    'title': "Errors",
                    'text': "Your passwords must be identical.",
                    'type': "error"
                    });
            };

        } else {
            // prevent posting before validation
            event.preventDefault();

            Swal.fire({
                'title': "Errors",
                'text': "Error. A problem occured with the form. Please try again.",
                'type': "error"
            });
        }       
    });
})