<?php
/*
Template Name: Boobies
*/
?>

<?php get_header(); ?>
<div class="page-content bg-color1">
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST['contactForm'])) {
                        // Set postSuccess to true - this will get set to false during validation if a value fails
                        $postSuccess = true;
                        
                        // Validate the email address
                        $email = test_input($_POST["contactEmail"]);
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
                            $emailErr = true;
                            $postSuccess = false;
                        } else { 
                            $emailErr = false; 
                        }
                    }
                }

                function test_input($data)
                {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }

                ?>

                <?php if ($postSuccess == true) : ?>
                    the form was submitted successfully
                <?php else : ?>
                    <form id="contactForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" novalidate>
                        <input type="hidden" name="contactForm" value="1" />
                        <div class="form-group">
                            <label for="contactFullName">Full Name</label>
                            <input type="text" name="contactFullName" id="contactFullName" aria-describedby="contatcFullNameHelp" placeholder="Enter email" value="<?php echo(isset($email)) ? $email : ''; ?>" class="form-control <?php if (isset($emailErr)) { echo($emailErr == true) ? 'is-invalid' : 'is-valid'; } ?>">
                            <small id="contactFullNameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="contactEmail">Email address</label>
                            <input type="email" name="contactEmail" id="contactEmail" aria-describedby="contactEmailHelp" placeholder="Enter email" value="<?php echo(isset($email)) ? $email : ''; ?>" class="form-control <?php if (isset($emailErr)) { echo($emailErr == true) ? 'is-invalid' : 'is-valid'; } ?>">
                            <small id="contactEmailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="contactMessage">Message</label>
                            <input type="email" name="contactEmail" id="contactEmail" aria-describedby="contactEmailHelp" placeholder="Enter email" value="<?php echo(isset($email)) ? $email : ''; ?>" class="form-control <?php if (isset($emailErr)) { echo($emailErr == true) ? 'is-invalid' : 'is-valid'; } ?>">
                            <small id="contactEmailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>


<?php
if (isset($_POST['registerForm'])) {
    //conFunc(); // Connection Function

    //$userid = $_POST['userid'];
    //$name = $_POST['name'];

    //$getUserId = mysql_query("SELECT * FROM `user` WHERE `userid` = '".$userid."'");
    //$id = mysql_fetch_array($getUserId);

    //if($id)
    //{
    // echo "This User ID is Already Available on the System, Please Choose Something Else!";
    //}
    //else
    //{

    // $query = mysql_query("INSERT INTO `user` (`userid`, `name`");

    // if($query)
    // {
    // echo "A New User is Registered Successfully:<br /><br />";
    // echo "<b>User ID:</b> " . $userid . "<br />";
    // echo "<b>User Name:</b> " . $name . "<br />";
    // }
    // else
    // {
    // echo "There is an Error while Saving: " . mysql_error();
    // echo "<br />Please click on Create User from menu, and try again<br /><br />.";
    // }

    // }
    //exit;
}
// POST HANDLER -->
?>