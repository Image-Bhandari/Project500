<section class="form_container">
  <form action="index.php?page=#">
    <label for="prop_name">Property Name:</label>
    <input type="text" id="prop_name" name="prop_name" placeholder="Above HILTON Luxury Residence with Beach Views">

    <label for="prop_type">Last Name</label>
    <input type="text" id="prop_type" name="prop_type" placeholder="Apartment / Resident / Town House">
    <!-- prop type lai ma checkbox ma convert garxu next commit ma hai  -->

    <label for="prop_StreetName">Street Location:</label>
    <input type="text" id="prop_StreetName" name="prop_StreetName" placeholder="1A First Street">
    
    <label for="prop_suburb">Suburb:</label>
    <input type="text" id="prop_suburb" name="prop_suburb" placeholder="Suburb">
    
    <label for="prop_state">State:</label>
    <input type="text" id="prop_state" name="prop_state" placeholder="NSW">
    
    <label for="prop_postCode">Postcode:</label>
    <input type="number" max="4" id="prop_postCode" name="prop_postCode" placeholder="2000">
    
    <label for="prop_det">Property Details:</label>
    <input type="text" id="prop_det" name="prop_det" placeholder="1A First Street">
    
    <label for="prop_occupancy">No. of guests:</label>
    <input type="number" max="2" id="prop_occupancy" name="prop_occupancy" placeholder="4">
    
    <label for="price">Price per day: $</label>
    <input type="number" max="4" id="price" name="price" placeholder="120">
    
    <input type="submit" value="Submit">
  </form>
</section>