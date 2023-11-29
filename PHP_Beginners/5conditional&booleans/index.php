<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>
        body{
            height: 100vh;
            display: grid;
            place-items: center;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php
        // This is variables
        $name = "Dark Matter";
        $red = false;

        // CONDITIONAL SENTENCES
        // if else
        // if($red){//this always has True value
        //     $message = "You have red $name";
        // }else{//this always has False value
        //     $message = "You have NOT red $name";
        // }

        //Trenary Operator
        $message = $red ? "You have red $name": "You have NOT red $name";
    ?>
    <h1>
        <!-- This is away for print value -->
        <!-- <?php echo $message; ?>     -->
        <?= $message; ?>    
    </h1>
    
</body>
</html>