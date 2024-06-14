<div id="adjust_quantity" style="width:70%;">
<?php
    session_start();
    $store = $_SESSION['store_id'];
    include "../classes/dbh.php";
    include "../classes/select.php";
    
    if(isset($_SESSION['success'])){
        echo $_SESSION['success'];
    }

    
?>

    <div class="info" style="width:80%!important;margin:auto"></div>
    <div class="displays allResults">
        <h2>Adjust item quantity</h2>
        <hr>
        <div class="search">
            <input type="search" id="searchGuestPayment" placeholder="Enter keyword" onkeyup="searchData(this.value)">
        </div>
        <table id="priceTable" class="searchTable">
            <thead>
                <tr style="background:var(--otherColor)">
                    <td>S/N</td>
                    <!-- <td>Item code</td> -->
                    <td>item</td>
                    <td>Quantity</td>
                    <td>Cost price</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
            <?php
                $n = 1;
                $select_cat = new selects();
                $rows = $select_cat->fetch_details_negCondgroup('inventory', 'quantity', 0, 'store', $store, 'item');
                if(gettype($rows) == "array"){
                foreach($rows as $row):
            ?>
                <tr>
                    <td style="text-align:center;"><?php echo $n?></td>
                    
                    <!-- <td>
                        <?php 
                            echo "00".$row->item_id;
                        ?>
                    </td> -->
                    <td style="color:var(--otherColor)"><?php 
                        //get item name
                        $get_name = new selects();
                        $name = $get_name->fetch_details_group('items', 'item_name', 'item_id', $row->item);
                        echo $name->item_name;
                    ?></td>
                    <td style="text-align:center">
                        <?php  
                            //get totalbatch quantity
                            $get_qty = new selects();
                            $qtys = $get_qty->fetch_sum_double('inventory', 'quantity', 'item', $row->item, 'store', $store);
                            foreach($qtys as $qty){
                                echo $qty->total;
                            }     
                        ?>
                    </td>
                    <td>
                        <?php echo "₦ ". number_format($row->cost_price);?>
                    </td>
                    <td class="prices">
                        <a style="padding:5px; border-radius:15px;background:var(--tertiaryColor);color:#fff;"href="javascript:void(0)" onclick="showPage('view_batch.php?item=<?php echo $row->item?>')" title="view batches">view <i class="fas fa-eye"></i></a>
                    </td>
                </tr>
            <?php $n++; endforeach; }?>
            </tbody>

        </table>
        
        <?php
            if(gettype($rows) == "string"){
                echo "<p class='no_result'>'$rows'</p>";
            }
        ?>
    </div>
</div>