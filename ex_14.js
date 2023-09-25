$(function() {
    var ex_num = 1
    var dif_num = Math.floor(Math.random() * (Math.floor(4) - Math.ceil(1) + 1)) + Math.ceil(1);
    var tab = []
    var desc_index = 2
    var diff_index = 3
    var odd_number = 0
    var rotation = 0

    $('a').addClass('ttp_hover')

    /*$('a').each(function(){
        if (ex_num > 12)
            ex_num = 'morpion'
        $('a:contains('+ex_num+')').attr({description: 'Exercice '+ex_num, dificult: Math.floor(Math.random() * (Math.floor(4) - Math.ceil(1) + 1)) + Math.ceil(1)})
        ex_num++
    })*/

    $("a:contains('01')").attr({description: 'Créer un fichier qui affiché "Hello World"', dificult: '1'})
    $("a:contains('02')").attr({description: 'Remplacer le contenu de une liste "li"', dificult: '1'})
    $("a:contains('03')").attr({description: 'Afficher le nombre de liens sur la page', dificult: '1'})
    $("a:contains('04')").attr({description: 'Modifier le affichage des images sur la page', dificult: '1'})
    $("a:contains('05')").attr({description: 'Changer de couleur les differents éléments de la liste', dificult: '1'})
    $("a:contains('06')").attr({description: 'Changer les parametres de bordure et de taille de la image ', dificult: '1'})
    $("a:contains('07')").attr({description: 'Faire disparaitre et reaparaitre une image', dificult: '1'})
    $("a:contains('08')").attr({description: 'Remplacer le texte de un attribut "alt" de une image', dificult: '1'})
    $("a:contains('09')").attr({description: 'Realizer une liste de opérations dans un ordre specifique', dificult: '2'})
    $("a:contains('10')").attr({description: 'Changer la taille de une image en fonction des événements de la souris', dificult: '2'})
    $("a:contains('12')").attr({description: 'Ajouter une bordure autour de un champ texte et un label', dificult: '1'})
    $("a:contains('morpion')").attr({description: 'Créer un jeu de Morpion', dificult: '4'})

/*    $('a').each(function(){
        $.each(this.attributes, function () {
            if(this.specified) {
                tab.push(this.value)
            }
        })
    })*/

    //Changes the value off desc_index and diff_index whenever a mouseover event happens, if the links are hovered in sequence then it works, otherwise it stops making sense. This method is not viable
    /*$('td a').on('mouseover', function () {
        $('.ttp_hover:hover').attr({title: tab[desc_index] + ', dificulte : ' + tab[diff_index]})
        desc_index += 4
        diff_index += 4
    })*/

    $('td a').on('mouseover', function() {
        $(this).each(function(){
            $.each(this.attributes, function() {
                if(this.name == 'description')
                    desc_value = this.value
                if(this.name == 'dificult')
                    diff_value = this.value
            })
            $('.ttp_hover:hover').attr({title: 'Description : ' + desc_value + ', Dificulte : ' + diff_value})
        })
    })
    console.log(tab)
})
/*add infobulles to the menu - the attribute 'title' does this.
* its also possible to make a tooltip on hover <--- they're kind of complicated actually*/

//https://stackoverflow.com/questions/14645806/get-all-attributes-of-an-element-using-jquery
//                      '-----------> look at this