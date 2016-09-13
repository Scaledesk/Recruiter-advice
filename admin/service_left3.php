<?php
error_reporting (1);
require('connection.php');
include_once('header.php');
include_once('sidebar.php');

if(isset($_POST['save']))
{
    $st3=$_POST['st3'];
    $sc3=$_POST['sc3'];

    $uploaddir = 'upload/services/';
    $uploadfile = $uploaddir . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);


    $tdata="SELECT * FROM service_left3 ";
    $ddd = mysql_num_rows(mysql_query($tdata));

    if($ddd<1)
    {
        mysql_query("insert into service_left3 values('','$st3','$uploadfile','$sc3')");
    }
    else{
        $data="UPDATE service_left3 SET service3_left_title='$st3',service3_image_url='$uploadfile',service3_content='$sc3'";
        $val=mysql_query($data);
    }


}
$data="SELECT * FROM service_left3 ";

$val=mysql_query($data);
$r=mysql_fetch_array($val);


?>


    <main class="mn-inner">
        <span style="font-size: 30px;">Left tab service3</span>

        <form  action="service_left3.php" method="post" enctype="multipart/form-data" >
            <div class="row">
                <div class="col s12" align="center">

                    <div class="input-field col s12">
                        <textarea id="st3" name="st3" class="materialize-textarea" ><?php echo $r['service3_left_title'];?></textarea>
                        <label for="content" >Service3 title left</label>

                    </div>


                    <div class="input-field col s12">
                        <textarea id="sc3" name="sc3" class="materialize-textarea" ><?php echo $r['service3_content'];?></textarea>
                        <label for="content" >Service3 content right</label>

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

                $data3="SELECT * FROM service_left3 ";

                $val3=mysql_query($data);

                while($r3 = mysql_fetch_array($val3)){
                    ?>

                    <div class="col s12 m6 l3">
                        <img  src="<?php echo $r3['service3_image_url'];?>" height='150' width='150' alt="image">

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