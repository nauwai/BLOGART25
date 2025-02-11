
<!-- footer section start -->
<div class="footer_section layout_padding">
    <div class="container">
        <div class="footer_logo"><a href="<?php echo ROOT_URL .'/index.php' ?>"><img src="<?php echo ROOT_URL . '/src/images/logo_blog.png' ?>" width="300"></a></div>
        <div class="footer_menu">
            <ul>
                <li><a href="<?php echo ROOT_URL .'/index.php' ?>">Accueil</a></li>
                <li><a href="<?php echo ROOT_URL .'/blog.php' ?>">Blog</a></li>
                <li><a href="<?php echo ROOT_URL .'/views/frontend/rgpd/politiques.php' ?>">Politique</a></li>
                <li><a href="<?php echo ROOT_URL .'/views/frontend/rgpd/cgu.php' ?>">Conditions Générales</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- copyright section end -->
<!-- Javascript files-->

<script>
    const search = document.getElementById('search-btn')
    const searchInput = document.querySelector('.search-input');
    search.addEventListener('click', function () {
        searchInput.style.display = 'block';
    })
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        if (!sessionStorage.getItem("cookieModalShown")) {
            let cookieModal = new bootstrap.Modal(document.getElementById("cookieModal"));
            cookieModal.show();
            sessionStorage.setItem("cookieModalShown", "true");
        }
        document.getElementById("acceptCookies").addEventListener("click", function() {
            let cookieModal = bootstrap.Modal.getInstance(document.getElementById("cookieModal"));
            cookieModal.hide();
        });
        document.getElementById("rejectCookies").addEventListener("click", function() {
            let cookieModal = bootstrap.Modal.getInstance(document.getElementById("cookieModal"));
            cookieModal.hide();
        });
    });
</script>

<script src="<?php echo ROOT_URL . '/src/js/jquery.min.js' ?>"></script>
<script src="<?php echo ROOT_URL . '/src/js/popper.min.js' ?>"></script>
<script src="<?php echo ROOT_URL . '/src/js/bootstrap.bundle.js' ?>"></script>
<script src="<?php echo ROOT_URL . '/src/js/jquery-3.0.0.min.js' ?>"></script>
<script src="<?php echo ROOT_URL . '/src/js/plugin.js' ?>"></script>
<!-- sidebar -->
<script src="<?php echo ROOT_URL . '/src/js/jquery.mCustomScrollbar.concat.min.js' ?>"></script>
<script src="<?php echo ROOT_URL . '/src/js/custom.js' ?>"></script>

<!-- javascript -->
<script src="<?php echo ROOT_URL . '/src/js/owl.carousel.js' ?>"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>
</html>