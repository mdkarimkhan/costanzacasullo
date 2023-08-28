<?php require_once('couch/cms.php');?>




<cms:template title='Home Page' icon='home'>

</cms:template>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Veget</title>
    <link rel="stylesheet" href="style.css">


    <!-- How the website appears when shared on twitter -->
    <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@Veget" />
  <meta name="twitter:title" content="Veget" />
  <meta name="twitter:description" content="Instant fresh veggies, nutritious, easy to use. Order in Kigali." />
  <meta name="twitter:image" content="https://res.cloudinary.com/dpcy1ezvt/image/upload/v1692395257/veget4_ttjhri.jpg" />
<!-- General meta tags for seo -->
  <meta name="description" content="Instant fresh veggies, nutritious, easy to use. Order in Kigali. ">
  <meta name="keywords"
    content="african, rwanda, fresh, beetroot, powder, order, shop, healthy, organic, veggies, food, vegetables">
  <meta name="author" content="Veget">
  <meta name="title" content="Veget">
  <meta property="og:type" content="website" />
<!-- How the website appears when shared on social media -->
  <meta property="og:title" content="Veget" />
  <meta property="og:description" content="Instant fresh veggies, nutritious, easy to use. Order in Kigali.">
    <meta property="og:image" content="https://res.cloudinary.com/dpcy1ezvt/image/upload/v1692395257/veget4_ttjhri.jpg">
  <!-- Importing the Tachyons css framework -->

    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>
      <!-- Importing the icons library -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Favicon -->

    <link rel="icon" type="image/x-icon" href="media/logo.webp">
</head>

