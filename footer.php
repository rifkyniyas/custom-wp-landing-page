<footer>
    <section class="max-w-3xl mx-auto flex-col-center gap-y-16 py-44 mobile-padding">
        <h2 class="font-body font-medium text-6xl text-center">
            People who are ready took these courses!
        </h2>
        <a href="#" class="btn btn-primary">Schedule demo</a>
    </section>
    <div class="max-w-6xl mx-auto grid md:justify-items-center grid-cols-2 md:grid-cols-4 md:grid-rows-2 
        gap-y-10 pb-8 mobile-padding">
        <div class="footer-section col-span-2 md:col-span-1 order-4 md:order-none">
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.svg" alt="Logo" class="mx-auto md:mx-0">
            </figure>
            <p>P2 09 Alhafeez Heights, Main Blvd Lahore</p>
            <p>All Rights Reserved</p>
        </div>
        <article class="footer-section order-1 md:order-none">
            <h3>Links</h3>
            <ul>
                <li>
                    <a href="#">Overons</a>
                </li>
                <li>
                    <a href="#">Social Media</a>
                </li>
                <li>
                    <a href="#">Counters</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </article>
        <article class="footer-section order-2 md:order-none">
            <h3>Company</h3>
            <ul>
                <li>
                    <a href="#">Terms & Conditions</a>
                </li>
                <li>
                    <a href="#">Privacy Policy</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </article>
        <article class="footer-section col-span-2 md:col-span-1 order-3 md:order-none">
            <h3>Get in touch</h3>
            <p>P2 09 Alhafeez Heights, Main Blvd Lahore</p>
            <a href="tel:92-300-8745564">92-300-8745564</a>
            <a href="mailto:info@techsolutions.net">info@techsolutions.net</a>
        </article>
        <div class="md:col-span-4 col-span-2 flex-col-center text-center order-5 md:order-none">
            <p>© 2021 TechSolutions creative. All rights reserved</p>
            <p class="mt-4">Design by <a href="#">A.R. Shakir</a> </p>
            <p>Developped by <a href="#">Rifky Niyas</a> </p>
        </div>
    </div>
    <div>
        <?php wp_footer(); ?>
    </div>
</footer>
<script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
</body>

</html>