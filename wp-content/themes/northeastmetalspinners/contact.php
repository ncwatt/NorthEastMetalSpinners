<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>
<div class="page-content bg-color1">
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <h1>Contact Us</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST['contactForm'])) {
                        // Set postSuccess to true - this will get set to false during validation if a value fails
                        $postSuccess = true;
                        
                        // Validate the email address
                        $emailErr = false;
                        $email = test_input($_POST["contactEmail"]);
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
                            $emailErr = true;
                            $postSuccess = false;
                        }

                        // Validate full name has a value and is no longer than 50 characters
                        $fullNameErr = false;
                        $fullName = test_input($_POST["contactFullName"]);
                        if (!(strlen($fullName) > 0 && strlen($fullName) < 51)) {
                            $fullNameErr = true;
                            $postSuccess = false;
                        }

                        // Validate that the message has some content
                        $messageErr = false;
                        $message = test_input($_POST["contactMessage"]);
                        if (!(strlen($message) > 0 && strlen($message) < 5000)) {
                            $messageErr = true;
                            $postSuccess = false;
                        }

                        // If postSuccess is true at this stage then there has been no errors so far
                        // so let's try and send the email
                        $sendErr = false;
                        if ($postSuccess == true) {
                            $emailBody = 'Full Name: ' . $fullName . '<br /><br />Email Address: ' . $email . '<br /><br />Message:<br />' . $message; 
                            $headers[] = 'Content-Type: text/html; charset=UTF-8';
                            $headers[] = 'Reply-To: ' . $fullName . ' <' . $email . '>';

                            if (wp_mail("nick@gtctek.co.uk", "Website Contact Form", $emailBody, $headers) == false) {
                                $sendErr = true;
                                $postSuccess = false;
                            }
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
                    <p>
                        Thank you for contacting North East Metal Spinners. We have received your enquiry and one of our team will be in contact with you as soon
                        possible.
                    </p>
                <?php else : ?>
                    <form id="contactForm" method="post" action="" novalidate>
                        <input type="hidden" name="contactForm" value="1" />
                        <div class="mb-3">
                            <label for="contactFullName" class="form-label">Full Name</label>
                            <input type="text" name="contactFullName" id="contactFullName" aria-describedby="contatcFullNameHelp" placeholder="Enter full name" value="<?php echo(isset($fullName)) ? $fullName : ''; ?>" class="form-control <?php if (isset($fullNameErr)) { echo($fullNameErr == true) ? 'is-invalid' : 'is-valid'; } ?>">
                            <small id="contactFullNameHelp" class="form-text text-muted">Please provide your full name</small>
                        </div>
                        <div class="mb-3">
                            <label for="contactEmail" class="form-label">Email address</label>
                            <input type="email" name="contactEmail" id="contactEmail" aria-describedby="contactEmailHelp" placeholder="Enter email address" value="<?php echo(isset($email)) ? $email : ''; ?>" class="form-control <?php if (isset($emailErr)) { echo($emailErr == true) ? 'is-invalid' : 'is-valid'; } ?>">
                            <small id="contactEmailHelp" class="form-text text-muted">We'll never share your email with anyone else</small>
                        </div>
                        <div class="mb-3">
                            <label for="contactMessage" class="form-label">Message</label>
                            <textarea rows="5" name="contactMessage" id="contactMessage" aria-describedby="contactMessageHelp" placeholder="Enter message" class="form-control <?php if (isset($messageErr)) { echo($messageErr == true) ? 'is-invalid' : 'is-valid'; } ?>"><?php echo(isset($message)) ? $message : ''; ?></textarea>
                            <small id="contactMessageHelp" class="form-text text-muted">5000 character limit</small>
                        </div>
                        <div class="mb-3">
                            <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>" data-callback="callbackCommentSubmit"></div>
				            <script type="text/javascript">
					            function callbackCommentSubmit() {
						            document.getElementById("submit-comment").removeAttribute("disabled");
					            }
				            </script>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>