<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- بوت‌استرپ RTL -->
    <!-- فونت Vazir -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v30.1.0/dist/font-face.css">
    <!-- آیکون‌های فونت آوسام -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- استایل سفارشی -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<!-- در <head> -->
<link rel="stylesheet" href="bootstrap.css">
<!-- قبل از پایان تگ </body> -->

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="
        @import url('https://fonts.googleapis.com/css2?family=Vazirmatn&display=swap');
    
    
    ">









    
  

    <style>


.navbar .nav-link i {
    font-size: 18px;
}

      

        

        .badge {
            background-color: white;
            color: #333;
            border-radius: 25px;
            font-size: 0.9rem;
        }

       

        /* استایل منوی ناوبری */
        nav.navbar {
            background-color: white;
            border-bottom: 1px solid #ddd;
            text-align:left;
        }

        .navbar-nav .nav-link {
            color: #333;
           
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            background-color: #f1f1f1;
            color:rgb(15, 15, 15);
            border-radius: 8px;

        }

        .navbar-toggler {
            border: none;

        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23007bff' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0,123,255, 0.7)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        /* استایل برای dropdown (زیر منو) */
        .dropdown-menu {
            text-align: right;
            background-color: #ffffff;
            border-radius: 8px;

            box-shadow: 0 4px 12px rgba(248, 77, 77, 0.1);
        }

        .dropdown-item {
            color: #333;
            font-size: 1rem;
            transition: background 0.3s;
        }

        .dropdown-item:hover {
            background-color: #f0f0f0;
            color:rgb(10, 10, 10);
        }

        /* استایل برای منو در حالت موبایل */
        .navbar-collapse {
            text-align: right;
        }

        .navbar-toggler {
            border: 1px solidrgb(36, 41, 46);

            border-radius: 8px;
        }

        /* استایل برای آیکون‌های منو */
        .nav-link i, .navbar-toggler-icon {
            font-size: 18px;
        }

        /* افکت برای منو در حالت hover */
        .nav-item:hover .nav-link {
            color:rgb(3, 3, 3);
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <!-- می‌توانید عنوان سایت یا لوگو قرار دهید -->
                </div>
                <div class="col-md-4 text-start">



                    <?php if(isset($_SESSION["name"])): ?>
                        <span class="badge">
                            <i class="fas fa-user me-1"></i>
                            <?php echo htmlspecialchars($_SESSION["name"]);
                            
                            
                            ?>
                        </span>
      

                    <?php endif; ?>
                    
                </div>
            </div>
        </div>


    </header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <div  class="imglogo">
                <img src="3png.png" alt="لوگو">
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php"><i class="fas fa-home me-1"></i> خانه</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php"><i class="fas fa-info-circle me-1"></i> درباره ما</a></li>


                    <?php

if (isset($_SESSION["admin"]) && $_SESSION["admin"] == true) 
{
    ?>
 <li class="nav-item"><a class="nav-link" href="logput.php"><i class="fas fa-home me-1"></i> خروج
<?php echo("({$_SESSION["name"]})") ?></a></li>

   <?php
    
}

else
{
    ?>

                  
                    <li class="nav-item"><a class="nav-link" href="register.php"><i class="fas fa-user-plus me-1"></i> ثبت نام</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt me-1"></i> ورود</a></li>
                <?php
}
?>
<?php
if (isset($_SESSION["admin"]) && $_SESSION["admin"] == false) 
{
    ?>
 <li class="nav-item"><a class="nav-link" href="logput.php"><i class="fas fa-home me-1"></i> خروج
<?php echo("({$_SESSION["name"]})") ?></a></li>

   
    <?php
}
?>

                    <li class="nav-item">
                     <a class="nav-link" href="gallery.php" id="galleryDropdown">
                     <i class="bi bi-grid-1x2"></i> گالری
                     </a>
</li>

    
                    <li class="nav-item"><a class="nav-link" href="buy.php"><i class="bi bi-cart-plus-fill"></i> خرید</a></li>
                
                <?php
                if(isset($_SESSION["admin"]) && $_SESSION["admin"]===true && $_SESSION["user_type"]=="admin")
                {
                    ?>
                    <li class="nav-item"><a class="nav-link" href="management.php"><i class="bi bi-cart-plus-fill"></i> مدیریت</a></li>
<?php
                }
                ?>

                    </ul>
            </div>
        </div>
    </nav>

 

    <!-- Bootstrap JS -->
    <script src="bootstrap.js"></script>
</body>
</html>
    <main class="container my-4">