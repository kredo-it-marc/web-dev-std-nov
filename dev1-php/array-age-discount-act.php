<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Age Discount</title>
</head>
<body>
    <div class="container py-5">
        <div class="card w-25 mx-auto">
            <div class="card-body">
                <form action="" method="post">
                    <label for="no-of-customers" class="form-label">How many customers are going to eat at the cafe?</label>
                    <input type="number" name="no_of_customers" id="no-of-customers" class="form-control mb-3" required>
                    <input type="submit" value="Set" class="btn btn-primary w-100" name="btn_set">
                </form>
            </div>
        </div>

        <div class="w-25 mx-auto my-5">
            <form action="" method="post">
                <?php
                    if(isset($_POST["btn_set"]))
                    {
                        //INPUT
                        $no_of_customers = $_POST["no_of_customers"];

                        //PROCESS
                        echo "<h1 class='text-center display-5'>Enter the ages:</h1>";

                        for($i=1; $i<=$no_of_customers; $i++)
                        {
                            echo "<label class='form-label' for='customer-$i'>Customer #$i</label>";
                            echo "<input type='number' class='form-control mb-3' name='age[]' id='customer-$i' required>";
                        }

                        echo "<input type='submit' name='btn_save' value='Save' class='btn btn-success w-100'>";
                    }
                ?>
            </form>
        </div>

        <?php
            if(isset($_POST["btn_save"]))
            {
                // INPUT
                $ages = $_POST["age"];

                //PROCESS
                $prices = calculatePrice($ages);
                $total_price = calculateTotalPrice($prices);
                $ages_count = count($ages);

                //OUTPUT
                echo "<table class='table table-bordered w-25 mx-auto my-5'>";
                echo "<thead class='table-dark'><tr><th>Age</th><th>Price</th></tr></thead>";
                echo "<tbody>";
                    for($i=0; $i<$ages_count; $i++)
                    {
                        echo "<tr><td>".$ages[$i]."</td><td>".$prices[$i]."</td></tr>";
                    }
                echo "<tr class='table-danger'><td>Total price</td><td>$total_price</td></tr>";
                echo "<tr class='table-primary'><td>No. of Customers</td><td>$ages_count</td></tr>";
                echo "</tbody>";
                echo "</table>";
            }
        ?>
    </div>
</body>
</html>
<?php
    function calculatePrice($ages){
        $regular_rate = 325;
        $prices = [];

        foreach($ages as $age)
        {
            if(0<=$age && $age<=5) //check if age is between 0-5
            {
                array_push($prices, 0);
            }
            elseif(6<=$age && $age<=10)//check if age is between 6-10
            {
                $discounted_price = $regular_rate * .90;
                array_push($prices,$discounted_price);   
            }
            elseif(60<=$age) //check if age is 60 and above
            {
                $discounted_price = $regular_rate * .95;
                array_push($prices, $discounted_price);
            }
            else
            {
                array_push($prices, $regular_rate);
            }
        }

        return $prices;
    }

    function calculateTotalPrice($prices){
        $total_price = 0;


        foreach($prices as $x)
        {
            $total_price += $x; //$total_price = $total_price + $x;
        }

        return $total_price;
    }
?>

