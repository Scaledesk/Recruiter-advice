<?php
error_reporting (1);
require('connection.php');

session_start();
$user_check=$_SESSION['login_user'];

if(!isset($user_check))
{
    header("Location: login.php");
}


include_once('header.php');
include_once('sidebar.php');

if(isset($_POST['save']))
{

    $u_name=$_POST['u_name'];
    $content=$_POST['content'];
    $address=$_POST['address'];

    $uploaddir = 'upload/testimonial/';
    $uploadfile = $uploaddir . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);


    $tdata="SELECT * FROM Testimonials";
    $ddd = mysql_num_rows(mysql_query($tdata));

    if($ddd<1)
    {
        mysql_query("insert into Testimonials values('','$content','$u_name','$uploadfile','$address')");
    }
    else{

    $data="UPDATE Testimonials SET user_name='$u_name',content='$content',user_address='$address',user_image_url='',user_image_url='$uploadfile' ";
    $val=mysql_query($data);

    }

}
$data="SELECT * FROM Testimonials";

$val=mysql_query($data);
$r=mysql_fetch_array($val);

?>


<main class="mn-inner">
    <span style="font-size: 30px;">Testimonials</span>
    <form  action="Testimonials.php" method="post" enctype="multipart/form-data" >
    <div class="row">
        <div class="col s12" align="center">

            <div class="input-field col s12">
                <input id="u_name" name="u_name" type="text" value="<?php echo $r['user_name']; ?>" class="validate">
                <label for="u_name" class="">Name</label>
            </div>

            <div class="input-field col s12">
                <textarea id="content" name="content" class="materialize-textarea" ><?php echo $r['content'];?></textarea>
                <label for="content" >Testimonial Content</label>

            </div>

            <div class="input-field col s12">
                <textarea id="address" name="address" class="materialize-textarea" ><?php echo $r['user_address'];?></textarea>
                <label for="address" >Address</label>

            </div>

            <div class="input-field col s12">
                <span>Upload Image</span>
                <input name="image" id="image" type="file"><br>
            </div>

            <button style="margin-top: 30px;" class="waves-effect waves-light btn indigo m-b-xs"  name="save" type="submit"><b style="font-size:25px;">SAVE</b></button>


        </div>
    </div>
        </form>


    <div class="row">

        <?php
        $data1="SELECT * FROM Testimonials";
        $val1=mysql_query($data1);
        while($r1 = mysql_fetch_array($val1)){
            ?>

            <div class="col s12 m6 l3">
                <img  src="<?php echo $r['user_image_url'];?>" height='150' width='150' alt="image">

            </div>
            
            <?php

        }
        ?>

    </div>

</main>

<?php
include_once('footer.php');
?>
        