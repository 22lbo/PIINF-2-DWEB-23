//Exercice 9
$(function(){
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
})