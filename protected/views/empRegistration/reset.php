
<div class="form">
<?php echo "<b>".$message."</b>" ?>
<form method="post" action="/employPortal/index.php/empRegistration/reset" >
<div class="row">
old password:<input type="password" name="old_password" required/></div>
<div class="row">
newpassword:<input type="password" name="new_password" required/></div>
<div class="row">
repeatpassword<input type="password" name="confirm_password" required/></div>
<div class="row">
<input type="submit" value="send" />
</div>
</form>
</div>