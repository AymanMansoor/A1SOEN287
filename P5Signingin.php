<?php
//Create session
session_start(); 

//Variables and constants
$errorsUsername = 0;
$errorsPassword = 0;
$NBOFUSERS = 2;

if(isset($_POST['login-btn'])){ //All action starts when submit button has been pressed

    /*Obtain login info from fields*/
    $loginInfo = array("username"=>$_POST['email'],"password"=>$_POST['pswrd']);

    /*Validate that info correlates to an already registered account from xml file*/
    $xmldata = simplexml_load_file('usersFile.xml'); //interprets xml file into an object
    for($i = 0; $i < $NBOFUSERS; $i++){  
        $xmlUsername = $xmldata->user[$i]->email; //Retrieves user info from xml file
        $xmlPassword = $xmldata->user[$i]->password;
        //echo $xmlUsername;
        //echo $xmlPassword;

        if($loginInfo["username"] ===  $xmlUsername) 
        {
            if($loginInfo["password"] === $xmlPassword) 
            {
                if($xmlUsername == "Admin" && $xmlPassword == "Admin")
                {
                    /*You have successfully signed in as Admin. You are given internal privaliges*/
                    $_SESSION['email'] = $xmlUsername; //Creates session variables for the Admin currently logged in
                    $_SESSION['pswrd'] = $xmlPassword;
                    header("Location: P11OrderList.php"); //redirects to the backstore pages
                    exit();
                } else 
                    {
                        /*You have successfully signed in */
                        //echo "<script type="text/javascript"> alert("Successfully logged in"); </script>"; 
                        $_SESSION['email'] = $xmlUsername; //Creates session variables for the user currently logged in
                        $_SESSION['pswrd'] = $xmlPassword;
                        header("Location: P1Menu.php"); //redirects the page to the menu
                        exit(); 
                    } 
            } else 
                {
                    $errorsPassword = $errorsPassword+1; //error count to determine the type of alert message
                }
        } else 
            {
                $errorsUsername = $errorsUsername+1;
            }
    }

    /*Username and password error alerts*/
    if($errorsUsername >= 1){
        echo "This user does not exist"; //need to fix this to be an actual alert
    } else if($errorsPassword >= 1) {
        echo "The password inputted is incorrect";
    }
    
    /*Keep the user logged in while navigating */
    if(isset($_SESSION["loginInfo"]))
    //Saving the username and password as cookies 
    if(!empty($_POST["rememberme"]))
    {
        //Username stored for 10 years
        setcookie("username", $xmlUsername, time()+(10*365*24*60*60));

        //Password stored for 10 years
        setcookie("password", $xmlPassword, time()+(10*365*24*60*60));

        $_SESSION["loginInfo"] =  $loginInfo;
    }
    else
    {
        if(isset($_COOKIE["username"]))
        {
            setcookie("username", "");
        }
        if(isset($_COOKIE["username"]))
        {
            setcookie("password", "");
        }
        else
        {
            $message = "Invalid Login Credentials";
        }
    }

}
?>