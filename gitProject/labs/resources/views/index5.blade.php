<!DOCTYPE>
<html>
<head>
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link rel="stylesheet" href="/css/style.css" type="text/css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">

</head>
<body>

<div class="header">

      <img  id = "menuphoto"src="../image/ga.jpg" alt="not found">

  <form action="/search/" target="_blank" id="form-search">
      <input type="hidden" name="searchid" value="808327">
      <input type="search" name="text" required placeholder="search...">
      <input type="submit" value="&#128269;">
    </form>

</div>


        <div class="slideshow-container">

            <div class="mySlides fade">
              <div class="numbertext">1 / 5</div>
              <img src="../image/img3.jpg" style="width:100%; height: 80%;">

            </div>

            <div class="mySlides fade">
              <div class="numbertext">2 / 5</div>
              <img src="../image/img2.jpg" style="width:100%; height: 80%;">
         </div>

            <div class="mySlides fade">
                          <div class="numbertext">3 / 5</div>
                          <img src="../image/img1.jpg" style="width:100%; height: 80%;">

                        </div>

                        <div class="mySlides fade">
                          <div class="numbertext">4 / 5</div>
                          <img src="../image/img4.jpg" style="width:100%; height: 80%;">  </div>

         <div class="mySlides fade">
              <div class="numbertext">5 / 5</div>
              <img src="../image/img5.jpg" style="width:100%; height: 80%;">

            </div>



            </div>

            <p class="prev" onclick="plusSlides(-1)"><</p>
            <p class="next" onclick="plusSlides(1)">></p>





              <div class="dot" onclick="currentSlide(1)"></div>
              <div class="dot" onclick="currentSlide(2)"></div>
               <div class="dot" onclick="currentSlide(3)"></div>
               <div class="dot" onclick="currentSlide(4)"></div>
                <div class="dot" onclick="currentSlide(5)"></div>



        </div>

        <div class="maintext">
            <h1>{{ __('lang.name')}}</h1>
            <h3>{{ __('lang.inff')}}</h3>
            <h3>{{ __('lang.infs')}}</h3>
            <h3>{{ __('lang.inft')}}</h3>


        </div>

        <div class="items">
    <div class="item">
        <div class="card">
            <img class="card-img-top" src="../image/sdu.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">{{ __('lang.hobbyf')}}</h4>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="card">
            <img class="card-img-top" src="../image/1.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">{{ __('lang.hobbys')}}</h4>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="card">
            <img class="card-img-top" src="../image/git.jpg" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">{{ __('lang.hobbyt')}}</h4>
        </div>
    </div>
 </div>

<div class="item">
        <div class="card">
            <img class="card-img-top" src="../image/my.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">{{ __('lang.hobbyf1')}}</h4>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="card">
            <img class="card-img-top" src="../image/my2.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">{{ __('lang.hobbys1')}}</h4>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="card">
            <img class="card-img-top" src="../image/h.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">{{ __('lang.hobbyt1')}}</h4>

         </div>
    </div>
</div>
</div>





        <script src="/js/script.js"></script>

</body>
</html>
