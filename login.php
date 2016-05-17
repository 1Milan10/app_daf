<!DOCTYPE html>
<html lang="en">
    <?php include "includes/header.php"; ?>
<body>
   <div class="container-fluid">
       <?php include "includes/register_modal.php"; ?>  
        <div class="row centered-div">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <!-- login form -->
                <div class="form-group">
                    <form action="" method="post">
                        <input name="truckername" class="input-middle-spacing" type="text" placeholder="Truckernaam">
                        <input name="password" class="password" type="text" placeholder="Wachtwoord"> 
                        <input type="submit" name="submit" class="btn btn-warning daf-orange-btn" value="Start Challenge">
                        <!-- buttons -->
                <button type="button" data-toggle="modal" data-target="#register-modal" class="btn btn-default daf-gray-btn">Creeer een account</button>   
                    </form>    
                </div>
                <button class="btn btn-warning daf-orange-btn">HOE WERKT HET?</button>
            </div>
        </div> 
   </div>
</body>
</html>
    <?php include "includes/footer.php"; ?>