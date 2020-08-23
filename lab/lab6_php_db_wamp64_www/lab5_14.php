<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> lab5_14 </title>
    </head>
    <body>
        <?php
            $name = $_POST["txtName"];
            $phoneNum = $_POST["txtPhone"];

            if($name == NULL)
            {
                print("Name column cannot be empty! <br />");
            }
            if(preg_match( "/^\d{3}-\d{3}-\d{4}$/", $phoneNum))
            {
                print("The format of your phone number $phoneNum is correct! <br />");
            }
            else
            {
                print("The format of your phone number $phoneNum is incorrect! You should follow the format 'ddd-ddd-dddd'. <br />");
            }
        ?>
    </body>
</html>