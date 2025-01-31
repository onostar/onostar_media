<?php
    include "../classes/dbh.php";
    include "../classes/select.php";
?>
<div id="update_customer" class="displays">
    <div class="info"></div>
    <div class="add_user_form" style="width:70%">
        <h3>Add customers</h3>
        <!-- <form method="POST" id="addUserForm"> -->
        <section class="addUserForm">
            <div class="inputs" style="gap:.5rem;">
                <div class="data" style="width:30%">
                    <label for="customer">Customer Name</label>
                    <input type="text" name="customer" id="customer" placeholder="Enter customer name" required>
                </div>
                <div class="data" style="width:30%">
                    <label for="phone_number">Phone number</label>
                    <input type="text" name="phone_number" id="phone_number" placeholder="0033421100" required>
                </div>
                <div class="data" style="width:30%">
                    <label for="Address">Address</label>
                    <input type="text" name="address" id="address" required>
                </div>
                <div class="data" style="width:30%">
                    <label for="reg_date">Date Onboarded</label>
                    <input type="date" name="reg_date" id="reg_date">
                </div>
                <div class="data" style="width:30%">
                    <label for="product">Product/Service</label>
                    <input type="text" name="product" id="product">
                </div>
                <div class="data" style="width:30%">
                    <label for="email">Email address</label>
                    <input type="text" name="email" id="email" placeholder="example@mail.com" required>
                </div>
                
                <div class="data" style="width:30%">
                    <button type="submit" id="add_customer" name="add_customer" onclick="addCustomer()">Add Customer <i class="fas fa-plus"></i></button>
                </div>
            </div>
</section>    
    </div>
</div>
