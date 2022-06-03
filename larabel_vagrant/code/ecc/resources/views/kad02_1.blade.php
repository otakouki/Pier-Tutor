<html lang="ja"> 
    <head>
        <title>課題 02_1</title> 
    </head>
    <body>
        <h1>はじめての Blade</h1> 
        <hr> 
        <div>{{$message}}</div>
        <hr>
        @foreach ($lang as $l) <div>{{ $l }}</div>
@endforeach
     </body>
</html>