<?php include 'header.php'; ?>


     <div class="container">
           <div class="box">
             <div class="logo">
               <a href="index.php"><img src="../rdb/images/logo.png"></a>  
             </div>
             
          
          <div class="tab-content">
            <div class="tab-pane active" id="tab1">
              <? include 'search.html';?>
            </div>
          
            <!-- /tabs -->
            <div class="tab-pane" id="tab2">
              <? include 'search-id.html';?>
            </div>
          
            <!-- /tabs -->
            <div class="tab-pane" id="tab3">
              <? include 'search-cnum.html';?>
            </div>
            
            <!-- /tabs -->
            <div class="tab-pane" id="tab4">
              <? include 'search-family.html';?>
            </div>
            
          </div> <!-- /tab-content -->
             
             <ul class="nav nav-tabs nav-append-content">
               <li class="active"><a href="#tab1">All</a></li>
               <li><a href="#tab2">ID</a></li>
               <li><a href="#tab3">C#</a></li>
               <li><a href="#tab4">Family</a></li>
               <li><a style="margin-left:90px;" href="#tab4">More</a></li>
             </ul> <!-- /tabs -->
           </div>
           
           
         </div>
        <!-- /.container -->


    <!-- Load JS here for greater good =============================-->
    <script src="js/jquery.min.js"></script>
    <script src="js/custom.js"></script>
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