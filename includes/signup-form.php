<?php 

?>
       <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
<form action="./handle/handleSignUp.php" method="post">
<?php  if (isset($_SESSION['errors_signup'] )) { ?>
        <script>  
             $(document).ready(function(){
        // Open modal on page load
        $("#exampleModalCenter").modal('show');
 
       });
      </script>
              <?php foreach ($_SESSION['errors_signup'] as $error) { ?>
                       <div  class="alert alert-danger" role="alert">
                        <p style="font-size: 15px;" class="text-center"> <?php echo $error ; ?> </div>  <?php }  }
                        unset($_SESSION['errors_signup']) ?> </p>  
                        <div class="form-group">
                       <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" pattern="[A-Za-z]+" title="Enter a letter"required>
                    </div>
                    <div class="form-group">
                       <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username"required>
                    </div>
                <div class="form-group">
                   
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email"required  >
                  
                </div>
                <div class="form-group">
                   
                   <input type="int" name="phone no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone no"required pattern="[0-9]{10,10}" title="Enter a valid number" >
                 
               </div>
                <div class="form-group">
                    
                    
                    <input type="password" name="password1" class="form-control" id="exampleInputPassword1" placeholder="Password" required
       pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}"
       title="Password must be at least 8 characters long, contain at least one digit, one uppercase letter, one lowercase letter, and one special character (@, $, !, %, *, ?, &).">
       

                </div>
            

                
                  <div class="text-center">
                  <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
                  </div>
               
</form>