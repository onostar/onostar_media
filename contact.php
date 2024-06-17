<?php 
    $title = "Contact us";
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
                        <img src="images/banner6.jpg" alt="icht">
                    </div>
                    <div class="taglines">
                        <h2>Contact us</h2>
                        <!-- <p>We bring exceptional care close to you. Consult a Doctor any time, any day.</p> -->
                        <!-- <div class="btns">
                            <a href="javascrip:void(0);" class="showRequest">Schedule an Appointment Now</a>
                            <a href="contact.html">Get a Quote</a>
                        </div> -->
                    </div>
                </div>
                
            </div>
        </div>
        <!-- <div class="client_assess">
            <a href="#reqMaster">Client Assessment Form</a><i class="fas fa-plus"></i>
        </div> -->
    </section>
    <main>
        <section id="investment">
            
            <div class="intro" id="intro_title">
                <p>get in touch</p>
                <p>Whether you are looking to launch a new project or enhance an existing one, Onostar Media is here to collaborate with you. Contact us today to learn more about how we can help you achieve your software development & IT goals.</p>
                <div class="add_info">
                    <i class="fas fa-street-view"></i>
                    <p>Our Head office is located at 1 Ogidan street, Off Atican Beachview Estate, Okun-ajah, Ajah, Lagos state, Nigeria</p>
                </div>
                <div class="add_info">
                    <i class="fas fa-database"></i>
                    <p>Our Branch office is located behind Okabere Community Road, Off Benin/Sapele Road, Benin City, Edo state, Nigeria</p>
                </div>
                <div class="add_info">
                    <i class="fas fa-phone"></i>
                    <p>You can also call us on these numbers:<br> +234 706 889 7068</p>
                </div>
                <div class="add_info">
                    <i class="fas fa-envelope"></i>
                    <p>Send us an email at info@onostarmedia.com, contact@onostarmedia.com</p>
                </div>
            </div>
            <div class="invest_form">
                <form action="controller/contact_us.php" method="POST" id="contact_form">
                    <h3>Send us a message</h3>
                    <div class="datas">
                        <label for="name">Full Name</label>
                        <input type="text" name="full_name" id="full_name" placeholder="Jonathan Taylor">
                    </div>
                    <div class="datas">
                        <label for="email">Email Address</label>
                        <input type="text" name="email" id="email" placeholder="example@mail.com">
                    </div>
                    <div class="datas">
                        <label for="message">Your message</label>
                        <textarea name="message" id="message" cols="50" rows="10"></textarea>
                    </div>
                    <button type="submit" name="send_message" id="send_message">Send message <i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
        </section>
        
    </main>
    <?php include "footer.php"?>
<!-- </div> -->
    <!-- <div class="help" id="help">
        <a target="_blank" href="https://api.whatsapp.com/send?phone=2348157985866"><i class="fab fa-whatsapp"></i> Hello, How can we help?</a>
    </div> -->
   
    <!-- addvert -->
    <!-- <div class="addverts">
        <div class="close_add">
            <i class="fas fa-close"></i>
        </div>
        <div class="clear"></div>
        <div class="add_box">
            <h3>Welcome to IppSSolar</h3>
            <div class="welcome_plans">
                <img src="images/ippssolar_logo2.png" alt="logo">
                <p>Have you invested with Ippssolar today? Hurry now as interest rates is now very high. Offer lasts not so long</p>
                <div class="learn">
                    <a href="#investment" id="learn">Learn more <i class="fas fa-info"></i></a>
                </div>
                
            </div>
        </div>
    </div> -->
    <!-- chat -->
    <!-- <div id="chat">
        <div class="chat_icon" title="Live chat">
            <i class="fas fa-comments"></i>
        </div>
        <div class="chat_close" title="Close chat">
            <i class="fas fa-comment-slash"></i>
        </div>
        <div class="chat_message">
            <h2>Live Chat <i class="far fa-comment"></i></h2>
            <div class="all_chat">
                <div id="chat1">
                    <div class="main_chats">
                        <div class="sender">
                            <i class="fas fa-user-tie"></i>
                            <p>Customer service</p>
                        </div>
                        <p class="chats">Hi. This is customer service<br> Welcome to Bob and sil global. We ar e a world class Renewable energy service company. How may we be of service today?</p>
                        
                    </div>
                </div>
                <div id="chat3">
                    <div class="main_chats">
                        <div class="sender">
                            <i class="fas fa-user-tie"></i>
                            <p>Customer service</p>
                        </div>
                        <p class="chats"> Ask me anything, i am here to help</p>
                        
                    </div>
                </div>
                
                
            </div>
            
             <form action="" id="chat_box">
                <input type="text" name="messages" id="messages" placeholder="Type your message here">
                <a href="views/login_page.php"><i class="fas fa-paper-plane"></i></a>
             </form>   
                
            
        </div>
        
    </div> -->
    <script src="jquery.js"></script>
    <script src="script.js"></script>
</body>
</html>