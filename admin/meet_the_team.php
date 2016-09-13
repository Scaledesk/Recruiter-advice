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

$id_to_del='';

if(isset($_POST['save']))
{

    $t_name=$_POST['t_name'];
    $Designation=$_POST['Designation'];

    $uploaddir = 'upload/team/';
    $uploadfile = $uploaddir . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
    
    mysql_query("insert into Team values('','$t_name','$uploadfile','$Designation')");


}
$data="SELECT * FROM Team";
$val=mysql_query($data);

?>

    <main class="mn-inner">
        
        <span style="font-size: 30px;">Meet the team</span>
        <form  action="meet_the_team.php" method="post" enctype="multipart/form-data" >
            <div class="row">
                <div class="col s12" align="center">


                    <div class="input-field col s12">
                        <input id="t_name" name="t_name" type="text" class="validate">
                        <label for="t_name" class="">Name</label>
                    </div>

                    <div class="input-field col s12">
                        <input id="Designation" name="Designation" type="text" class="validate">
                        <label for="Designation" class="">Designation</label>
                    </div>
                    
                    <div class="input-field col s12">
                        <span>Upload Image</span>
                        <input name="image" id="name" type="file"><br>
                    </div>


                    <button style="margin-top: 30px;" class="waves-effect waves-light btn indigo m-b-xs" name="save" type="submit"><b style="font-size:25px;">SAVE</b></button>
                </div>
            </div>
        </form>






<form>

    <div class="row">

        <?php
        $count =0;
        while($r = mysql_fetch_array($val)){


           $count= $count+1;





            ?>

            <div class="col s12 m6 l3">
                <img  src="<?php echo $r['image_url'];?>" height='150' width='150' alt="image">
                <div>
                            <span style="margin-left: 30px;">
                                <?php echo $r['name'];?>
                            </span>
                    <br>
                    <input type="hidden" name="id" id="id" value="<?php echo $r['id'] ?>">
                    <button onclick="del(<?php echo $r['id'] ?>)" style="margin-left: 30px;" name="delete" id="delete" type="submit" class="waves-effect waves-light btn red m-b-xs" >Delete</button>

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
                    url:"delete_team.php",
                    data:{id:id},
                    success:function(data){
                        alert('deleted successfully');
                        
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