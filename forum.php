<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">

</head>
<body>
  <div class="container">
    <form action="forum.php" method="post">
      <div class="form-group">

        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" name="Förnamn" placeholder="Förnamn">
          <label for="floatingInput">Förnamn</label>
        </div>

        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" name="Efternamn" placeholder="Efternamn">
          <label for="floatingInput">Efternamn</label>
        </div>
        
      </div>
    </form>
  </div>
</body>
</html>