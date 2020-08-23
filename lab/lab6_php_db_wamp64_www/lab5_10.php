<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>lab5_10</title>

    <style type = "text/css">
        td, th, table {border: thin solid black;}
    </style>
</head>
    <body>
        <?php
            $name = $_POST["txtName"];
            $payment = $_POST["card"];
            $bulb = $_POST["chkBulb"];

            $bulb1 = "×";
            $bulb2 = "×";
            $bulb3 = "×";
            $bulb4 = "×";

            $total = 0;
            if($bulb != NULL)
            {
                for($i = 0; $i < count($bulb); $i++)
                {
                    $total += (double)$bulb[$i];
                    if($bulb[$i] == 2.39)
                    {
                        $bulb1 = "√";
                    }
                    if($bulb[$i] == 4.29)
                    {
                        $bulb2 = "√";
                    }
                    if($bulb[$i] == 3.95)
                    {
                        $bulb3 = "√";
                    }
                    if($bulb[$i] == 7.49)
                    {
                        $bulb4 = "√";
                    }
                }
                $total *= (1 + 0.062);
            }
        ?>
        <h4> Customer: </h4>
        <?php
            print("$name <br />")
        ?>
        <p></p>
        <table>
            <caption> Order Information </caption>
            <tr>
                <th> Product </th>
                <th> Price </th>
                <th> Buy or not </th>
            </tr>
            <tr>
                <td> Four 25-watt light bulbs for $2.39 </td>
                <td> $2.39 </td>
                <td> <?php echo $bulb1 ?></td>
            </tr>
            <tr>
                <td> Eight 25-watt light bulbs for $4.29 </td>
                <td> $4.29 </td>
                <td> <?php echo $bulb2 ?> </td>
            </tr>
            <tr>
                <td> Four 25-watt life-long bulbs for $3.95 </td>
                <td> $3.95 </td>
                <td> <?php echo $bulb3 ?> </td>
            </tr>
            <tr>
                <td> Eight 25-watt life-long bulbs for $7.49 </td>
                <td> $7.49 </td>
                <td> <?php echo $bulb4 ?> </td>
            </tr>
        </table>
        <p></p>
        <?php
        printf ("Your total bill is: $ %5.2f <br />", $total);
        print "Your chosen method of payment is: $payment <br />";
        ?>
    </body>
</html>