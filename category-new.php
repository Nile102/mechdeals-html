
<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Basic page needs
    ============================================ -->
    <title>Category</title>
     <?php include 'include/links.php' ?>
    <link href="css/category.css" rel="stylesheet">
</head>

<body class="res layout-1 listing-page">
    
    <div id="wrapper" class="wrapper-fluid banners-effect-5">
    

     <?php include 'include/header.php' ?>

    <!-- Main Container  -->
    <div class="main-container container categoryPage">
        <ul class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Category</a></li>
        </ul>

      <div class="sliderBox">
          <div class="categoryMenuSlider owl-carousel">
              <div class="item">
                  <a href="javascript:void(0);">
                      <img src="image/category/category1.png">
                      <span>Air Conditioning </span>
                  </a>
              </div>
              <div class="item">
                  <a href="javascript:void(0);">
                      <img src="image/category/category2.png">
                      <span>Air Conditioning </span>
                  </a>
              </div>
              <div class="item">
                  <a href="javascript:void(0);">
                      <img src="image/category/category3.png">
                      <span>Air Conditioning </span>
                  </a>
              </div>
              <div class="item">
                  <a href="javascript:void(0);">
                      <img src="image/category/category1.png">
                      <span>Air Conditioning </span>
                  </a>
              </div>
              <div class="item">
                  <a href="javascript:void(0);">
                      <img src="image/category/category2.png">
                      <span>Air Conditioning </span>
                  </a>
              </div>
              <div class="item">
                  <a href="javascript:void(0);">
                      <img src="image/category/category3.png">
                      <span>Air Conditioning </span>
                  </a>
              </div>
              <div class="item">
                  <a href="javascript:void(0);">
                      <img src="image/category/category1.png">
                      <span>Air Conditioning </span>
                  </a>
              </div>
              <div class="item">
                  <a href="javascript:void(0);">
                      <img src="image/category/category2.png">
                      <span>Air Conditioning </span>
                  </a>
              </div>
              <div class="item">
                  <a href="javascript:void(0);">
                      <img src="image/category/category3.png">
                      <span>Air Conditioning </span>
                  </a>
              </div>
              <div class="item">
                  <a href="javascript:void(0);">
                      <img src="image/category/category1.png">
                      <span>Air Conditioning </span>
                  </a>
              </div>
              <div class="item">
                  <a href="javascript:void(0);">
                      <img src="image/category/category2.png">
                      <span>Air Conditioning </span>
                  </a>
              </div>
              <div class="item">
                  <a href="javascript:void(0);">
                      <img src="image/category/category3.png">
                      <span>Air Conditioning </span>
                  </a>
              </div>
              <div class="item">
                  <a href="javascript:void(0);">
                      <img src="image/category/category1.png">
                      <span>Air Conditioning </span>
                  </a>
              </div>
              <div class="item">
                  <a href="javascript:void(0);">
                      <img src="image/category/category2.png">
                      <span>Air Conditioning </span>
                  </a>
              </div>
              <div class="item">
                  <a href="javascript:void(0);">
                      <img src="image/category/category3.png">
                      <span>Air Conditioning </span>
                  </a>
              </div>
              <div class="item">
                  <a href="javascript:void(0);">
                      <img src="image/category/category1.png">
                      <span>Air Conditioning </span>
                  </a>
              </div>
              <div class="item">
                  <a href="javascript:void(0);">
                      <img src="image/category/category2.png">
                      <span>Air Conditioning </span>
                  </a>
              </div>
              <div class="item">
                  <a href="javascript:void(0);">
                      <img src="image/category/category3.png">
                      <span>Air Conditioning </span>
                  </a>
              </div>
              <div class="item">
                  <a href="javascript:void(0);">
                      <img src="image/category/category1.png">
                      <span>Air Conditioning </span>
                  </a>
              </div>
          </div>
      </div>
    <!-- //Main Container -->
    

  <?php include 'include/footer.php' ?>

    </div>
        
    <script type="text/javascript">
        $(document).ready(function() {
            $('.categoryMenuSlider').owlCarousel2({
                margin: 25,
                loop: false,
                // autoWidth: true,
                dots: false,
                nav: true,
                 responsive:{
                0:{
                    items:1
                },
                480:{
                    items:2
                },
                768:{
                    items:4
                },
                992:{
                    items:4
                },
                1200:{
                    items:8
                },
            },
            });
        });
    </script> 
</body>
</html>