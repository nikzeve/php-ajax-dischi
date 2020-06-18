


    $.ajax({
        url:  'lista_cd.php',
        method: 'GET',
        success: function(data) {
            console.log(data);
        },
        error: function() {
            console.log('si è verificato un errore');
        }
    })
