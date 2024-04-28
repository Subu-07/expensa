<?php 
include("../includes/include.php");
$m_title="Banks";
$title="Banks";
$act="bks";
$list="banks.php?".$act;
$list_ae="banks_ae.php?".$act;
if(isset($_POST['save'])){
    $name=strtoupper($_POST['name']);    
    $sql="INSERT INTO `banks`(`name`) VALUES ('$name')";    
    try { 
    $conn->exec($sql);
    echo "New record created successfully";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
    header("location:".$list);
}





?>


<!DOCTYPE html>
<html lang="en">

<head>
<?php require("a_head.php")?>
</head>

<body class="g-sidenav-show  bg-gray-200">
    <?php require("a_left_nav.php")?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php require("a_top_nav.php")?>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="p-4 bg-light">
                <form method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline is-valid my-3">
                            <!-- <label class="form-label">Name</label> -->
                            <input type="text" class="form-control" name="name" placeholder="Bank name">
                        </div>
                    </div>
                </div>                
                <div class="row">

                    <div class="col-md-6 ">                        
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-outline-success" name="save">Save</button>
                        </div>
                    </div>
                    
                </div>
                </form>
                </div>


            </div>
        </div>

    

 
      <?php require("a_footer.php")?>
 
    
 
</body>

</html>