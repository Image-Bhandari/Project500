<section>
    <div class="contactreq">
        <a href="index.php?page=customersupport" class="contactreqlink">
            <span>Contact Requests:</span>
            <span><?php foreach ($countCustReq as $totcustreq){ 
                 echo  $totcustreq['total']." new customer needs help";
            } ?></span>
        </a>
    </div>
</section>