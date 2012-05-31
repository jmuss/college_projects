<h1>Please Log in to view this page</h1>

<?php 

    echo validation_errors(); 

    if ($message !== FALSE) echo $message;
    
    echo form_open();
?>

<fieldset>
    <legend>
        Login Here:
    </legend>
    
    <label>Username</label>
    <input name="user" type="text" value="<?php echo set_value('name'); ?>" />
    <br />
    
    <label>Password</label>
    <input name="pass" type="password" value="pass" />
    <br />
</fieldset>

<fieldset>
    <button type="submit">Submit</button>
</fieldset>