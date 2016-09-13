<?php
error_reporting (1);
require('connection.php');
include_once('header.php');
include_once('sidebar.php');

if(isset($_POST['save']))
{
    $st5=$_POST['st5'];
    $sc5=$_POST['sc5'];

    $uploaddir = 'upload/services/';
    $uploadfile = $uploaddir . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);


    $tdata="SELECT * FROM service_left5 ";
    $ddd = mysql_num_rows(mysql_query($tdata));

    if($ddd<1)
    {
        mysql_query("insert into service_left5 values('','$st5','$uploadfile','$sc5')");
    }
    else{
        $data="UPDATE service_left5 SET service5_left_title='$st5',service5_image_url='$uploadfile',service5_content='$sc5'";
        $val=mysql_query($data);
    }


}
$data="SELECT * FROM service_left5 ";

$val=mysql_query($data);
$r=mysql_fetch_array($val);


?>


    <main class="mn-inner">
        <span style="font-size: 30px;">Left tab service5</span>

        <form  action="service_left5.php" method="post" enctype="multipart/form-data" >
            <div class="row">
                <div class="col s12" align="center">


                    <div class="input-field col s12">
                        <textarea id="st5" name="st5" class="materialize-textarea" ><?php echo $r['service5_left_title'];?></textarea>
                        <label for="content" >Service5 title left</label>

                    </div>


                    <div class="input-field col s12">
                        <textarea id="sc5" name="sc5" class="materialize-textarea" ><?php echo $r['service5_content'];?></textarea>
                        <label for="content" >Service5 content right</label>

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

                $data5="SELECT * FROM service_left5 ";

                $val5=mysql_query($data5);

                while($r5 = mysql_fetch_array($val5)){
                    ?>

                    <div class="col s12 m6 l3">
                        <img  src="<?php echo $r['service5_image_url'];?>" height='150' width='150' alt="image">

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