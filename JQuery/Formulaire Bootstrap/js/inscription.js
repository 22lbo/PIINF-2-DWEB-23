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
            nom_per:{
                required: true,
                minlength: 2
            },
            prenom_per:{
                required: true,
                minlength: 2
            },
            email_per:{
                required: true,
                email: true
            },
            password: {
                required: true,
                PWCHECK: true
            },
            password_conf:{
                required: true,
                equalTo: '#password'
            },
        },
        messages:{
            nom_per: {
                required: "Veuillez saisir votre nom",
                minlength: "Votre nom doit être composé de 2 caractères au minimum"
            },
            prenom_per: {
                required: "Veuillez saisir votre prenom",
                minlength: "Votre prenom doit être composé de 2 caractères au minimum"
            },
            email_per: {
                required: "Veuillez saisir votre email",
                email: "Votre adresse e-mail doit avoir le format suivant : name@domaine.com"
            },
            password: {
                required: "Veuillez saisir votre mot de passe",
                PWCHECK: "Le mot de passe doit comporter au minimum 8 caractères, dont une minuscule, une majuscule, un chiffre et un caractère spécial."
            },
            password_conf: {
                required: "Veuillez saisir une deuxième fois votre mot de passe",
                equalTo: "Les mots de passe ne sont pas identiques"
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
                    nom_per:$("#nom_per").val(),
                    prenom_per:$("#prenom_per").val(),
                    email_per:$("#email_per").val(),
                    password:$("#password").val(),
                    news_letter_per:news_letter
                },
                function result(data,status){
                    message(data.message.text, data.message.type);
                }
            )
        }
    });
})