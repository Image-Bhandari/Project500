<article>
    <form action=""> 
    <div class="payment-container">
        <div class="payment-header">
            <h2>Payment</h2>
                    <label for="fname">Accepted Cards</label>
                    <div class="icon-container">
                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                    <i class="fa fa-cc-amex" style="color:blue;"></i>
                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                    </div>
        </div>

        <div class="payment-name">
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="Name" placeholder="Full Name">
        </div>

        <div class="card-num">
            <label for="ccnum">Credit card number</label>
            <input type="number" id="ccnum" name="cardnumber" placeholder="1111222233334444">
        </div>  

        <div class="exp-month">
            <label for="expmonth">Exp Month</label>
            <input type="number" id="expmonth" name="exp_month" placeholder="September">
        </div>

        <div class="exp-year">
            <label for="expyear">Exp Year</label>
            <input type="number" id="expyear" name="exp_year" placeholder="2018">
        </div>
        
        <div class="cvv">
            <label for="cvv">CVV</label>
            <input type="number" id="cvv" name="cvv" placeholder="352">
        </div>

        <div class="chkout">
            <input type="submit" value="Continue to checkout">
        </div>
    </div>
    </form>
</article>