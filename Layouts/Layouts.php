<?php
class Layouts{
    public function heading(){
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>1Document</title>
            <link rel="stylesheet" href="Css/style.css">

        </head>
        <body>
            
        </body>
        </html>
        <?php
    }
    public function footer(){
        ?>
        <div>
            Copy right &copy; ICS <?php echo date('Y'); ?>
        </div>
    </body>
    </html>
    <?php

    }
}
?>