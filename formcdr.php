<style>
input, textarea, select, button {
  width : auto;
  margin: 0;

  -webkit-box-sizing: border-box; /* For legacy WebKit based browsers */
     -moz-box-sizing: border-box; /* For legacy (Firefox <29) Gecko based browsers */
          box-sizing: border-box;
}
</style>



        <div class="row-fluid sortable">

                                <h2 style="text-decoration: underline;">Call Detail Report</h2>
                                <div class="box-icon">

<fieldset>
<legend>Call Report:</legend>
<div>
<!--  <label><br> <input type="submit"> -->
<form action="" method="post">
<label>Starttime: </label> <input type="datetime-local" name="stime" >
<label>Endtime: </label> <input type="datetime-local" name="etime" >
<label>Source: <input type="text" name="source">
<label>Destination:<input type="text" name="destination">
</div>
 <!-- Drop-down selector example -->
<div>
<label>Extenson:</label>
<select>
<?php
    for ($i = 1;$i < 101;$i++)
    {
        echo "<option>$i</option>";
    }
?>
</select>
</div>
<div>
<label><br> <input type="submit">
<label><a class='btn btn-primary' id='dwlink' href=''><i class="icon-zoom-in icon-download-alt"></i> Download Report</a></label>
</div>
</form>
</fieldset>
</div>


        </div><!--/row-->
