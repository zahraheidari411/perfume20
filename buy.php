<?php
include("theme-header.php");
?>
<head>
    <style>

        /* استایل برای بخش خرید */
        .container {
            width: 80%;
            margin: 50px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            text-align: center;
        }

        .product-list {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .product-item {
            background-color: 
            border: 1px solid #ddd;
            width: 30%;
            margin: 10px;
            border-radius: 8px;
            padding: 10px;
            box-sizing: border-box;
            text-align: center;
        }

        .product-item img {
            max-width: 100%;
            border-radius: 8px;
        }

        .product-item h3 {
            margin: 10px 0;
            font-size: 18px;
        }

        .product-item p {
            font-size: 14px;
            color: #777;
        }

        .product-item .price {
            font-size: 20px;
            color: #e74c3c;
        }

        .product-item button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .product-item button:hover {
            background-color: #2980b9;
        }

        /* فرم خرید */
        .order-form {
            margin-top: 30px;
        }

        .order-form input,
        .order-form select,
        .order-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
            box-sizing: border-box;
        }

        .order-form button {
            background-color: #27ae60;
            color: white;
            border: none;
            padding: 15px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        .order-form button:hover {
            background-color: #2ecc71;
        }



        </style>
</head>


<div class="container">
        <h2>انتخاب عطر و ثبت سفارش</h2>

        <!-- لیست محصولات -->
        <div class="product-list">
            <div class="product-item">
                <img src="1.jpg" alt="عطر زنانه">
                <h3> Aعطر زنانه</h3>
                <p>با رایحه‌ای دلپذیر و ماندگار</p>
                <p class="price">800,000 تومان</p>
                <button onclick="addToCart('عطر زنانه', 800000)">اضافه به سبد خرید</button>
            </div>
            <div class="product-item">
                <img src="2.jpg" alt="عطر زنانه">
                <h3> Bعطر زنانه</h3>
                <p>با رایحه‌ای دلپذیر و خاص</p>
                <p class="price">900,000 تومان</p>
                <button onclick="addToCart('عطر زنانه', 900000)">اضافه به سبد خرید</button>
            </div>
            <div class="product-item">
                <img src="3.jpg" alt="عطر زنانه">
                <h3>عطر زنانه C</h3>
                <p>با رایحه‌ای عالی و ماندگار</p>
                <p class="price">1,000,000 تومان</p>
                <button onclick="addToCart('عطر زنانه', 1000000)">اضافه به سبد خرید</button>
            </div>

            <div class="product-item">
                <img src="80.png" alt="عطر مردانه">
                <h3>عطر مردانه D</h3>
                <p>رایحه‌ای شیک و جذاب</p>
                <p class="price">20,000,000 تومان</p>
                <button onclick="addToCart('عطر مردانه', 20000000)">اضافه به سبد خرید</button>
            </div>
            <div class="product-item">
                <img src="29.jpg" alt="عطر مردانه">
                <h3>عطر مردانه E</h3>
                <p>رایحه‌ای عالی و ماندگار</p>
                <p class="price">780,000 تومان</p>
                <button onclick="addToCart('عطر مردانه', 780000)">اضافه به سبد خرید</button>
            </div>
            <div class="product-item">
                <img src="26.jpg" alt="عطر مردانه">
                <h3>عطر مردانه F</h3>
                <p> رایحه‌ای جذاب</p>
                <p class="price">2,000,000 تومان</p>
                <button onclick="addToCart('عطر مردانه', 2000000)">اضافه به سبد خرید</button>
            </div>

            <div class="product-item">
                <img src="80.png" alt="عطر مردانه">
                <h3>محبوب ترین ها G</h3>
                <p>رایحه‌ای شیک و جذاب</p>
                <p class="price">20,000,000 تومان</p>
                <button onclick="addToCart('عطر مردانه', 20000000)">اضافه به سبد خرید</button>
            </div>
        </div>

       <!-- buy.php -->
<form action="buy_process.php" method="post">
  <label>نام:</label>
  <input type="text" name="name" required><br>

  <label>ایمیل:</label>
  <input type="email" name="email" required><br>

  <label>انتخاب عطر:</label>
  <select name="product">
    <option value="عطر A">عطر A</option>
    <option value="عطر B">عطر B</option>
    <option value="عطر C">عطر C</option>
    <option value="عطر D">عطر D</option>
    <option value="عطر E">عطر E</option>
    <option value="عطر F">عطر F</option>
    <option value="عطر G">عطر G</option>

  </select><br>

  <button type="submit">ادامه خرید</button>
</form>

    </div>

    <script>
        function addToCart(product, price) {
            alert(product + ' با قیمت ' + price.toLocaleString() + ' تومان به سبد خرید اضافه شد!');
        }
    </script>

















<?php
include("theme-footer.html");
?>