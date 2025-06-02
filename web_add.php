<?php
include("theme-header.php");
?>

<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0"><i class="fas fa-plus-circle me-2"></i>افزودن محصول جدید</h4>
            </div>
            <div class="card-body">
                <form action="web_add_action.php" method="post"  enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">نام عطر یا ادکلن</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="نام ادکلن" required>
                    </div>
                    <div class="mb-3">
                        <label for="desciption" class="form-label">توضیحات</label>
                        <input type="text" class="form-control" id="desciption" name="desciption" placeholder="توضیحات" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label"> قیمت</label>
                        <input type="number" class="form-control" id="price" name="price"  placeholder="قیمت" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label"> تصویر</label>
                        <input type="file" class="form-control" id="image" name="image"  placeholder=" تصویر ادکلن " required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i>ذخیره اطلاعات
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include("theme-footer.html");
?>