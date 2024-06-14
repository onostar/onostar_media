<div id="edit_item_price">
<?php
    session_start();
    include "../classes/dbh.php";
    include "../classes/select.php";
    include "../classes/update.php";
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
        // echo $user_id;
    
    if(isset($_GET['item'])){
        $item = $_GET['item'];
        
        
        //get item details
        $get_item = new selects();
    $rows = $get_item->fetch_details_cond('items', 'item_id', $item);
     if(gettype($rows) == 'array'){
        foreach($rows as $row):
?>
    <div class="add_user_form priceForm">
        <h3 style="background:var(--primaryColor)">Edit price for <?php echo strtoupper($row->item_name)?></h3>
        <section class="addUserForm" style="text-align:left;">
            <div class="inputs" style="flex-wrap:wrap; gap:1rem;">
                <!-- <div class="data item_head"> -->
                    <input type="hidden" name="item_id" id="item_id" value="<?php echo $row->item_id?>" required>
                <div class="data" style="width:30%">
                    <label for="cost_price">Cost price (NGN)</label>
                    <input type="text" name="cost_price" id="cost_price" value="<?php echo $row->cost_price?>">
                </div>
                <div class="data" style="width:30%">
                    <label for="sales_price">Selling price (NGN)</label>
                    <input type="text" name="sales_price" id="sales_price" value="<?php echo $row->sales_price?>">
                </div>
                <div class="data" style="width:30%">
                    <label for="pack_price">Pack Price (NGN)</label>
                    <input type="text" name="pack_price" id="pack_price" value="<?php echo $row->pack_price?>">
                </div>
                <div class="data" style="width:30%">
                    <label for="sales_price">Commission (%)</label>
                    <input type="text" name="commission" id="commission" value="<?php echo $row->commission?>">
                </div>
                <!-- <div class="data" style="width:30%">
                    <label for="sales_price">Wholesale price (NGN)</label>
                    <input type="text" name="wholesale_price" id="wholesale_price" value="<?php echo $row->wholesale?>">
                </div>
                <div class="data" style="width:30%">
                    <label for="pack_price">Wholesale Pack Price (NGN)</label>
                    <input type="text" name="wholesale_pack" id="wholesale_pack" value="<?php echo $row->wholesale_pack?>">
                </div> -->
                <!-- <div class="data" style="width:30%">
                    <label for="pack_price">Carton/role Price (NGN)</label>
                    <input type="text" name="carton_role" id="carton_role" value="<?php echo $row->carton_role?>">
                </div> -->
                <div class="data" style="width:30%">
                    <label for="sales_price">Pack Qty</label>
                    <input type="text" name="pack_size" id="pack_size" value="<?php echo $row->pack_size?>">
                </div>
                <!-- <div class="data" style="width:30%">
                    <label for="sales_price">Carton/role Qty</label>
                    <input type="text" name="carton_size" id="carton_size" value="<?php echo $row->carton_size?>">
                </div> -->
                <div class="data" style="width:30%">
                    <button type="submit" id="change_price" name="change_price" onclick="changeItemPrice()">Save <i class="fas fa-save"></i></button>
                    <a href="javascript:void(0)" title="close form" style='background:red; padding:10px; border-radius:5px; color:#fff' onclick="showPage('item_price.php')">Return <i class='fas fa-angle-double-left'></i></a>
                </div>
                
            </div>
        </section>   
    </div>

<?php
    endforeach;
}
            }
        
    }else{
        header("Location: ../index.php");
    }
?>
</div>