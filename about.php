<?php
//Define variable for title later used with echo
$title = 'About Page';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--Two divs with parent and child. That present title and common header-->
    <div>
        <div>
            <header>
                <h1><?php echo $title ?></h1>
            </header>
        </div>
    </div>
    <!---->
    <div>
        <p>Text about the team</p>
    </div>
    </div>
</body>

</html>