<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>

  <body>

         <div id = "app">
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Computer Science & Engg. Department</a>
   
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="btn btn-outline-primary" href="logout.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <router-link to="/home" class="nav-link" href="#">
                  <span data-feather="file"></span> 
                  Home
                </router-link>
              </li>
              <li class="nav-item">
              <router-link to="/regfaculty" class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Reg. New Faculty
                 </router-link>
              </li>
              <li class="nav-item">
                  <router-link to="/regstudent" class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Reg. New Student
             </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/notice" class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                 Add Notice
                </router-link>
              </li>
              <li class="nav-item">
              <router-link to="/student" class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Search Students
                </router-link>
              </li>
               <li class="nav-item">
               <router-link to="/faculty" class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Search Faculty
                </router-link>
              </li>
            </ul>

           
          </div>
        </nav>

    
      </div>

    </div>

            <router-view></router-view>


         <!-- component matched by the route will render here -->
     
   


   </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://unpkg.com/vue-router@3.5.1/dist/vue-router.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../js/vendor/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
   

     <script type = "text/javascript">


 const Home = {
  template:
   '<div>This is home component</div>' }













   //Register Student

  const Regstudent = {
   template: 
   `<div>
   <div class="d-flex justify-content-xl-center">
    <br><br>
        <div class="panel panel-primary">
            <br>
            <div class="panel-heading">
               <h3 class="panel-title">
                REGISTER NEW STUDENT
               </h3>
                <br>
            </div>
  <div class="panel-body">

   <form>
    <div class="form-group">
      <label class="control-label col-sm-15" for="email">First Name:</label>
      <div class="col-sm-15">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>


     <div class="form-group">
      <label class="control-label col-sm-15" for="email">Middle Name:</label>
      <div class="col-sm-15">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-15" for="email">Last name:</label>
      <div class="col-sm-15">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-15" for="email">Address:</label>
      <div class="col-sm-15">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>


     <div class="form-group">
      <label class="control-label col-sm-15" for="email">Enrollment no:</label>
      <div class="col-sm-15">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-15" for="email">Year:</label>
      <div class="col-sm-15">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-15" for="email">Roll No:</label>
      <div class="col-sm-15">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-15" for="pwd">Password:</label>
      <div class="col-sm-15">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-15" for="pwd">Password:</label>
      <div class="col-sm-15">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>



    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Submit</button>
         <button type="reset" class="btn btn-success">Reset</button>
      </div>
    </div>
  </form>
   </div> 
 </div>

</div>
</div>
    </div>` }









   const Regfaculty = { template: '<div>Reg Faculty component</div>' }

  const Student = { template: '<div>This is student component</div>' }

   const Faculty = { template: '<div>This is Faculty component</div>' }

       

         const routes = [
             { path : '/home' , component: Home},
             { path : '/regstudent' , component: Regstudent},
             { path : '/regfaculty' , component: Regfaculty},
           
             { path : '/student' , component: Student},
             { path : '/faculty' , component: Faculty}
           
          
         ];
         const router = new VueRouter({
            routes // short for `routes: routes`
         });
         var vm = new Vue({
            el: '#app',
            router
         });
      </script>
  </body>
</html>
