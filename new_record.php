<?php include 'header2.php'; ?>

      
  <!-- formee-->
  
  <div class="container">
  <div class="box-add">
  
  <form class="formee" action="insert_record.php" enctype="multipart/form-data" method="post" autocomplete="on">
        <input hidden="hidden" type="text" name="Creator" value="<? echo $_SESSION['username'] ?>" />
        <input hidden="hidden" type="text" name="Lastupdate" value="" />

         <div class="box-sec">
             
                 <div class="grid-5-12">
                   <label>File Upload <em class="formee-req">*</em></label>
                 <input type="file" value="" name="file">
               </div>
               
               <div class="grid-7-12">
                    <h3>Allowed Files type: ZIP, PDF & Any type of image - max size 10MB</h3>
               </div>
               
        </div>
        
        <div class="box-sec">
            
                  <div class="grid-4-12">
                          <label>First Name <em class="formee-req">*</em></label>
                         <input type="text" name="First_Name" value="" />
                  </div>
                  <div class="grid-4-12">
                          <label>Father Name <em class="formee-req">*</em></label>
                         <input type="text" name="Father_Name" value="" />
                  </div>
                  <div class="grid-4-12">
                          <label>Sure Name <em class="formee-req">*</em></label>
                         <input type="text" name="Sure_Name" value="" />
                  </div>

    
                  <div class="grid-4-12">
                          <label>Saudi ID/Iqama <em class="formee-req">*</em></label>
                         <input type="text" name="Saudi_ID" value="" />
                  </div>
                  <div class="grid-4-12">
                          <label>C Number <em class="formee-req">*</em></label>
                         <input type="text" id="cnum" name="Cnum" value="" />
                  </div>
                  
                  <div class="grid-4-12">
                          <label>Gender <em class="formee-req">*</em></label>
                          <ul class="formee-list">
                              <li><input name="Gender" checked="checked" value="Male" type="radio" /><label>Male</label></li>
                              <li><input name="Gender" value="Female" type="radio" /><label>Female</label></li>
                          </ul>
                  </div>
 
                 <div class="clear"></div>
                 
                 <div class="grid-2-12">
                 <label>DOB Day</label>
                 <select name="DOB_Day">
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>
                  <option value="04">04</option>
                  <option value="05">05</option>
                  <option value="06">06</option>
                  <option value="07">07</option>
                  <option value="08">08</option>
                  <option value="09">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                 </select>
                 </div>
                 
                 <div class="grid-3-12">
                 <label>DOB Month</label>
                 <select name="DOB_Month">
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                 </select>
                 </div>
                 
                 <div class="grid-2-12">
                 <label>DOB Year</label>
                 <select name="DOB_Year">
                  <?
                  $starting_year  =date('Y', strtotime('-50 year'));
                  $current_year = date('Y');
                  for($starting_year; $starting_year <= $current_year; $starting_year++) {
                    echo '<option value="'.$starting_year.'"';
                                    echo ' >'.$starting_year.'</option>';
                  }     ?>          
                 
                 <select> 
                 
                 </select>
                 </div>
                  
                  <div class="grid-5-12">
                          <label>Mobile NO. <em class="formee-req">*</em></label>
                         <input type="text" name="Mobile" value="" />
                  </div>
          </div>
    
    
    
          <div class="box-sec">
              
                 <div class="clear"></div>
                 
                 <div class="grid-2-12">
                 <label>EPT Day</label>
                 <select name="EPT_Date_Day">
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>
                  <option value="04">04</option>
                  <option value="05">05</option>
                  <option value="06">06</option>
                  <option value="07">07</option>
                  <option value="08">08</option>
                  <option value="09">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                 </select>
                 </div>
                 
                 <div class="grid-3-12">
                 <label>EPT Month</label>
                 <select name="EPT_Date_Month">
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                 </select>
                 </div>
                 
                 <div class="grid-2-12">
                 <label>EPT Year</label>
                 <select name="EPT_Date_Year">
                    <?
                    $starting_year  =date('Y', strtotime('-5 year'));    
                    $current_year = date('Y');
                    for($starting_year; $starting_year <= $current_year; $starting_year++) {
                      echo '<option value="'.$starting_year.'"';
                                      echo ' >'.$starting_year.'</option>';
                    }     ?>   
                 </select>
                 </div>
    
          <div class="grid-2-12">
                  <label>EPT Score <em class="formee-req">*</em></label>
                 <input type="text" id="ept" name="EPT" value="" />
          </div>
        
          <div class="grid-12-12">

          </div>

          <div class="grid-6-12">
                  <label>Specialty <em class="formee-req">*</em></label>
                 <input type="text" name="Specialty" value="" />
          </div>
    
          <div class="grid-6-12">
                  <label>Experience <em class="formee-req">*</em></label>
                 <input type="text" name="Experience" value="" />
          </div>
    
    
          <div class="grid-4-12">
                  <label>Qualifications</label>
                  <select name="Qualifications">
                      <option value="High School">High School</option>
                      <option value="Diploma">Diploma</option>
                      <option value="Bachelor">Bachelor</option>
                      <option value="Master">Master</option>
                      <option value="PhD">PhD</option>
                  </select>
          </div>
    
          <div class="grid-4-12">
                  <label>GPA <em class="formee-req">*</em></label>
                 <input type="text" name="GPA" value="" />
          </div>
    
    
          <div class="grid-6-12">
                  <label>Category</label>
                  <select name="Category">
                      <option value="Administrative">Administrative</option>
                      <option value="Technical">Technical</option>
                      <option value="IT">IT</option>
                      <option value="Academic">Academic</option>
                  </select>
          </div>
    
          <div class="grid-6-12">
                  <label>Status</label>
                  <select name="Status">
                      <option value="Under Process">Under Process</option>
                      <option value="Approved">Approved</option>
                      <option value="Disapproved">Disapproved</option>
                  </select>
          </div>
          
          </div>
          
          <div class="box-sec">
            
          
          <div class="grid-12-12">
                  <label>Comments <em class="formee-req">*</em></label>
                 <textarea name="Comments" id="" placeholder="Add Comments ..." cols="30" rows="10"></textarea>
          </div>
        
        </div>
    
    
    
          
         <div class="grid-12-12">
          <input type="submit" value="Send" title="Send" class="right">
         </div>
     
  </form>
  <!-- formee-->
  </div>
</div>
