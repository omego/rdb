<?php include 'header2.php'; ?>


      
  <!-- formee-->
  
  <div class="container">
  <div class="box-add">
  
  <form class="formee" action="insert_record.php" enctype="multipart/form-data" method="post" autocomplete="on">
        
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
                         <input type="text" name="Cnum" value="" />
                  </div>
                  
                  <div class="grid-4-12">
                          <label>Gender <em class="formee-req">*</em></label>
                          <ul class="formee-list">
                              <li><input name="Gender" checked="checked" value="Male" type="radio" /><label>Male</label></li>
                              <li><input name="Gender" value="Female" type="radio" /><label>Female</label></li>
                          </ul>
                  </div>
 
                  <div class="grid-6-12">
                          <label>Date of Birth <em class="formee-req">*</em></label>
                         <input type="text" name="DOB" id="datepicker" value="" />
                  </div>
                  
                  <div class="grid-6-12">
                          <label>Mobile NO. <em class="formee-req">*</em></label>
                         <input type="text" name="Mobile" value="" />
                  </div>
          </div>
    
    
    
          <div class="box-sec">
              
          <div class="grid-4-12">
                  <label>Date of EPT <em class="formee-req">*</em></label>
                 <input type="text" name="EPT_Date" id="datepicker-2" value="" />
          </div>
    
          <div class="grid-2-12">
                  <label>EPT Score <em class="formee-req">*</em></label>
                 <input type="text" name="EPT" value="" />
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
