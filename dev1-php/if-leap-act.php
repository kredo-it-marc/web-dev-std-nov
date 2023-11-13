<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Leap Year</title>
</head>
<body>
    <div class="container py-5">
        <!-- FORM HANDLING CODE HERE -->
        <?php
            if( isset($_POST["btn_submit"]) )
            {
                //INPUT
                $year = $_POST["year"];

                //PROCESS
                if( (($year%4 == 0) && ($year%100 !=0)) || (($year%4 == 0) && ($year%100 == 0) && ($year%400 == 0)))
                {
                    echo "<div class='alert alert-primary w-50 mx-auto mb-3 text-center'>$year is a LEAP YEAR</div>";
                }
                else
                {
                    echo "<div class='alert alert-danger w-50 mx-auto mb-3 text-center'>$year is NOT a LEAP YEAR</div>";
                }
            }
        ?>
        <div class="card w-25 mx-auto">
            <div class="card-body">
                <form action="" method="post">
                    <label for="year" class="form-label">Year</label>
                    <input type="number" name="year" id="year" class="form-control mb-3" required>
                    <input type="submit" value="Submit" class="btn btn-primary w-100" name="btn_submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>

