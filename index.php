<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <h1>Chat Mate</h1>

      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="first name" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="last name" required>
          </div>
        </div>
        <div class="field input">
          <label>Email</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <br>
        <div class="field image">
          <label>Select Your Image:</label>


<input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required id="actual-btn" hidden/>

<label for="actual-btn" class="blue">Choose Image</label>

<span id="file-chosen" style="text-align:center; padding-top:5px;">No file chosen</span>

        <br>
        <div class="field button">
          <input type="submit" name="submit" value="Sign Up">
        
        </div>
        
        
      </form>
      
      <div class="link">Already Have an Account? <a href="login.php">Login now</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>
  <script>
    const actualBtn = document.getElementById('actual-btn');

const fileChosen = document.getElementById('file-chosen');

actualBtn.addEventListener('change', function(){
  fileChosen.textContent = this.files[0].name
})
  </script>

</body>
</html>
