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

    $uploaddir = 'upload/partners/';
    $uploadfile = $uploaddir . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);

        mysql_query("insert into Partners values('','$uploadfile')");



}
$data="SELECT * FROM Partners ";

$val=mysql_query($data);


?>


<main class="mn-inner">
    <span style="font-size: 30px;">Partners</span>
    <form  action="partners.php" method="post" enctype="multipart/form-data" >
    <div class="row">
        <div class="col s12" align="center">


            <div class="file-field input-field">
                <div class="btn teal lighten-1">
                    <span>Upload Image</span>
                    <input name="image" id="name" type="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>

            <button style="margin-top: 30px;" class="waves-effect waves-light btn indigo m-b-xs"  name="save" type="submit"><b style="font-size:25px;">SAVE</b></button>



        </div>
    </div>

        


        <div class="row">

            <?php
            while($r = mysql_fetch_array($val)){
                ?>

                <div class="col s12 m6 l3">
                    <img  src="<?php echo $r['part_image_url'];?>" height='150' width='150' alt="image">
                    <div>

                        <button style="margin-left: 30px;" name="delete" id="delete" type="submit"  class="waves-effect waves-light btn red m-b-xs" onclick="del(<?php echo $r['id'] ?>)">Delete</button>
                        <input type="hidden" name="id" id="id" value="<?php echo $r['id'] ?>">
                    </div>
                </div>


                <?php

            }
            ?>

        </div>

        </form>
</main>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
<script>
    function del(id){

        var r = confirm("Are you sure you want to delete ?");
        if (r == true) {
            $.ajax({
                method:"POST",
                url:"delete.php",
                data:{id:id},
                success:function(data){
                    alert('deleted successfully');
                    <?php $data="SELECT * FROM Partners ";

                    $val=mysql_query($data);
                        ?>
                },
                error:function(data){

                }
            })
        }

        else {

        }


    }
</script>
<?php
include_once('footer.php');
?>
        