<body>
    
    </head>
    <body>
                <!-- Navbar -->

        <nav class="pa3 pa3-ns  navbar">
            <div class="tc">
              <cms:pages masterpage= 'globals.php'>
              <a class="link dim white f6 f5-ns dib mr3" href="#products" title="Products">Products</a>
              <a class="link dim white f6 f5-ns dib mr3" href="#about" title="About">About</a>
              
              <a class="link dim white f6 f5-ns dib mr3" href="#faqs" title="FAQs">FAQs</a>
              
              <a class="link dim white f6 f5-ns dib" href="#order" title="Order">Order</a>
              
            </div></nav>
                    <!-- h1. Client needs to be able to edit this -->

                    <div class="pa2 flex flex-column">
                      <div class="flex items-start">
                        <img class="logo img-fluid ml2" src="<cms:show mission_image/>">
                      </div>
                      <h1 class="tc pa2"><cms:show mission/></h1>
                    </div>
                    
                        
    <div class="slider-container">
      <div class="slider">
        <div class="slide">
          <img src="<cms:show product_image1/>" alt="Beetroot Powder product">
          <h2><cms:show product_title1/>   <!-- BeeTinO Nutritious -->
          </h2>
          <p><cms:show product_subtitle1/> <!-- 100% Natural Powdered Organic Beets --></p>
          <a class="pa2 white slideshow-btn br3 f4 link ba bw1 ph3 pv2 mb2 dib" href="#order">Order</a>
        </div>
        <div class="slide">
          <img src="<cms:show product_image2/>" alt="Carrot Powder Product">
          <h2><cms:show product_title2/> <!-- CaroTinO Nutritious --> </h2>
          <p><cms:show product_subtitle2/> <!-- 100% Natural Powdered organic Carrots --> </p>
          <a class="pa2 white slideshow-btn br3 f4 link ba bw1 ph3 pv2 mb2 dib" href="#order">Order</a>
        </div>
        <div class="slide">
            <img src="<cms:show product_image3/>" alt="Tomato Powder product">
            <h2><cms:show product_title3/> <!-- TomaTinO Nutritious --> </h2>
            <p><cms:show product_subtitle3/> <!-- 100% Natural Powdered Tomatoes --></p>
            <a class="pa2 white slideshow-btn br3 f4 link ba bw1 ph3 pv2 mb2 dib" href="#order">Order</a>
        </div>
      </div>
    </div>
      

    
                    <!-- h1. Products. Client needs to be able to edit 
                    1 Product title
                2 Product subtitles
            3 Product image -->

    <h1 class="tc pa1" id="products">Our products</h1>
    
    <div class="flex flex-column flex-row-ns">
        <div class="w-100 w-33-ns pa3">
          <div class="pa3 shadow-1 product">
            <img src="<cms:show product_image1/>" alt="Beetroot powder product">
            <h2 class="f4"><cms:show product_title1/></h2> <!-- BeeTinO Nutritious -->
            <p class=" fw-bold"><cms:show product_subtitle1/><img class="img-fluid icon" src="media/beetroot-icon.webp" alt="icon of a beetroot"></p> <!-- 100% Natural Powdered Organic Beets -->
            <p class="fw-bold"><cms:show product_description1/><!--1 in 1 vegetable powder --></p> <!-- 1 in 1 vegetable powder -->

            <a class="effect effect-1 a white pa3 br3" href="#order" title="Order">Order</a>
        </div>
        </div>
        <div class="w-100 w-33-ns pa3">
          <div class="pa3 shadow-1 product">
            <img src="<cms:show product_image2/>" alt="carrot powder product">
            <h2 class="f4"><cms:show product_title2/> <!-- CaroTinO Nutritious --></h2>
            <p class="fw-bold"><cms:show product_subtitle2/> <!-- 100% Natural Powdered organic Carrots --><img class="img-fluid icon" src="media/carrot-icon.webp" alt="icon of a carrot"></p>
            <p class="fw-bold"><cms:show product_description2/><!-- 1 in 1 vegetable powder --></p>

            <a class="effect effect-1 a white pa3 br3" href="#order" title="Order">Order</a>
        </div>
        </div>
        <div class="w-100 w-33-ns pa3">
          <div class="pa3 shadow-1 product">
            <img src="<cms:show product_image3/>" alt="tomato powder product">
            <h2 class="f4"><cms:show product_title3/> <!--ToMatinO Nutritious --></h2>
            <p class="fw-bold"><cms:show product_subtitle3/> <!--100% Natural Powdered Tomatoes--><img class="img-fluid icon" src="media/tomato-icon.webp" alt="icon of a tomato"></p>
            <p class="fw-bold"><cms:show product_description3/><!--1 in 1 vegetable powder --></p>

            <div class="button-effect">
              <a class="effect effect-1 a white pa3 br3" href="#order" title="Order">Order</a>
               
              </div>          </div>
              

        </div>
      </div>
  <div class="flex flex-column flex-row-ns">
        <div class="w-100 w-33-ns pa3">
          <div class="pa3 shadow-1 product">
            <img src="<cms:show product_image4/>" alt="cinnamon powder product">
            <h2 class="f4"><cms:show product_title4/><!--CinnaMon --></h2>
            <p class="fw-bold"><cms:show product_subtitle4/><!--Caffeine Free Vegetable mix Tea --><img class="img-fluid icon" src="media/cinnamon-icon.webp" alt="icon of a cinnamon"></p>
            <p class="fw-bold"><cms:show product_description4/><!--Flavoured Vegetable Powder --></p>

            <a class="effect effect-1 a white pa3 br3" href="#order" title="Order">Order</a>
        </div>
        </div>
        <div class="w-100 w-33-ns pa3">
          <div class="pa3 shadow-1 product">
            <img src="<cms:show product_image5/>" alt="cookino powder product">
            <h2 class="f4"><cms:show product_title5/><!--CooKinO --></h2>
            <p class="fw-bold"><cms:show product_subtitle5/><!--7 in One Spice: Vegetable Mix Powder --> <img class="img-fluid icon" src="media/cooKino-icon.webp" alt="icon of a potion being mixed"></p>
            <p class="fw-bold"><cms:show product_description5/><!-- Seasoned Vegetable Powder --></p>

            <a class="effect effect-1 a white pa3 br3" href="#order" title="Order">Order</a>
        </div>
        </div>
        <div class="w-100 w-33-ns pa3">
          <div class="pa3 shadow-1 product">
            <img src="<cms:show product_image6/>" alt="ginger powder product">
            <h2 class="f4"><cms:show product_title6/><!--Ginger Powder--></h2>
            <p class="fw-bold"><cms:show product_subtitle6/><!--Tangawizi--><img class="img-fluid icon" src="media/ginger-icon.webp" alt="icon of a ginger"></p>

            <p class="fw-bold"><cms:show product_description6/><!--Other Seasonings --></p>

            <div class="button-effect">
              <a class="effect effect-1 a white pa3 br3" href="#order" title="Order">Order</a>
               
              </div>          </div>
              
              
        </div>
      </div>
      <h1 class="tc pa1" id="about">About us</h1>

                                     <!-- img Client needs to be able to edit this -->

      <section class="about-section">
        <div class="mw5 center">
          <img src="<cms:show profile_image/>" alt="Profile Image of Anne. Founder of veget solutions">
        </div>
        <div class="text">
                                <!-- p. Client needs to be able to edit this -->

          <p class="fw-bold" >
          <cms:show profile/>
            <!--KASABIITI Annet, the founder and director of VS, VeGeTSolutions, is a highly motivated food scientist with a strong professional background in the field. Annet's personal experience with Anamea in 2012 has fueled her determination in the development of instant beetroot spreads for the market, that provides a convenient and nutritious solution for consumers, while also maximizing the health benefits of beetroot.

          </p>
          <p class="fw-bold">
            By this experience, Annet has a deep understanding of the challenges and opportunities surrounding urban diets and nutrition. Since 2013, she has recognized the importance of vegetables, which are rich in micronutrients that can significantly improve nutrition across all age groups. In today's fast-paced world, where time for cooking is limited, there is a growing need for vegetable-based solutions.
          </p>
          <p class="fw-bold">
            Goal: Rescuing the nutritious vegetables lost into decays in markets to those who need it as instant fresh Veggies. -->
          </p>
          <a class="effect effect-1 a white pa3 br3" href="#order" title="Order">Order</a>

        </div>

      </section> 
                 
   
                                <!-- client needs to be able to change images -->

      <div class="gallery">
        <img src="media/gallery1.webp" loading="lazy" alt="Anne, the founder of veget, holding the products" class="img-fluid">
        <img src="media/gallery5.webp" loading="lazy" alt="Tomato powder product" class="img-fluid">
        <img src="media/gallery3.webp" loading="lazy" alt="A young member of stuff from veget with the products" class="img-fluid">
        <img src="media/gallery4.webp" loading="lazy" alt="beetroot powder product" class="img-fluid">
        <img src="media/gallery2.webp" loading="lazy" alt="Anne, the founder of veget holding the products" class="img-fluid">
        <img src="media/gallery6.webp" loading="lazy" alt="ginger powder product" class="img-fluid">
      </div>
                          <!-- Faqs. Client needs to be able to edit the 
                        question title and the answer -->

      <h1 class="tc pa1" id="faqs">FAQs</h1>

      <div class="accordion mw8 center mt5 pa2">
        <div class="accordion__item">
          <input type="radio" class="dn" name="slides" id="slide1" checked>
          <label for="slide1" class="accordion__item-label db pv3 link black dim pointer f4">How can I order your products?</label>
          <div class="accordion__content bb b--black-20">
            <p class="fw-bold">
              Complete the <a class="white" href="#order">form</a> so that we can learn more about the products you want.
            </p>
        
          </div>
        </div>
        <div class="accordion__item">
          <input type="radio" class="dn" name="slides" id="slide2">
          <label for="slide2" class="accordion__item-label db pv3 link black dim pointer f4">Do you do delivery?</label>
          <div class="accordion__content bb b--black-20">
            <p class="fw-bold">
              Yes. We make deliveries in Kigali. Deliveries are free for orders over 15,000 fr. Otherwise, our delivery fee is 1,000 fr.
            </p>
          
          </div>
        </div>
        <div class="accordion__item">
          <input type="radio" class="dn" name="slides" id="slide3">
          <label for="slide3" class="accordion__item-label db pv3 link black dim pointer f4">Can I buy your products online?</label>
          <div class="accordion__content bb b--black-20">
            <p class="fw-bold">
