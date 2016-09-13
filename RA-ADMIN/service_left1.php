<?php
require('connection.php');
include_once('header.php');
include_once('sidebar.php');

if(isset($_POST['save']))
{
    $st1=$_POST['st1'];
    $sc1=$_POST['sc1'];

    $uploaddir = 'upload/services/';
    $uploadfile = $uploaddir . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);

    $tdata="SELECT * FROM service_left1 ";
    $ddd = mysql_num_rows(mysql_query($tdata));

    if($ddd<1)
    {
        mysql_query("insert into service_left1 values('','$st1','$uploadfile','$sc1')");
    }
    else{
        $data="UPDATE service_left1 SET service1_left_title='$st1',service1_image_url='$uploadfile',service1_content='$sc1'";
        $val=mysql_query($data);
       }


}
$data="SELECT * FROM service_left1 ";

$val=mysql_query($data);
$r=mysql_fetch_array($val);


?>


    <main class="mn-inner">
        <span style="font-size: 30px;">Left tab service1</span>

        <form  action="service_left1.php" method="post" enctype="multipart/form-data" >
        <div class="row">
            <div class="col s12" align="center">




                <div class="input-field col s12">
                    <textarea id="st1" name="st1" class="materialize-textarea" ><?php echo $r['service1_left_title'];?></textarea>
                    <label for="content" >Service1 title left</label>

                </div>


                <div class="input-field col s12">
                    <textarea id="sc1" name="sc1" class="materialize-textarea" ><?php echo $r['service1_content'];?></textarea>
                    <label for="content" >Service1 content right</label>

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

                $data1="SELECT * FROM service_left1 ";

                $val1=mysql_query($data);

                while($r1 = mysql_fetch_array($val1)){
                    ?>

                    <div class="col s12 m6 l3">
                        <img  src="<?php echo $r['service1_image_url'];?>" height='150' width='150' alt="image">

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