//Exercice 4
$('td img').each(function(){
    $('[name="master jedi"]').css('border', '4px solid blue');
    $('[name!="jedi"]').css('height', '100px');
    $('[name="jedi"]').css('height', '200px');
    $('[name="master jedi"]').css('height', '250px');
});