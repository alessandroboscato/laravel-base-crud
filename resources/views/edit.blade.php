<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Change book</title>
</head>
<body>
  <form action="{{route('books.update', $book->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="div">
      <label for="name">Titolo</label>
      <input type="text" name="title" placeholder="Titolo" id="title" required value="{{ $book->title }}">
    </div>
    <div class="div">
      <label for="author">Autore</label>
      <input type="text" name="author" placeholder="Autore" id="author" required value="{{ $book->author }}">
    </div>
    <div class="div">
      <label for="edition">Editore</label>
      <input type="text" name="edition" placeholder="Editore" id="edition" required value="{{ $book->edition }}">
    </div>
    <div class="div">
      <label for="genre">Genere</label>
      <input type="text" name="genre" placeholder="Genere" id="genre" required value="{{ $book->genre }}">
    </div>
    <div class="div">
      <label for="image">Immagine</label>
      <input type="text" name="image" placeholder="Immagine URL" id="image" required value="{{ $book->image }}">
    </div>
    <div class="div">
      <label for="year">Anno di pubblicazione</label>
      <input type="date" name="year" id="year" required value="{{ $book->year }}">
    </div>
    <div class="div">
      <label for="isbn">ISBN</label>
      <input type="text" name="isbn" placeholder="ISBN" id="isbn" required value="{{ $book->isbn }}">
    </div>
    <div class="div">
      <label for="pages"></label>
      <input type="number" name="pages" placeholder="pages" id="pages" required value="{{ $book->pages }}">
    </div>

    <input type="submit" value="Modifica">
  </form>
  @if ($errors->any())
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  @endif
</body>
</html>
