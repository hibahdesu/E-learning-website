<div id='bodyLeft'>
    <div>
    <h3>Categories Managment</h3>
    <ul>
        <li><a href="index.php"><i class="bi bi-house"></i>Dashboard</a></li>
        <li><a href="index.php?cat">View Categories</a></li>
        <li><a href="index.php?sub_cat">View Sub Categories</a></li>
        <li><a href="index.php?lang">View Languages</a></li>
    </ul>
    </div>

    <div>
    <h3>Course Managment</h3>
    <ul>
        <li><a href="#">View All Active Courses</a></li>
        <li><a href="#">View All Pendding Courses</a></li>
        <li><a href="#">View All Unpublish Courses</a></li>
        <li><a href="#">Advanced Course Search</a></li>
    </ul>
    </div>

    <div>
    <h3>User Managment</h3>
    <ul>
        <li><a href="#">View All Students</a></li>
        <li><a href="#">View All Teachers</a></li>
        <li><a href="#">Advanced User Search</a></li>
    </ul>
    </div>

    <div>
    <h3>Payment Managment</h3>
    <ul>
        <li><a href="#">Pay To Instructor</a></li>
        <li><a href="#">View All Complete Orders</a></li>
        <li><a href="#">Advanced Order Search</a></li>
    </ul>
    </div>

    <div>
    <h3>Page Managment</h3>
    <ul>
        <li><a href="index.php?term">Terms & Conditions Page</a></li>
        <li><a href="index.php?contact">Contact Us Page</a></li>
        <li><a href="index.php?about">About Us Page</a></li>
        <li><a href="index.php?faqs">FAQs Page</a></li>
        <li><a href="#">Edit Slider</a></li>
    </ul>
    </div>


</div>
<?php 
    if(isset($_GET['cat'])) {
        include("cat.php");
    }

    if(isset($_GET['lang'])) {
        include("lang.php");
    }

    if(isset($_GET['sub_cat'])) {
        include("sub_cat.php");
    }
    if(isset($_GET['term'])) {
        include("term.php");
    }
    if(isset($_GET['contact'])) {
        include("contact.php");
    }
    if(isset($_GET['faqs'])) {
        include("faqs.php");
    }
    if(isset($_GET['about'])) {
        include("about.php");
    }
?>