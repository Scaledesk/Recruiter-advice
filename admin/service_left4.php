<?php
require('connection.php');
include_once('header.php');
include_once('sidebar.php');

if(isset($_POST['save']))
{
    $st4=$_POST['st4'];
    $sc4=$_POST['sc4'];

    $uploaddir = 'upload/services/';
    $uploadfile = $uploaddir . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);

    $tdata="SELECT * FROM service_left4 ";
    $ddd = mysql_num_rows(mysql_query($tdata));

    if($ddd<1)
    {
        mysql_query("insert into service_left4 values('','$st4','$uploadfile','$sc4')");
    }
    else{
        $data="UPDATE service_left4 SET service4_left_title='$st4',service4_image_url='$uploadfile',service4_content='$sc4'";
        $val=mysql_query($data);
    }




}
$data="SELECT * FROM service_left4 ";

$val=mysql_query($data);
$r=mysql_fetch_array($val);


?>


    <main class="mn-inner">
        <span style="font-size: 30px;">Left tab service4</span>

        <form  action="service_left4.php" method="post" enctype="multipart/form-data" >
            <div class="row">
                <div class="col s12" align="center">


                    <div class="input-field col s12">
                        <textarea id="st4" name="st4" class="materialize-textarea" ><?php echo $r['service4_left_title'];?></textarea>
                        <label for="content" >Service4 title left</label>

                    </div>


                    <div class="input-field col s12">
                        <textarea id="sc4" name="sc4" class="materialize-textarea" ><?php echo $r['service4_content'];?></textarea>
                        <label for="content" >Service4 content right</label>

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

                $data4="SELECT * FROM service_left4 ";

                $val4=mysql_query($data4);

                while($r4 = mysql_fetch_array($val4)){
                    ?>

                    <div class="col s12 m6 l3">
                        <img  src="<?php echo $r4['service4_image_url'];?>" height='150' width='150' alt="image">

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