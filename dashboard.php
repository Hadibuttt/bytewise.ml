<?php
include("dH.php");
?>   
        
   <!--main content start-->
   <section id="main-content">
   <section class="wrapper">
     <div class="row">
       <div class="col-lg-9 main-chart">
         <!--CUSTOM CHART START -->
         <div class="border-head">
           <h3>USER VISITS</h3>
         </div>
         <div class="custom-bar-chart">
           <ul class="y-axis">
             <li><span>10.000</span></li>
             <li><span>8.000</span></li>
             <li><span>6.000</span></li>
             <li><span>4.000</span></li>
             <li><span>2.000</span></li>
             <li><span>0</span></li>
           </ul>
           <div class="bar">
             <div class="title">JAN</div>
             <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top" style="background-color:firebrick;">85%</div>
           </div>
           <div class="bar ">
             <div class="title">FEB</div>
             <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top" style="background-color:firebrick;">50%</div>
           </div>
           <div class="bar ">
             <div class="title">MAR</div>
             <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top" style="background-color:firebrick;">60%</div>
           </div>
           <div class="bar ">
             <div class="title">APR</div>
             <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top" style="background-color:firebrick;">45%</div>
           </div>
           <div class="bar">
             <div class="title">MAY</div>
             <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top" style="background-color:firebrick;">32%</div>
           </div>
           <div class="bar ">
             <div class="title">JUN</div>
             <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top" style="background-color:firebrick;">62%</div>
           </div>
           <div class="bar">
             <div class="title">JUL</div>
             <div class="value tooltips" data-original-title="7.500"  data-toggle="tooltip" data-placement="top" style="background-color:firebrick;">75%</div>
           </div>
         </div>
         <!--custom chart end-->
         <div class="row mt">
           <!-- SERVER STATUS PANELS -->
           <div class="col-md-4 col-sm-4 mb">
             <div class="grey-panel pn donut-chart">
               <div class="grey-header">
                 <h5 style="color:#333;">SITE LOAD</h5>
               </div>
               <canvas id="serverstatus01" height="120" width="120"></canvas>
               <script>
                 var doughnutData = [{
                     value: 70,
                     color: "firebrick"
                   },
                   {
                     value: 30,
                     color: "#fdfdfd"
                   }
                 ];
                 var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
               </script>
               <div class="row">
                 <div class="col-sm-6 col-xs-6 goleft">
                   <p style="color:#333;">Usage<br/>Increase:</p>
                 </div>
                 <div class="col-sm-6 col-xs-6">
                   <h2 style="color:firebrick;">12%</h2>
                 </div>
               </div>
             </div>
             <!-- /grey-panel -->
           </div>
           <!-- /col-md-4-->
           <div class="col-md-4 col-sm-4 mb">
             <div class="darkblue-panel pn">
               <div class="darkblue-header">
                 <h5>DAILY HITS</h5>
               </div>
               <canvas id="serverstatus02" height="120" width="120"></canvas>
               <script>
                 var doughnutData = [{
                     value: 60,
                     color: "firebrick"
                   },
                   {
                     value: 40,
                     color: "#fdfdfd"
                   }
                 ];
                 var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
               </script>
               <p>July 27, 2020</p>
               <footer>
                 <div class="pull-left">
                   <h5><i class="fa fa-hdd-o"></i> 17 MB</h5>
                 </div>
                 <div class="pull-right">
                   <h5>60% Used</h5>
                 </div>
               </footer>
             </div>
             <!--  /darkblue panel -->
           </div>
           <!-- /col-md-4 -->
           <div class="col-md-4 col-sm-4 mb">
             <!-- REVENUE PANEL -->
             <div class="green-panel pn" style="background-color:#dfdfe1;">
               <div class="green-header" style="background-color:#ccd1d9;">
                 <h5 style="color:#333;">REVENUE</h5>
               </div>
               <div class="chart mt">
                 <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"></div>
               </div>
               <p  style="color:#333;" class="mt"><b>$ 1,980</b><br/>Month Income</p>
             </div>
           </div>
           <!-- /col-md-4 -->
         </div>
         <!-- /row -->
         <div class="row">
           <!-- WEATHER PANEL -->
           <div class="col-md-4 mb">
             <div class="weather pn">
               <i class="fa fa-cloud fa-4x"></i>
               <h2>31º C</h2>
               <h4>ISLAMABAD</h4>
             </div>
           </div>
           <!-- /col-md-4-->
           <!-- DIRECT MESSAGE PANEL -->
           <div class="col-md-8 mb">
             <div class="message-p pn">
               <div class="message-header">
                 <h5 style="color:#333;">DIRECT MESSAGE</h5>
               </div>
               <div class="row">
                 <div class="col-md-3 centered hidden-sm hidden-xs">
                   <img src="Cropped-Pics/Hadi.png" class="img-circle" width="65">
                 </div>
                 <div class="col-md-9">
                   <p>
                     <name style="color:firebrick;">Hadi Butt</name>
                     sent you a message.
                   </p>
                   <p class="small">3 hours ago</p>
                   <p class="message">Hey we just got a huge bonus from ministry of IT for the nourishment of our company at lahore Pakistan congragates man!</p>
                   <form class="form-inline" role="form">
                     <div class="form-group">
                       <input type="text" class="form-control" id="exampleInputText" placeholder="Reply Hadi">
                     </div>
                     <button type="submit" class="btn btn-default">Send</button>
                   </form>
                 </div>
               </div>
             </div>
             <!-- /Message Panel-->
           </div>
           <!-- /col-md-8  -->
         </div>
         <div class="row">
           <!-- TWITTER PANEL -->
           <div class="col-md-4 mb">
             <div class="twitter-panel pn">
               <i class="fa fa-twitter fa-4x"></i>
               <p>ByteIT is here! Take a look and enjoy our new provided services.</p>
               <p class="user">@Byte_IT</p>
             </div>
           </div>
           <!-- /col-md-4 -->
           <div class="col-md-4 mb">
             <!-- WHITE PANEL - TOP USER -->
             <div class="white-panel pn">
               <div class="white-header">
                 <h5>TOP USER</h5>
               </div>
               <p><img src="Cropped-Pics/Usman.png" class="img-circle" width="50"></p>
               <p><b>Usman Khan</b></p>
               <div class="row">
                 <div class="col-md-6">
                   <p class="small mt">MEMBER SINCE</p>
                   <p>2019</p>
                 </div>
                 <div class="col-md-6">
                   <p class="small mt">TOTAL SPEND</p>
                   <p>$ 476</p>
                 </div>
               </div>
             </div>
           </div>
           <!-- /col-md-4 -->
           <div class="col-md-4 mb">
             <!-- INSTAGRAM PANEL -->
             <div class="instagram-panel pn">
               <i class="fa fa-instagram fa-4x"></i>
               <p>@Byte_IT<br/> 5 min. ago
               </p>
               <p><i class="fa fa-comment"></i> 18 | <i class="fa fa-heart"></i> 49</p>
             </div>
           </div>
           <!-- /col-md-4 -->
         </div>
         <!-- /row -->
         <div class="row">
           <div class="col-lg-4 col-md-4 col-sm-4 mb">
             <div class="product-panel-2 pn">
               <div class="badge badge-hot" style="color:#fff;background-color:firebrick;border-color:firebrick;">HOT</div>
               <img src="img/port06.jpg" width="200" alt="">
               <h5 class="mt" style="color:#333;">Flat Summer-Kit</h5>
               <h6 style="color:#333;">TOTAL SALES: 138</h6>
               <button class="btn btn-small btn-theme04" style="color:#fff;background-color:firebrick;border-color:firebrick;">FULL REPORT</button>
             </div>
           </div>
           <!-- /col-md-4 -->
           <!--  PROFILE 02 PANEL -->
           <div class="col-lg-4 col-md-4 col-sm-4 mb">
             <div class="content-panel pn">
               <div id="profile-02">
                 <div class="user">
                   <img src="Cropped-Pics/Hadi.png" class="img-circle" width="80">
                   <h4>Hadi Butt</h4>
                 </div>
               </div>
               <div class="pr2-social centered">
                 <a href="https://www.facebook.com/hadi.butt.311"><i class="fa fa-twitter"></i></a>
                 <a href="https://www.facebook.com/hadi.butt.311"><i class="fa fa-facebook"></i></a>
                 <a href="https://www.facebook.com/hadi.butt.311"><i class="fa fa-dribbble"></i></a>
               </div>
             </div>
             <!-- /panel -->
           </div>
           <!--/ col-md-4 -->
           <div class="col-md-4 col-sm-4 mb">
             <div class="green-panel pn" style="background-color:#dfdfe1;">
               <div class="green-header"  style="background-color:#ccd1d9;">
                 <h5 style="color:#333;">DISK SPACE</h5>
               </div>
               <canvas id="serverstatus03" height="120" width="120"></canvas>
               <script>
                 var doughnutData = [{
                     value: 60,
                     color: "firebrick"
                   },
                   {
                     value: 40,
                     color: "#fffffd"
                   }
                 ];
                 var myDoughnut = new Chart(document.getElementById("serverstatus03").getContext("2d")).Doughnut(doughnutData);
               </script>
               <h3 style="color:#333;">60% USED</h3>
             </div>
           </div>
           <!-- /col-md-4 -->
         </div>
         <!-- /row -->
       </div>
       <!-- /col-lg-9 END SECTION MIDDLE -->
       <!-- **********************************************************************************************************************************************************
           RIGHT SIDEBAR CONTENT
           *********************************************************************************************************************************************************** -->
       <div class="col-lg-3 ds">
         <!--COMPLETED ACTIONS DONUTS CHART-->
         <div class="donut-main">
           <h4>COMPLETED PROJECTS</h4>
           <canvas id="newchart" height="130" width="130"></canvas>
           <script>
             var doughnutData = [{
                 value: 70,
                 color: "firebrick"
               },
               {
                 value: 30,
                 color: "#fdfdfd"
               }
             ];
             var myDoughnut = new Chart(document.getElementById("newchart").getContext("2d")).Doughnut(doughnutData);
           </script>
         </div>
         <!--NEW EARNING STATS -->
         <div class="panel terques-chart">
           <div class="panel-body">
             <div class="chart">
               <div class="centered">
                 <span>TODAY EARNINGS</span>
                 <strong>$ 8,900 | 15%</strong>
               </div>
               <br>
               <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
             </div>
           </div>
         </div>
         <!--new earning end-->
         <!-- RECENT ACTIVITIES SECTION -->
         <h4 class="centered mt">RECENT ACTIVITY</h4>
         <!-- First Activity -->
         <div class="desc">
           <div class="thumb">
             <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
           </div>
           <div class="details">
             <p>
               <muted>Just Now</muted>
               <br/>
               <a href="" style="color:firebrick;">Fahad Mir</a> purchased an item.<br/>
             </p>
           </div>
         </div>
         <!-- Second Activity -->
         <div class="desc">
           <div class="thumb">
             <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
           </div>
           <div class="details">
             <p>
               <muted>2 Minutes Ago</muted>
               <br/>
               <a href="" style="color:firebrick;">Kumar Sonu</a> subscribed to your designs.<br/>
             </p>
           </div>
         </div>
         <!-- Third Activity -->
         <div class="desc">
           <div class="thumb">
             <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
           </div>
           <div class="details">
             <p>
               <muted>3 Hours Ago</muted>
               <br/>
               <a href="" style="color:firebrick;">Madiha Iqbal</a> purchased a Web Design.<br/>
             </p>
           </div>
         </div>
         <!-- Fourth Activity -->
         <div class="desc">
           <div class="thumb">
             <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
           </div>
           <div class="details">
             <p>
               <muted>7 Hours Ago</muted>
               <br/>
               <a href="" style="color:firebrick;">Farhan Bashir</a> purchased a year subscription.<br/>
             </p>
           </div>
         </div>
         <!-- USERS ONLINE SECTION -->
         <h4 class="centered mt">TEAM MEMBRS ONLINE</h4>
         <!-- First Member -->
         <div class="desc">
           <div class="thumb">
             <img class="img-circle" src="Cropped-Pics/Usman.png" width="35px" height="35px" align="">
           </div>
           <div class="details">
             <p>
               <a href="" style="color:firebrick;">Usman Khan</a><br/>
               <muted>Available</muted>
             </p>
           </div>
         </div>
         <!-- Second Member -->
         <div class="desc">
           <div class="thumb">
             <img class="img-circle" src="Cropped-Pics/Abdullah.png" width="35px" height="35px" align="">
           </div>
           <div class="details">
             <p>
               <a href="" style="color:firebrick;">Abdullah Durrani</a><br/>
               <muted>I am Busy</muted>
             </p>
           </div>
         </div>
         <!-- Third Member -->
         <div class="desc">
           <div class="thumb">
             <img class="img-circle" src="Cropped-Pics/Hadi.png" width="35px" height="35px" align="">
           </div>
           <div class="details">
             <p>
               <a href="" style="color:firebrick;">Hadi Butt</a><br/>
               <muted>Available</muted>
             </p>
           </div>
         </div>
         <!-- Fourth Member -->
         <div class="desc">
           <div class="thumb">
             <img class="img-circle" src="Cropped-Pics/Zubair.png" width="35px" height="35px" align="">
           </div>
           <div class="details">
             <p>
               <a href="" style="color:firebrick;">Zubair Qureshi</a><br/>
               <muted>Available</muted>
             </p>
           </div>
         </div>
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1459734.5702753505!2d16.91089086619977!3d48.577103681657675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssk!2ssk!4v1457640551761" width="100%" height="450" frameborder="0" style="border:0"></iframe>
      </div>
      <!-- /col-lg-3 -->
    </div>
    <!-- /row -->
  </section>
</section>
<!--main content end-->

<?php
include("dF.php");
?>