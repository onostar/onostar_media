<?php 
    include "controller/connections.php";

    if(isset($_GET['id'])){
        $item = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        if($item == false){
            die;
        }else{

        $get_product = $connectdb->prepare("SELECT * FROM articles WHERE article_id = :article_id");
        $get_product->bindValue("article_id", $item);
        $get_product->execute();
        $rows = $get_product->fetchAll();
        foreach($rows as $row){
            $title = "Onostar Media - ". $row->title;
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
                <li><a href="about.php" title="who we are"><i class="fas fa-bank"></i>About us</a></li>
                    <li>
                        <a href="#services" title="What we do"><i class="fa-solid fa-desktop-alt"></i>Services</a>
                    </li>
                   
                    <li><a href="#products" title="Our products"><i class="fa-solid fa-server"></i>Products</a></li>
                    <li><a href="articles.php" title="News letter"><i class="fa-solid fa-newspaper"></i>Blog</a></li>
                    <li id="login"><a href="contact.php" title="Contact us"><i class="fas fa-headset"></i> Get a Quote</a></li>
                </ul>
            </nav>
            <div class="menu-icon" onclick="displayMenu()"><a href="javascript:void(0);"><i class="fas fa-bars"></i></a></div>
        </header>
        
    <main style="margin-top:20vh!important;">
    <section id="existence" style="width:95%">
            <!-- <h2><?php echo $row->title?></h2> -->
            <!-- <hr> -->
            <!-- <h3>Details</h3> -->
            <div class="product" style="justify-content:none">
                <div class="more_notes" style="box-shadow:2px 2px 2px #222;">
                    <div class="more_slide">

                        <figure>
                            <img src="<?php echo 'admin/photos/'.$row->photo?>" alt="<?php echo $row->title?>">
                        </figure>
                        <figure>
                            <img src="<?php echo 'admin/photos/'.$row->photo?>" alt="<?php echo $row->title?>">
                        </figure>
                        <figure>
                            <img src="<?php echo 'admin/photos/'.$row->photo?>" alt="<?php echo $row->title?>">
                        </figure>
                        
                    </div>

                </div>
                <div class="more_details">
                    <!-- <p style="color:var(--moreColor);text-transform:uppercase;text-align:center;font-size:1rem;"><span></span></p> -->
                    
                    <h4><?php echo $row->title?></h4>
                    <textarea style="width:100%; height:500px; border:none;"><?php echo $row->details?></textarea>
                    
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