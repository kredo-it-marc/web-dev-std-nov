<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Row Col Act</title>
</head>
<body>
    <div class="container py-5">
        <div class="card w-25 mx-auto">
            <div class="card-body">
                <form action="" method="post">
                    <label for="row" class="form-label">Row</label>
                    <input type="number" name="row" id="row" class="form-control mb-3" required>
                    <label for="col" class="form-label">Column</label>
                    <input type="number" name="col" id="col" class="form-control mb-3" required>
                    <input type="submit" value="Submit" class="btn btn-primary w-100" name="btn_submit">
                </form>
            </div>
        </div>
        <div class="w-50 mx-auto mt-5">
            <!-- FORM HANDLING CODE HERE -->
            <?php
                if( isset($_POST["btn_submit"]) )
                {
                    //INPUT
                    $row = $_POST["row"];
                    $col = $_POST["col"];

                    //PROCESS & OUTPUT
                    echo "<h1 class='text-center'>$row x $col Table</h1>";
                    echo "<table class='table table-bordered table-striped'>";
                        for($i=1; $i<=$row; $i++) //dislpay <tr>
                        {
                            echo "<tr>";
                                for($x =1; $x<=$col; $x++) //display <td>
                                {
                                    echo "<td></td>";
                                }
                            echo "</tr>";
                        }
                    echo "</table>";

                }
            ?>  
        </div>
    </div>
</body>
</html>

