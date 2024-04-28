<?php 
include("../includes/include.php");
$m_title="Banks";
$title="Banks";
$act="bks";
$list="banks.php?".$act;
$list_ae="banks_ae.php?".$act;
  $sql="SELECT * FROM banks WHERE suspend=0";  
  $stmt=$conn->prepare($sql);
  $stmt->execute();    
  $result = $stmt->fetchAll();
  


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
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3"><?=$title?>  <a href="<?=$list_ae?>"><span class="badge badge-sm bg-gradient-secondary">add</span></a></h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>                      
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>                    
                  </thead>
                  <tbody>
                    <?php 
                      foreach($result as $temp){
                    ?>
                    <tr>
                      <td class="align-middle text-center text-sm"><?=$temp['name']?></td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">edit</span>
                      </td>
                    </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    

 
      <?php require("a_footer.php")?>
 
    
 
</body>

</html>