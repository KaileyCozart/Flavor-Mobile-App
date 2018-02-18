<html>
<head>
    <title>PHP Feedback Form</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
    <div class="feedbackDiv">
        <h3> Please Give Us Your Feedback </h3>
        <form method="post" action="sendmail.php">
            <p> Email: </p>
            <input name="email" type="text" />
            <p> Message: </p>
            <textarea name="message" rows="15" cols="40"></textarea><br />
            <input class="button" type="submit" />
        </form>
    </div>
</body>
</html>

