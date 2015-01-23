<?php

$currentDate = date("Y-m-d H:i:s");

if(isset($_POST['submit'])) {
    $file = "data.json";
    $json_string = json_encode($_POST,JSON_PRETTY_PRINT);
    file_put_contents($file,$json_string,FILE_APPEND);
    header('Location:thanks.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To JSON and back again</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    
</head>
<body>
    <div class="container">
       <br /><br />
        <div class="row">
            <div class="col-sm-offset-3 col-sm-6">
               
                <h2>TO JSON...</h2>
                <p>Use this form to submit data to JSON</p>
                
                <form name="testform" action="" method="post">
                    <input type="hidden" name="timestamp" value="<?php echo $currentDate; ?>" />
                    <input type="text" name="name" class="form-control" placeholder="your name" /><br />
                    <input type="text" name="email" class="form-control" placeholder="email address" /><br />
                    <input type="text" name="phone" class="form-control" placeholder="phone number" /><br />
                    <textarea name="message" class="form-control" id="message" rows="5" placeholder="message"></textarea><br />
                    <button type="submit" name="submit" class="btn btn-primary btn-block">SEND TO JSON</button>
                </form>
            </div>
        </div>
    </div>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
    
</body>
</html>