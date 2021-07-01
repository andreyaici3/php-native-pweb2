<?php include 'page/header.php';?>
        <!-- Page content-->
        <?php 
            if (!isset($_GET['page'])){
                include 'page/home.php';
            } else if (isset($_GET['page']) == 'post'){
                include 'page/post.php';
            }
        ?>
        <!-- Footer-->
<?php include 'page/footer.php'; ?>
