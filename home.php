<!DOCTYPE html>
<html lang="en">
    <?php include "includes/header.php"; ?>
<body>
    <img src="images/mainscreen_bg.jpg" alt="" width="100%" height="250px">
    <div class="container-fluid"> 
        <div class="row">
           
            <div class="col-xs-6 col-xs-offset-3">
                <h2 style="text-align:center;">WELKOM</h2>
                <h5 style="text-align:center;">Op jou persoonlijke platform</h5>
                <hr>   
            </div>
        </div>
          
        <!-- navigation -->    
        <div class="row">
            <a href="chauffeurs.php">
                <div class="col-xs-3">
                    <img class="image-centered" src="images/profile.png" alt="" width="25" height="25">
                    <small class="text-centered">Chauffeurs</small>
                </div>     
            </a> 
            
            <a href="highlights.php">
                <div class="col-xs-3">
                    <img class="image-centered" src="images/highlights.png" alt="" width="25" height="25">
                    <small class="text-centered">Highlights</small>
                </div>
            </a>
            
            <a href="videos.php">  
                <div class="col-xs-3">
                    <img class="image-centered" src="images/video.png" alt="" width="25" height="25">
                    <small class="text-centered">Video's</small>
                </div>        
            </a>
            
            <a href="map.php">
                <div class="col-xs-3">
                    <img style="text-align:center;"class="image-centered" src="images/map.png" alt="" width="25" height="25">
                    <small class="text-centered">Kaart</small>
                </div>       
            </a>    
        </div><!-- end row navigation -->
        
        <!-- user stats -->      
        <div class="row"> 
            <div class="col-xs-3">
                <img class="image-centered" src="images/profile.png" alt="" width="25" height="25">
                <small class="text-centered">Chauffeurs</small>
            </div>
            
            <div class="col-xs-3">
                <img class="image-centered" src="images/highlights.png" alt="" width="25" height="25">
                <small class="text-centered">Highlights</small>
            </div>
            
            <div class="col-xs-3">
                <img class="image-centered" src="images/video.png" alt="" width="25" height="25">
                <small class="text-centered">Video's</small>
            </div>   
        </div><!-- end row account details -->       
                       
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-md-10 col-lg-10">
                <button class="btn btn-warning daf-orange-btn">PLAN DE VOLGENDE ROUTE</button>
            </div>    
        </div><!-- end row next route button -->
        
        <div class="row no-spacing">
            <div class="col-xs-12 recently-added no-spacing">
                <div class="col-xs-6 no-spacing">
                    <img class="recently-image" src="images/mainscreen_bg.jpg" alt="" width="150px;" height="120px">
                </div>
                    
                <div class="col-xs-6 no-spacing">
                    <h6 class="recently-title">Adventures</h6>
                    <h5 class="recently-description">Finding Beauty in the Badlands</h5>    
                </div>
                
                <div class="col-xs-3 no-spacing">
                    <small class="recently-time">2 uur geleden</small>
                </div>     
                               
            </div>    
        </div><!-- end row recently added --> 
    
   </div><!-- container-fluid -->
</body>
</html>
    <?php include "includes/footer.php"; ?>