<?php

error_reporting (1);
require('connection.php');
include_once('header.php');
include_once('sidebar.php');


if(isset($_POST['save']))
{
    $i_name=$_POST['i_name'];

    $uploaddir = 'upload/';
    $uploadfile = $uploaddir . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);





    $tdata="SELECT * FROM Main_slider";
    $ddd = mysql_num_rows(mysql_query($tdata));

    if($ddd<1)
    {
        mysql_query("insert into Main_slider values('','$uploadfile','$i_name')");
    }
    else{

        $data="UPDATE Main_slider SET image_url='$uploadfile',title='$i_name' ";
        $val=mysql_query($data);

    }

}

$data="SELECT * FROM Main_slider  ";
$val=mysql_query($data);
$r=mysql_fetch_array($val);



//if(isset($_POST['delete']))
//{
//    $iddel=$_POST['id'];
//
//    mysql_query("delete from Main_slider WHERE id='$iddel'");
//
//}

?>


    <main class="mn-inner">
        <form  action="main_sliders.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <span style="font-size: 30px;">Main background image</span>
            <div class="col s12" align="center">

                <div class="input-field col s12">
                    <input id="i_name" name="i_name" type="text" value="<?php echo $r['title']; ?>" class="validate">
                    <label for="i_name" class="">Caption on Image</label>
                </div>

                <div class="input-field col s12">
                    <span>Upload Image</span>
                    <input name="image" id="image" type="file"><br>
                </div>

                <button style="margin-top: 30px;" class="waves-effect waves-light btn indigo m-b-xs" name="save" type="submit"><b style="font-size:25px;">SAVE</b></button>

            </div>
        </div>
            
            <div class="row">

                <?php
                $data1="SELECT * FROM Main_slider  ";
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