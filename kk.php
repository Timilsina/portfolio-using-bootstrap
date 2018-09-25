$myclient_id = "42889b1f-f929-414d-91b4-e4470df9e6ab";

$myredirect_uri = "https://kurilo.moodlecloud.com/";                 

$myscopes = "wl.basic,wl.emails wl.signin,wl.offline_access ";

//coding to redirect to the Microsoft application just created.                    

header("Location: " . "https://login.live.com/oauth20_authorize.srf?client_id=" . $myclient_id . "&scope=" . $myscopes . "&response_type=token&redirect_uri=" . $myredirect_uri);
 
