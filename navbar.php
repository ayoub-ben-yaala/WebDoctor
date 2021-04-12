<section id="container" class="">
     
      
     <header class="header dark-bg">
           <div class="toggle-nav">
               <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
           </div>
           

           <!--logo start-->
           <a href="home.php" class="logo">Web <span class="lite">Doctor</span></a>
           <!--logo end-->

          

           <div class="top-nav notification-row">                
               <!-- notificatoin dropdown start-->
               <ul class="nav pull-right top-menu">
                   <!-- inbox notificatoin start-->
                   <li id="mail_notificatoin_bar" class="dropdown">
                       <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                           <i class="icon-envelope-l"></i>
                           <span class="badge bg-important">5</span>
                       </a>
                       
                       <ul class="dropdown-menu extended inbox">
                           <div class="notify-arrow notify-arrow-blue"></div>
                           <li>
                               <p class="blue">You have 5 new messages</p>
                           </li>
                           <li>
                               <a href="#">
                                   <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                   <span class="subject">
                                   <span class="from">adem abidi</span>
                                   <span class="time">1 min</span>
                                   </span>
                                   <span class="message">
                                       I really like this doctor
                                   </span>
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                   <span class="subject">
                                   <span class="from">bilel smii</span>
                                   <span class="time">5 mins</span>
                                   </span>
                                   <span class="message">
                                    Hi, i need a ?
                                   </span>
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                   <span class="subject">
                                   <span class="from">Phillip   Park</span>
                                   <span class="time">2 hrs</span>
                                   </span>
                                   <span class="message">
                                       I am like to buy this Admin Template.
                                   </span>
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                   <span class="subject">
                                   <span class="from">Ray   Munoz</span>
                                   <span class="time">1 day</span>
                                   </span>
                                   <span class="message">
                                       Icon fonts are great.
                                   </span>
                               </a>
                           </li>
                           <li>
                               <a href="#">See all messages</a>
                           </li>
                       </ul>
                   </li>
                   <!-- inbox notificatoin end -->
                   <!-- alert notification start-->
                   <li id="alert_notificatoin_bar" class="dropdown">
                       <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                           <i class="icon-bell-l"></i>
                           <span class="badge bg-important">7</span>
                       </a>
                       <ul class="dropdown-menu extended notification">
                           <div class="notify-arrow notify-arrow-blue"></div>
                           <li>
                               <p class="blue">You have 4 new notifications</p>
                           </li>
                           <li>
                               <a href="#">
                                   <span class="label label-primary"><i class="icon_profile"></i></span> 
                                   Friend Request
                                   <span class="small italic pull-right">5 mins</span>
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <span class="label label-warning"><i class="icon_pin"></i></span>  
                                   John location.
                                   <span class="small italic pull-right">50 mins</span>
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <span class="label label-danger"><i class="icon_book_alt"></i></span> 
                                   Project 3 Completed.
                                   <span class="small italic pull-right">1 hr</span>
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <span class="label label-success"><i class="icon_like"></i></span> 
                                   Mick appreciated your work.
                                   <span class="small italic pull-right"> Today</span>
                               </a>
                           </li>                            
                           <li>
                               <a href="#">See all notifications</a>
                           </li>
                       </ul>
                   </li>
                   <!-- alert notification end-->
                   <!-- user login dropdown start-->
                   <li class="dropdown">
                       <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                           <span class="profile-ava">
                               <img alt="" src="img/<?= $_SESSION['image']?>">
                           </span>
                           <span class="username">Welcome <?= $_SESSION['name']?></span>
                           <b class="caret"></b>
                       </a>
                       <ul class="dropdown-menu extended logout" style="z-index:1;">
                           <div class="log-arrow-up"></div>
                           <li class="eborder-top">
                               <a href="profile.php"><i class="icon_profile"></i> My Profile</a>
                           </li>
                           <li>
                               <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                           </li>
                           <li>
                               <a href="deconexion.php"><i class="icon_key_alt"></i> Log Out</a>
                           </li>

                          
                       </ul>
                   </li>
                   <!-- user login dropdown end -->
               </ul>
               <!-- notificatoin dropdown end-->
           </div>
     </header>      
     <!--header end-->

     <!--sidebar start-->
     <aside>
         <div id="sidebar"  class="nav-collapse ">
             <!-- sidebar menu start-->
             <ul class="sidebar-menu">                
                 <li class="active">
                     <a class="" href="home.php">
                         <i class="icon_house_alt"></i>
                         <span>Home</span>
                     </a>
                 </li>
                 <li class="sub-menu">
                     <a href="patient.php" class="">
                         <i class="icon_document_alt"></i>
                         <span>Patient</span>
                         
                     </a>
                    
                 </li>       
                 <li class="sub-menu">
                     <a href="Appointment.php" class="">
                     <i class="fas fa-calendar-check"></i>
                         <span>Appointment</span>
                     </a>
                 </li>
                 <li>
                     <a class="" href="note.php">
                     <i class="fas fa-book-open"></i>
                         <span>Note</span>
                     </a>
                 </li>
                                 <li class="sub-menu">
                     <a href="javascript:;" class="">
                         <i class="icon_documents_alt"></i>
                         <span>More</span>
                         <span class="menu-arrow arrow_carrot-right"></span>
                     </a>
                     <ul class="sub">                          
                         <li><a class="" href="profile.php">My Profile</a></li>
                         <ul>
                 </li>
                 
             </ul>
             <!-- sidebar menu end-->
         </div>
     </aside>
