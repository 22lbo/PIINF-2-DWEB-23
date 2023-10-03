$(function(){
    $.validator.addMethod("PWCHECK",
        function(value,element) {
            if (/^(?=.*?[A-Z]{1,})(?=(.*[a-z]){1,})(?=(.*[0-9]){1,})(?=(.*[$@$!%*?&+]){1,}).{8,}$/.test(value)) {
                return true;
            } else {
                return false;
            };
        }
    );

    $("#inscription_form").validate({
        rules:{
            email_per:{
                required: true,
                email: true
            },
        },
        messages:{
            email_per: {
                required: "Votre adresse e-mail est indispensable à la connexion",
                email: "Votre adresse e-mail doit avoir le format suivant : name@domaine.com"
            },
        },
        submitHandler: function(form){
            console.log("formulaire envoyé");

            if($('#news_letter').is(':checked')) {
                var news_letter = 1;
            } else{
                var news_letter = 0;
            }

            $.post(
                "./json/inscription.json.php?_="+Date.now(),
                {
                    email_per:$("#email_per").val(),
                    password:$("#password").val(),
                },
                function result(data,status){
                    $("#alert .message").html(data.message.texte);
                    $("#alert").addClass("alert-"+data.message.type);
                    $("#alert").css("display","block");
                }
            )
        }
    });
})