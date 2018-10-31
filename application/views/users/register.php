<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('users/register'); ?>
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="Name">
        <label>Zipcode</label>
        <input type="text" class="form-control" name="zipcode" placeholder="Zipcode">
        <label>Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email">
        <label>Username</label>
        <input type="text" class="form-control" name="username" placeholder="Username">
        <label>Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
        <label>Confirm Password</label>
        <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

<?php echo form_close(); ?>
