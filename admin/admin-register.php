<?php


if(session_id() == '' || !isset($_SESSION)){session_start();}

if (isset($_SESSION["username"])) {header ("location:index.php");}


?>






    <form method="POST" action="insert-admin.php" style="margin-top:30px;">
      <div class="row">
      <center><h2>Admin Register</h2></center>
        <div class="small-11">

          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">First Name</label>
            </div>
            <div class="small-8 columns ">
              <input type="text" id="right-label" placeholder="First Name" name="fname" required>
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Last Name</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Last Name" name="lname" required>
            </div>
          </div>
          
          
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">E-Mail</label>
            </div>
            <div class="small-8 columns">
              <input type="email" id="right-label" name="email" placeholder="E-mail"  required>
            </div>
          </div>


  <div id="app">
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline" >Password</label>
            </div>
            <div class="small-8 columns">
              <input type="password" id="password" placeholder="Password" v-model="pass"  required>
           
            </div>
          </div>

      
      <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline" >Re-Enter Password</label>
            </div>
            <div class="small-8 columns">
  <input type="password" id="confirm_password" placeholder="Re-Enter Password" name="pwd" v-model="message"  required>
            <p v-if=" message.length  <6 " style="color:red;">Password must contain at least 6 characters. </p>
            </div>
          </div>




          <div class="row">
            <div class="small-4 columns">

            </div>
            <div class="small-8 columns">
              <input v-if=" message.length  >=6  && pass===message " type="submit" id="right-label" value="Register" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              <input type="reset" id="right-label" value="Reset" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
                <br><br>Have an account ?<br><br>
                <a href="login.php" style="background: #049272  ; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">Log In</a>
            </div>
          </div>
        </div>
      </div>
    </form>
</div>



    <script src="js/vue.js"></script>
   
    <script>
   


      let app = new Vue({
            el: '#app',
            data:{
                message: '',
                pass:'',

            }
    
        });       
    </script>
  </body>
</html>
