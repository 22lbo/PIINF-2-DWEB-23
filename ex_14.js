$(function() {

    var ex_num = 1
    var dif_num = Math.floor(Math.random() * (Math.floor(4) - Math.ceil(1) + 1)) + Math.ceil(1);
    var tab = []
    let desc_index = 2
    let diff_index = 3

    $('a').addClass('ttp_hover')

    /*the description and difficulty has be unique to each exercise, exercises are differentiated by their number
    * when a mouseover event happens on a 'td a', the class:hover adds an title attribute to the 'a' and displays the description and difficulty attributes of said 'a'*/

    $('a').each(function(){
        if (ex_num > 12)
            ex_num = 'morpion'
        $('a:contains('+ex_num+')').attr({description: 'Exercice '+ex_num, dificult: Math.floor(Math.random() * (Math.floor(4) - Math.ceil(1) + 1)) + Math.ceil(1)})
        ex_num++
    })

    /*$("a:contains('01')").attr({description: 'Exercice 1', dificult: Math.floor(Math.random() * (Math.floor(4) - Math.ceil(1) + 1)) + Math.ceil(1)})
    $("a:contains('02')").attr({description: 'Exercice 2', dificult: Math.floor(Math.random() * (Math.floor(4) - Math.ceil(1) + 1)) + Math.ceil(1)})
    $("a:contains('03')").attr({description: 'Exercice 3', dificult: Math.floor(Math.random() * (Math.floor(4) - Math.ceil(1) + 1)) + Math.ceil(1)})
    $("a:contains('04')").attr({description: 'Exercice 4', dificult: Math.floor(Math.random() * (Math.floor(4) - Math.ceil(1) + 1)) + Math.ceil(1)})
    $("a:contains('05')").attr({description: 'Exercice 5', dificult: Math.floor(Math.random() * (Math.floor(4) - Math.ceil(1) + 1)) + Math.ceil(1)})
    $("a:contains('06')").attr({description: 'Exercice 6', dificult: Math.floor(Math.random() * (Math.floor(4) - Math.ceil(1) + 1)) + Math.ceil(1)})
    $("a:contains('07')").attr({description: 'Exercice 7', dificult: Math.floor(Math.random() * (Math.floor(4) - Math.ceil(1) + 1)) + Math.ceil(1)})
    $("a:contains('08')").attr({description: 'Exercice 8', dificult: Math.floor(Math.random() * (Math.floor(4) - Math.ceil(1) + 1)) + Math.ceil(1)})
    $("a:contains('09')").attr({description: 'Exercice 9', dificult: Math.floor(Math.random() * (Math.floor(4) - Math.ceil(1) + 1)) + Math.ceil(1)})
    $("a:contains('10')").attr({description: 'Exercice 10', dificult: Math.floor(Math.random() * (Math.floor(4) - Math.ceil(1) + 1)) + Math.ceil(1)})
    $("a:contains('12')").attr({description: 'Exercice 12', dificult: Math.floor(Math.random() * (Math.floor(4) - Math.ceil(1) + 1)) + Math.ceil(1)})
    $("a:contains('morpion')").attr({description: 'Exercice du morpion', dificult: Math.floor(Math.random() * (Math.floor(4) - Math.ceil(1) + 1)) + Math.ceil(1)})*/

    $("a").each(function(){
        $.each(this.attributes, function () {
            if(this.specified) {
                //console.log(this.name, this.value);
                tab.push(this.value)
                $('td a').on('mouseover', function () {
                    $('.ttp_hover:hover').attr({title: tab[desc_index] + ', dificulte : ' + tab[diff_index]})
                })
            }
            if (desc_index <= 99 || diff_index <= 99) {
                desc_index += 4
                diff_index += 4
            }

            /*if (this.name == 'description') {
                name1 = this.name
                value1 = this.value
            }
            if (this.name == 'dificult') {
                name2 = this.name
                value2 = this.value
            }
            $("td a").on('mouseover', function () {
                $('.ttp_hover:hover').attr({title: name1 + ': ' + value1 + ', ' + name2 + ': ' + value2})
            })*/
            //console.log(tab)
        })
        //console.log(tab)
    })
    console.log(tab)

/*    $('td a').on('mouseout', function(){
        $('.ttp_hover').css('color', 'purple')
    })*/
    //$('.ttp_text').css({'visibility': 'hidden', 'position': 'absolute', 'z-index': '1', 'width': '100px', 'color': 'white', 'font-size': '12px', 'background-color': '#192733', 'border-radius': '10px', 'margin-left': '30px', 'padding': '10px 5px 10px 5px', 'top': '25px', 'left': '-50%'})
    //$('.ttp_hover').css({'position': 'relative', 'display': 'inline-block', 'text-align': 'center'})
})
/*add infobulles to the menu - the attribute 'title' does this.
* its also possible to make a tooltip on hover*/


//https://stackoverflow.com/questions/14645806/get-all-attributes-of-an-element-using-jquery
//                      '-----------> look at this