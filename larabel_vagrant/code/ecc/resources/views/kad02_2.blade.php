<html lang="ja"> 
    <head>
        <title>課題 02_2</title> 
    </head>
    <body>
        <h1>Blade</h1> 
        <hr> 
        <div>{{$message}}</div>
        <hr>
        @foreach($url as $item => $value)
            <a href="{{$value}}">{{$item}}</a></br>
        @endforeach
     </body>
</html>