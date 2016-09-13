<?php
require('connection.php');
include_once('header.php');
include_once('sidebar.php');

if(isset($_POST['save']))
{
    $head_line=$_POST['head_line'];
    $sb1=$_POST['sb1'];
    $sb2=$_POST['sb2'];
    $sb3=$_POST['sb3'];
    $cn=$_POST['cn'];


    $tdata="SELECT * FROM Service_head ";
    $ddd = mysql_num_rows(mysql_query($tdata));

    if($ddd<1)
    {
        mysql_query("insert into Service_head values('','$head_line','$sb1','$sb2','$sb3','$cn')");
    }
    else{
        $data="UPDATE Service_head SET service_title='$head_line',service_text1='$sb1',service_text2='$sb2',service_text3='$sb3',contact_number='$cn'";
        $val=mysql_query($data);
       }


}
$data="SELECT * FROM Service_head ";

$val=mysql_query($data);
$r=mysql_fetch_array($val);


?>


    <main class="mn-inner">
        <span style="font-size: 30px;">service top content</span>

        <form  action="service_head.php" method="post" >
        <div class="row">
            <div class="col s12" align="center">



                <div class="input-field col s12">
                    <textarea id="head_line" name="head_line" class="materialize-textarea" ><?php echo $r['service_title'];?></textarea>
                    <label for="content" >Service head line</label>

                </div>

                <div class="input-field col s12">
                    <textarea id="sb1" name="sb1" class="materialize-textarea" ><?php echo $r['service_text1'];?></textarea>
                    <label for="content" >Service box 1</label>

                </div>

                <div class="input-field col s12">
                    <textarea id="sb2" name="sb2" class="materialize-textarea" ><?php echo $r['service_text2'];?></textarea>
                    <label for="content" >Service box 2</label>

                </div>

                <div class="input-field col s12">
                    <textarea id="sb3" name="sb3" class="materialize-textarea" ><?php echo $r['service_text3'];?></textarea>
                    <label for="content" >Service box 3</label>

                </div>

                <div class="input-field col s12">
                    <textarea id="cn" name="cn" class="materialize-textarea" ><?php echo $r['contact_number'];?></textarea>
                    <label for="content" >Call us:(contact number)</label>

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