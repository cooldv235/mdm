<h1><?php echo $title ?></h1>
<?php echo form_open('users/signup', array('id' => 'signupform' , 'class' => 'sign-form')) ?>
<div class="form-group">
    <input type="text" name="first_name" id="first_name" style="width:500px" placeholder="First Name"/>

</div>
<br/>
<div class="form-group">
    <input type="text" name="last_name" id="last_name" style="width:500px" placeholder="Last Name"/>

</div>
<br/>
<div class="form-group">
    <input type="text" name="email" id="email" style="width:500px" placeholder="Email"/>

</div>
<br/>
<div class="form-group">
    <input type="password" name="password" id="password" style="width:500px" placeholder="Password"/>

</div>
<br/>
<div class="form-group">
    <input type="passconf" name="confirm password" id="confirm password" style="width:500px" placeholder="Confirm Password"/>

</div>
<br/>
<div class="form-group">
    <input type="submit" name="submit" value="sign up" />

</div>
<br/>

<?php echo form_close() ?>
