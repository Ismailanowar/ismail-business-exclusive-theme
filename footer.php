<footer>
   <footer>

<!-- TOP FOOTER -->
<div class="footer-top py-5">
    <div class="container">
        <div class="row text-center text-md-start">

            <!-- 1. ABOUT -->
            <div class="col-md-3 mb-4">
                <h5>About Me</h5>
                <p>
                    We are a professional web development agency building modern websites.
                </p>
            </div>

            <!-- 2. THEME INFO -->
            <div class="col-md-3 mb-4">
                <h5>Theme Info</h5>
                <p>
                    Theme Name: <strong><?php bloginfo('name'); ?></strong>
                </p>
            </div>

            <!-- 3. FOOTER MENU -->
            <div class="col-md-3 mb-4">
                <h5>Quick Links</h5>

                <?php
                wp_nav_menu([
                    'theme_location' => 'footer',
                    'container'      => false,
                    'menu_class'     => 'footer-menu',
                ]);
                ?>

            </div>

            <!-- 4. SEARCH -->
            <div class="col-md-3 mb-4">
                <h5>Search</h5>
                <?php get_search_form(); ?>
            </div>

        </div>
    </div>
</div>
<!-- BOTTOM FOOTER -->
<div class="footer-bottom text-center py-3">
    <p class="mb-0">
        © <?php echo date('Y'); ?> All rights reserved
    </p>
</div>

</footer>

<?php wp_footer(); ?>
</body>
</html>

<script>
document.addEventListener("DOMContentLoaded", function () {

    /* =========================
       FILTER SYSTEM
    ========================= */
    const buttons = document.querySelectorAll(".filter-btn");
    const items = document.querySelectorAll(".service-item");

    buttons.forEach(btn => {
        btn.addEventListener("click", () => {

            let filter = btn.getAttribute("data-filter");

            items.forEach(item => {

                if (filter === "all") {
                    item.style.display = "block";
                } else {
                    item.style.display = item.classList.contains(filter) ? "block" : "none";
                }

            });

        });
    });

    /* =========================
       BEFORE AFTER SLIDER
    ========================= */
    document.querySelectorAll(".ba-slider").forEach(slider => {

        const after = slider.querySelector(".after-wrapper");
        const handle = slider.querySelector(".slider-handle");

        let isDown = false;

        const move = (clientX) => {
            let rect = slider.getBoundingClientRect();
            let x = clientX - rect.left;

            let percent = (x / rect.width) * 100;

            if (percent < 0) percent = 0;
            if (percent > 100) percent = 100;

            after.style.width = percent + "%";
            handle.style.left = percent + "%";
        };

        slider.addEventListener("mousedown", (e) => {
            isDown = true;
            move(e.clientX);
        });

        slider.addEventListener("mouseup", () => isDown = false);
        slider.addEventListener("mouseleave", () => isDown = false);

        slider.addEventListener("mousemove", (e) => {
            if (!isDown) return;
            move(e.clientX);
        });

        /* Mobile support */
        slider.addEventListener("touchmove", (e) => {
            move(e.touches[0].clientX);
        });

    });

});
</script>
</footer>

<?php wp_footer(); ?>
</body>
</html>