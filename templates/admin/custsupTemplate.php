<article>
    <table>
        <?php ?>
        <tr><th>Customer Name</th><th>Customer Query</th><th>Customer e-mail</th><th>Customer Phone No.</th><th>Looked by:</th></tr>
        <?php 
        foreach($allData as $values){
            echo "<tr><td>".$values['cust_name']."</td><td>".$values['cust_ques']."</td><td>".$values['cust_email']."</td><td>".$values['cust_num']."</td><td>";
            if($values['staff_id']=="NotAssigned"){
                echo "<a href=index.php?page=customersupport&assign=".$values['cntfrmid'].">Handle</a></td></tr>";
            }
            else {
                echo $values['staff_id'];
            }
        }
        ?>
    </table>
</article>