<?php
include("theme-header.php");
?>


<head>
    <style> 
        .pcenter {
            text-align: center;
        }
        
        .container {
            width: 70%;
            margin: 13px auto;
        }
        
        .privacy-section {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            animation: fadeInUp 1s ease-out;
        }
        
        .privacy-section h2 {
            color: #5c0417;
            border-bottom: 2px solid #5c0417;
            ;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        
        .privacy-section p {
            margin-bottom: 15px;
            line-height: 1.6;
        }
        
        .privacy-section ul {
            list-style-type: none;
            padding: 0;
        }
        
        .privacy-section ul li {
            background-color: #e7e7e7;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            animation: fadeInUp 1s ease-out;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        

        </style>
</head>

<nav class="row divmain">
    <div class="col-12  privacy-section">
        <h2>اطلاعات جمع‌آوری شده</h2>
        <p>ما اطلاعات شخصی شما را تنها با رضایت شما جمع‌آوری می‌کنیم. این اطلاعات می‌تواند شامل نام، آدرس ایمیل، شماره تلفن و سایر اطلاعات مشابه باشد.</p>
    </div>
    
    <div class=" col-12 privacy-section">
        <h2>نحوه استفاده از اطلاعات</h2>
        <p>ما از اطلاعات شما برای بهبود خدمات خود، پاسخ به سوالات شما و ارسال اطلاعیه‌های مهم استفاده می‌کنیم. اطلاعات شما تحت هیچ شرایطی به شخص یا سازمان دیگری منتقل نخواهد شد.</p>
    </div>
    
    <div class="col-12 privacy-section">
        <h2>حفاظت از اطلاعات</h2>
        <p>ما از روش‌های امنیتی مناسب برای محافظت از اطلاعات شخصی شما استفاده می‌کنیم. تمامی اطلاعات شما در سرورهای امن ذخیره می‌شود و تنها افراد مجاز به این اطلاعات دسترسی دارند.</p>
        <ul>
            <li>اطلاعات شما در سرورهای امن ذخیره می‌شود.</li>
            <li>تنها افراد مجاز به اطلاعات شما دسترسی دارند.</li>
            <li>ما از تکنولوژی‌های پیشرفته برای محافظت از اطلاعات شما استفاده می‌کنیم.</li>
        </ul>
    </div>
</nav>

<?php
include("theme-footer.html");
?>