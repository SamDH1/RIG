<?php
if(!$_SESSION['loggedin']){
    //User is not logged in
    echo "<h1>Access Denied</h1>";
    echo "<script> window.location.assign('index.php?p=login'); </script>";
    exit;
}
?>


<script src="js/list.js"></script>

<div id="pageContainer" class="container">
    <ul id="todoList">
        <?php
        
        $listid = $_GET['id'];
        $query = "SELECT * FROM list_items WHERE list_id = :listid";
        $pdo = $DBH->prepare($query);
        $pdo->bindParam(':listid', $listid);
        $pdo->execute();

        while($row = $pdo->fetch(PDO::FETCH_ASSOC)) {
            echo '<li data-id="'.$row['item_id'].'">'.$row['item_name'].'<i class="fa fa-times pull-right"></i></li>';
        }
        ?>

    </ul>
    <form class="row">
        <div class="col-md-10">
            <input type="text" class="form-control" id="product" placeholder="Product">
        </div>
        <div class="col-md-2">
            <input type="hidden" class="form-control" id="listid" value=<?php echo $_GET['id']; ?>>
            <button type="button" class="btn btn-primary" id="addproduct">Add Item</button>
        </div>
    </form>
</div>