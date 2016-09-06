<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/JobOpening.php";
    require_once __DIR__."/../src/Contact.php";



    $app = new Silex\Application();

    $app->get("/", function() {
        return "
        <!DOCTYPE html>
        <html>
            <head>

                <title>Job Posting</title>
            </head>
            <body>
                <h3>Enter a new Job Posting:</h3>
                <form action='/view-openings'>
                    <label>Job Title</label>
                    <input type='text' name='title_input'>
                    <label>Job Description</label>
                    <input type='text' name='description_input'>
                    <h3>Contact Information</h3>
                    <label>Job Contact</label>
                    <input type='text' name='name_input'>
                    <label>Phone Number</label>
                    <input type='text' name='phone_input'>
                    <label>Address</label>
                    <input type='text' name='address_input'>
                    <button class='btn btn-danger' type='submit'>Post</button>
                </form>
            </body>
        </html>
        ";
    });

    $app->get("/view-openings", function() {
        $newContact = new Contact($_GET["name_input"], $_GET["phone_input"], $_GET["address_input"]);
        $newPosting = new JobOpening($_GET['title_input'], $_GET['description_input'], $newContact);
        $title = $newPosting->getTitle();
        $description = $newPosting->getDescription();
        $contact = $newPosting->getContact();
        $phone = $contact->getPhone();
        $name = $contact->getName();
        $address = $contact->getAddress();


        return "
        <!DOCTYPE html>
        <html>
            <head>

                <meta charset='utf-8'>
                <title>Job Posting</title>
            </head>
            <body>
                <div class='well'>
                    <h3>Your Job Posting:</h3>
                    <h4>$title</h4>
                    <p>$description</p>
                    <p>For more information, contact $name at $phone or mail us at $address.</p>
                </div>
            </body>
        </html>";
    });

    return $app;
?>
