//Exercice 1
$(function() {
    $('#texte').html('Hello World!')
});

//Exercice 2
$(function() {
    $('ul li').html('Green is not a creative color')
});

//Exercice 3
$('.texte').each(function() {
    $('#nb').html($('a').length)
});

//Exercice 4
$('img').each(function(){
   $('[name="master jedi"]').css('border', '4px solid blue');
    $('[name!="jedi"]').css('height', '100px');
   $('[name="jedi"]').css('height', '200px');
    $('[name="master jedi"]').css('height', '250px');
});