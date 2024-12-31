<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?= Uri::create('users/store') ?>" method="post">
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
</body>
</html>