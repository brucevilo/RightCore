<footer id="footer" class="l-footer">
    <div class="l-footer__telephone">
        <div class="l-footer__container">
            <div class="telephone-content">
                <div class="tel">
                    TEL: 052-846-9696
                </div>
                <div class="off-hrs">
                    営業時間：9:00～18:00／定休日：水曜
                </div>
            </div>
        </div>
    </div>
    <div class="l-footer__map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13043.570240454386!2d136.8108613!3d35.1842303!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x194bbd2023c1bc31!2z44K044O844OK44OK44K_44Kk44Ok44Ov44O844Kv44K5IDU344K_44Kk44Ok44Ov44O844Kv44K5!5e0!3m2!1sja!2sjp!4v1598839074932!5m2!1sja!2sjp" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <img onclick="topFunction()" src="<?php echo get_template_directory_uri(); ?>../assets/img/footer/page-top.png" id="go-top" class="page-top" alt="Page Top">
    </div>
    <div class="l-footer__bottom">
        <div class="privacy">
            <a href="<?php echo get_permalink(get_page_by_path('Privacy')) ?>">
                プライバシーポリシー
            </a>
        </div>
        <div class="copy-right">
            © 57タイヤワークス
        </div>
    </div>
</footer>
<script>
    var mybutton = document.getElementById("go-top");
    window.onscroll = function() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    };
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

</body>

</html>