We will soon be launching our e-commerce store. <a class="white" href="mailto:vegetsolutions@gmail.com ">Contact us</a> if you want to get notified when you will be able to purchase our items online.            </p>
         
          </div>
        </div>
      </div>

       <div class="carousel">
        <ul class="slides">
          <input type="radio" name="radio-buttons" id="img-1" checked />
          <li class="slide-container">
            <div class="slide-image">
              <img src="media/gallery1.webp">
            </div>
            <div class="carousel-controls">
              <label for="img-3" class="prev-slide">
                <span>&lsaquo;</span>
              </label>
              <label for="img-2" class="next-slide">
                <span>&rsaquo;</span>
              </label>
            </div>
          </li>
          <input type="radio" name="radio-buttons" id="img-2" />
          <li class="slide-container">
            <div class="slide-image">
              <img src="media/gallery2.webp">
            </div>
            <div class="carousel-controls">
              <label for="img-1" class="prev-slide">
                <span>&lsaquo;</span>
              </label>
              <label for="img-3" class="next-slide">
                <span>&rsaquo;</span>
              </label>
            </div>
          </li>
          <input type="radio" name="radio-buttons" id="img-3" />
          <li class="slide-container">
            <div class="slide-image">
              <img src="media/gallery3.webp">
            </div>
            <div class="carousel-controls">
              <label for="img-2" class="prev-slide">
                <span>&lsaquo;</span>
              </label>
              <label for="img-1" class="next-slide">
                <span>&rsaquo;</span>
              </label>
            </div>
          </li>
          <div class="carousel-dots">
            <label for="img-1" class="carousel-dot" id="img-dot-1"></label>
            <label for="img-2" class="carousel-dot" id="img-dot-2"></label>
            <label for="img-3" class="carousel-dot" id="img-dot-3"></label>
          </div>
        </ul>
      </div>
