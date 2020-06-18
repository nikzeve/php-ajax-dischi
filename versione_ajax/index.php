 <!DOCTYPE html>
 <html>
     <head>
         <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
         <link rel="stylesheet" href="../public/style.css">
         <title>Dischi musicali</title>
     </head>
     <body>
         <div class="container">

            <script id="card-cd" type="text/x-handlebars-template">
                <div class="cd">
                    <img src="{{poster}}" alt="">
                    <p class="white margBottom"id="titolo">{{title}}</p>
                    <p class="white margBottom">{{author}}</p>
                    <p class="white margBottom">{{genre}}</p>
                    <p class="white margBottom">{{year}}</p>
                </div>
            </script>

        </div>



     <script src="../public/app.js" charset="utf-8"></script>
     </body>
 </html>
