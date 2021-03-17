<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h3>database db_cars</h3>

    @foreach($cars as $car)
      <div>marca e modello auto: {{$car->marca}} {{$car->modello}}</div>
      <div>targa: {{$car->targa}}</div>
      <div>anno immatricolazione: {{$car->anno}}</div>
      <br>
    @endforeach

  </body>
</html>
