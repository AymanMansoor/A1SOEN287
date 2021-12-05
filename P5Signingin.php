<?php
//Create session
session_start(); 

//Variables and constants
$errorsUsername = 0;
$errorsPassword = 0;

if(isset($_POST['login-btn'])){ //All action starts when submit button has been pressed
    $_SESSION['submitLogin'] = true;

    /*Obtain login info from fields*/
    $loginInfo = array("username"=>$_POST['email'],"password"=>$_POST['pswrd']);

    /*Count the number of user elements in xml file*/
    $doc = new DOMDocument(); //Create a new DOMDocument
    $doc->load('usersFile.xml'); //load the xml file to the document
    $user = $doc->getElementsByTagName('user')->length; //creates the XML document and determines number of 'user' elements
    $doc->saveXML();

    /*Validate that info correlates to an already registered account from xml file*/
    $xmldata = simplexml_load_file('usersFile.xml'); //interprets xml file into an object
    for($i = 0; $i < $user; $i++){  
        $xmlUsername = $xmldata->user[$i]->email; //Retrieves user info from xml file
        $xmlPassword = $xmldata->user[$i]->password;

        if($loginInfo["username"] ===  trim($xmlUsername)) 
        {
            if($loginInfo["password"] === trim($xmlPassword)) 
            {
                if($xmlUsername == "Admin" && $xmlPassword == "Admin")
                {
                    /*You have successfully signed in as Admin. You are given internal privaliges*/
                    $_SESSION['email'] = $loginInfo["username"]; //Creates session variables for the Admin currently logged in
                    $_SESSION['pswrd'] = $loginInfo["password"];
                    header("Location: P11OrderList.php"); //redirects to the backstore pages
                    exit();
                } else 
                    {
                        /*You have successfully signed in */ 
                        $_SESSION['email'] = $loginInfo["username"]; //Creates session variables for the user currently logged in
                        $_SESSION['pswrd'] = $loginInfo["password"];
                        header("Location: P1Menu.php"); //redirects the page to the menu
                        exit(); 
                    } 
            } else 
                {
                    $_SESSION['wrongPassword'] = true;
                    header("Location: P5LoginError.php"); 
                }
        } else 
            {
                $_SESSION['wrongEmail'] = true;
                header("Location: P5LoginError.php"); //logical issue with this when iterating in the for loop to find the email match
            }
    } //end of for loop

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