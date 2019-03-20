<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home Page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #343a40;
                color: #e9605c;
                font-family: 'Nunito', sans-serif;
                font-weight: 800;
                height: 500vh;
                margin: 0;
            }

            .full-height {
                height: 30vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 28px;
            }

            .content {
                text-align: center;
                font-family: 'Nunito', "Droid Sans";
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #e2f0fb;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 900;
                letter-spacing: .3rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 40px;
                margin-top: 50px;
            }
        </style>
    </head>


    <body>
              <div class="content">
                <div class="title m-b-md" >
                    My First Laravel Web Site
                </div>

                <div class="links">
                    <a href="/Home">Home</a>
                    <a href="https://bootstrapheroku303.herokuapp.com">My First BootStrap Site</a>
                    <a href="https://csvtohtml303.herokuapp.com">CSV To HTML Data Table</a>
                    <a href="https://github.com"> My GitHub Account </a>
                    <a href="/About">About me</a>
                    <a href="/Contact">Contact me</a>
                </div>
              </div>
        </div>






    </body>
</html>
