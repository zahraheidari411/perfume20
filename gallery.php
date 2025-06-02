<?php
include("theme-header.php");
?>


<head>
    <style>   
 /* استایل گالری */
        
 .gallery {
        display: inline;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            /* چیدمان شبکه‌ای */
            gap: 15px;
            /* فاصله بین تصاویر */
            padding: 20px;
            justify-items: center;
        }
        /* استایل برای هر تصویر */
        transform: scale(1.1);
    }
    /* عنوان تصویر */
    
    .gallery-item .caption {
        position: absolute;
        bottom: 10px;
        left: 10px;
        color: white;
        padding: 5px 10px;
        font-size: 1.2em;
        border-radius: 5px;
    }
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        li{color:black;}
        .gallery-item img {
            width:280px;
            height:280px;
            object-fit: cover;
            /* تغییر اندازه تصاویر به تناسب */
            transition: transform 0.4s ease;
            /* انیمیشن تغییر اندازه تصویر */
        }
        /* افکت روی تصویر هنگام هاور */
        
        .gallery-item:hover img {
            transform: scale(1.1);
        }
        /* عنوان تصویر */
        
        .gallery-item .caption {
            position: absolute;
            bottom: 10px;
            left: 10px;
         
            color: white;
            padding: 5px 10px;
            font-size: 1.2em;
            border-radius: 5px;
        }
 
</style>
</head>
  <nav class="row divmain">
<div class="col-12 ">
  <ul>
        <li><a class="dropdown-item" href="woman.php">عطر زنانه</a></li>
        <li><a class="dropdown-item" href="men.php">عطر مردانه</a></li>
    </ul>
    </div>




            <div class="col-12 col-sm-3">
            <div class="gallery">
            <div class="gallery-item">
            
            <img src="12.jpg" alt="Artwork 1">
        </div>
        <div class="caption">عطر SHARAA رایحه‌ای پیچیده و جذاب  ترکیب نت‌های میوه‌ای و گلی </div><br>
        </div>
        </div>


          
        <div class="col-12 col-sm-3">
        <div class="gallery">
        <div class="gallery-item">
            <img src="1.jpg" alt="Artwork 2">
            
        </div>
        <div class="caption">
            <p>عطر LESAN رایحه‌ای شیک و جذاب با ترکیب نت‌های چوبی و ادویه‌ای</p></div><br>
            
        </div>
        </div>
        
        <div class="col-12 col-sm-3">
        <div class="gallery">
        <div class="gallery-item">
            <img src="51.jpg" alt="Artwork 3">
        </div>
        <div class="caption">سلطان با رایحه‌ای گرم، شرقی و فاخر با نت‌های تند و ادویه‌ای مثل دارچین و زعفران  </div><br>

        </div>
        </div>
</nav>

        <nav class="row divmain">
            <div class="col-12 col-sm-3">
            <div class="gallery">
            <div class="gallery-item">
            <img src="3.jpg" alt="Artwork 4">
        </div>
        <div class="caption">عطر "یارا" یکی از عطرهای معروف است که بوی آن معمولاً نرم، ملایم و دلپذیر است. ترکیبات این عطر ممکن است شامل گل‌ها، میوه‌ها، یا نت‌های چوبی و مشک باشد</div><br>
        </div>
        </div>

        
            <div class="col-12 col-sm-3">
            <div class="gallery">
            <div class="gallery-item">
            <img src="50.jpg" alt="Artwork 5">
        </div>
        <div class="caption">عطرهای CHANEL از معروف‌ترین و لوکس‌ترین عطرهای دنیا هستند که توسط خانه مد فرانسوی شانل (CHANEL) تولید می‌شوند. </div>

        </div>
        </div>

        
            <div class="col-12 col-sm-3">
            <div class="gallery">
            <div class="gallery-item">
            <img src="48.jpg" alt="Artwork 6">
        </div>
        <div class="caption">این محصول در واقع لوسیون بدن است که با رایحه‌ای دلپذیر از نارگیل طراحی شده است و حس نرمی و لطافت به پوست می‌دهد. رایحه‌ای ملایم و گرم دارد که به رایحه نارگیل و دیگر نت‌های شیرین و مرطوب نزدیک است.</div>

        </div>
        </div>
        </nav>

        <nav class="row divmain">
            <div class="col-12 col-sm-3">
            <div class="gallery">
            <div class="gallery-item">
            <img src="6.jpg" alt="Artwork 7">
        </div>
        <div class="caption">Boss یک سری از عطرهای مردانه و زنانه است که در مجموعه‌های مختلفی عرضه می‌شود و معمولاً برای افراد مدرن و شیک طراحی شده است. این عطرها به خاطر رایحه‌های پیچیده و جذاب، ماندگاری خوب و طراحی شیک شناخته می‌شوند</div>

        </div>
        </div>
       
       
            <div class="col-12 col-sm-3">
            <div class="gallery">
            <div class="gallery-item">
            <img src="9.jpg" alt="Artwork 11">
        </div>
        <div class="caption"> رایحه‌ای گرم و شیرین دارد و ترکیبی از کارامل، بادام، و وانیل را در بر می‌گیرد.</div>

        </div>
        </div>

        <div class="col-12 col-sm-3">
            <div class="gallery">
            <div class="gallery-item">
            <img src="10.jpg" alt="Artwork 12">
        </div>
        <div class="caption">
