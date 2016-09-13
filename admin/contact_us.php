<?php

error_reporting (1);
require('connection.php');
include_once('header.php');
include_once('sidebar.php');

if(isset($_POST['save']))
{

    $add_des=$_POST['add_des'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $hemail=$_POST['hemail'];
    
    $tdata="SELECT * FROM Contact_us";
    $ddd = mysql_num_rows(mysql_query($tdata));

    if($ddd<1)
    {
        mysql_query("insert into Contact_us values('','$add_des','$address','$phone','$email','$hemail')");
    }
    else{

    $data="UPDATE Contact_us SET Address_des='$add_des',Address_short='$address',Phone='$phone',Email='$email',head_mail='$hemail' ";
    $val=mysql_query($data);

    }

}
$data="SELECT * FROM Contact_us";

$val=mysql_query($data);
$r=mysql_fetch_array($val);


?>


<main class="mn-inner">
    <span style="font-size: 30px;">Contact us</span>
    <form  action="contact_us.php" method="post" >
    <div class="row">
        <div class="col s12" align="center">


            <div class="input-field col s12">
                <textarea id="add_des" name="add_des" class="materialize-textarea" ><?php echo $r['Address_des'];?></textarea>
                <label for="add_des" >Address Description</label>

            </div>

            <div class="input-field col s12">
                <textarea id="address" name="address" class="materialize-textarea" ><?php echo $r['Address_short'];?></textarea>
                <label for="address" >Address</label>

            </div>

            <div class="input-field col s12">
                <input id="phone" name="phone" type="text" value="<?php echo $r['Phone']; ?>" class="validate">
                <label for="phone" class="">Phone</label>
            </div>

            <div class="input-field col s12">
                <input id="email" name="email" type="email" value="<?php echo $r['Email']; ?>" class="validate">
                <label for="email" class="">Email</label>
            </div>

            <div class="input-field col s12">
                <input id="hemail" name="hemail" type="email" value="<?php echo $r['head_mail']; ?>" class="validate">
                <label for="hemail" class="">Email at header</label>
            </div>


            <button style="margin-top: 30px;" class="waves-effect waves-light btn indigo m-b-xs"  name="save" type="submit"><b style="font-size:25px;">SAVE</b></button>



        </div>
    </div>
        </form>
</main>

<?php
include_once('footer.php');
?>
        