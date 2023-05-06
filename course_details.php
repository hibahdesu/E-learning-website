<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Polyglot E-Learning | Course Details</title>
</head>
<body>
    <?php include("inc/function.php"); ?>
<div id="header" class="header ">
    <div id="up_head" class="up_head ">
<div class='container'>
    <div class="date">
            <p>
            <?php echo date('l, d F Y'); ?>
            </p>
        </div>
        </div>
    </div>

    <div class="header_two flex container">
        <div class="logo">
        <h2>
            <a href="index.php">
                <img src="images/logo/download.png" alt="">
            </a>
        </h2>
        </div>

        <div class="search">
            <form action="post" enctype="multipart/form-data">
                <button name="search"><i class="bi bi-search"></i></button>
                <input type="search" name="query" placeholder="Search...">
                
            </form>
    </div>

        
        <div class="icon grid">
        <div class="signup">
        <h4>Sign Up</h4>
            <form action="post" class='flex'>
                <h3 class='flex'>
                <i class="bi bi-person-fill-add"></i>
                </h3>
                <h2>Sign Up</h2>
                <div class="input_f flex">
                <i class="bi bi-person-fill"></i>
                <input type="text" name='s_email' placeholder='Enter Your Name'>
                </div>

                <div class="input_f flex">
                <i class="bi bi-envelope-at-fill"></i>
                <input type="text" name='s_name' placeholder='Enter Your Email'>
                </div>


                <div class="input_f flex">
                <i class="bi bi-person-fill-lock"></i>
                <input type="text" name='s_pass' placeholder='Enter Your Password'>
                </div>

                <div class="input_f flex">
                <i class="bi bi-person-fill-lock"></i>
                <input type="text" name='s_pass2' placeholder='Reenter Your Password'>
                </div>

                
                <button name='s_signup'>Sign up</button>
                </form>
        </div>


        <div class="login">
        <h4>Log in</h4>
            <form action="post" class='flex'>
                <h3 class='flex'>
                <i class="bi bi-person-circle"></i>
                </h3>
                <h2>Log In</h2>
                <div class="input_f flex">
                <i class="bi bi-envelope-at-fill"></i>
                <input type="text" name='u_email' placeholder='Enter Your Email'>
                </div>

                <div class="input_f flex">
                <i class="bi bi-person-fill-lock"></i>
                <input type="text" name='u_pass' placeholder='Enter Your Password'>
                </div>

                <h5>
                    Forget Password?
                </h5>

                <button name='u_login'>Log In</button>
            </form>
        </div>
        
        <div class='icons2 flex'>
        <div class="cart">
            <a href="cart.php">
                    <i class="bi bi-cart-fill"></i>
                    <span>2</span>
            </a>
        </div>

            <div class="menu">
            <h2><i class="bi bi-list"></i></h2>
            <ul>
            
                <?php echo menu_cat(); ?>
            </ul>
            
        </div>

        </div>

        </div>

        
    </div>

    
    </div>
<!--header-->
    <?php echo course_details(); ?>

    

    




<div class='footer '>
    <ul class='grid container'>
        <li>
            <h2>About Us</h2>
            <p>We are polyglots professionals and we are passionate about spreading the languages around the world, by teaching enjoyable languageddds witddh creative lessons with professionals.</p>
        </li>
        <li class="cont">
            <h2>Contact Us</h2>
            <div class="info flex">
            <i class="bi bi-geo-alt-fill"></i>
            <p>170, New Yourk, Green Park, 342223.</p>
            </div>

            <div class="info flex">
            <i class="bi bi-telephone-fill"></i>
            <p>00966532229</p>
            </div>

            <div class="info flex">
            <i class="bi bi-envelope-at-fill"></i>
            <p>polyglot_learners@gmail.com</p>
            </div>
            <div class="f_share flex">
                <div class='fb'>
                <a href="#"><i class="bi bi-facebook"></i></a>
                </div>
                <div class='tw'>
                <a href="#"><i class="bi bi-twitter"></i></a>
                </div>

                <div class='gp'>
                <a href="#"><i class="bi bi-google"></i></a>
                </div>
                
            </div>
        </li>
        <li>
            <h2>Leave a Message</h2>
            <form action="post" class='form flex'>
                <div class='f_input'>
                <i class="bi bi-envelope-at-fill"></i>
                <input type="text" name='u_query' placeholder='Enter Your Name'>
                </div>

                <div class='f_input'>
                <i class="bi bi-person-fill"></i>
                <input type="text" name='query_email' placeholder='Enter Your Email'>
                </div>

                <textarea name="msg"  cols="30" rows="10" placeholder='Enter Your Message'></textarea>
                <button>Send</button>
            </form>
        </li>
    </ul>
    <div class='footer_two flex '>
    <p>All right reserve to Polyglot Learners</p>
    <p>Copyright @ 2023 Polyglot Learners.</p>
    </div>
    
</div>
    
</body>
</html>
