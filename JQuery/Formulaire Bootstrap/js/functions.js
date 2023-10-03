function message($message,$type){
    //Réinitialise l'élément alert (reset)
    $("#alert").attr("class","").addClass("alert");

    //Initialise le type de boite (danger, warning, success, ...)
    $("#alert").addClass("alert-"+$type);

    //Ajoute le message
    $("#alert .message").html($message);

    //Affiche
    $("#alert").css("display","block");

}