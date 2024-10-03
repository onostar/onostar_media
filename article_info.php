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
            // include ('head.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $row->title?>">
    <meta name="keyword" content="Software, automation, business software, point of sales, inventory management, accounting software, production software, security surveillance, CCTV" />
	<meta name="author" content="Onostar Media"/>
	<meta name="og:url" property="og:url" content="https://">
    <meta name="og:type "property="og:type" content="website">
    <meta name="og:title" property="og:title" content="" />
    <meta name="og:site_name" property="og:site_name" content="" />
    <meta name="og:description" property="og:description" content="<?php echo $row->title?>">
    <meta name="keyword" content="Software, automation, business software, point of sales, inventory management, accounting software, production software">
    <meta name="og:image" property="og:image" itemprop="image" content="<?php echo 'admin/photos/'.$row->photo?>">
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="fontawesome-free-6.0.0-web/css/all.css">
    <link rel="stylesheet" href="fontawesome-free-6.0.0-web/css/all.min.css">
    
    <link rel="icon" href="<?php echo 'admin/photos/'.$row->photo?>" type="image/png" size="32X32">
    <link rel="stylesheet" href="style.css">
</head>
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
        <Section id="plans">
            <h2>More articles</h2>
            <!-- <p class="first_p">We supply various forms of products from different suppliers</p> -->
            <div class="plans">
                <?php
                    // get only four products
                    $get_products = $connectdb->prepare("SELECT SUBSTRING_INDEX (details, ' ', 12) AS details, title, article_id, photo, post_date FROM articles WHERE article_id != :article_id ORDER BY post_date DESC LIMIT 4");
                    $get_products->bindValue('article_id', $item);
                    $get_products->execute();
                    if($get_products->rowCount() > 0){
                        $rows = $get_products->fetchAll();
                        foreach($rows as $row):
                ?>
                <div class="plan_form" id="plan1">
                    <figure>
                        <div class="project_img">
                            <div class="pro_img">
                                <img src="<?php echo 'admin/photos/'.$row->photo?>" alt="<?php echo $row->title?>">
                            </div>
                            <a href="article_info.php?id=<?php echo $row->article_id?>"> <i class="fas fa-eye"></i></a>
                        </div>
                        <figcaption>
                            <h3><?php echo strtoupper($row->title)?></h3>
                            <p class="course_details">
                               <?php echo $row->details?>...
                            </p>
                            <div class="author">
                                <img src="images/icon.png" alt="logo">
                                <p style="color:var(--moreColor);" class="author_name"><?php echo date("jS M, Y", strtotime($row->post_date))?></p>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                
                <?php endforeach; }else{?>
                <p style="color:var(--moreColor); text-align:center">No articles</p>
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

<?php
        }
        }
        }else{
            header("Location: index.php");
        }
?>