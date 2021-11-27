<?php
       $title = "Register | Sports Warehouse";
       //start buffer
ob_start();

//check if submit button has been clicked by the user
if (isset($_POST["submitButton"]))
{
    processForm();
}
else{
    include "templates/contactForm.html.php";
}
//check the form for missing fields
function processForm()
{
    //set up an array with mandatory fields
    $requiredFields = ["firstName", "lastName", "email", "phone"]; 
    
    //set up an array to hold the missing fields
    $missingFields = [];

    //for each required field check a value was set using isset //and check the fields exists
    foreach($requiredFields as $requiredField)
    {
        if (!isset($_POST[$requiredField]) || !$_POST[$requiredField])
        {
            //if the field is missing add it to the $missingFields array
            $missingFields[] = $requiredField;
        }
    }
    //display missing fields
    if($missingFields)
    {
        //include missing fields file
        include "templates/displayMissingFields.html.php"; 
        include "templates/contactForm.html.php";
    }
    else 
    {
        //display thanks file
        include "templates/confirmation.html.php"; 
    }
}



       $output = ob_get_clean();
include "templates/layoutContactForm.html.php"; ?>