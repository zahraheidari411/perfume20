<?php
include("theme-header.php");
?>


<head>
    <style>
  

   
    .slideshow-container {
      position: relative;
      max-width: 100%;
      margin: auto;
      
    }

    .mySlides {
      display: none;
      text-align:center;
    }

    img {
      width:50%;
 
      height: auto;
      
    }

    .fade {
      animation-name: fade;
      animation-duration: 1s;
      animation-timing-function: ease-in-out;
    }

    @keyframes fade {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }
   
        .slideshow-container {
            position: relative;
            max-width: 100vw;
            margin: auto;
            overflow: hidden;
        }
        .mySlides {
            display: none;
            width: 100%;
            height: auto;
        }
        .mySlides img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
        /* Fade animation */
        .fade {
            animation-name: fade;
            animation-duration: 1s;
            animation-timing-function: ease-in-out;
        }
        @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
        }
        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.3s;
            user-select: none;
        }
        .prev {
            left: 0;
            border-radius: 0 3px 3px 0;
        }
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.5);
        }
        /* Dots/bullets */
        .dot-container {
            text-align: center;
            padding: 15px;
            background: #f5f5f5;
        }
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 4px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }
        .active, .dot:hover {
            background-color: #717171;
        }
    </style>
</head>
<body>

<nav class="row divmain">
    <div class="slideshow-container">
        <!-- Slides -->
        <div class="mySlides fade">
            <img src="chatgpt.jpg" alt="تبلیغات1">
        </div>
        <div class="mySlides fade">
            <img src="chatgpt2.jpg" alt="تبلیغات2">
        </div>
        <div class="mySlides fade">
            <img src="chatgpt3.jpg" alt="تبلیغات3">
        </div>
        <div class="mySlides fade">
            <img src="chatgpt4.webp" alt="تبلیغات4">
        </div>
        <div class="mySlides fade">
            <img src="chatgpt5.jpg" alt=" تبلیغات5">
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <div class="dot-container">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
        <span class="dot" onclick="currentSlide(4)"></span> 
        <span class="dot" onclick="currentSlide(5)"></span> 
    </div>

    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            const slides = document.getElementsByClassName("mySlides");
            const dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
        }

        // Automatic slideshow
        setInterval(function() { plusSlides(1); }, 2000);
    </script>
</nav>




<nav class="row divmain">

<div class="col-12 col-md-6 ">
    
    <p class="pcenter">
        <h1>جایی که عطر ها حرف می زنند... </h1>
        <p>به دنیای رایحه خوش آمدید - رایان انتخاب خاص پسندان</p>
    </p>
    <img width="600px" height="300px" src="16.jpg" alt="Art 1">
</div>
<div class="col-12 col-md-6">
 
</div>


<div class="col-12 col-md-6">
    <p style="text-align:right; ">
        در فروشگاه اینترنتی رایان ما نتها عطر نمیفروشیم ;بلکه رایحه ای از شخصیت و حس و خاطره را به شما هدیه می دهیم.<br> با مجموعه ای بی نظیر از برترین برند های عطر و ادکلن اصل دنیا شما را به سفری در دنیای رایح ها دعوت کنیم.
        <br>
    </p>
    <p>
        چه به دنبال عطری برای لحظات خاص باشید چه رایحه ای برای استفاده روزمره در رایان بهترین انتخاب ها در انتظار شماست.<br> تضمین اصالت کالا و ارسال سریع و مطمعن -مشاوره تخصصی و همچنین بسته بندی شیک تنها بخشی از تعهد ما به شماست.
        <br>
    </p>
    <h2> رایان عطری فراتر از انتظار.... </h2>
    <p style=" text-align: right; font-weight: bold; ">هر رایحه داستانی ست که از تو شروع می شود </p>

    <p style=" text-align: right; font-weight: bold; "> عطر ها قدرتی دارند که زمان را متوقف کنند خاطرات را زنده کنند و حس ها را عمیق تر کنند<br> .در رایان ما باور داریم که هر شخص رایحه منحصر به فرد خودش را دارد
        <div class=""></div>
    </p>
    </p>
    <br>
    <br>
    <br>
    <br>
</div>
</nav>


<nav class=" row divmain">
<div class="col-12 col-md-6">
    <h3 style="text-align: right;">افراد مشهور و عطر های خاص شان</h3>
    <br>

    <img width="500" height="250" src="131.jpg" alt="perfum">
    <p>جانی دپ چهره ای که رایحه Sauvage را جاودانه کرد</p>
    <p>در هر قدم و در هر نگاه رایحه ای از قدرت و آزادی و همچنین اصالت جاری است.<br> Dior Sauvage تنها یک عطر نیست امضای مردی است که با سکوتش فریاد می زند. اکنون این عطر افسانه ای را از رایان با تضمین اصالت تهیه کنید. </p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <img style="text-align: right;" width="400px" height="200px" src="1.webp" alt="عکس با نرم  افزار شما هم خوانی نداره"><br> <br>
    <br>
    <br>
    <br>
    <img style="text-align: right;" width="400px" height="200px" src="45.jpg" alt="عکس با نرم  افزار شما هم خوانی نداره"><br> <br>
    <br>
    <br>
    <br>
    <img style="text-align: right;" width="400px" height="200px" src="23.jpg" alt="عکس با نرم  افزار شما هم خوانی نداره"><br> <br>
    <br>
    <br>
    <br>

</div>
<div class="col-12 col-md-6">
    <h4 style="text-align: left;">سایت های مفید</h4>



    <h5 style="text-align: left;"> دسته بندی مطالب </h5>


    <p style="text-align: left; "><span><a class="colora" href="https://safine.net/seo-tutorial/">مقالات آموزش سئو محتوا</a></span></p>


    <p style="text-align: left;"><span><a class="colora" href="https://cando.ac/course_category/web-design/?srsltid=AfmBOopc9NAwUPhUrlz1L-OtHzrOkgMFuR-y0EtIsgNbUDGPyRMSQdR5">آموزش های طراحی سایت</a></span></p>

    <p style="text-align: left; "><span><a class="colora" href="http://rayamarketing.com/blog/Internet-Marketing-Training">آموزش های بازاریابی اینترنتی</a></span> </p>
    <p style="text-align: left; "><span><a class="colora" href=" https://www.google.com">گوگل </a></span> </p>

    <p style="text-align: left; "><span><a class="colora" href="https://www.heyvagroup.com/shownews/4848/%D8%B3%D8%A7%DB%8C%D8%AA-%D8%B3%D8%A7%D8%B2%D9%85%D8%A7%D9%86-%D8%B3%D9%86%D8%AC%D8%B4-%DA%A9%D9%86%DA%A9%D9%88%D8%B1-%D8%B3%D8%B1%D8%A7%D8%B3%D8%B1%DB%8C-sanjesh.org.html">سنجش کنکور  </a></span> </p>



</div>

</nav>


<?php
include("theme-footer.html");
?>
