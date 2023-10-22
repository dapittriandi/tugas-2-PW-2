<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 2 - latihan 1</title>
    <style>
        .kotak {
        border: 1px solid #1b1717;
        height: 50px;
        width: 50px;
        text-align: center;
        line-height: 50px;
        display: inline-block;
        vertical-align: middle;
        margin-bottom: 5px;
        }
        .clear {
            clear:both;
        }
    </style>
</head>
<body>
    <?php 
    for ($i=1; $i <= 5; $i++) { 
        for ($j=1; $j <= $i ; $j++) { ?>
         <div class="kotak"><?php echo $j; ?></div> 
           
       <?php } ?>
            <div class="clear"></div>
    <?php } ?>
</body>
</html>