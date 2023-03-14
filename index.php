
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    

    <form action="./result.php" method="GET">

          <!-- parking -->
          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="parking" checked>
          <label class="form-check-label" for="flexCheckChecked" name="parking" for="parking">
            Presenza Parcheggi
          </label>

          <!-- review -->
          <select class="form-select" aria-label="Default select example" name="review" for="review">
            <option selected>Stelle</option>
            <option value="1">1 o più</option>
            <option value="2">2 o più</option>
            <option value="3">3 o più</option>
            <option value="4">4 o più</option>
            <option value="5">5</option>
          </select>

        <button class="btn btn-danger">Invia il form</button>
        
      </form>


</body>

</html>