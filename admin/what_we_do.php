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
    $content=$_POST['content'];

    $tdata="SELECT * FROM What_we_do ";
    $ddd = mysql_num_rows(mysql_query($tdata));

    if($ddd<1)
    {
        mysql_query("insert into What_we_do values('','$content')");
    }
    else{
        $data="UPDATE What_we_do SET content='$content'";
        $val=mysql_query($data);
       }

}
$data="SELECT * FROM What_we_do ";

$val=mysql_query($data);
$r=mysql_fetch_array($val);

?>

    <main class="mn-inner">
        <span style="font-size: 30px;">What we do</span>

        <form  action="what_we_do.php" method="post" >
        <div class="row">
            <div class="col s12" align="center">

                <div class="input-field col s12">
                    <textarea id="content" name="content" class="materialize-textarea" ><?php echo $r['content'];?></textarea>
                    <label for="content" >What we Do</label>

                </div>


                <div class="col s12">
                    <button class="waves-effect waves-light btn indigo m-b-xs" name="save" type="submit"><b style="font-size:25px;">SAVE</b></button>
                </div>


            </div>

        </div>
        </form>
    </main>

<?php
include_once('footer.php');
?>