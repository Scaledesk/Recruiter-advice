<?php
error_reporting (1);
require('connection.php');
include_once('header.php');
include_once('sidebar.php');

if(isset($_POST['save']))
{

    $e_name=$_POST['e_name'];
    $event_des=$_POST['event_des'];
    $event_date=$_POST['event_date'];

    $uploaddir = 'upload/events/';
    $uploadfile = $uploaddir . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);


        mysql_query("insert into Events values('','$e_name','$uploadfile','$event_des','$event_date')");



}
$data="SELECT * FROM Events ";

$val=mysql_query($data);


?>


<main class="mn-inner">
    <span style="font-size: 30px;">Events</span>
    <form  action="events.php" method="post" enctype="multipart/form-data" >
    <div class="row">
        <div class="col s12" align="center">

            <div class="input-field col s12">
                <input id="e_name" name="e_name" type="text"  class="validate">
                <label for="e_name" class="">Event Name</label>
            </div>

            <div class="input-field col s12">
                <textarea id="event_des" name="event_des" class="materialize-textarea" ></textarea>
                <label for="event_des" >Event Description</label>

            </div>


            <div class="card-content">
                <div class="row">
                    <div class="col s12">
                        <label for="event_date" class="">Event Date</label>
                        <input id="event_date" name="event_date" type="text" class="datepicker picker__input" readonly="" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="birthdate_root"><div class="picker" id="birthdate_root" tabindex="0" aria-hidden="true"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__date-display"><div class="picker__weekday-display">Friday</div><div class="picker__month-display"><div>Sep</div></div><div class="picker__day-display"><div>9</div></div><div class="picker__year-display"><div>2016</div></div></div><div class="picker__calendar-container"><div class="picker__header"><select class="picker__select--month browser-default" aria-controls="birthdate_table" title="Select a month" disabled="disabled"><option value="0">January</option><option value="1">February</option><option value="2">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6">July</option><option value="7">August</option><option value="8" selected="">September</option><option value="9">October</option><option value="10">November</option><option value="11">December</option></select><select class="picker__select--year browser-default" aria-controls="birthdate_table" title="Select a year" disabled="disabled"><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016" selected="">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="birthdate_table" title="Previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="birthdate_table" title="Next month"> </div></div><table class="picker__table" id="birthdate_table" role="grid" aria-controls="birthdate" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">S</th><th class="picker__weekday" scope="col" title="Monday">M</th><th class="picker__weekday" scope="col" title="Tuesday">T</th><th class="picker__weekday" scope="col" title="Wednesday">W</th><th class="picker__weekday" scope="col" title="Thursday">T</th><th class="picker__weekday" scope="col" title="Friday">F</th><th class="picker__weekday" scope="col" title="Saturday">S</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1472322600000" role="gridcell" aria-label="28 August, 2016">28</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1472409000000" role="gridcell" aria-label="29 August, 2016">29</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1472495400000" role="gridcell" aria-label="30 August, 2016">30</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1472581800000" role="gridcell" aria-label="31 August, 2016">31</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1472668200000" role="gridcell" aria-label="1 September, 2016">1</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1472754600000" role="gridcell" aria-label="2 September, 2016">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1472841000000" role="gridcell" aria-label="3 September, 2016">3</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1472927400000" role="gridcell" aria-label="4 September, 2016">4</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1473013800000" role="gridcell" aria-label="5 September, 2016">5</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1473100200000" role="gridcell" aria-label="6 September, 2016">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1473186600000" role="gridcell" aria-label="7 September, 2016">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1473273000000" role="gridcell" aria-label="8 September, 2016">8</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1473359400000" role="gridcell" aria-label="9 September, 2016" aria-activedescendant="true">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1473445800000" role="gridcell" aria-label="10 September, 2016">10</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1473532200000" role="gridcell" aria-label="11 September, 2016">11</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1473618600000" role="gridcell" aria-label="12 September, 2016">12</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1473705000000" role="gridcell" aria-label="13 September, 2016">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1473791400000" role="gridcell" aria-label="14 September, 2016">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1473877800000" role="gridcell" aria-label="15 September, 2016">15</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1473964200000" role="gridcell" aria-label="16 September, 2016">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1474050600000" role="gridcell" aria-label="17 September, 2016">17</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1474137000000" role="gridcell" aria-label="18 September, 2016">18</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1474223400000" role="gridcell" aria-label="19 September, 2016">19</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1474309800000" role="gridcell" aria-label="20 September, 2016">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1474396200000" role="gridcell" aria-label="21 September, 2016">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1474482600000" role="gridcell" aria-label="22 September, 2016">22</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1474569000000" role="gridcell" aria-label="23 September, 2016">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1474655400000" role="gridcell" aria-label="24 September, 2016">24</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1474741800000" role="gridcell" aria-label="25 September, 2016">25</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1474828200000" role="gridcell" aria-label="26 September, 2016">26</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1474914600000" role="gridcell" aria-label="27 September, 2016">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475001000000" role="gridcell" aria-label="28 September, 2016">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475087400000" role="gridcell" aria-label="29 September, 2016">29</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475173800000" role="gridcell" aria-label="30 September, 2016">30</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1475260200000" role="gridcell" aria-label="1 October, 2016">1</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1475346600000" role="gridcell" aria-label="2 October, 2016">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1475433000000" role="gridcell" aria-label="3 October, 2016">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1475519400000" role="gridcell" aria-label="4 October, 2016">4</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1475605800000" role="gridcell" aria-label="5 October, 2016">5</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1475692200000" role="gridcell" aria-label="6 October, 2016">6</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1475778600000" role="gridcell" aria-label="7 October, 2016">7</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1475865000000" role="gridcell" aria-label="8 October, 2016">8</div></td></tr></tbody></table></div><div class="picker__footer"><button class="btn-flat picker__today" type="button" data-pick="1473359400000" aria-controls="birthdate" disabled="disabled">Today</button><button class="btn-flat picker__clear" type="button" data-clear="1" aria-controls="birthdate" disabled="disabled">Clear</button><button class="btn-flat picker__close" type="button" data-close="true" aria-controls="birthdate" disabled="disabled">Close</button></div></div></div></div></div></div>
                    </div>
                </div>
            </div>

            <div class="file-field input-field">
                <div class="btn teal lighten-1">
                    <span>Upload Image</span>
                    <input name="image" id="image" type="file">
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
                    <img  src="<?php echo $r['Event_image_url'];?>" height='150' width='150' alt="image">
                    <div>
                        <span style="margin-left: 30px;">
                                <?php echo $r['Event_name'];?>
                        </span>
                        <br>
                        <button onclick="del(<?php echo $r['id'] ?>)" style="margin-left: 30px;" name="delete" id="delete" type="submit"  class="waves-effect waves-light btn red m-b-xs" >Delete</button>

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
                url:"delete_event.php",
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
        