<<<<<<< HEAD:index.php
    </div>          
                         <!-- THE CAROUSEL YOU NEED TO IGNORE ENDS HERE -->
   
                                <!-- client needs to be able to change images -->

      <div class="gallery">
        <img src="<cms:show gallery1/>" loading="lazy" alt="Anne, the founder of veget, holding the products" class="img-fluid">
        <img src="<cms:show gallery2/>" loading="lazy" alt="Tomato powder product" class="img-fluid">
        <img src="<cms:show gallery3/>" loading="lazy" alt="A young member of stuff from veget with the products" class="img-fluid">
        <img src="<cms:show gallery4/>" loading="lazy" alt="beetroot powder product" class="img-fluid">
        <img src="<cms:show gallery5/>" loading="lazy" alt="Anne, the founder of veget holding the products" class="img-fluid">
        <img src="<cms:show gallery6/>" loading="lazy" alt="ginger powder product" class="img-fluid">
      </div>
                          <!-- Faqs. Client needs to be able to edit the 
                        question title and the answer -->

      <h1 class="tc pa1" id="faqs">FAQs</h1>

      <div class="accordion mw8 center mt5 pa2">
        <div class="accordion__item">
          <input type="radio" class="dn" name="slides" id="slide1" checked>
          <label for="slide1" class="accordion__item-label db pv3 link black dim pointer f4"><cms:show questions1/><!--How can I order your products?--></label>
          <div class="accordion__content bb b--black-20">
            <p class="fw-bold">
            <cms:show answers1/><!--Complete the <a class="white" href="#order">form</a> so that we can learn more about the products you want. -->
            </p>
        
          </div>
        </div>
        <div class="accordion__item">
          <input type="radio" class="dn" name="slides" id="slide2">
          <label for="slide2" class="accordion__item-label db pv3 link black dim pointer f4"><cms:show questions2/></label> <!-- Do you do delivery? -->
          <div class="accordion__content bb b--black-20">
            <p class="fw-bold">
            <cms:show answers2/>
            </p> <!-- Yes. We make deliveries in Kigali. Deliveries are free for orders over 15,000 fr. Otherwise, our delivery fee is 1,000 fr. -->
          
          </div>
        </div>
        <div class="accordion__item">
          <input type="radio" class="dn" name="slides" id="slide3">
          <label for="slide3" class="accordion__item-label db pv3 link black dim pointer f4"><cms:show questions3/><!--Can I buy your products online? --></label>
          <div class="accordion__content bb b--black-20">
            <p class="fw-bold">
            <cms:show answers3/><!-- We will soon be launching our e-commerce store. <a class="white" href="mailto:vegetsolutions@gmail.com ">Contact us</a> if you want to get notified when you will be able to purchase our items online. --></p>
      
          </div>
        </div>
      </div>

