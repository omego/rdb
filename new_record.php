<?php include 'header.php'; ?>

    <div class="container">
      <div class="box-add">
            <? $form_date = date("d F, y"); ?>
            
            <form action="insert_record.php" enctype="multipart/form-data" method="post">

                <label for="file">File:</label>
                <input type="file" name="file" id="file"><br>

                
                <div class="control-group large">
                  <input type="text" value="" placeholder="First Name" name="First_Name" class="span2">
                  
                  <input type="text" value="" placeholder="Father Name" name="Father_Name" class="span2">
                  
                  <input type="text" value="" placeholder="Sure Name" name="Sure_Name" class="span2">
                  
                </div>
                
                
                <div class="control-group large">
                  <input type="text" value="" placeholder="Saudi ID/Iqama" name="Saudi_ID" class="span2">
                  
                  <input type="text" value="" placeholder="C#" name="Cnum" class="span2">
                </div>
                

                
                <label class="radio">
                  <input type="radio" name="Gender" id="optionsRadios1" value="Male" data-toggle="radio" checked="">
                  Male
                </label>
                
                <label class="radio">
                  <input type="radio" name="Gender" id="optionsRadios2" value="Female" data-toggle="radio">
                  Female
                </label>
                
                <div class="control-group large">
                  <input type="text" value="" placeholder="Mobile NO." name="Mobile" class="span3">
                </div>
                
                <div class="control-group large">
                  <input type="text" value="" placeholder="EPT Score" name="EPT" class="span3">
                </div>
                
                <div class="control-group">
                  <div class="input-prepend input-datepicker">
                    <button type="button" class="btn"><span class="fui-calendar"></span></button>
                    <input type="text" name="EPT_Date" class="span2" value="<? echo $form_date; ?>" id="datepicker-01">
                  </div>
                </div>
                    
                    
                <select name="Qualifications" class="select-block mbl">
                  <optgroup label="Qualifications">
                    <option value="0">High School</option>
                    <option value="1">Diploma</option>
                    <option value="1">Bachelor</option>
                    <option value="1">Master</option>
                    <option value="1">PhD</option>
                  </optgroup>
                </select>
                
                <div class="control-group large">
                  <input type="text" value="" placeholder="Specialty" name="Specialty" class="span3">
                </div>
                
                <select name="Category" class="select-block mbl">
                  <optgroup label="Category">
                    <option value="0">Administrative</option>
                    <option value="1">Technical</option>
                    <option value="1">IT</option>
                    <option value="1">Academic</option>
                  </optgroup>
                </select>
                
                <div class="control-group large">
                  <input type="text" value="" placeholder="GPA" name="GPA" class="span3">
                </div>
                
                <div class="control-group">
                  <input type="text" name="Experience" id="spinner-01" placeholder="Years of Experience" value="0" class="spinner">
                </div>


                
                <select name="Status" class="select-block mbl">
                  <optgroup label="Status">
                    <option value="0">Under Process</option>
                    <option value="1">Approved</option>
                    <option value="1">Disapproved</option>
                  </optgroup>
                </select>
                
                
                  <textarea rows="3" name="Comments" placeholder="Add comment..." class="span12"></textarea>
               
                
                <button class="btn btn-primary btn-wide">Add</button>
            </form>
            
      </div>
    </div>
    <!-- /.container -->


    <!-- Load JS here for greater good =============================-->
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/bootstrap-switch.js"></script>
    <script src="js/flatui-checkbox.js"></script>
    <script src="js/flatui-radio.js"></script>
    <script src="js/jquery.tagsinput.js"></script>
    <script src="js/jquery.placeholder.js"></script>
    <script src="js/jquery.stacktable.js"></script>
    <script src="js/application.js"></script>
  </body>
</html>
