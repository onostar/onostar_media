

<?php 
    $title = "Welcome to Onostar Media";
    include "controller/connections.php";
    include ('head.php');
    
?>
<body>
    <!-- <div class="loading">
        <div class="loader">
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
    </div> -->
   <!--  <div class="loading">
        <div class="loader">
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
        <img src="images/logo.png" alt="logo">

    </div> -->
    <!-- <div class="main"> -->
    <section class="top_head" id="topHeader">
        <div class="social_media">
            <ul>
                <li><a href="https://facebook.com/onostarmedia"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="https://twiter.com/onostar_media"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://instagram.com/onostar_media"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
        <div class="contact_phone">
            <ul>
                <li>
                    <a><i class="far fa-clock"></i>Mon - Sat : 8:00am - 6:00pm</a>
                </li>
                <li><a href="javascript:void(0)"><i class="far fa-envelope"></i>info@onostarmedia.com</a></li>
               
                <!-- <li><a href="javascript:void(0);"><i class="fas fa-users"></i>Alumni</a></li>
                <li><a href="javascript:void(0)">Portal<i class="fas fa-sign-in-alt"></i></a></li> -->
            </ul>
        </div>
    </section>
    <section id="banner">
        <header id="mainHeader" class="main_header">
            <h1>
                <a href="index.php">
                    <img src="images/new_logo1b-removebg-preview.png" alt="logo">
                </a>
            </h1>
            <nav id="navigation">
                <ul>
                    <li><a href="about.php" title="who we are"><i class="fas fa-bank"></i>About us</a></li>
                    <li>
                        <a href="#services" title="What we do"><i class="fa-solid fa-desktop-alt"></i>Services</a>
                    </li>
                   
                    <li><a href="#products" title="Our products"><i class="fa-solid fa-server"></i>Products</a></li>
                    <li><a href="blog.php" title="News letter"><i class="fa-solid fa-newspaper"></i>Blog</a></li>
                    <li id="login"><a href="contact.php" title="Contact us"><i class="fas fa-headset"></i> Get a Quote</a></li>
                    
                </ul>
            </nav>
            <div class="menu-icon" onclick="displayMenu()"><a href="javascript:void(0);"><i class="fas fa-bars"></i></a></div>
        </header>
        <div id="slider">
            <div class="slides">
                <div class="slide">
                    <div class="banner_img">
                        <img src="images/banner6.jpg" alt="banner">
                    </div>
                    <div class="taglines">
                        <div class="taglines_note">
                            <h2>We are at the forefront of technology</h2>
                            <!-- <p>We promote awareness and encourage the use of innovative and highly effective pharmaceutical brands among healthcare professionals </p> -->
                            
                            <div class="btns">
                                
                                <a href="about.php">Discover more <i class="fas fa-info"></i></a>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="slide">
                    <div class="banner_img">
                        <img src="images/banner.jpg" alt="Banner">
                    </div>
                    <div class="taglines">
                        <div class="taglines_note">
                            <h2>Empowering Your Business With Our Custom Software Solutions. </h2>
                            <!-- <p>Providing quality, sustainable and affordable healthcare service to the community.</p> -->
                            
                            <div class="btns">
                                <!-- <a href="javascript:void(0)" class="showRequest">Schedule an Appointment Now</a> -->
                                <a href="contact.php">Get a Quote <i class="fas fa-info"></i></a>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- <div class="slide">
                    <div class="banner_img">
                        <img src="images/product.jpg" alt="Banner">
                    </div>
                    <div class="taglines">
                        <div class="taglines_note">
                            <h2>Providing first class high quality products</h2>
                            <p>We are first in providing world calls products at cost effective price</p>
                            
                            <div class="btns">
                                <a href="javascript:void(0)" class="showRequest">Schedule an Appointment Now</a>
                                <a href="about.php">Learn more <i class="fas fa-info"></i></a>
                                <a href="javascript:void(0)" class="showRequest">Book a test <i class="fas fa-sign-in-alt"></i></a>
                            </div>
                        </div>
                        
                    </div>
                </div> -->
                
                
            </div>
            
        </div>
        <!-- <div class="client_assess">
            <a href="#reqMaster">Client Assessment Form</a><i class="fas fa-plus"></i>
        </div> -->
    </section>
    
    <!-- summary of services -->
    <section id="service_summary">
        <div class="sum_serv">
            <!-- <div class="sums_banner">
                <img src="images/chairs.jpg" alt="summary banner">
            </div> -->
            <div class="sums_details">
                <div class="serv_icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3>Customized Applications</h3>
                <hr>
                <p>Unleash the power of tailor-made software for your business. </p>
                <div class="serv_icon2">
                    <a href="javascript:void(0)" title="Click to learn more"><i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            
        </div>
        <div class="sum_serv">
            <!-- <div class="sums_banner">
                <img src="images/school_building.jpg" alt="summary banner">
            </div> -->
            <div class="sums_details">
                <div class="serv_icon">
                    <i class="fas fa-globe"></i>
                </div>
                <h3>Website Development</h3>
                <hr>
                <p>Take your business to the next level with our UI friendly website designs</p>
                <div class="serv_icon2">
                    <a href="about.php#team" title="Click to learn more"><i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            
        </div>
        <div class="sum_serv">
            <!-- <div class="sums_banner">
                <img src="images/books.jpg" alt="summary banner">
            </div> -->
            <div class="sums_details">
                <div class="serv_icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h3>Training</h3>
                <hr>
                <p>Go from zero to hero in Web design & software development</p>
                <div class="serv_icon2">
                    <a href="javascript:void(0)" title="Click to learn more"><i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            
        </div>
        
        <div class="sum_serv">
            <!-- <div class="sums_banner">
                <img src="images/chairs.jpg" alt="summary banner">
            </div> -->
            <div class="sums_details">
                <div class="serv_icon">
                    <i class="fas fa-network-wired"></i>
                </div>
                <h3>ICT Consultancy</h3>
                <hr>
                <p>Computer Networking, Computer accessories, security systems</p>
                <div class="serv_icon2">
                    <a href="javascript:void(0)" class="showRequest"title="Click to learn more"><i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            
        </div>
    </section>
    
    <main>
        
        <!-- about page -->
        <section id="about_us">
            <div class="about_banner">
                <div class="banner_img">
                    <img src="images/prescription.jpg" alt="banner">
                </div>
                <div class="clients">
                    <img src="images/pharm_excellence.jpg" alt="banner">

                </div>
            </div>
            <div class="about_text">
                <h3>Who we are</h3>
                <h2>Welcome to Onostar Media!</h2>
                <div class="notes">
                    <div class="notes_1">
                        <p>We are a World class Software development company poised to revolutionise the face of ICT in Nigeria and Africa at large by introducing innovative digital solutions that will take businesses to the next level.</p><br>
                      <p>At Onostar Media, we pride ourselves on being a leading software development company that specializes in creating customized solutions for a wide range of businesses. Our expertise spans across various industries, including supermarkets, retail stores, pharmacies, Hospitals & Diagnostics, hotels, bars, restaurants, and laundry services.<br>We understand that every business is different, which is why we offer tailor-made solutions that are designed to meet a business specific requirements. Our goal is to help businesses improve efficiency, increase productivity, and ultimately drive growth for the business.<br><br>
                        <!-- Our team provides invaluable support at all levels to help customers reduce costs and risk by making informed choices at the earliest possible stage.<br>
                        <p>At <strong>Bob & Sil</strong>, our business is people-centric and we believe and adhere to our guiding principle of building strong human resource capacity to achieve and sustain our business goals and objectives. --></p>
                        <!-- <p style="text-align: justify;">Our current staff strength of almost a hundred (100) actively engaged personnel.</p>
                        <p style="text-align: justify;">A greater percentage of our team is made up of qualified persons from within our business operating communities. --></p>
                        <a href="about.php"class="about_btn">Read more <i class="fas fa-paper-plane"></i></a>
                    </div>
                    <!-- <div class="notes_2">
                        <p>How can we meet the growing demand for oil and gas while protecting our climate & make planet a better place?</p>
                        <ul>
                            <li>We ensure strict adherence to being HSC compliant</li>
                            <li>We have high focus on the sustainability of the environment</li>
                            <li>We increase local participation in the oil and gas sector.</li>
                            <li>We do not relent in our continued contribution to community development</li>
                            <li>We increase healthy competition in the petroleum industry.</li>
                            
                        </ul>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- features -->
        <section id="features">
            <div class="features">
                <h3>Features</h3>
                <h4>We offer</h4>
                <h2>General and specialized ICT solutions</h2>
                <hr>
                <div class="feats">
                    <div class="feat">
                        <i class="fa-solid fa-laptop-code"></i>
                        <div class="feat_details">
                            <h3>Software Development</h3>
                            <p>We provide customized software solutions and website design for all forms of businesses</p>
                        </div>
                        
                    </div>
                    <div class="feat">
                        <i class="fa-solid fa-network-wired"></i>
                        <div class="feat_details">
                            <h3>Computer Networking</h3>
                            <p>We design and implement computer networks in your organization</p>
                        </div>
                        
                    </div>
                    <div class="feat">
                        <i class="fa-solid fa-camera"></i>
                        <div class="feat_details">
                            <h3>Security Surveillance</h3>
                            <p>We supply and install all forms of CCTV systems.</p>
                        </div>
                        
                    </div>
                    <div class="feat">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <div class="feat_details">
                            <h3>Training</h3>
                            <p>We offer specialized and general training in software Development.</p>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <div class="feature_img">
                <img src="images/DOC-1.jpg" alt="Our services">
            </div>
        </section>
        <!-- hero -->
        <section id="hero">
            <div class="hero_image">
                <img src="images/banner3.webp" alt="hero image">
            </div> 
            <div class="hero_notes">
                <div class="note">
                    <i class="fas fa-user-friends"></i>
                    <h3>100+</h3>
                    <p>Projects Completed</p>
                </div>
                <div class="note">
                <i class="fas fa-user-doctor"></i>
                    <h3>22</h3>
                    <p>IT Specialists</p>
                </div>
                <div class="note">
                    <i class="fas fa-hospital"></i>
                    <h3>12</h3>
                    <p>Smart Solutions</p>
                </div>
                <div class="note">
                    <i class="fas fa-users"></i>
                    <h3>100+</h3>
                    <p>Satsified Clients</p>
                </div>
            </div>
        </section>
        <!-- why choose us -->
        <section id="amenities">
            <h3>Why choose us</h3>
            <hr>
            <h2>Quality work at a perfect time</h2>
            <div class="amenities">
                <div class="offer">
                    <i class="fas fa-tags"></i></i>
                    <div class="offer_info">
                        <h4>Tailor-made solutions</h4>
                        <p>Our products and services are customized to suite your business or organizational flow. We design to suite you, just the way you want it.</p>
                    </div>
                </div>
                
                <div class="offer">
                    <i class="fas fa-headset"></i></i>
                    <div class="offer_info">
                        <h4>24/7 Customer Support</h4>
                        <p>We offer round the clock support to all of our clients, both onsite and online, and we are very prompt to response.</p>
                    </div>
                </div>
                <div class="offer">
                    <i class="fas fa-users-gear"></i></i>
                    <div class="offer_info">
                        <h4>Experienced Team</h4>
                        <p>We have a team of skilled developers and engineers dedicated to crafting innovative software solutions that cater to your unique needs.</p>
                    </div>
                </div>
                <!-- <div class="offer">
                    <i class="fas fa-clipboard"></i></i>
                    <div class="offer_info">
                        <h4>Quality Products</h4>
                        <p>All our product are NAFDAC approved and far beyond the expiration dates</p>
                    </div>
                </div>
                <div class="offer">
                    <i class="fas fa-laptop-house"></i></i>
                    <div class="offer_info">
                        <h4>Free Teleconsultations</h4>
                        <p>Consult with a range of experienced and licensed doctors, pharmacists and other healthcare expert.</p>
                    </div>
                </div>
                <div class="offer">
                    <i class="fas fa-map-marker"></i></i>
                    <div class="offer_info">
                        <h4>Convenience</h4>
                        <p>Our offices are serene and very comfortable for our clients</p>
                    </div>
                </div> -->
            </div>
        </section>
       <!-- products -->
       <section id="core_service">
            <div class="core_tool">
                <img src="images/banner4.jpg" alt="core service tools">
            </div>
            <div class="core">
                <div class="core_notes">
                    <h3>Products</h3>
                    <h2>Our core products</h2>
                    <p>We operate with excellence and high business ethics in major areas of the software industry. We have custom made digital solutions available for different industries which include :</p><br>
                    <a href="contact.php">Get a quote <i class="fas fa-angle-double-right"></i></a>
                    <img src="images/banner3.webp" alt="service image">
                </div>
                
                <div class="core_services">
                    <figure>
                        <i class="fas fa-plane-arrival"></i>
                        <figcaption>
                            <h3>Dorthpro point-of-sales</h3>
                            <p>A sales & Inventory management system for pharmacies, supermarkets and all retail/wholesale stores. With customized reports such as, expenses, item history, stock levels, expirations, etc. Its design to generate accurate analysis of sales, purchase and inventory</p><br>
                            <a href="https://demo.dorthpro.com" target="_blank">View Demo <i class="fas fa-paper-plane"></i></a>
                        </figcaption>
                    </figure>
                    <figure>
                        <i class="fas fa-ship"></i>
                        <figcaption>
                            <h3>Hotel Management system</h3>
                            <p>Manage Guest experience seemlessly, by improving check-in and check-out process, guest billing, room managements, etc, manage your bar and restaurant sales, purchase, and inventory management</p><br>
                            <a href="https://wa.me/+2347068897068" title="request a demo">Request Demo <i class="fas fa-paper-plane"></i></a>
                        </figcaption>
                    </figure>
                    <figure>
                        <i class="fas fa-warehouse"></i>
                        <figcaption>
                            <h3>Laboratory Information System</h3>
                            <p>A diagnostic software that manages patient data, investigations, phlebotomy, send patient investigation results and more.</p><br>
                            <a href="https://wa.me/+2347068897068" title="request a demo">Request Demo <i class="fas fa-paper-plane"></i></a>
                        </figcaption>
                    </figure>
                    <figure>
                        <i class="fas fa-train"></i>
                        <figcaption>
                            <h3>Laundry Management system</h3>
                            <p>A customized system designed to check-in customer clothings, payments, check status of clothings (washed, ironed or delivered). There are also customized financial reports and expense manager embedded.</p><br>
                            <a href="https://wa.me/+2347068897068" title="request a demo">Request Demo <i class="fas fa-paper-plane"></i></a>
                        </figcaption>
                    </figure>
                    
                    
                </div>
            </div>
            
        </section>
        <!-- team -->
        <section id="team">
            <h2>The Amazing team behind our Establishment</h2>
            <hr>
            <p>We have a qualified team of Scientists, Pharmacist, health technicians, and top professionals in the health sector.</p>
            <div class="team">
            <figure>
                    <img src="images/d1.jpg" alt="management photo">
                    <figcaption>
                        <h3>DR (PHARM) Nelson Akogo (B.Pharm, PharmD, MPSN)<span>MD, CEO</span></h3>
                        <div class="socials">
                            <i class="fab fa-facebook-square" style="color:#3b5998"></i>
                            <i class="fab fa-twitter-square" style="color:#00acee"></i>
                            <i class="fab fa-linkedin" style="color:#0072b1"></i>
                        </div>
                        
                    </figcaption>
                </figure>
                
            </div>
            <!-- <div class="more_team">
                <a href="about.php#team" title="View team members">View more <i class="fas fa-angle-double-right"></i></a>
            </div> -->
        </section>
        <!--Partners -->
        <!-- <section id="partners">
            <h3>Our Partners</h3>
            <div class="partners">
                <figure>
                    <img src="images/" alt="partners">
                </figure>
                <figure>
                    <img src="images/" alt="partners">
                </figure>
                <figure>
                    <img src="images/" alt="partners">
                </figure>
                <figure>
                    <img src="images/" alt="partners">
                </figure>
                <figure>
                    <img src="images/" alt="partners">
                </figure>
            </div>
        </section> -->
        <!-- online courses -->
        <Section id="plans">
            <h3 class="plans_title">Our Products</h3>
            <h2>Check out our catalogue of products</h2>
            <!-- <p class="first_p">We run all forms of investigations across the following departments</p> -->
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
            
                <?php if($get_products->rowCount() > 0){?>
                    <a id="moreProjects" href="products.php" title="View more products">View all products <i class="fas fa-angle-double-right"></i></a>
                <?php }?>
        </Section>
        <!-- gallery -->
        
        
        <!-- investment -->
        <!-- <section id="investment">
            <div class="intro">
                <p>Where science meets innovation</p>
                <h2>We excel in providing results you can trust</h2>
                <p>Diagnostics is a very important part of healthcare, as it can help you enhance your lifestyle and also detect life-threatening health issues early. Let us help keep you aware of your health at all times.<br></p>
                <a href="javascript:void(0)" class="showRequest"><i class="fa-solid fa-microscope"></i> Book appointment <i class="fa-solid fa-angle-double-right"></i></a>
            </div>
            <div class="invest_img">
                <img src="images/test.webp" alt="Investment">

            </div>
        </section> -->
        
        <!-- <section id="testimonies">
            <h2>testimonies from our Clients</h2>
            <hr>
            <div class="box">
                <div class="testimonies">
                    <div class="testimony">
                        <div class="test_img">
                            <img src="images/team_01-540x518.jpg" alt="James Chester">
                        </div>
                        <div class="test_note">
                            <p>"I couldn’t be happier with the service I was provided. Everyone took ample time with me to ensure that my visit exceeded my expectations."</p>
                            <div class="testifier">
                                <img src="images/team_01-540x518.jpg" alt="testifier">
                                <span>- James Chester</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="testimony">
                        <div class="test_img">
                            <img src="images/team_02-540x518.jpg" alt="Andre Coleman morgans">
                        </div>
                        <div class="test_note">
                            <p>"We have used Bob and sil to provide services that our competitions cannot begin to offer. That has given us a decisive edge in our market. Now we can produce even more with sustainable energy"</p>
                            <div class="testifier">
                                <img src="images/team_02-540x518.jpg" alt="testifier">
                                <span>- Eddie Smith</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="testimony">
                        <div class="test_img">
                            <img src="images/team_03-540x518.jpg" alt="Will pilo">
                        </div>
                        <div class="test_note">
                            <p>"We have been engaged with Bob and sil for several months now. They have been very responsive to all requests. Investing with Irecco has brought more financial value to us as a company as well as development."</p>
                            <div class="testifier">
                                <img src="images/team_03-540x518.jpg" alt="testifier">
                                <span>- Damian wilsbrock</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="testimony">
                        <div class="test_img">
                            <img src="images/team_04-540x518.jpg" alt="Will pilo">
                        </div>
                        <div class="test_note">
                            <p>"Bob and SIl globale an excellent service, be it on a business or personal level.I found the company's various investment plans very helpful to the growth of my business and i am heading on a great path to finanncial freedom"</p>
                            <div class="testifier">
                                <img src="images/team_04-540x518.jpg" alt="testifier">
                                <span>- Sean Mendoz</span>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </section> -->
        <!-- hero 2 -->
        
        
        
        
        
    </main>
    
    <?php include "footer.php"?>
    </div>
</body>
</html>