=======
    </div> 
>>>>>>> e7c24e598208a3880f5056e5f697556edccf6760:index.html
      <h1 class="tc pa1" id="order">Order our products</h1>
                  
  <div class="tally">
<iframe data-tally-src="https://tally.so/embed/npy7kB?hideTitle=1&transparentBackground=1&dynamicHeight=1" loading="lazy" width="50%" height="1540" frameborder="0" marginheight="0" marginwidth="0" title="Order our products"></iframe><script>var d=document,w="https://tally.so/widgets/embed.js",v=function(){"undefined"!=typeof Tally?Tally.loadEmbeds():d.querySelectorAll("iframe[data-tally-src]:not([src])").forEach((function(e){e.src=e.dataset.tallySrc}))};if("undefined"!=typeof Tally)v();else if(d.querySelector('script[src="'+w+'"]')==null){var s=d.createElement("script");s.src=w,s.onload=v,s.onerror=v,d.body.appendChild(s);}</script></div>

                 <!-- Client needs to be able to edit the text of the phone number and email -->

                 <section class="contact tc">
                  <div class="dib">
                    <p class="f4 tc">Phone:<cms:show phone/><a class="near-black dim" href="tel:+250791029777"></a></p> <!-- +250791029777 -->
                  </div>
                  <div class="dib ml3">
                    <p class="f4 tc">Email:<cms:show email/><a class="near-black dim" href=vegetsolutions@gmail.com></a></p> <!-- vegetsolutions@gmail.com -->
                    
                  </div><p>Address:
                    Gasabo District, Bumbogo Sector, Kinyaga, Kigali</p>
                </section>
                
               <!-- SVG Icons are from https://simpleicons.org -->
                                   <!-- Client needs to be able to edit the social media 
                                  links the icons redirect to -->
          
          <footer class="pv4 ph3 tc">
             
             
              
             
            
              <a class="link  near-black dib mh3 tc social-icon" href="<cms:show linkedin/>" title="LinkedIn">
                <svg class="dib h2 w2" fill="#7f0d0d" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M13.632 13.635h-2.37V9.922c0-.886-.018-2.025-1.234-2.025-1.235 0-1.424.964-1.424 1.96v3.778h-2.37V6H8.51V7.04h.03c.318-.6 1.092-1.233 2.247-1.233 2.4 0 2.845 1.58 2.845 3.637v4.188zM3.558 4.955c-.762 0-1.376-.617-1.376-1.377 0-.758.614-1.375 1.376-1.375.76 0 1.376.617 1.376 1.375 0 .76-.617 1.377-1.376 1.377zm1.188 8.68H2.37V6h2.376v7.635zM14.816 0H1.18C.528 0 0 .516 0 1.153v13.694C0 15.484.528 16 1.18 16h13.635c.652 0 1.185-.516 1.185-1.153V1.153C16 .516 15.467 0 14.815 0z" fill-rule="nonzero"/></svg>
                <span class="f6 db">LinkedIn</span>
                <cms:show linkedin/>
              </a>
              <a class="link  near-black dib mh3 tc social-icon" href="<cms:show twitter/>" title="Twitter">
                <svg class="dib h2 w2" fill="#7f0d0d" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.375-1.337.648-2.085.795-.598-.638-1.45-1.036-2.396-1.036-1.812 0-3.282 1.468-3.282 3.28 0 .258.03.51.085.75C5.152 5.39 2.733 4.084 1.114 2.1.83 2.583.67 3.147.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.416-.02-.617-.058.418 1.304 1.63 2.253 3.067 2.28-1.124.88-2.54 1.404-4.077 1.404-.265 0-.526-.015-.783-.045 1.453.93 3.178 1.474 5.032 1.474 6.038 0 9.34-5 9.34-9.338 0-.143-.004-.284-.01-.425.64-.463 1.198-1.04 1.638-1.7z" fill-rule="nonzero"/></svg>
                <span class="f6 db">Twitter</span>
                
              </a>
              </cms:pages>
            </footer>

       
                       
      
    <script type="text/javascript" src="script.js"></script>
</body>

</html>

<?php COUCH :: invoke()?>