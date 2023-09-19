$(function(){
    $.validator.addMethod("PWCHECK",
        function(value,element) {
            if (/^(?=.*?[A-Z]{1,})(?=(.*[a-z]){1,})(?=(.*[0-9]){1,})(?=(.*[$@$!%*?&]){1,}).{8,}$/.test(value)) {
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
            }
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
                PWCHECK: "Votre mot de passe est trop court"
            },
            password_conf: {
                required: "Veuillez saisir une deuxième fois votre mot de passe",
                equalTo: "Les mots de passe ne sont pas identiques"
            }
        }
    });
})

/*i felt a funeral in my brain
* and mourners to and fro
* kept treading treading till is seemed
* that sense was breaking through
*
* and when they all were seated
* a service like a drumb
* kept beating beating till i though
* my mind was going numb
*
* i heard them lift a box
* and creack across my soul
* with those same boots of lead again
* then space began to toll
*
* as all the heavens were a bell
* and being but an ear
* and i and silence some strange race
* wrecked solitary here
*
* and then a plank in reason broke
* and i dropped down and down
* and hit a world at every plunge
* and finished knowing then*/