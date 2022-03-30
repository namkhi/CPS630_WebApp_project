<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/d05f99dbac.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="jquery-3.5.1.min.js"></script>
  <link rel="icon" href="public/favicon.ico" sizes="any">
  <script src="https://kit.fontawesome.com/d05f99dbac.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="signInStyle.css">
  <title>Sign In</title>
</head>

<body>

  <?php include("navbar.php"); ?>

    <div class="container">
      <form action="signIn.php" method="post">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="placeholder@gmail.com">    

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password"> 

        <input type="submit" value="Login" class="btn btn-warning">
          
          <!-- <a class="btn btn-warning" style="display:block; margin-left: auto; margin-right: auto; border-radius:20px; color:black;" href="index.html" role="button">Login</a> -->
        </input>
        <br>
        <a style="text-align: center; display:block; margin-left: auto; margin-right: auto; border-radius:20px; color:black;" href="index.html" role="button">Forgot Password</a>
        <a style="text-align: center; display:block; margin-left: auto; margin-right: auto; border-radius:20px; color:black;" href="signUp.html" role="button">Sign Up</a>
      </form>
    </div>


   
</body>

</html>