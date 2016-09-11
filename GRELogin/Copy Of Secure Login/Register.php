
<script type="text/javascript" src="sha512.js"></script>
<script type="text/javascript" src="forms.js"></script>
<?php
if(isset($_GET['error'])) { 
   echo 'Error While Registering!';
}
?>
<form action="process_register.php" method="post" name="register_form">
   Email:    <input type="text" name="email" /><br />
   Username: <input type="text" name="username" /><br />
   Password: <input type="password" name="password" id="password"/><br />
   <input type="button" value="Login" onclick="formhash(this.form, this.form.password);" />
</form>