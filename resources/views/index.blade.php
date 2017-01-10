<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
        <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">

        <link rel="script" href="https://unpkg.com/vue-material@0.6.3">
        <link rel="stylesheet" href="https://unpkg.com/vue-material@0.6.3/dist/vue-material.css">

        <!-- Styles -->
        <style>


        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div id="app">
                    <room-list :rooms="{{ $rooms }}"></room-list>
                </div>
            </div>
        </div>

        <script src="js/app.js"></script>
    </body>
</html>
