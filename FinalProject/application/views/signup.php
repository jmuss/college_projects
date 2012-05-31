<h1>Create an Account!</h1>

<?php 

echo validation_errors();

echo form_open(); 

?>

<fieldset>
    <legend>Required Info</legend>
    
    <label>Username</label>
    <input name="user" type="text" value="<?php echo set_value('name'); ?>" />
    <br />
    
    <label>Password</label>
    <input name="pass" type="password" value="pass" />
    <br />
    
    <label>First Name</label>
    <input name="first" type="text" value="<?php echo set_value('first'); ?>" />
    <br />
    
    <label>Last Name</label>
    <input name="last" type="text" value="<?php echo set_value('last'); ?>" />
    <br />
    
    <label>Email</label>
    <input name="email" type="text" value="<?php echo set_value('email'); ?>" />
    <br />
    
    <legend>Other Info</legend>
    <br />
    
    <label>Phone</label>
    <input name="phone" type="text" value="<?php echo set_value('phone'); ?>" />
    <br />
    
    <label>Address</label>
    <input name="street" type="text" value="<?php echo set_value('street'); ?>" />
    <br />
    
    <label>Zip</label>
    <input name="zip" type="text" value="<?php echo set_value('zip'); ?>" />
    <br />
    
    <label>State</label>
    <input name="state" type="text" value="<?php echo set_value('state'); ?>" />
    <br />
    
</fieldset>
<fieldset>
    <button type="submit">Submit</button>
</fieldset>

</form>
        