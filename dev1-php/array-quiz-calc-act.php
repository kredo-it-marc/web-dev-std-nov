<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Quiz Calculator</title>
</head>
<body>
    <div class="container py-5">
        <div class="card w-25 mx-auto mb-5">
            <div class="card-body">
                <form action="" method="post">
                    <label for="no-of-quizzes" class="form-label">How many quizzes do you have?</label>
                    <input type="number" name="no_of_quizzes" id="no-of-quizzes" class="form-control mb-3" required>
                    <input type="submit" value="Set" class="btn btn-primary w-100" name="btn_set">
                </form>
            </div>
        </div>

        <div class="w-25 mx-auto">
            <form action="" method="post">
                <?php
                    if( isset($_POST["btn_set"]) )
                    {
                        //INPUT
                        $no_of_quizzes = $_POST["no_of_quizzes"];

                        //PROCESS
                        for($i=1; $i<= $no_of_quizzes; $i++)
                        {
                            echo "<label class='form-label' for='quiz-$i'>Quiz #$i</label>";
                            echo "<input type='number' name='score[]' id='quiz-$i' class='form-control mb-3' required>";
                        }

                        echo "<input type='submit' name='btn_save' value='Save' class='btn btn-success w-100'>";
                    }   
                ?>
            </form>
        </div>

        <?php
            if( isset($_POST["btn_save"]) )
            {
                //INPUT
                $scores = $_POST["score"];

                //PROCESS
                $total_score = 0;
                $scores_count = count($scores);

                foreach($scores as $x)
                {
                    $total_score += $x; //$total_score = $total_score + $x;   
                }

                $average = $total_score / $scores_count;

                //OUTPUT

                echo "<div class='alert alert-success w-50 mx-auto my-3 text-center'>The average score is $average</div>";
            }
        ?>
    </div>
</body>
</html>

