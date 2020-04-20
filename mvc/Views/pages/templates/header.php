<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH_FULL ?>css/style.css">
    <title><?php echo self::titulo; ?></title>
</head>
<body>
<header>
    <div class="center">
        <div class="logo">
            <h2>Danki Code</h2>
        </div><!--logo-->
        <nav class="menu">
            <?php
                foreach ($this->menuItems as $key => $value) {
                    echo '<a href="'.INCLUDE_PATH.strtolower($value).'">'.$value.'</a>';
                }

            ?>
        </nav>
        <div class="clear"></div>
    </div><!--center-->
</header>