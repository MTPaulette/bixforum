<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield("title")</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet">

    </head>
    <body>
        <button type="button" class="btn-primary">primary</button>
        <button type="button" class="btn-danger">danger</button>
        
        <div>@yield("header")</div>
        <div>@yield("footer")</div>
        
        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    </body>
</html>
