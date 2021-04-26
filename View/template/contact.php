<form action="<?php echo_engine("do-contact.php"); ?>" method="post" class="contact">
   <p class="form-title">فرم تماس با ما</p>
   <br>
   <label class="form-lbl" for="name">نام : </label>
   <input type="text" placeholder="نام" id="name" name="name" title="نام شما" required="required"><br>
   <label class="form-lbl" for="email">ایمیل : </label>
   <input type="email" placeholder="ایمیل" id="email" name="email" title="ایمیل" required="required"><br>
   <label class="form-lbl" for="subject">موضوع : </label>
   <input type="text" placeholder="موضوع" id="subject" name="subject" title="موضوع پیام" required="required"><br>
   <label class="form-lbl" for="message">پیام : </label><br>
   <textarea id="message" rows="5" cols="24" placeholder="متن پیام شما" name="message" title="متن پیام شما" required="required"></textarea>
   <br>
   <input type="submit" id="submit" name="submit" title="ارسال پیام" value="ارسال">
   <input type="reset" id="reset" title="پاک کردن" value="پاک کردن">
</form>