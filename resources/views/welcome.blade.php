
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <title>Oberlo Mailbox API by Ramtani Othmane</title>

        <style media="screen">
            .bd-pageheader {
                padding: 2rem 15px;
                margin-bottom: 1.5rem;
                color: #fff;
                text-align: center;
                background-color: #27B7D7;
            }
        </style>
    </head>
    <body>
        <div class="bd-pageheader">
            <div class="container">
                <img src="{{ asset('logo.png') }}" class="rounded mx-auto d-block" alt="Oberlo logo" />
                <h1>Oberlo Backend Task - Mailbox API</h1>
                <p class="lead">
                    By RAMTANI Othmane
                </p>
                <p>
                    A local firm is building a small E-mail client to manage their internal messaging. <br>
                    You have been asked to provide a simple prototype for a basic mailbox API in which the provided <br>
                    messages are listed. Each message can be marked as read and you can archive single messages.
                </p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="nav nav-inline text-xs-center">
                        <a class="nav-link" href="{{ route('messages.all') }}" target="_blank">List messages</a>
                        <a class="nav-link" href="{{ route('messages.archived') }}" target="_blank">Archived messages</a>
                        <a class="nav-link" href="{{ route('messages.show', 21) }}" target="_blank">Show message 21</a>
                        <a class="nav-link" href="{{ route('messages.read', 21) }}" target="_blank">Read message 21</a>
                        <a class="nav-link" href="{{ route('messages.archive', 21) }}" target="_blank">Archive message 21</a>
                    </nav>
                </div>
            </div>
        </div>
    </body>
</html>
