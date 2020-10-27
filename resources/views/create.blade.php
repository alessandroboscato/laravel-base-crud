<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="{{route('books.store')}}" method="POST">
    @csrf
    @method('POST')
    <div class="div">
      <label for="name">Titolo</label>
      <input type="text" name="title" placeholder="Titolo" id="title">
    </div>
    <div class="div">
      <label for="author">Autore</label>
      <input type="text" name="author" placeholder="Autore" id="author">
    </div>
    <div class="div">
      <label for="edition">Editore</label>
      <input type="text" name="edition" placeholder="Editore" id="edition">
    </div>
    <div class="div">
      <label for="genre">Genere</label>
      <input type="text" name="genre" placeholder="Genere" id="genre">
    </div>
    <div class="div">
      <label for="image">Immagine</label>
      <input type="text" name="image" placeholder="Immagine URL" id="image">
    </div>
    <div class="div">
      <label for="year">Anno di pubblicazione</label>
      <input type="date" name="year" id="year">
    </div>
    <div class="div">
      <label for="isbn">ISBN</label>
      <input type="text" name="isbn" placeholder="ISBN" id="isbn">
    </div>
    <div class="div">
      <label for="pages"></label>
      <input type="number" name="pages" placeholder="pages" id="pages">
    </div>

    <input type="submit" value="Salva">
  </form>
</body>
</html>
