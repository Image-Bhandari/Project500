<section class="form_container">

  <h2><h2><?php if($data){echo "Update Client Details";}?></h2></h2>
  <form action="index.php?page=editClientDetails">
    <label for="firstname">First Name</label>
    <input type="text" id="firstname" name="firstname" value="<?php if($data){echo $data['firstname'];}?>" placeholder="Client's updated first name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lastname" name="lastname" value="<?php if($data){echo $data['lastname'];}?>" placeholder="Client's updated last name..">

    <label for="email">Email</label>
    <input type="email" id="email" name="email" value="<?php if($data){echo $data['email'];}?>" placeholder="Updated Email Address">

    <input type="submit" value="Submit">
  </form>
</section>