var turn = 0;
var full_cells = 0;
var table_full = false
var win_condition = false
var player0_win = false
var player1_win = false
var winner = ""
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

        //checks win condition for the class "symbole_0"
        //checks horizontally
        if($('tr:first-child>td:first-child').hasClass('symbole_0') && $('tr:first-child>td:first-child+td').hasClass('symbole_0') && $('tr:first-child>td:last-child').hasClass('symbole_0'))
            player0_win = true
        if($('tr:first-child+tr>td:first-child').hasClass('symbole_0') && $('tr:first-child+tr>td:first-child+td').hasClass('symbole_0') && $('tr:first-child+tr>td:last-child').hasClass('symbole_0'))
            player0_win = true
        if($('tr:last-child>td:first-child').hasClass('symbole_0') && $('tr:last-child>td:first-child+td').hasClass('symbole_0') && $('tr:last-child>td:last-child').hasClass('symbole_0'))
            player0_win = true
        //checks vertically
        if($('tr:first-child>td:first-child').hasClass('symbole_0') && $('tr:first-child+tr>td:first-child').hasClass('symbole_0') && $('tr:last-child>td:first-child').hasClass('symbole_0'))
            player0_win = true
        if($('tr:first-child>td:first-child+td').hasClass('symbole_0') && $('tr:first-child+tr>td:first-child+td').hasClass('symbole_0') && $('tr:last-child>td:first-child+td').hasClass('symbole_0'))
            player0_win = true
        if($('tr:first-child>td:last-child').hasClass('symbole_0') && $('tr:first-child+tr>td:last-child').hasClass('symbole_0') && $('tr:last-child>td:last-child').hasClass('symbole_0'))
            player0_win = true
        //checks diagonally
        if($('tr:first-child>td:first-child').hasClass('symbole_0') && $('tr:first-child+tr>td:first-child+td').hasClass('symbole_0') && $('tr:last-child>td:last-child').hasClass('symbole_0'))
            player0_win = true
        if($('tr:first-child>td:last-child').hasClass('symbole_0') && $('tr:first-child+tr>td:first-child+td').hasClass('symbole_0') && $('tr:last-child>td:first-child').hasClass('symbole_0'))
            player0_win = true

        //checks win condition for the class "symbole_1"
        //checks horizontally
        if($('tr:first-child>td:first-child').hasClass('symbole_1') && $('tr:first-child>td:first-child+td').hasClass('symbole_1') && $('tr:first-child>td:last-child').hasClass('symbole_1'))
            player1_win = true
        if($('tr:first-child+tr>td:first-child').hasClass('symbole_1') && $('tr:first-child+tr>td:first-child+td').hasClass('symbole_1') && $('tr:first-child+tr>td:last-child').hasClass('symbole_1'))
            player1_win = true
        if($('tr:last-child>td:first-child').hasClass('symbole_1') && $('tr:last-child>td:first-child+td').hasClass('symbole_1') && $('tr:last-child>td:last-child').hasClass('symbole_1'))
            player1_win = true
        //checks vertically
        if($('tr:first-child>td:first-child').hasClass('symbole_1') && $('tr:first-child+tr>td:first-child').hasClass('symbole_1') && $('tr:last-child>td:first-child').hasClass('symbole_1'))
            player1_win = true
        if($('tr:first-child>td:first-child+td').hasClass('symbole_1') && $('tr:first-child+tr>td:first-child+td').hasClass('symbole_1') && $('tr:last-child>td:first-child+td').hasClass('symbole_1'))
            player1_win = true
        if($('tr:first-child>td:last-child').hasClass('symbole_1') && $('tr:first-child+tr>td:last-child').hasClass('symbole_1') && $('tr:last-child>td:last-child').hasClass('symbole_1'))
            player1_win = true
        //checks diagonally
        if($('tr:first-child>td:first-child').hasClass('symbole_1') && $('tr:first-child+tr>td:first-child+td').hasClass('symbole_1') && $('tr:last-child>td:last-child').hasClass('symbole_1'))
            player1_win = true
        if($('tr:first-child>td:last-child').hasClass('symbole_1') && $('tr:first-child+tr>td:first-child+td').hasClass('symbole_1') && $('tr:last-child>td:first-child').hasClass('symbole_1'))
            player1_win = true

        if (player0_win == true) {
            win_condition = true
            winner = "Player O has won"
        }
        if (player1_win == true) {
            win_condition = true
            winner = "Player X has won"
        }

        if (full_cells == 9)
            table_full = true

        if(table_full == true || win_condition == true) {
            if(win_condition == true)
                alert(winner)
            if(table_full == true && win_condition == false)
                alert('the game is tied')
            location.reload()
        }
    })
})