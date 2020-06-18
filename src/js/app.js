$(document).ready(function() {

    var template_html = $('#card-cd').html();
    var template_function = Handlebars.compile(template_html);

    $.ajax({
        url:  '../database/lista_cd.php',
        method: 'GET',
        success: function(data) {
            console.log(data);
            dischi_musicali = data;

            for (var i = 0; i < dischi_musicali.length; i++) {

                var cd_corrente = dischi_musicali[i];

                var cd = {
                    poster: cd_corrente.poster,
                    title:  cd_corrente.title,
                    author: cd_corrente.author,
                    genre: cd_corrente.genre,
                    year: cd_corrente.year
                }

                var html_finale = template_function(cd);
                $('.container').append(html_finale);
            }
        },
        error: function() {
            console.log('si è verificato un errore');
        }
    });

});
