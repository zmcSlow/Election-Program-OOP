<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/ISU-logo.png" type="image/icon type">
    <title>Thank You</title>
</head>

<body>
    <h1>Thank You for Voting!</h1>

    <h2>Vote Summary:</h2>
    <p>President:
        <?php echo $_GET['president']; ?>
    </p>
    <p>Vice President:
        <?php echo $_GET['vicePresident']; ?>
    </p>
    <p>Secretary:
        <?php echo $_GET['secretary']; ?>
    </p>
    <p>Treasurer:
        <?php echo $_GET['treasurer']; ?>
    </p>
    <p>Auditor:
        <?php echo $_GET['auditor']; ?>
    </p>
    <p>Accountant:
        <?php echo $_GET['accountant']; ?>
    </p>
</body>

</html>