<?php 
    include "controller/connections.php";

    if(isset($_GET['id'])){
        $item = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        if($item == false){
            die;
        }else{

        $get_product = $connectdb->prepare("SELECT * FROM items WHERE item_id = :item_id");
        $get_product->bindValue("item_id", $item);
        $get_product->execute();
        $rows = $get_product->fetchAll();
        foreach($rows as $row){
            $title = "B Classic - ". $row->item_name;
            include ('head.php');
?>
<body>
    <!-- <div class="loading">
        <div class="loader">
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
    </div> -->
    <!-- <div class="main"> -->
    <header id="mainHeader" class="main_header" style="position:fixed; top:0;left:0;margin:0;width:100%;border-radius:0; min-height:8vh;">
        <h1>
                <a href="index.php">
                    <img src="images/logo.png" alt="logo">
                </a>
            </h1>
            <nav id="navigation">
            <ul>
                    <li><a href="about.php" title="who we are"><i class="fas fa-hospital"></i>About us</a></li>
                    <li>
                        <a href="javascript:void(0)" title="What we do"><i class="fa-solid fa-microscope"></i>Services</a>
                    </li>
                   
                    <li><a href="products.php" title="Our products"><i class="fa-solid fa-capsules"></i>Products</a></li>
                    <li><a href="contact.php" title="Contact us"><i class="fas fa-headset"></i> Contact us</a></li>
                    <!-- <li><a href="recruitment.html" title="Job recruitment">Career</a></li> -->
                    <!-- <li><a href="blog.html" title="Job recruitment">Our Blog</a></li> -->
                    <li id="login"><a href="admin/index.php" title="Contact us"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                </ul>
            </nav>
            <div class="menu-icon" onclick="displayMenu()"><a href="javascript:void(0);"><i class="fas fa-bars"></i></a></div>
        </header>
        
    <main style="margin-top:20vh!important;">
    <section id="existence" style="width:95%">
            <!-- <h2><?php echo $row->item_name?></h2> -->
            <!-- <hr> -->
            <!-- <h3>Details</h3> -->
            <div class="product" style="justify-content:none">
                <div class="more_notes" style="box-shadow:2px 2px 2px #222;">
                    <div class="more_slide">

                        <figure>
                            <img src="<?php echo 'admin/photos/'.$row->photo?>" alt="<?php echo $row->item_name?>">
                        </figure>
                        <figure>
                            <img src="<?php echo 'admin/photos/'.$row->photo2?>" alt="<?php echo $row->item_name?>">
                        </figure>
                        <figure>
                            <img src="<?php echo 'admin/photos/'.$row->photo3?>" alt="<?php echo $row->item_name?>">
                        </figure>
                        
                    </div>

                </div>
                <div class="more_details">
                    <p style="color:var(--moreColor);text-transform:uppercase;text-align:center;font-size:1rem;"><span><?php echo $row->item_name?></span></p>
                    <p><span>Category:</span> <?php
                        //get category
                        $get_category = $connectdb->prepare("SELECT category FROM categories WHERE category_id = :category_id");
                        $get_category->bindValue("category_id", $row->category);
                        $get_category->execute();
                        $cats = $get_category->fetch();
                        echo $cats->category;
                    ?></p>
                    <p><span>Price:</span> ₦<?php echo number_format($row->sales_price, 2)?></p>
                    <h4>Description:</h4>
                    <p><?php echo $row->description?></p>
                    <h4>Dosage and administration:</h4>
                    <p><?php echo $row->dosage?></p>

                    <div class="order">
                        <a href="https://wa.me/+2347064204157" target="_blank" title="Order product"><i class="fas fa-shopping-cart"></i> Order product</a>
                    </div>
                </div>
                
            </div>
        </section>
        
    </main>
    <?php include "footer.php"?>
<!-- </div> -->
    <!-- <div class="help" id="help">
        <a target="_blank" href="https://api.whatsapp.com/send?phone=2348157985866"><i class="fab fa-whatsapp"></i> Hello, How can we help?</a>
    </div> -->
    
    <div class="toTop">
        <a href="#topHeader"><i class="fas fa-chevron-up" style="color:#fff;" size="10"></i></a>
    </div>
    <script src="jquery.js"></script>
    <script src="script.js"></script>
</body>
</html>

<?php
        }
        }
        }else{
            header("Location: index.php");
        }
?>