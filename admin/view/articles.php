<div id="item_list">
<?php
session_start();
    include "../classes/dbh.php";
    include "../classes/select.php";
    //pagination
    if(!isset($_GET['page'])){
        $page_number = 1;
    }else{
        $page_number = $_GET['page'];
    }
    //set limit
    $limit = 50;
    //calculate offset
    $offset = ($page_number - 1) * $limit;
    $prev_page = $page_number - 1;
    $next_page = $page_number + 1;
    $adjacents = "2";
    //get number of pages
    $get_pages = new selects();
    $pages = $get_pages->fetch_count('items');
    $total_pages = ceil($pages/$limit);
    //get second to last page
    $second_to_last = $total_pages - 1;

    //get user
    if(isset($_SESSION['user'])){
        $username = $_SESSION['user'];
        //get user role
        $get_role = new selects();
        $roles = $get_role->fetch_details_group('users', 'user_role', 'username', $username);
        $role = $roles->user_role;

?>
    <div class="info"></div>
<div class="displays allResults" id="bar_items">
    <h2>List of articles</h2>
    <hr>
    <div class="search">
        <input type="search" id="searchRoom" placeholder="Enter keyword" onkeyup="searchData(this.value)">
        <a class="download_excel" href="javascript:void(0)" onclick="convertToExcel('item_list_table', 'Articles')"title="Download to excel"><i class="fas fa-file-excel"></i></a>
    </div>
    <table id="item_list_table" class="searchTable">
        <thead>
            <tr style="background:var(--moreColor)">
                <td>S/N</td>
                <td>Title</td>
                <td>Post Date</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php
                $n = 1;
                $get_items = new selects();
                $details = $get_items->fetch_details('articles', $limit, $offset);
                if(gettype($details) === 'array'){
                foreach($details as $detail):
            ?>
            <tr>
                <td style="text-align:center; color:red;"><?php echo $n?></td>
               
                <td><?php echo $detail->title?></td>
               
                <td>
                    <?php
                       
                        echo date("jS M, Y", strtotime($detail->post_date));
                    ?>
                </td>
                <td>
                    <a href="../../article_info.php?id=<?php echo $detail->article_id?>" target="_blank" title="view article" style="background:var(--tertiaryColor); color:#fff; padding:5px;border-radius:15px">View <i class="fas fa-eye"></i></a>
                    
                    <a style="padding:5px; border-radius:15px;background:var(--moreColor);color:#fff;"href="javascript:void(0)" onclick="showPage('get_article_edit.php?item=<?php echo $detail->article_id?>')" title="update article"> Update <i class="fas fa-edit"></i></a>
                
                </td>
            </tr>
            
            <?php $n++; endforeach;}?>
        </tbody>
    </table>
    <div class="page_links">
        <?php
            if(gettype($details) == "array"){
                echo "<p><strong>Pages ".$page_number." of ".$total_pages."</strong></p>";
        ?>
        <ul class="pages">
            <?php
                if($page_number > 1){
                    echo "<li><a href='javascript:void(0)' onclick='showPage('item_list.php?page=1')' title='Go to first page'>First page</a></li>
                    <li><a href='javascript:void(0)' onclick='showPage('item_list.php?page='$previous_page)' title='Go to previous page'>Previous</a></li>";
                }
            ?>
            <?php
                if($page_number < $total_pages){
                    echo "<li><a href='javascript:void(0)' onclick='showPage('item_list.php?page='".$next_page."')' title='Go to Next page'>Next</a></li><li><a href='javascript:void(0)' onclick='showPage('item_list.php?page='$total_pages)' title='Go to last page'>Last page</a></li>";
                }
            ?>
        </ul>
    </div>
    <?php
        }
        if(gettype($details) == "string"){
            echo "<p class='no_result'>'$details'</p>";
        }
    
    ?>
</div>
<?php }?>
</div>