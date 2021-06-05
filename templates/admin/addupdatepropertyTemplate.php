<section class="form_container">
  <form action="index.php?page=addupdateproperty">
    <label for="prop_name">Property Name:</label>
    <input type="text" id="prop_name" name="prop_name" value="<?php if($data){echo $data['prop_name'];}?>" placeholder="Above HILTON Luxury Residence with Beach Views">

    <label for="prop_type">Type of Property:</label>
    <div class="select">
    <select name="prop_type" id="prop_type">
        <option disabled selected value> -- select an option -- </option>
        <option value="Apartment">Apartment</option>
        <option value="Town_House">Town House</option>
        <option value="Unit">Unit</option>
    </select>
    </div>

    <label for="prop_StreetName">Street Location:</label>
    <input type="text" id="prop_StreetName" name="prop_StreetName" value="<?php if($data){echo $data['prop_StreetName'];}?>" placeholder="1A First Street">
    
    <label for="prop_suburb">Suburb:</label>
    <input type="text" id="prop_suburb" name="prop_suburb" value="<?php if($data){echo $data['prop_suburb'];}?>" placeholder="Suburb">
    
    <label for="prop_state">State:</label>
    <input type="text" id="prop_state" name="prop_state" value="<?php if($data){echo $data['prop_state'];}?>" placeholder="NSW">
    
    <label for="prop_postCode">Postcode:</label>
    <input type="number" min="1000" max="9999" id="prop_postCode" name="prop_postCode" value="<?php if($data){echo $data['prop_postCode'];}?>" placeholder="2000">
    
    <label for="prop_det">Property Details:</label>
    <input type="text" id="prop_det" name="prop_det" value="<?php if($data){echo $data['prop_det'];}?>" placeholder="1A First Street">
    
    <label for="prop_occupancy">No. of guests:</label>
    <input type="number" min="1" max="9" id="prop_occupancy" name="prop_occupancy" value="<?php if($data){echo $data['prop_occupancy'];}?>" placeholder="4">
    
    <label for="price">Price per day: $</label>
    <input type="number" max="9999" id="price" name="price" value="<?php if($data){echo $data['price'];}?>" placeholder="120">
    
    <input type="submit" value="Update" name=<?php if($data){echo "\"val_update\"";}else{echo "\"val_insert\"";}?>>
  </form>
</section>