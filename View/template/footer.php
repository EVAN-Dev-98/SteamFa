<footer>
   <section class="main-footer">
      <section class="col">
        <h4>درباره ما</h4>
        <p><?php global $SiteAbout; echo $SiteAbout; ?></p>
      </section>
      <section class="col">
         <h4>ما را دنبال کنید</h4>
         <ul>
            <li><a href="https://www.instagram.com/evan_ir_official/" target="_follow"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://t.me/ASCII_83_71_72" target="_follow"><i class="fab fa-telegram-plane"></i></a></li>
            <li><a href="" target="_follow"><i class="fab fa-twitter"></i></a></li>
            <li><a href="" target="_follow"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="" target="_follow"><i class="fab fa-youtube"></i></a></li>
            <li><a href="" target="_follow"><i class="fab fa-google-plus-g"></i></a></li>
         </ul>
      </section>
      <section class="col">
         <h4>جست و جو</h4>
         <li><input id="footer_search" class="search" type="text" name="search" value="" placeholder="دنبال چی میگردی ؟" onfocus="this.placeholder=''" onblur="this.placeholder='دنبال چی میگردی ؟'"></li>
         <h4>عضویت در خبرنامه</h4>
         <span id="nlicon" class="nl-icon"><i class="fas fa-envelope"></i></span>
         <input id="nl" class="nl" type="text" name="nl" value="" placeholder="ایمیل خود را وارد کنید." onfocus="focused(this)" onblur="unfocused(this)">
         <a id="nlbtn" class="nl-btn" href="">تایید</a>
         <script>
            var nlicon = document.getElementById("nlicon");
            var nl = document.getElementById("nl");
            var nlbtn = document.getElementById("nlbtn");
            function focused(f){
               f.classList.add("focused");
               nlicon.classList.add("focused");
               nlbtn.classList.add("focused");
               f.placeholder = '';
            }
            function unfocused(uf){
               uf.classList.remove("focused");
               nlicon.classList.remove("focused");
               nlbtn.classList.remove("focused");
               uf.placeholder = 'ایمیل خود را وارد کنید.';
            }
         </script>
      </section>
      <section class="info" role="contentinfo">
         <p>Made By Evan With ♥ | Version : <?php include $Model . "settings.php"; echo $SiteVersion; ?></p>
      </section>
   </section>
</footer>
<?php get_template("bootstrap"); ?>
</body>
</html>