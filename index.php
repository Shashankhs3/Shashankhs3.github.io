<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];

	$toEmail = "nidishnrao@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "contact-view.php";
?>
<!-- Contact Form -->
        <section id="contact" class="pt120 pb100">
            <div class="form-container">
                <form name="frmContact" id="" frmContact"" method="post"
                    action="" enctype="multipart/form-data"
                    onsubmit="return validateContactForm()">
        
                    <div class="input-row">
                        <label style="padding-top: 20px;">Name</label> <span
                            id="userName-info" class="info"></span><br /> <input
                            type="text" class="input-field" name="userName"
                            id="userName" />
                    </div>
                    <div class="input-row">
                        <label>Email</label> <span id="userEmail-info"
                            class="info"></span><br /> <input type="text"
                            class="input-field" name="userEmail" id="userEmail" />
                    </div>
                    <div class="input-row">
                        <label>Subject</label> <span id="subject-info"
                            class="info"></span><br /> <input type="text"
                            class="input-field" name="subject" id="subject" />
                    </div>
                    <div class="input-row">
                        <label>Message</label> <span id="userMessage-info"
                            class="info"></span><br />
                        <textarea name="content" id="content"
                            class="input-field" cols="60" rows="6"></textarea>
                    </div>
                    <div>
                        <input type="submit" name="send" class="btn-submit"
                            value="Send" />
        
                       
                    </div>
                </form>
            </div>
        </section>
        <!-- End Contact Form -->