<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
       
// Define variables and set to empty values
<?php
// Define variables and set to empty values
$useridErr = $passwordErr = $nameErr = $addressErr = $countryErr = $zipErr = $emailErr = $genderErr = $languageErr = $aboutErr = "";
$userid = $password = $name = $address = $country = $zip = $email = $gender = $language = $about = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate the userid field
    if (empty($_POST["userid"])) {
        $useridErr = "User ID is required";
    } else {
        $userid = $_POST["userid"];
        // Check if the userid input is 5-7 characters
        if (strlen($userid) < 5 || strlen($userid) > 7) {
            $useridErr = "User ID must be 5-7 characters";
        }
    }

    // Validate the password field
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = $_POST["password"];
        // Check if the password input is 7-12 characters
        if (strlen($password) < 7 || strlen($password) > 12) {
            $passwordErr = "Password must be 7-12 characters";
        }
    }

    // Validate the name field
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = $_POST["name"];
        // Check if the name input contains only letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    // Validate the address field
    if (empty($_POST["address"])) {
        $addressErr = "Address is required";
    } else {
        $address = $_POST["address"];
    }

    // Validate the country field
    if (empty($_POST["country"])) {
        $countryErr = "Country is required";
    } else {
        $country = $_POST["country"];
    }

    // Validate the zip field
    if (empty($_POST["zip"])) {
        $zipErr = "Zip Code is required";
    } else {
        $zip = $_POST["zip"];
        // Check if the zip input is a number
        if (!is_numeric($zip)) {
            $zipErr = "Zip Code must be a number";
        }
    }

    // Validate the email field
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = $_POST["email"];
        // Check if the email address is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Validate the gender field
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Validate the language field
  if (empty($_POST["language"])) {
    $languageErr = "Language is required";
  } else {
    $language = $_POST["language"];
    // Check if the language input contains only letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$language)) {
      $languageErr = "Only letters and white space allowed";
    }
  }

  // Validate the about field
  if (empty($_POST["about"])) {
    $aboutErr = "About is required";
  } else {
    $about = $_POST["about"];
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the values of the form fields
  $userId = test_input($_POST["userId"]);
  $password = test_input($_POST["password"]);
  $name = test_input($_POST["name"]);
  $address = test_input($_POST["address"]);
  $country = test_input($_POST["country"]);
  $zipCode = test_input($_POST["zipCode"]);
  $email = test_input($_POST["email"]);
  $gender = test_input($_POST["gender"]);
  $language = test_input($_POST["language"]);
  $about = test_input($_POST["about"]);

  // Display the values of the form fields
  echo "User ID: " . $userId . "<br>";
  echo "Password: " . $password . "<br>";
  echo "Name: " . $name . "<br>";
  echo "Address: " . $address . "<br>";
  echo "Country: " . $country . "<br>";
  echo "Zip Code: " . $zipCode . "<br>";
  echo "Email: " . $email . "<br>";
  echo "Gender: " . $gender . "<br>";
  echo "Language: " . $language . "<br>";
  echo "About: " . $about . "<br>";
}
}
?>
    </body>
</html>
