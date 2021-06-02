<section class="registration">
    <form action="regist.php">
        <div class="register-container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            
            <label for="name"><b>Full Name</b></label>
            <input type="text" name="name" placeholder="Enter Name" required>
            
            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" required>
        
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
        
            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
        
            <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
        </form> 
</section>