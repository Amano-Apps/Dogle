<?php use Shiroaky\Dogle\Utils\Assets; ?>
<?php use Shiroaky\Dogle\Utils\Preferences; ?>

<!DOCTYPE html>
<html lang="<?php Preferences::getLocate(); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dogle - Framework</title>
    <link rel="shortcut icon" href="<?php Assets::import('favicon.svg'); ?>" type="image/x-icon">
</head>
<style type="text/css">
    @import url('https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css');
    * { 
        margin: 0px; 
        padding: 0px; 
        border: none; 
        outline: none; 
    }
    body { 
        width: 100%; 
        height: 100vh; 
        display: flex; 
        flex-direction: column; 
        align-items: center; 
        justify-content: center; 
        gap: 8px;
        background-color: #293241; 
        color: #f2f2f2; 
    }
    h1 {
        display: flex;
        align-items: center;
        align-content: center;
        justify-items: center;
        gap: 8px;
    }
    .ion-md-heart {
        color: red;
        font-size: 3rem;
    }
</style>
<body>

    <h1>Wellcome to Dogle Framework</h1>
    <h2><i class="icon ion-md-heart"></i></h2>
    
</body>
</html>