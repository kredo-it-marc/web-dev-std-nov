<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Consonant or Vowel</title>
</head>
<body>
    <div class="container py-5">
        <!-- FORM HANDLING CODE HERE -->
        <?php
            if( isset($_POST["btn_submit"]) )
            {
                //INPUT
                $char = $_POST["char"];
                $char_lower = strtolower($char);
                $char_count = strlen($char);

                if($char_lower == 'a' || $char_lower == 'e'||$char_lower == 'i'||$char_lower == 'o'||$char_lower == 'u') //check if the input is a VOWEL => AEIOU
                {
                    echo "<div class='alert alert-primary w-50 mx-auto mb-3 text-center'>$char is a VOWEL</div>";
                }
                elseif($char_count > 1 || ctype_alpha($char)== FALSE )//check if input is invalid
                {
                    echo "<div class='alert alert-danger w-50 mx-auto mb-3 text-center'>$char is INVALID</div>";
                }
                else // input is a CONSONANT
                {
                    echo "<div class='alert alert-success w-50 mx-auto mb-3 text-center'>$char is a CONSONANT</div>";
                }
            }
        ?>
        <div class="card w-25 mx-auto">
            <div class="card-body">
                <form action="" method="post">
                    <label for="char" class="form-label">Character</label>
                    <input type="text" name="char" id="char" class="form-control mb-3" required>
                    <input type="submit" value="Submit" class="btn btn-primary w-100" name="btn_submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>

