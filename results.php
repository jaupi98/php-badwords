<?php
    $badword =$_GET['badword'];
    $paragraph =$_GET['paragraph'];
    
    // var_dump($badword);
    // var_dump($paragraph);
    $paragraph_leght = strlen($paragraph);

    $censored_paragraph = str_replace($badword,'***',$paragraph);
    $par_censured = strlen($censored_paragraph);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h4, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Paragrafo</h4>
    <p><?php echo $paragraph; ?> </p>
    <h4>Parola cattiva</h4>
    <p><?php echo $badword; ?> </p>
    <p><strong>Lunghezza paragrafo:</strong><?php echo $paragraph_leght; ?></p>
    <h4>Parola censuarata</h4>
    <p><?php echo $censored_paragraph; ?></p>
    <p><strong>Lunghezza paragrafo censurata:</strong><?php echo $par_censured; ?></p>
</body>
</html>