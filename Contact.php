<?php
$title = "تماس با ما | استیم فارسی";
include 'Theme/header.php';
include 'Theme/footer.php';
?>
<form action="Engine/do-contact.php" method="post" class="col-sm-4 mt-5 m-auto px-3">
    <div class="mb-3">
        <label for="title" class="form-label">عنوان : </label>
        <input type="text" name="title" id="title" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">ایمیل : </label>
        <input type="email" name="email" id="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">متن : </label>
        <textarea id="description" name="description" class="form-control" required></textarea>
    </div>
    <input type="submit" value="ارسال" id="submit" class="btn btn-outline-primary">
</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>