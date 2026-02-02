<!--11.Write a program to change background color of browser when user enter color name in  texbox
 (color=”red” “green” “blue”) if no color found than change color to purple-->

<!--<html>
<body style="background-color:
<? php echo $_POST['color']:?'purple' ;?>">
          <form method="post">
                    enter color:<input type="text" name="color">
                    <input type="submit">
          </form>
          </body>
          </html>-->

          <!DOCTYPE html>
<html>
<head>
    <title>Change Background Color</title>

    <?php
    $bgcolor = "white"; // default color

    if (isset($_POST['submit'])) {
        $color = strtolower(trim($_POST['color']));

        switch ($color) {
            case "red":
                $bgcolor = "red";
                break;

            case "green":
                $bgcolor = "green";
                break;

            case "blue":
                $bgcolor = "blue";
                break;

            default:
                $bgcolor = "purple";
        }
    }
    ?>

    <style>
        body {
            background-color: <?php echo $bgcolor; ?>;
        }
    </style>
</head>

<body>

<form method="post">
    Enter Color Name:
    <input type="text" name="color" required>
    <input type="submit" name="submit" value="Change Color">
</form>

</body>
</html>
