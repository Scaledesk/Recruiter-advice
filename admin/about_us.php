<?php

error_reporting (1);
require('connection.php');
include_once('header.php');
include_once('sidebar.php');

if(isset($_POST['save']))
{
    $content=$_POST['content'];
    $image_caption=$_POST['caption'];

    $uploaddir = 'upload/team/';
    $uploadfile = $uploaddir . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);


    $tdata="SELECT * FROM About_us ";
    $ddd = mysql_num_rows(mysql_query($tdata));

    if($ddd<1)
    {
        mysql_query("insert into About_us values('','$content','$uploadfile','$image_caption')");
    }
    else{
        $data="UPDATE About_us SET About_des='$content',image_url='$uploadfile',image_caption='$image_caption' ";
        $val=mysql_query($data);
       }

}

$data="SELECT * FROM About_us ";

$val=mysql_query($data);
$r=mysql_fetch_array($val);


?>


    <main class="mn-inner">
        <span style="font-size: 30px;">About us</span>

        <form  action="about_us.php" method="post" enctype="multipart/form-data" >
        <div class="row">
            <div class="col s12" align="center">


                <div class="input-field col s12">
                    <textarea id="content" name="content" class="materialize-textarea" ><?php echo $r['About_des'];?></textarea>
                    <label for="content" >Who we are</label>

                </div>

                <div class="input-field col s12">
                    <span>Upload Image</span>
                    <input name="image" id="image" type="file"><br>
                </div>

                <div class="input-field col s12">
                    <textarea id="caption" name="caption" class="materialize-textarea" ><?php echo $r['image_caption'];?></textarea>
                    <label for="caption" >Image caption</label>

                </div>


                <div class="col s12">
                    <button class="waves-effect waves-light btn indigo m-b-xs" name="save" type="submit"><b style="font-size:25px;">SAVE</b></button>
                </div>


            </div>

        </div>


            <div class="row">

                <?php
                $data1="SELECT * FROM About_us";
                $val1=mysql_query($data1);
                while($r1 = mysql_fetch_array($val1)){
                    ?>

                    <div class="col s12 m6 l3">
                        <img  src="<?php echo $r['image_url'];?>" height='150' width='150' alt="image">

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