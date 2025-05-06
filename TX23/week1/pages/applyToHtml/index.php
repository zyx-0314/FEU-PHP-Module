<?php
$h1 = "Hi Ian!";
$h2 = "Testing 1! 2! 3!";

$old = true;
$citizen = true;
$holder;

$ten = 10;
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sample to ng PHP sa HTML</title>
    </head>

    <body>
        <div class="container">
            <h1><?php echo $h1 ?></h1>
            <h2><?php echo $h2 ?></h2>
        </div>

        <h2>Implementation of conditiona 1</h2>
        <!-- XXX Condfitional Implementation sample 1 -->
        <div class="container">
            <h3>
                <?php
                if ($old && $citizen) {
                    echo "Certified";
                } else {
                    echo "Not Certified";
                }
                ?>
            </h3>
        </div>

        <h2>Implementation of conditiona 2</h2>
        <!-- XXX Conditional  Implementation sample 2 -->
        <div class="container">
            <?php if ($old && $citizen): ?>
                <h3>
                    <?php echo "Certified"; ?>
                </h3>
            <?php else: ?>
                <h3>
                    <?php echo "Certified"; ?>
                </h3>
            <?php endif ?>
        </div>

        <h2>Implementation of looping 1</h2>
        <!-- XXX Looping  Implementation sample 1 -->
        <div class="container">
            <?php for ($i = 0; $i < $ten; $i++): ?>
                <h4><?php
                echo "Hi ka " . $i . "<br>";
                ?></h4>
            <?php endfor ?>
        </div>

        <h2>Implementation of looping 2</h2>
        <!-- XXX Looping  Implementation sample 2 -->
        <div class="container">
            <?php for ($i = 0; $i < $ten; $i++) {
                echo "<h4> Hi ka " . $i . "<br> </h4>";
            } ?>
        </div>
    </body>

</html>