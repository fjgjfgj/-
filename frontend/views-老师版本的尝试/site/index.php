<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<!DOCTYPE html>
<html lang="en">
<br>
<br>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

</head>

<body>

    <!-- Slider -->
    <section class="slider">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img src="img/slide-1.jpg" alt="slide">
                        </div>

                        <div class="item">
                          <img src="img/slide-2.jpg" alt="slide">
                        </div>

                        <div class="item">
                          <img src="img/slide-3.jpg" alt="slide">
                        </div>

                        <div class="item">
                          <img src="img/slide-4.jpg" alt="slide">
                        </div>
                      </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- script -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/script.js"></script>
    
    

</body>
</html>

<!--div.carousel-inner:nth-child(1) > div:nth-child(2) > img:nth-child(1)-->