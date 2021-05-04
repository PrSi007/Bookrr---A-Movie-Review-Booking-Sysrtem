<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="./spiderverse.css" type="text/css" rel="stylesheet" >
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <title>Spider man into the spider verse</title>
</head>
<body>
    <div class="wrapper">
        <div class="poster">
          <img src="./spiderverse_main.jpg" alt="img" class="main_image"/>
        </div>
        
        <div id="fade" class="container-margin">
          <div class="movie">
            <div class="movie__score">99%</div>
            <div class="movie__title__container">
              <h2 class="movie__title">Spider man into the spider verse</h2>
              <div class="movie__year">2021</div>
              <div>❤❤❤❤❤</div>
            </div>

            <ul class="movie__type">
              <li>Action</li>
              <li>Adventure</li>
              <li>Fantasy</li>
              <li>Sci-Fi</li>
            </ul><br/><br/>
            <p class="movie__description">After gaining superpowers from a spider bite, Miles Morales protects the city as Spider-Man. Soon, he meets alternate versions of himself and gets embroiled in an epic battle to save the multiverse.</p><br/><br/>
            
            <div>
              <h3>Cast and Crew</h3>
              <figure><img src="jake.jpg" class="figure-img img-fluid rounded"><figcaption class="figure-caption">Jake Johnson</figcaption></figure>
              <figure><img src="hailee.jpg" class="figure-img img-fluid rounded"><figcaption class="figure-caption"></figcaption>Hailee Steinfeld</figcaption></figure>
              <figure><img src="shameik.jpg" class="figure-img img-fluid rounded"><figcaption class="figure-caption">Shameik Moore</figcaption></figure>
              <figure><img src="nicolas.jpg" class="figure-img img-fluid rounded"><figcaption class="figure-caption">Nicolas Cage</figcaption></figure>
            </div><br/><br/>
        
            <a class="movie__trailer">
              <button type="button" class="btn btn-light btn-lg" onclick="location.href='booking.php'">Book Now</button>
            </a>
          </div>

          <div class="review">
            <h3 class="review__title">Audience-Reviews</h3>
            <ul>
              <li>
                <div class="review__score">97%</div>
                <p class="review__description">A movie worthy of Stan Lee's approval. Incredible animation, great story, great message. This film lives up to the hype and honestly surpassed my expectations. The only reason I think there are some negative reviews is because you can never please everyone. However, for the vast majority of viewers, I believe you'll find this film to be great. Highly recommend seeing it in theaters just for the amazing animation style.</p>
              </li>
              <li>
                <div class="review__score">95%</div>
                <p class="review__description">Visually stunning. Great storyline. Great cast. Amazing soundtrack. Tear jerking cameo. Pop culture post credit scene of the decade. Thank you Marvel and Sony for making a Spidey movie everyone can love.</p>
              </li>
              <li>
                <div class="review__score">90%</div>
                <p class="review__description">A bit of a conceptual dare, but it wins with its nano-second sharp timing, and percussive rat-a-tat-tatting of panels and split screens that make the action and visual gags feel jumpy and alive	Fresh, funny and frequently bonkers, Into The Spider-Verse is an astonishing shot of cinematic superhero adrenaline. For such an over-familiar character, somehow, this feels original and entirely new.</p>
              </li>
            </ul>
          </div>

          <div class="review">
            <h3 class="review__title">Critics-Reviews</h3>
            <ul>
              <li>
                <div class="review__score">94%</div>
                <p class="review__description">This rousingly entertaining superhero adventure is everything a great family movie should be: laugh-out-loud funny, filled with teachable moments, and appealing to parents and kids of all ages.</p>
              </li>
              <li>
                <div class="review__score">92%</div>
                <p class="review__description">A bit of a conceptual dare, but it wins with its nano-second sharp timing, and percussive rat-a-tat-tatting of panels and split screens that make the action and visual gags feel jumpy and alive.  </p>
              </li>
              <li>
                <div class="review__score">96%</div>
                <p class="review__description">	Movie that looks and feels like an actual comic book</p>
              </li>
            </ul>
          </div>

        </div>
        <canvas id="bg"></canvas>
      </div>
      <script src="./jl.js" ></script>
</body>
</html>
