<?php include("theme-header.php"); ?>

<div class="container mt-5">
    <h1 class="text-center">تماس با ما</h1>

    <div class="row">
        <!-- بخش اطلاعات تماس -->
        <div class="col-md-6">
            <h3>راه‌های ارتباطی:</h3>
            <ul class="list-unstyled">
                <li><strong>تلفن:</strong> +98 912 345 6789</li>
                <li><strong>فکس:</strong> +98 21 1234 5678</li>
                <li><strong>ایمیل:</strong> <a href="mailto:info@example.com">info@example.com</a></li>
                <li><strong>آیدی تلگرام:</strong> <a href="https://t.me/example" target="_blank">@example</a></li>
                <li><strong>آیدی واتساپ:</strong> <a href="https://wa.me/+989123456789" target="_blank">+98 912 345 6789</a></li>
                <li><strong>اینستاگرام:</strong> <a href="https://www.instagram.com/example" target="_blank">@example</a></li>
            </ul>
        </div>

        <!-- بخش نقشه گوگل -->
        <div class="col-md-6">
            <h3>موقعیت مکانی ما:</h3>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.1840649071027!2d79.20210820867566!3d39.74204322612277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8888436f68b79b0f%3A0x50b3e94fe90b72b!2sNew%20York%20City%2C%20NY!5e0!3m2!1sen!2sus!4v1618196500920!5m2!1sen!2sus" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

    <!-- فرم تماس -->
    <div class="row mt-5">
        <div class="col-md-12">
            <h3>لطفاً پیام خود را ارسال کنید:</h3>
            <form action="contact_action.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">نام شما</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">ایمیل شما</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">پیام شما</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">ارسال پیام</button>
            </form>
        </div>
    </div>

    <!-- ساعات کاری -->
    <div class="row mt-5">
        <div class="col-md-12">
            <h3>ساعات کاری:</h3>
            <ul class="list-unstyled">
                <li><strong>شنبه تا چهارشنبه:</strong> 9:00 صبح تا 5:00 عصر</li>
                <li><strong>پنج‌شنبه:</strong> 9:00 صبح تا 3:00 عصر</li>
                <li><strong>جمعه:</strong> تعطیل</li>
            </ul>
        </div>
    </div>

    <!-- پشتیبانی آنلاین -->
    <div class="row mt-5">
        <div class="col-md-12">
            <h3>پشتیبانی آنلاین:</h3>
            <p>در صورتی که به پشتیبانی فوری نیاز دارید، لطفاً با ما از طریق آیدی تلگرام یا واتساپ تماس بگیرید.</p>
        </div>
    </div>

</div>


       


<?php include("theme-footer.html"); ?>
