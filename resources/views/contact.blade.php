<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact Me</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #495057;
            color: #202326;
            font-family: 'Nunito', sans-serif;
            font-weight: 800;
            height: 500vh;
            margin: 0;
        }

        .full-height {
            height: 60vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position:-ms-device-fixed;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 14px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 25px;
        }

        .links > a {
            color: #e2f0fb;
            padding: 0 10px;
            font-size: 15px;
            font-weight: 800;
            letter-spacing: 0.4rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="links">
    <a href="/home">Home</a>
    <a href="/about">About me</a>

</div>
<h1>Contact US</h1>
<form>
    <input type="text name="email" placeholder="email"><br>
    <input type="text name="subject" placeholder="subject"><br>
    <textarea name="message" placeholder="Your message"></textarea>
    <input type="submit" name="submit" value="send">
</form>
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md" >
            Contact me @ st746@njit.edu
            <div> Thanks & Regards </div>
               <div>Shradhha Thakkar </div>
        </div>
    </div>

</body>
</html>
