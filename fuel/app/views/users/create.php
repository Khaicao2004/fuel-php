<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <form action="<?= Uri::create('users/store') ?>" method="post" enctype="multipart/form-data">
        <?= Form::csrf() ?>  <!-- Thêm token CSRF vào form -->
       <div class="mt-3">
       <label for="name">Name</label>
       <input type="text" name="name">
       </div>
       <div class="mt-3">
       <label for="email">Email</label>
       <input type="text" name="email">
       </div>
       <div class="mt-3">
       <label for="phone">Phone</label>
       <input type="text" name="phone">
       </div>
       <div class="mt-3">
       <label for="address">Address</label>
       <input type="text" name="address">
       </div>
       <div class="mt-3">
       <label for="avatar">Avatar</label>
       <input type="file" name="avatar">
       </div>
        <button type="submit">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>




