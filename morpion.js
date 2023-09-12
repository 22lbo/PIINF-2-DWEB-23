var turn = 0;
var full_cells = 0;
var gameOver = false
$(function(){
    $('td').click(function () {
        if ($(this).hasClass('symbole_0') || $(this).hasClass('symbole_1'))
            alert('illegal cell')
        else {
            if (turn == 0) {
                $(this).addClass('symbole_0')
                turn = 1
            } else {
                $(this).addClass('symbole_1')
                turn = 0
            }
        }
        if ($(this).hasClass('symbole_0') || $(this).hasClass('symbole_1'))
            full_cells++
        if (full_cells == 9) {
            alert('no more legal cells available')
            gameOver = true
        }
        if(gameOver == true) {
            alert('the game is over')
            $('td').each(function(){
                if ($('td').hasClass('symbole_0'))
                    $('td').removeClass('symbole_0')
                else
                    $('td').removeClass('symbole_1')
            })
        }
    })
})