عطر Prada Portraits یکی از مجموعه‌های خاص و لوکس از برند پرادا است که در آن چندین رایحه مختلف عرضه شده است. این مجموعه به‌طور کلی برای کسانی که دنبال عطرهایی با ترکیب‌های پیچیده و منحصر به فرد هستند، طراحی شده.

در این مجموعه، رایحه‌ها به‌طور کلی تأکید بیشتری روی بوی گل‌ها، چوب‌ها و ادویه‌ها دارند.</div>
        </div>
        </div>
    </nav>
        
        <nav class="row divmain">
         
        
        
        
            <div class="col-12 col-sm-3">
            <div class="gallery">
            <div class="gallery-item">
            <img src="11.gif" alt="Artwork 13">
        </div>
        <div class="caption">عطر SCANDAL از برند Jean Paul Gaultier یک ترکیب جذاب و اغواکننده است که به دلیل رایحه شیرین و گرم خود شناخته می‌شود. این عطر زنانه ترکیب خاصی از گل‌ها و ادویه‌هاست که آن را به انتخابی مناسب برای شب‌های سرد و رویدادهای خاص تبدیل می‌کند.</div>

        </div>
        </div>


            <div class="col-12 col-sm-3">
            <div class="gallery">
            <div class="gallery-item">
            <img src="13.webp" alt="Artwork 14">
        </div>
        <div class="caption">عطرهای Jo Malone به‌خاطر طراحی‌های ساده، لوکس و شیک خود معروف هستند. این برند بریتانیایی به‌طور خاص به ترکیب رایحه‌های مختلف با هم و ساخت عطرهایی با حس‌های طبیعی و تازه شناخته می‌شود.</div>

        </div>
        </div>
   
        <div class="col-12 col-sm-3">
            <div class="gallery">
            <div class="gallery-item">
            <img src="31.jpg" alt="Artwork 27">
        </div>
        <div class="caption">برخی از برندها از این کلمه برای به تصویر کشیدن عطرهایی استفاده کرده‌اند که فراتر از مرزهای معمول می‌روند و تجربه‌ای خاص و تخیلی را برای افراد خلق می‌کنند. "Imagination"به عنوان نام یک عطر خاص   </div>

        </div>
        </div>
    </nav>

       

        <nav class="row divmain">
            <div class="col-12 col-sm-3">
            <div class="gallery">
            <div class="gallery-item">
            <img src="21.jpg" alt="Artwork 16">
        </div>
        <div class="caption">عطرهای Bottega Veneta به‌خاطر رایحه‌های شیک، لوکس و پیچیده خود شناخته می‌شوند که به‌ویژه از ترکیب مواد طبیعی با طراحی‌های مدرن و کلاسیک استفاده می‌کنند. </div>

        </div>
        </div>

  
            <div class="col-12 col-sm-3">
            <div class="gallery">
            <div class="gallery-item">
            <img src="16.jpg" alt="Artwork 17">

        </div>
        <div class="caption">نت های ابتدایی:
رایحه‌های لیمو و زنجبیل که احساس تازگی و شادابی را به شما منتقل می‌کنند و آغاز عطر را بسیار انرژی‌بخش و تیز می‌سازند.

نت‌های میانه:
اسطوخودوس و دانه‌ی تونکا به این عطر عمق می‌دهند. اسطوخودوس حس گیاهی و شاداب، در حالی که دانه تونکا به آن حس شیرینی و گرما می‌بخشد.

