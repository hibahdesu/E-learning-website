<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Polyglot E-Learning | Home</title>
</head>
<body>
<div id="header" class="header ">
    <div id="up_head" class="up_head ">
<div class='container'>
    <div class="date">
            <p>
            <?php echo date('l, d F Y'); ?>
            </p>
        </div>

        <div id="link" class="link">
            <ul>
                <li> <a href="#"><i class="bi bi-facebook"></i></a></li>
                <li> <a href="#"><i class="bi bi-twitter"></i></a></li>
                <li> <a href="#"><i class="bi bi-google"></i></a></li>
                <li> <a href="#"><i class="bi bi-youtube"></i></a></li>
                <li> <a href="#"><i class="bi bi-linkedin"></i></a></li>
            </ul>
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

        
        <div class="icon grid">
        <div class="signup">
        <h4>Sign Up</h4>
        </div>


        <div class="login">
        <h4>Log in</h4>
        </div>
        
        <div class='icons2 flex'>
        <div class="cart">
            <a href="cart.php">
                    <i class="bi bi-cart-fill"></i>
                    <span>0</span>
            </a>
        </div>

            <div class="menu">
            <h2><i class="bi bi-list"></i></h2>
        </div>

        </div>

        </div>

        
    </div>

    <div class="search container">
            <form action="post" enctype="multipart/form-data">
                <button name="search"><i class="bi bi-search"></i></button>
                <input type="search" name="query" placeholder="Search...">
                
            </form>
        </div>
</div>
<!--header-->
    <div class="slider flex">

        <img src="images/slider/Webinar-pana.svg" alt="image here ">
</div>

    <div class="home_cat">
    <h3>Available Courses</h3>
    <ul class='grid'>
        <li>
        <img src="images/courses/Japanese calligraphy-pana.svg" alt="image here ">
            <h4>Japanese</h4>
            <p>courses: <span>4</span> </p>
        </li>

        <li>
        <img src="images/courses/Learning languages-bro.svg" alt="image here ">
            <h4>Spanish</h4>
            <p>courses: <span>4</span> </p>
        </li>

        <li>
        <img src="images/courses/English teacher-rafiki.svg" alt="image here ">
            <h4>English</h4>
            <p>courses: <span>4</span> </p>
        </li>


    </ul>
    <?php include ("inc/home_cat.php"); ?>
</div>

<div class="top_course">
    <h3>Popular Courses</h3>
    <ul class='flex'>
        <li>
            <a href="#">
                <img src="images/courses/Knowledge-amico.svg" alt="">
                <h4 class="c_n">Japanese: 
                    <span class="c_t">N5 Kanji</span>
                </h4>
                <h4 class="t_n">Teacher:
                    <span class="t_na">Sakura</span>
                </h4>
                <h4 class="price">Price
                    <span>$20</span>
                </h4>
            </a>
        </li>

        <li>
            <a href="#">
                <img src="images/courses/Knowledge-pana.svg" alt="">
                <h4 class="c_n">Japanese: 
                    <span class="c_t">N5 Kanji</span>
                </h4>
                
                <h4 class="t_n">Teacher:
                    <span class="t_na">Sakura</span>
                </h4>

                <h4 class="price">Price
                    <span>$20</span>
                </h4>
            </a>
        </li>

        <li>
            <a href="#">
                <img src="images/courses/Study abroad-amico.svg" alt="">
                <h4 class="c_n">Japanese: 
                    <span class="c_t">N5 Kanji</span>
                </h4>
    
                <h4 class="t_n">Teacher:
                    <span class="t_na">Sakura</span>
                </h4>

                <h4 class="price">Price
                    <span>$20</span>
                </h4>
            </a>
        </li>

        <li>
            <a href="#">
                <img src="images/courses/Study abroad-bro.svg" alt="">
                <h4 class="c_n">Japanese: 
                    <span class="c_t">N5 Kanji</span>
                </h4>
                
                <h4 class="t_n">Teacher:
                    <span class="t_na">Sakura</span>
                </h4>

                <h4 class="price">Price
                    <span>$20</span>
                </h4>
            </a>
        </li>

        <li>
            <a href="#">
                <img src="images/courses/Thesis-pana.svg" alt="">
                <h4 class="c_n">Japanese: 
                    <span class="c_t">N5 Kanji</span>
                </h4>
    
                <h4 class="t_n">Teacher:
                    <span class="t_na">Sakura</span>
                </h4>

                <h4 class="price">Price
                    <span>$20</span>
                </h4>
            </a>
        </li>

        <li>
            <a href="#">
                <img src="images/courses/Study abroad-pana.svg" alt="">
                <h4 class="c_n">Japanese: 
                    <span class="c_t">N5 Kanji</span>
                </h4>

                <h4 class="t_n">Teacher:
                    <span class="t_na">Sakura</span>
                </h4>

                <h4 class="price">Price
                    <span>$20</span>
                </h4>
            </a>
        </li>
        



    </ul>
</div>


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