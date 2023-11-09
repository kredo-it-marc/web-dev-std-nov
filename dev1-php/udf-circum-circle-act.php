<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Circumference of a Circle</title>
</head>
<body>
    <div class="container py-5">
        <!-- FORM HANDLING CODE HERE -->
        <?php
            if( isset($_POST["btn_submit"]) )
            {
                //INPUT
                $radius = $_POST['radius'];

                //PROCESS
                $circumference = calculateCircumference($radius);

                //OUTPUT
                displayResult($radius, $circumference);
            }
        ?>
        <div class="card w-25 mx-auto">
            <div class="card-body">
                <form action="" method="post">
                    <label for="radius" class="form-label">Radius</label>
                    <input type="number" name="radius" id="radius" class="form-control mb-3" required>
                    <input type="submit" value="Submit" class="btn btn-primary w-100" name="btn_submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<!-- FUNCTION DECLARATION HERE -->
<?php
    function calculateCircumference($radius)
    {
        $circumference = 2 * pi() * $radius;
        return $circumference;
    }

    function displayResult($radius, $circumference)
    {
        echo "<div class='alert alert-primary w-50 mx-auto mb-3 text-center'>The circumference of a circle, given the radius of <span class='fw-bold fst-italic'>$radius</span>, is <span class='fw-bold fst-italic'>$circumference</span> units.</div>";
    }
?>
