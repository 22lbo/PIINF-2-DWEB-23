var turn = 0;
$(function(){
    $('td').click(function () {
        if ($(this).hasClass('symbole_0') || $(this).hasClass('symbole_1'))
            $('#out').html('cell already full')
        else {
            if (turn == 0) {
                $(this).addClass('symbole_0')
                turn = 1
            } else {
                $(this).addClass('symbole_1')
                turn = 0
            }
        }
    })
})