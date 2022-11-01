<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nama Saya</title>

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js">
</head>
<body>
  <div class="container text-center mt-3">
        <div class="row">
          <div class="col">
          <div class="col">
          <div class="card">
          </div>
    <div class="card" style="width: 18rem;">
        <img
         src="https://www.thesprucepets.com/thmb/AlsaZ1vMyplHqJkbe-iKeyzJwRY=/4368x2912/filters:fill(auto,1)/burmese-cat-love-85151671-5c87d723c9e77c0001a3e5ae.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">
    {{ $data['name']}}
  </h5>
    <p class="card-text">
      {{ $data['address']}}
    </p>
    </div>
</div>
<div class="col"></div>
</div>
  
  <!-- {{ $data['name'] }} <br>
  {{ $data['age'] }} <br>
  {{ $data['address'] }} <br>
<p>pemanggilan menggunakan foreach</p>
@foreach ($data as $val)
  {{ $val }} <br>
@endforeach -->

  </body>
</html>