<?php

$currentDate = date("Y-m-d H:i:s");

if(isset($_POST['submit'])) {
    $file = "data.json";
    $json_string = json_encode($_POST,JSON_PRETTY_PRINT);
    file_put_contents($file,$json_string,FILE_APPEND);
    //header('Location:thanks.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>form to json</title>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
                $.getJSON('data.json', function(k,v){
                    $.each(data, function(){
                        var name = v.name;
                        var email = v.email;
                        var phone = v.phone;
                        $('#formFeed').append('<div>' + name + '<br />' + email + '<br />' + phone + '</div>')
                    });
                });
        });
    </script>
</head>
<body>
    <div>
        <form name="testform" action="" method="post">
            <input type="hidden" name="timestamp" value="<?php echo $currentDate; ?>" />
            <input type="text" name="name" placeholder="your name" /><br />
            <input type="text" name="email" placeholder="email address" /><br />
            <input type="text" name="phone" placeholder="phone number" /><br />
            <textarea name="message" id="message" cols="30" rows="10" placeholder="message"></textarea><br />
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
    
    <div id="formFeed">
        
    </div>
</body>
</html>