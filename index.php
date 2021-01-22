<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
	      <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" /> 
    </head>
<body>
    <section class="pt-5 section">
        <div class="container text-uppercase text-center">
            <h1 class="font-weight-bold">Register <i class="fa fa-user-circle" aria-hidden="true"></i></h1>
            <hr class="w-25 mx-auto">
        </div>
    
        <div class="container font-weight-bold">
            <div class="row">
              <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 offset-1">
                <form action="myphp.php" method="POST">
                  <div class="form-group">
                    <label for="usrname">Username :</label>
                    <input type="text" class="form-control" placeholder="Enter Your Username..." id="username" name="usrname"  autocomplete="off">
                    
                  </div>

                  <div class="form-group">
                    <label for="name">Name :</label>
                    <input type="text" class="form-control" placeholder="Enter Your Name..." id="name"  name="name" autocomplete="off">
                    
                  </div>


                  <div class="form-group"> 
                    <label for="email" >Email :</label>
                    <input type="email" class="form-control" placeholder="Enter Your Email..." id="email" name="email" autocomplete="off">
                    
                  </div>
                  <div class="form-group"> 
                    <label for="password">Password :</label>
                    <input type="password" class="form-control" placeholder="Enter Your Password..." id="password" name="password" autocomplete="off">
                    
                  </div>
                   
                  <div class=" d-flex justify-content-around mt-5">
                  <button type="submit" class="btn  font-weight-bold text-uppercase text-white" name="insert">Add</button>
                  <button type="submit" class="btn font-weight-bold text-uppercase text-white" name="update">Update</button>
                  <button type="submit" class="btn  font-weight-bold text-uppercase text-white" name="delete">Delete</button>
                  <button type="submit" class="btn  font-weight-bold text-uppercase text-white" name="view">View</button>
                  </div>
                </form>
              </div>
            </div>
        </div>    
    </section>

    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>