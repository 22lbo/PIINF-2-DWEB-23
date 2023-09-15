$(function() {
    $("a:contains('.js')").attr({description: 'Fichier Jquery ', dificult: '1-4'}).addClass('ttp_hover')
    $("a:contains('.html')").attr({description: 'Fichier HTML ', dificult: '1-4'}).addClass('ttp_hover')
    $("a:contains('.css')").attr({description: 'Fichier CSS ', dificult: '1-4'}).addClass('ttp_hover')
    $('td a').on('mouseover', function() {
        $('.ttp_hover:hover').css('color', 'red')
    })

/*    $('.ttp_text').css({'visibility': 'hidden', 'position': 'absolute', 'z-index': '1', 'width': '100px', 'color': 'white', 'font-size': '12px', 'background-color': '#192733', 'border-radius': '10px', 'margin-left': '30px', 'padding': '10px 5px 10px 5px', 'top': '25px', 'left': '-50%'})
    $('.ttp_hover').css({'position': 'relative', 'display': 'inline-block', 'text-align': 'center'})*/
})
/*add infobulles to the menu - the attribute 'title' does this*/