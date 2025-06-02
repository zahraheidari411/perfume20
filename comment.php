
<?php
include("theme-header.php");
?>
<section style="max-width: 800px; margin: auto; padding: 20px; font-family: 'Tahoma', sans-serif; line-height: 1.8; background-color: #f9f9f9; border-radius: 8px;">
  <h2 style="text-align: center; color: #333; font-size: 28px; font-weight: bold;">✨ نظرات مشتریان عزیز ✨</h2>
  
  <p style="font-size: 18px; color: #555; text-align: center;">آیا شما هم به دنیای جذاب عطرها وارد شده‌اید؟  
  انتخاب یک عطر مناسب می‌تواند تأثیر زیادی در روز شما و حتی در ارتباط با دیگران داشته باشد.  
  ما در فروشگاه [نام فروشگاه شما] به شما این فرصت را می‌دهیم که نظرات خود را درباره محصولات مختلف با دیگران به اشتراک بگذارید.</p>
  
  <h3 style="color: #333; text-align: center; margin-top: 20px;">⭐ امتیاز بدهید و نظر خود را به اشتراک بگذارید ⭐</h3>
  
  <p style="font-size: 16px; color: #555; text-align: center; margin-bottom: 20px;">لطفاً به عطر مورد نظر خود امتیاز دهید و تجربه‌تان را بنویسید.  
  شما می‌توانید در مورد موارد زیر صحبت کنید:</p>
  
  <ul style="font-size: 16px; color: #555; padding-left: 20px;">
    <li>ماندگاری رایحه</li>
    <li>احساس بعد از استفاده</li>
    <li>کیفیت و طراحی بطری</li>
    <li>تناسب رایحه با فصل‌ها و موقعیت‌های مختلف</li>
  </ul>
  
  <p style="font-size: 16px; color: #555; text-align: center; margin-top: 20px;">نظرات شما به دیگران کمک می‌کند تا تصمیم بهتری بگیرند و انتخابی که با شخصیت‌شان همخوانی دارد، داشته باشند.</p>
  
  <h3 style="color: #333; text-align: center; margin-top: 30px;">🌹 به اشتراک گذاری رایحه‌های خاص، تجربه‌ای متفاوت است.</h3>
  
  <p style="font-size: 16px; color: #555; text-align: center;">ما منتظر شنیدن تجربه‌های شما هستیم! پس همین حالا به ما بگویید کدام عطر شما را به دنیای جذاب و لوکس رایحه‌ها برده است. 💫</p>
  
  <form action="submit_review.php" method="POST" style="text-align: center; margin-top: 30px;">
    <label for="rating" style="font-size: 16px; color: #333;">امتیاز:</label>
    <select name="rating" id="rating" style="padding: 10px; margin: 10px;">
      <option value="1">۱ ستاره</option>
      <option value="2">۲ ستاره</option>
      <option value="3">۳ ستاره</option>
      <option value="4">۴ ستاره</option>
      <option value="5">۵ ستاره</option>
    </select>

    <textarea name="review_text" id="review_text" rows="4" placeholder="نظرات خود را درباره این عطر بنویسید..." style="padding: 10px; width: 80%; margin-bottom: 20px;"></textarea>

    <button type="submit" style="background-color: #f1c40f; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
      ارسال نظر
    </button>
  </form>
</section>

<?php
include("theme-footer.html");
?>