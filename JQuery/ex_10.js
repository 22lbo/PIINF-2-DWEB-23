//Exercice 10
$('td img').on('mouseover', function(){
    $('img:hover').css('height', '300px')
    $('#title').html($('img:hover').attr('alt'))
})
$('td img').on('mouseout', function(){
    $('img').css('height', '100px')
    $('#title').html("")
})