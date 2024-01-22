<?php 
    $page = "contact";
    include_once("header.php");
    if ($_GET['status'] == 'success') {
        $success = "Thank you for contacting us. We will be in touch with you very soon.";
    }
?>

<div class="content_wrap section_row">

    <h2><span class="swash">L</span>et's <span class="swash">C</span>onnect...</h2>
    
    <content class="inner_section_row">
        <p>With over 15 years of working on all sorts of projects, big and small, with talent of all sorts, Sunday Works is a great place to start. We'd happily sit down with you and chat about how we can help.</p>
        <p class="success"><?php echo $success; ?></p>
    </content>
    
    <form id="contact_form" class="contact_form inner_section_row" method="post" action="contact-form-process.php">
        
        <div class="form_group inner_section_row">
            <label for="Full Name" class="label">Full Name<required>*</required></label>
            <div class="input_group">
                <input type="text" name="Name" class="form_control" required>
            </div>
        </div>

        <div class="form_group inner_section_row">
            <label for="Email" class="label">Email Address<required>*</required></label>
            <div class="input_group">
                <input type="email" name="Email" class="form_control" required>
            </div>
        </div>

        <div class="form_group inner_section_row hide">
            <label for="Password" class="label">Password<required>*</required></label>
            <div class="input_group">
                <input type="password" id="password" name="password" class="form_control">
            </div>
        </div>

        <div class="form_group inner_section_row">
            <label for="Message" class="label">Your message<required>*</required></label>
            <div class="input_group">
                <textarea id="Message" name="Message" class="form_control" rows="6" maxlength="3000" required></textarea>
            </div>
        </div>

        <div class="form_group inner_section_row">
            <button type="submit" id="button" class="btn btn-primary btn-lg btn-block">High Five!</button>
        </div>

    </form>


</div>

<?php include_once("footer.php"); ?>