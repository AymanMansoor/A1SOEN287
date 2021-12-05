<?php
session_start();

if(isset($_POST['create-acc-btn'])) {
    $_SESSION['submitted'] = true;

    /*Count the number of user elements in xml file*/
    $doc = new DOMDocument(); //Create a new DOMDocument
    $doc->load('usersFile.xml'); //load the xml file to the document
    $user = $doc->getElementsByTagName('user')->length; //creates the XML document and determines number of 'user' elements
    $doc->saveXML();

    /*register user info into a field*/
    $regUserInfo = array("firstname"=>($_POST['Firstname']), 
    "lastname"=>($_POST['Lastname']), 
    "username"=>($_POST['Email']), 
    "password"=>($_POST['Password']), 
    "confirmPassword"=>($_POST['ConfirmPassword'])
    );
   echo $regUserInfo['firstname'] . "<br>";
   echo $regUserInfo['lastname'] . "<br>";
   echo $regUserInfo['username'] . "<br>";
   echo $regUserInfo['password'] . "<br>";
   echo gettype($regUserInfo['password']) . "<br>";

   if(($_POST['Password']) != ($_POST['ConfirmPassword'])){
    $_SESSION['pasmatchErr'] = true;
    header("Location: P6LoginError.php");
    echo "these two passwords do not match" . "<br>"; 
   } else {
       echo "these two passwords match" . "<br>";
       $errors=0;

       $xmlObject = simplexml_load_file('usersFile.xml');

        for($i = 0; $i < $user; $i++){
        $theSameFNameXML = $xmlObject->user[$i]->firstname;
        $theSameLNameXML = $xmlObject->user[$i]->lastname;
        $theSameEmailXML = $xmlObject->user[$i]->email;
        $theSamePasswordXML = $xmlObject->user[$i]->password;

        if(($regUserInfo['firstname'] === trim($theSameFNameXML)) && ($regUserInfo['lastname'] === trim($theSameLNameXML))){
            $_SESSION['nameErr'] = true;
            $errors++;
            echo "this person already exists " . "<br>";
        } 

        if($regUserInfo['username'] === trim($theSameEmailXML)){
            $_SESSION['emailErr'] = true;
            $errors++;
            echo "This email is already in use" . "<br>";
        }

        if($regUserInfo["password"] === trim($theSamePasswordXML)){
            $_SESSION['passwordErr'] = true;
            $errors++;
            echo "this password is already taken" . "<br>";
        }
        } //end of for loop

        if($errors == 0){
        /*All info is validated, now we can create the user profile and add it to the file, and redirect the page to the front page*/
        $_SESSION['Firstname'] = $regUserInfo["firstname"];
        $_SESSION['Lastname'] = $regUserInfo["lastname"];
        $_SESSION['email'] = $regUserInfo["username"];
        $_SESSION['pswrd'] = $regUserInfo["confirmPassword"];

        /*create all the xml tags*/
        $rootTag = $doc->getElementsByTagName("document")->item(0);
        $userTag =  $doc->createElement("user");
        $fnameTag = $doc->createElement("firstname", $_REQUEST['Firstname']);
        $lnameTag = $doc->createElement("lastname", $_REQUEST['Lastname']);
        $emailTag = $doc->createElement("email", $_REQUEST['Email']);
        $passwordTag = $doc->createElement("password", $_REQUEST['Password']);
        /*append the tags to the <user> tag*/
        $userTag->appendChild($fnameTag);
        $userTag->appendChild($lnameTag);
        $userTag->appendChild($emailTag);
        $userTag->appendChild($passwordTag);
        /*append user tag within root tag*/
        $rootTag->appendChild($userTag);
        /*save file*/
        $doc->save("usersFile.xml");

        /*redirect sign-up page to front page with username*/
        header("Location: P1Menu.php");
        exit();
        } else {
           header("Location P6LoginError.php");
           exit();
        }
   }
}
?>