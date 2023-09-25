<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PGM Tweets</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php

require_once 'includes/db.php';

 //2. query schrijven
 $query = "
    SELECT * 
    FROM message 
    INNER JOIN users ON message.user_id = users.user_id
    ORDER BY message_id DESC 
    LIMIT 20";

 //3. query uitvoeren
 $statement = $db->query($query);

 //4. resultaat verwerken
 $messages = $statement->fetchAll(PDO::FETCH_ASSOC);

// print_r($articles);

?>

<div class="container">
    <div class="messages">
        <form>
            <div class="message message-new">
            
                <div class="avatar">JD</div>

                <div class="content">
                    <textarea name="tweet"></textarea>
                    <button type="submit">Tweet</button>
                </div>
            </div>
        </form>

        <?php foreach($messages as $message) {

            // print_r($message);

            include 'views/message.php';

        } ?>
    </div>

</div>


</body>
</html>