<?php 
    include "controller/connections.php";
    $title = "Products";
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
        <?php include "header.php"?>
        <div id="slider">
            <div class="about_banner">
                <div class="slide">
                    <div class="banner_img">
                        <img src="images/product.jpg" alt="about us">
                    </div>
                    <div class="taglines">
                        <h2>Products</h2>
                        <!-- <p>We bring exceptional care close to you. Consult a Doctor any time, any day.</p> -->
                        <!-- <div class="btns">
                            <a href="javascrip:void(0);" class="showRequest">Schedule an Appointment Now</a>
                            <a href="contact.html">Get a Quote</a>
                        </div> -->
                    </div>
                </div>
                
            </div>
        </div>
</section>
    <main>
    <Section id="plans">
            <h3 class="plans_title">Product List</h3>
            <h2>Check out our variety of products</h2>
            <!-- <p class="first_p">We supply various forms of products from different suppliers</p> -->
            <div class="plans">
                <?php
                    // get only four products
                    $get_products = $connectdb->prepare("SELECT SUBSTRING_INDEX (description, ' ', 10) AS details, item_name, item_id, photo FROM items ORDER BY date_created DESC LIMIT 4");
                    $get_products->execute();
                    if($get_products->rowCount() > 0){
                        $rows = $get_products->fetchAll();
                        foreach($rows as $row):
                ?>
                <div class="plan_form" id="plan1">
                    <figure>
                        <div class="project_img">
                            <div class="pro_img">
                                <img src="<?php echo 'admin/photos/'.$row->photo?>" alt="<?php echo $row->item_name?>">
                            </div>
                            <a href="product_info.php?id=<?php echo $row->item_id?>"> <i class="fas fa-eye"></i></a>
                        </div>
                        <figcaption>
                            <h3><?php echo strtoupper($row->item_name)?></h3>
                            <p class="course_details">
                               <?php echo $row->details?>
                            </p>
                            <div class="author">
                                <img src="images/logo.jpg" alt="logo">
                                <p class="author_name">B Classic Pharma</p>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                
                <?php endforeach; }else{?>
                <p style="color:var(--moreColor); text-align:center">No Product in inventory</p>
                <?php }?>
                
            </div>
           

        </Section>
        
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