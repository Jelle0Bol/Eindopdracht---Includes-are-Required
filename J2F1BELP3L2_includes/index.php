<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'title.php'; ?>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'includes/header.php'; 

    $subject = $_GET [ 'subject' ];
    
    include 'pages/onderwerp' . $subject . '.php';


    include 'includes/footer.php'; ?>
</body>
</html>