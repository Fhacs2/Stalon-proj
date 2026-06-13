<?php
// Change Bank Name
define("WEB_TITLE","Stanlon Credits"); 
// Change Web URL https://domain.com or https://sud.domain.com  with No Ending splash "/"
define("WEB_URL","https://https://stalproj.vercel.app/"); 
// Change Your Website Email
define("WEB_EMAIL","support@ghost"); 
// Change Your Website Phone Number
define("WEB_PHONE","8"); 

// Do not Edit
$web_url = WEB_URL;
$web_title = WEB_TITLE;
$web_phone = WEB_PHONE;
$web_email = WEB_EMAIL;
// Do not Edit


// Set database Below
function dbConnect(){
    $servername = "process.env.POSTGRES_URL";
    //Change Database Username "root"
    $username = "process.env.POSTGRES_USER"; 
    //Change Database Password ""
    $password = "process.env.POSTGRES_PASSWORD";
    //Change Database ""
    $database = "process.env.POSTGRES_DATABASE";
    //Do not edit... That's all
    $dns = "mysql:host=$servername;dbname=$database";

    try {
        $conn = new PDO($dns, $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
//return dbConnect();

function inputValidation($value): string
{
    return trim(htmlspecialchars(htmlentities($value)));
}
