<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime Chat App</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
           <header>Realtime chat App</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt">This is an error message</div>
                <div class="name-details">
                    <div class="field input">
                        <label >Name:</label>
                        <input type="text" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="field input">
                        <label >Email:</label>
                        <input type="email" name="email" placeholder="Enter your name" required>
                    </div>
                    <div class="field input">
                        <label >Password:</label>
                        <input type="password" name="password" placeholder="Enter your name" required>
                    </div>
                    <div class=" input">
                        <label >Confirm Password:</label>
                        <input type="password" name="cpassword" placeholder="Enter your name" required>
                    </div>
                    <div class="field image">
                         <label>Select Image</label>
                         <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                    </div>
                    <div class="field button">
                    <input type="submit" name="submit" value="Continue to Chat">
                    <!-- <i class="fa fa-eye"></i> -->
                    </div>
                </div>
            </form>
            <div class="link">Already have an account<a href="login.php">Login here</a></div>
        </section>
    </div>
    

    </section>
    <script src="JS/signup.js"></script>
</body>
</html>