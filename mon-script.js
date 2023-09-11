//Exercice 1
$(function() {
    $('#texte').html('Hello World!')
});

//Exercice 2
$(function() {
    $('body > ul li').html('Green is not a creative color')
});

//Exercice 3
$('.texte').each(function() {
    $('#nb').html($('a').length)
});

//Exercice 4
$('td img').each(function(){
    $('[name="master jedi"]').css('border', '4px solid blue');
    $('[name!="jedi"]').css('height', '100px');
    $('[name="jedi"]').css('height', '200px');
    $('[name="master jedi"]').css('height', '250px');
});

//Exercice 5
$('ol ul li').each(function(){
    $('ul>li:first-child').css('color', 'red')
    $('ul>li:first-child+li').css('color', 'green')
    $('ul>li:last-child').css('color', 'blue')
})

//Exercice 6
$(function(){
    $('img').css({'border': '10px outset #2E9AFE', 'height': '200px'})
})

//Exercice 7
$(function(){
    $('img').fadeOut()
    $('img').fadeIn()
})

//Exercice 8
$(function(){
    $('img').attr({alt: 'star wars'})
})

//Exercice 9
/*$(function(){
    alert('formatage')
    $('tr td').addClass('size')
    alert('Inversion des cellules')
    $('tr td').toggleClass('rouge')
    $('tr td').toggleClass('vert')
    alert('Re-inversion des cellules')
    $('tr td').toggleClass('rouge')
    $('tr td').toggleClass('vert')
    alert('Suppression des classes "couleur"')
    $('tr td').removeClass('rouge')
    $('tr td').removeClass('vert')
})*/

//Exercice 10
$('td img').on('mouseover', function(){
    $('img:hover').css('height', '300px')
    $('#title').html($('img:hover').attr('alt'))
})
$('td img').on('mouseout', function(){
    $('img').css('height', '100px')
    $('#title').html("")
})

//Exercice 11 ???????????

//Exercice 12
$('input').click(function(){
    $('tr td').addClass('actif')
})