نت‌های پایانی:
در نت پایانی، رایحه‌های چوب صندل و مشک ترکیب می‌شوند که عطر را سنگین‌تر و ماندگارتر می‌کنند و حس مردانه و جدی به آن می‌دهند </div>

        </div>
        </div>

        
            <div class="col-12 col-sm-3">
            <div class="gallery">
            <div class="gallery-item">
            <img src="22.jpg" alt="Artwork 18">
           
        </div>
        <div class="caption">این عطر با ترکیب‌های مدرن و دل‌پذیر خود به‌طور خاص برای زنان آزاداندیش و مستقل طراحی شده است. My Way به‌عنوان یک عطر با طبع گلی و چوبی شناخته می‌شود که در عین حال احساس طراوت و عمق را به‌خوبی منتقل می‌کند.
        </div>
        </div>
        </div>
        </nav>


          <nav class="row divmain">
            

  
            <div class="col-12 col-sm-3">
            <div class="gallery">
            <div class="gallery-item">
            <img src="24.jpg" alt="Artwork 20">
        </div>
        <div class="caption">عطرهای CHANEL از معروف‌ترین و لوکس‌ترین عطرهای دنیا هستند که توسط خانه مد فرانسوی شانل (CHANEL) تولید می‌شوند </div>

    </div>
        </div>

          
            <div class="col-12 col-sm-3">
            <div class="gallery">
            <div class="gallery-item">
            <img src="26.jpg" alt="Artwork 21">
        </div>
        <div class="caption">Kilian (یا By Kilian) یک برند لوکس فرانسوی در دنیای عطر است که توسط Kilian Hennessy، وارث خانواده معروف تولیدکننده کنیاک Hennessy، در سال 2007 تأسیس شد. این برند به‌خاطر طراحی‌های هنری، شیشه‌های قابل‌شارژ، و رایحه‌های جسورانه و اغواگرانه‌اش معروف است</div>

        </div>
        </div>
        

        
            <div class="col-12 col-sm-3">
            <div class="gallery">
            <div class="gallery-item">
            <img src="80.png" alt="Artwork 22">
        </div>
        <div class="caption"> Sauvage از برند Dior یکی از پرفروش‌ترین و محبوب‌ترین عطرهای مردانه در جهان است که اولین بار در سال 2015 معرفی شد. این عطر که توسط François Demachy طراحی شده، به‌خاطر رایحه‌ای تازه، چوبی و تند شناخته می‌شود و به‌سرعت جایگاه خود را در میان عطرهای مردانه لوکس پیدا کرد</div>

        </div>
        </div>
    </nav>
          <nav class="row divmain">
           
            <div class="col-12 col-sm-3">
            <div class="gallery">
            <div class="gallery-item">
            <img src="88.jpg" alt="Artwork 22">
        </div>
        <div class="caption"> عطر مردانه جورجیو آرمانی (Giorgio Armani Code Profumo) رایحه ای شیرین و دلپذیر

        رایحه ای گرم، شیرین و تند
نت های ابتدایی: سیب سبز، نارنگی ماندارین و هل باز
نت های میانی: جوز هندی، اسطوخودوس و شکوفه پرتقال
نت های پایانی: عنبر، دانه توکا و چرم
        </div>

        </div>
        </div>

        <div class="col-12 col-sm-3">
            <div class="gallery">
            <div class="gallery-item">
            <img src="99.jpg" alt="Artwork 22">
        </div>
        <div class="caption"> 
        عطر مردانه تام فورد توسکان لدر (TOM FORD Tuscan Leather) رایحه ای واقعی از چرم

        رایحه ای تلخ، گرم و چرمی
نت های ابتدایی: تمشک، زعفران و آویشن
نت های میانی: کندر و یاسمین شیرین
نت های پایانی: پایه قوی چرم، جیر، عنبر گرم و آکوردهای چوبی
مشاوره تخصصی انتخاب عطر

برای دریافت مشاوره رایگان انتخاب عطر از کارشناسان راینو،
فرم مقابل را تکمیل کنید.


        </div>

        </div>
        </div>

        <div class="col-12 col-sm-3">
            <div class="gallery">
            <div class="gallery-item">
            <img src="77.jpg" alt="Artwork 22">
        </div>
        <div class="caption"> 
        عطر مردانه دولچه گابانا لایت بلو (DOLCE & GABBANA light blue) از انواع عطر معروف ایتالیایی

       رایحه خنک و مرکباتی
نت های ابتدایی: گریپ فروت، ترنج، ماندارین سیسیلی و درخت عرعر
نت های میانی: فلفل، رزماری و رز برزیلی
نت های پایانی: مشک، بخور و خزه بلوط


        </div>

        </div>
        </div>
    </nav>



<div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


<p style="font-size:18px;">
<b>رازهای پشت رایحه‌های عطر</b>

