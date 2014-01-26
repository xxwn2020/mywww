<html>
<head>
<meta charset="utf-8">
<title>My Form</title>
</head>
<body>

<?php //echo validation_errors(); ?>

<?php echo form_open('account/register'); ?>

<h5>Username</h5>
<input type="text" name="userName" value="" size="50" />
<?php echo form_error('userName'); ?>
<h5>ScreenName</h5>
<input type="text" name="screenName" value="" size="50" />
<?php echo form_error('screenName'); ?>
<h5>Password</h5>
<input type="password" name="password" value="" size="50" />
<?php echo form_error('password'); ?>
<h5>Password Confirmation</h5>
<input type="password" name="confirm" value="" size="50" />
<?php echo form_error('confirm'); ?>



<div><input type="submit" value="Submit" /></div>
</form>
</body>
</html>