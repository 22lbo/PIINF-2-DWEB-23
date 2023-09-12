//Exercice 5
$('ol ul li').each(function(){
    $('ul>li:first-child').css('color', 'red')
    $('ul>li:first-child+li').css('color', 'green')
    $('ul>li:last-child').css('color', 'blue')
})