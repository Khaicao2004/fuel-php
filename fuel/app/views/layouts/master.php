<!-- app/views/layouts/main_layout.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <?php
        echo View::forge('layouts/partials/css'); 
        echo Asset::css('style.css'); 
    ?> 
</head>
<body>
    <?php echo View::forge('layouts/partials/header'); ?>

    <div class="container">
        <?php echo $content; ?>
    </div>

    <?php
        echo View::forge('layouts/partials/footer'); 
        echo View::forge('layouts/partials/js'); 
    ?>
</body>
</html>
