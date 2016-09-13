<?php
error_reporting (1);

session_start();
$user_check=$_SESSION['login_user'];

if(!isset($user_check))
{
    header("Location: login.php");
}


require('connection.php');
include_once('header.php');
include_once('sidebar.php');

if(isset($_POST['save']))
{
    $st2=$_POST['st2'];
    $sc2=$_POST['sc2'];

    $uploaddir = 'upload/services/';
    $uploadfile = $uploaddir . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);


    $tdata="SELECT * FROM service_left2 ";
    $ddd = mysql_num_rows(mysql_query($tdata));

    if($ddd<1)
    {
        mysql_query("insert into service_left2 values('','$st2','$uploadfile','$sc2')");
    }
    else{
        $data="UPDATE service_left2 SET service2_left_title='$st2',service2_image_url='$uploadfile',service2_content='$sc2'";
        $val=mysql_query($data);
    }

}
$data="SELECT * FROM service_left2 ";

$val=mysql_query($data);
$r=mysql_fetch_array($val);


?>


    <main class="mn-inner">
        <span style="font-size: 30px;">Left tab service2</span>

        <form  action="service_left2.php" method="post" enctype="multipart/form-data" >
            <div class="row">
                <div class="col s12" align="center">




                    <div class="input-field col s12">
                        <textarea id="st2" name="st2" class="materialize-textarea" ><?php echo $r['service2_left_title'];?></textarea>
                        <label for="content" >Service2 title left</label>

                    </div>





                    <div class="input-field col s12">
                        <textarea id="sc2" name="sc2" class="materialize-textarea" ><?php echo $r['service2_content'];?></textarea>
                        <label for="content" >Service2 content right</label>

                    </div>



                    <div class="input-field col s12">
                        <span>Upload Image</span>
                        <input name="image" id="name" type="file"><br>
                    </div>



                    <div class="col s12">
                        <button style="margin-top: 30px;" class="waves-effect waves-light btn indigo m-b-xs" name="save" type="submit"><b style="font-size:25px;">SAVE</b></button>
                    </div>


                </div>

            </div>

            <div class="row">

                <?php

                $data2="SELECT * FROM service_left2 ";

                $val2=mysql_query($data2);

                while($r2 = mysql_fetch_array($val2)){
                    ?>

                    <div class="col s12 m6 l3">
                        <img  src="<?php echo $r['service2_image_url'];?>" height='150' width='150' alt="image">

                    </div>


                    <?php

                }
                ?>
            </div>
        </form>
    </main>

<?php
include_once('footer.php');
?>