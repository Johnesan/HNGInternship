<html>
    <head>
        <title>Jcool with HNG</title>
            
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>

    <body>
           <div id="container">
                <p id="paragraph1">WELCOME TO HNG</p>
                <p id="paragraph2">The time is:</p>

                <div id="time_section">
                    
                    <?php
                    date_default_timezone_set("Africa/Lagos");
                    $current_time = date("h i a");
                    $values = explode(" ", $current_time);
                    ?>

                    <div class="button_container"><p class="button"><?php echo $values[0]; ?> </p></div>
                    <div class="button_container"><p class="button"><?php echo $values[1]; ?></p></div>
                    <div class="button_container"><p class="button"><?php echo strtoupper($values[2]); ?></p></div>
                </div>
            </div>
    </body>

</html>