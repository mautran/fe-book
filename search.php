<form action="" method="post">
<input type="text" name="search">
<input type="submit" name="submit" value="Search">
</form>
<?php
$servername='localhost';
$username='root'; // User mặc định là root
$password='';
$dbname = "data"; // Cơ sở dữ liệu
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
die('Không thể kết nối Database:');
}

    if(ISSET($_POST['submit'])){
        $keyword = $_POST['search'];
?>
<div>
    <h2>Kết quả</h2>
    <?php

        $query = mysqli_query($conn, "SELECT * FROM `posts` WHERE `title` LIKE '%$keyword%' ORDER BY `title`") or die;
        while($fetch = mysqli_fetch_array($query)){
    ?>
        <?php echo $fetch['title']?>
        <p><?php echo substr($fetch['content'], 0, 100)?>...</p>
    <?php
        }
    ?>
</div>
<?php
    }
?>
<!-- =======================lỗi===================== -->