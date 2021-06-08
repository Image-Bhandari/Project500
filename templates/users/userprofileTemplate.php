<section class="form_container">

  <h2><?php if($data){echo "Update Profile Details";}?><i class="fas fa-pen"></i></h2>
  <p><?php echo $status; ?></p>
  <form method="post" action="index.php?page=userprofile">
    <input type="hidden" name="user_id" value=<?php echo $uid;?>>
    <label for="firstname">First Name</label>
    <input type="text" id="firstname" name="firstname" value="<?php if($data){echo $data['firstname'];}?>" placeholder="Client's updated first name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lastname" name="lastname" value="<?php if($data){echo $data['lastname'];}?>" placeholder="Client's updated last name..">

    <label for="email">Email</label>
    <input type="email" id="email" name="email" value="<?php if($data){echo $data['email'];}?>" placeholder="Updated Email Address">

    <input type="submit" name="Update" value="Update Profile">
  </form>
</section>