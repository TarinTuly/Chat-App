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
        <section class="users">
           <div class="content">
            <header>
                <div class="content">
                    <img src="images/a.jpg" alt="">
                    <div class="details">
                       <span>Euphoriya</span> 
                       <p>Active now</p>
                    </div>
                </div>
                <a href="#" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">select an user to start chat</span>
                <input type="text" placeholder="type to search...">
                <button><i class="fa fa-search"></i></button>
            </div>
            <div class="users-list">
                <a href="">
                  <div class="content">
                    <img src="images/1.PNG" alt="">
                    <div class="details">
                        <span>Euphoriya</span>
                        <p>This is a test message</p>
                    </div>
                  </div>
                  <div class="status-dot"><i class="fa fa-circle"></i></div>
                </a>
            </div>
            
           </div>
        </section>
    </div>
    

    </section>
    <script src="JS/users.js"></script>
</body>
</html>