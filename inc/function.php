<?php

function menu_cat() {
    include("db.php");
    $get_cat = $con->prepare("select * from cat");
    $get_cat->setFetchMode(PDO:: FETCH_ASSOC);
    $get_cat->execute();

    while($row = $get_cat->fetch()): 
        echo "
        <li>
        <a href='#'>".$row['cat_name']."</a>
        </li>
        ";
    endwhile;    
}

function pop_cat() {
    include("db.php");
    $get_cat = $con->prepare("select * from cat");
    $get_cat->setFetchMode(PDO:: FETCH_ASSOC);
    $get_cat->execute();

    while($row = $get_cat->fetch()): 
        echo "
        <li>
        <img src='".$row['cat_img']."'>
            <h4>".$row['cat_name']."</h4>
            <p>courses: <span>4</span> </p>
        </li>
        ";
    endwhile;  
    

}

function cart(){
    include("db.php");
    echo "
    <div class='head flex container'>
            <span><a href='index.php'>Home</a></span>
            <span class='active'><a href='cart.php' >My Cart</a></span>
    </div>
    <div class='cart_s container'>
        <table cellspacing='0'>
            <tr>
                <th>Name</th>
                <th>Instructor</th>
                <th>Language</th>
                <th>Lectures</th>
                <th>Price</th>
            </tr>
            <tr>
            <td class='flex'>
                <img src='images/courses/English teacher-rafiki.svg'>
                <p><a href='#'>English Grammers</a></p>
                <span><a href'#'><i class='bi bi-trash3-fill'></i></a></span>
            </td>
            <td>Sakura</td>
            <td>Japanese</td>
            <td>10</td>
            <td>$100</td>
            </tr>

            <tr>
            <td class='flex'>
                <img src='images/courses/English teacher-rafiki.svg'>
                <p><a href='#'>English Grammers</a></p>
                <span><a href'#'><i class='bi bi-trash3-fill'></i></a></span>
            </td>
            <td>Sakura</td>
            <td>Japanese</td>
            <td>10</td>
            <td>$100</td>
            </tr>
            <tr >
                <td class='button_tr flex'>
                    <button>
                    <a href='index.php'>Go back</a>
                    
                    </button>

                    <button>
                        <a href='#'>Checkout</a>
                    </button>
                </td>

                <td></td><td></td>
                <td style='text-align:right'>Amount:</td>
                <td>$100</td>
            </tr>
        </table>

    </div>
    ";

}



function course_details() {
    include("db.php");
    echo "
    <div class='head flex container'>
            <span><a href='index.php'>Home</a></span>
            <span class='active'><a href='cart.php' >My Cart</a></span>
    </div>

    <div class='course container'>
        <div class='part_one'>
        <img src='images/courses/Knowledge-amico.svg' class='flex'>
        </div>
        <div class='part_two'>
            <h2>Kanji N5</h2>
            <div class='flex'>
                <h3>Instructor:</h3>
                <h5>Sakura</h5>
            </div>

            <div class='flex'>
                <h3>Level:</h3>
                <h5>Biginner</h5>
            </div>
            <div class='flex'>
                <h3>Language:</h3>
                <h5>Japanese with English Explination</h5>
            </div>
            <div class='flex'>
                <h3>Lectures:</h3>
                <h5>10</h5>
            </div>
            <div class='flex'>
                <h3>Num of Students:</h3>
                <h5>10</h5>
            </div>

            <div class='c_price flex'>
                <h3>Price:</h3>
                <h5>$15</h5>
                <span>$60</span>
            </div>
            <div class='c_btn flex'>
            <button>
            Add To Cart
            </button>
            <button>
            <a href='#'>Buy Now</a>
            </button>
        </div>
        </div>
        
    </div>

    <div class='c_info container flex'>
        <div class='c_info-one flex'>
            <h2>About the course</h2>
            <p>It is Kanji N5 course, where you will be introduced to the Kanji N5 and learn how you write, and pronounce them. Also, you will be able to use them with writting and reading practices with your teacher.</p>
            <h2>What You Will Learn?</h2>
            <p>You will learn how to write and read the Kanji N5. Also, you will practice all you have learned with real world examples</p>
            <h2>What You Need Before To Start?</h2>
            <p>You have to be a beginner in japanese and know how to write and read in hergana and katakana</p>
            <h2>Instructor</h2>
            <p>Sakura from Japan with more than 5 years experience.</p>
        </div>
        <div class='c_info-two flex'>
        <h2>Related Courses</h2>
        <div class='re_c flex'>
        <img src='images/courses/Japanese calligraphy-bro.svg'>
        <a class='flex'>
            <h4>Introduction to Japanese</h4>
            <p>Instructor: Sakura</p>
        </a>
            
        </div>

        <div class='re_c flex'>
        <img src='images/courses/Japanese calligraphy-cuate.svg'>
        <a class='flex'>
        <h4>Heragana</h4>
        <p>Instructor: Sakura</p>
        </a>
        
        </div>

        <div class='re_c flex'>
        <img src='images/courses/Japanese calligraphy-rafiki.svg'>
        <a class='flex'>
        <h4>Katakana</h4>
        <p>Instructor: Sakura</p>
        </a>
        
        </div>

        <div class='re_c flex'>
        <img src='images/courses/Japanese calligraphy-pana.svg'>
        <a class='flex'>
        <h4>Japanese N5 Grammer</h4>
        <p>Instructor: Sakura</p>
        </a>
    </div>
        
        </div>
    
    </div>

    <div class='cur flex container'>
    <h2>Curriculum</h2>
    <div class='cur_le flex'>
        <div class='cur_le-inf flex'>
        <i class='bi bi-camera-video-fill'></i>
        <p>1- Kanji N5 from 1 to 10</p>
        </div>

        <div class='cur_le-inf flex'>
        <i class='bi bi-image-fill'></i>
        <p>1- Kanji N5 from 1 to 10 pictures with writing style</p>
        </div>

        <div class='cur_le-inf flex'>
        <i class='bi bi-camera-video-fill'></i>
        <p>2- Kanji N5 from 11 to 20</p>
        </div>
        <div class='cur_le-inf flex'>
        <i class='bi bi-image-fill'></i>
        <p>2- Kanji N5 from 11 to 20 pictures with writing style</p>
        </div>
    
    </div>
    
    </div>
    
    ";
}
?>