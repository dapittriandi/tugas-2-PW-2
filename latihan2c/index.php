<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 2 - latihan 1</title>
    <style>
        .kotak {
        border: 1px solid #1b1717;
        text-align: center;
        display: inline-block;
        margin-bottom: 5px;
        }

        .clear {
            clear: both;
        }

        .genap {
            background-color: #999;
            padding: 20px;
        }

        .ganjil {
            background-color: #003;
            color: #fff;
            padding: 20px;
        }
        
    </style>
</head>
<body>
    <?php 
    for ( $i = 1; $i <= 5; $i++ ) { 
        for ( $j = 0; $j < $i; $j++ ) { ?>

         <div class="kotak">
            <?php 
            if ( $i % 2 == 0) { ?>
                <div class="genap"><?php echo $i; ?></div>
            <?php 
            } else { ?>
                <div class="ganjil"><?php echo $i; ?></div>
            <?php 
            } ?>
        </div>
       <?php } ?>
            <div class="clear"></div>
    <?php } ?>
</body>
</html>