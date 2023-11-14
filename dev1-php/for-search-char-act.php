<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Search Char Act</title>
</head>
<body>
    <div class="container py-5">
        <!-- FORM HANDLING CODE HERE -->
        <?php
            if( isset($_POST["btn_submit"]) )
            {
                //INPUT
                $word = $_POST["word"];
                $word_lower = strtolower($word);
                $word_count = strlen($word);

                //PROCESS
                $count = 0;

                for($i=0; $i<$word_count; $i++)
                {
                    $char = substr($word_lower,$i,1);

                    if($char=='a' || $char=='e' || $char=='i' || $char=='o' || $char=='u') //check if the character is a VOWEL
                    {
                        $count++;
                    }
                }

                //OUTPUT
                echo "<div class='alert alert-success w-50 mx-auto text-center'>The word $word has $count Vowels.</div>";
            }
        ?>
        <div class="card w-25 mx-auto">
            <div class="card-body">
                <form action="" method="post">
                    <label for="word" class="form-label">Enter a Word</label>
                    <input type="text" name="word" id="word" class="form-control mb-3" required>
                    <input type="submit" value="Submit" class="btn btn-primary w-100" name="btn_submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>