عطرها از ترکیب چندین نت (notes) تشکیل شده‌اند که هرکدام تأثیرات خاص خود را دارند. این نت‌ها در سه لایه اصلی تقسیم می‌شوند:

نت اولیه (Top Note): این نت‌ها اولین بویی هستند که پس از اسپری عطر احساس می‌کنید. معمولاً این رایحه‌ها ملایم و تازه هستند و بیشتر از مرکبات، گیاهان و ادویه‌ها گرفته می‌شوند.

نت میانه (Heart Note): این نت‌ها پس از گذشت چند دقیقه به نمایش درمی‌آیند و رایحه‌ای پیچیده‌تر و ماندگارتر از نت اولیه دارند. گل‌ها، ادویه‌ها و گیاهان معطر معمولاً در این لایه قرار دارند.

نت پایه (Base Note): این نت‌ها در آخرین مرحله ظاهر می‌شوند و رایحه‌ای عمیق و ماندگار دارند. چوب‌ها، مشک، عنبر و وانیل معمولاً در این بخش یافت می‌شوند و در طول روز به آرامی از عطر پخش می‌شوند.
    </p>
    </div>

    <div>
    <br>
    <br>
    <br>
    


<p style="font-size:18px;">
<b>
تأثیر رایحه‌ها بر خلق و خو و احساسات
    </b>
رایحه‌های مختلف می‌توانند تأثیرات روانی و عاطفی خاصی بر افراد بگذارند. تحقیقات نشان داده‌اند که عطرها می‌توانند در تغییر خلق و خو، کاهش استرس و حتی تحریک حس‌های مختلف مؤثر باشند:

رایحه‌های گل‌دار مانند یاس و گل رز می‌توانند احساس آرامش و سرزندگی ایجاد کنند.

رایحه‌های میوه‌ای مثل لیمو و توت فرنگی می‌توانند حس تازگی و شادابی را منتقل کنند.

رایحه‌های چوبی و دودی مانند چوب صندل و کهربا معمولاً برای ایجاد حس اعتماد به نفس و قدرت به کار می‌روند.

رایحه‌های وانیلی و شیرین حس راحتی و گرما را ایجاد می‌کنند.


    </p>
    </div>


<div>
    <p >
        <b>
چرا عطر باید به شخصیت شما بخورد؟
    </b>
عطر شما یکی از اولین چیزهایی است که دیگران از شما حس می‌کنند. انتخاب یک عطر مناسب می‌تواند بخشی از شخصیت شما را نمایان کند و تأثیر زیادی بر نحوه برخورد دیگران با شما داشته باشد. برای مثال:

افرادی که به دنبال عطرهای خاص و پیچیده هستند، معمولاً شخصیت‌های منحصر به فرد و مستقل دارند.

افرادی که عطرهای ملایم و گلی را می‌پسندند، معمولاً شخصیت‌های حساس و لطیف دارند.

آنهایی که رایحه‌های گرم و چوبی را ترجیح می‌دهند، شخصیت‌هایی با اعتماد به نفس و قوی دارند.

عطر شما نه تنها بیانگر شخصیت شما است، بلکه می‌تواند احساسات خاصی را در دیگران برانگیزد و حتی یادآور لحظات یا مکان‌های خاص باشد.
    </p>
    </div>

    <div>
    <p >
        <b>

        نکات مهم در انتخاب عطر برای هدیه
    </b>
انتخاب عطر به عنوان هدیه می‌تواند یک انتخاب فوق‌العاده و خاص باشد، اما باید در نظر داشت که:

نیاز است که به سلیقه فرد مقابل توجه کنید. اگر فردی که به او هدیه می‌دهید شخصیتی شاد و پر انرژی دارد، عطرهای میوه‌ای و تازه بهترین انتخاب هستند. برای فردی که سلیقه‌ای کلاسیک و جدی دارد، عطرهای چوبی و مشکی مناسب‌ترند.

گرفتن مشاوره از فروشندگان یا متخصصان عطر می‌تواند بسیار کمک‌کننده باشد. آنها می‌توانند شما را در انتخاب رایحه‌ای که مناسب فرد مورد نظر شماست، راهنمایی کنند.

استفاده از تسترها (نمونه‌های کوچک عطر) قبل از خرید عطر اصلی بسیار مفید است. به این ترتیب می‌توانید اطمینان حاصل کنید که رایحه به درستی با سلیقه فرد مورد نظر همخوانی دارد.


    </p>
    </div>


    </nav>
           

  

        
   
        
     

</nav>
<?php
include("theme-footer.html");
?>

