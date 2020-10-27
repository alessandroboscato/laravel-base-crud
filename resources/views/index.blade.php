<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @foreach ($books as $book)
    <div class="">
      <h2>{{$book->title}}</h2>
      <h3>{{$book->author}}</h3>
      <p>{{$book->edition}}</p>
      <img src="{{$book->image}}" alt="">
    </div>
  @endforeach
</body>
</html>
