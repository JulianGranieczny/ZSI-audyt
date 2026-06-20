<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            
            <div class="footer-brand">
                <h4>Prime Selection</h4>
                <p><?php echo translatedText('footer_brand_desc'); ?></p>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-links">
                <h4><?php echo translatedText('footer_shop'); ?></h4>
                <ul>
                    <li><a href="#"><?php echo translatedText('shop_fashion'); ?></a></li>
                    <li><a href="#"><?php echo translatedText('shop_electronics'); ?></a></li>
                    <li><a href="#"><?php echo translatedText('shop_home'); ?></a></li>
                    <li><a href="#"><?php echo translatedText('shop_sports'); ?></a></li>
                    <li><a href="#"><?php echo translatedText('shop_new'); ?></a></li>
                    <li><a href="#"><?php echo translatedText('shop_sale'); ?></a></li>
                </ul>
            </div>

            <div class="footer-links">
                <h4><?php echo translatedText('footer_support'); ?></h4>
                <ul>
                    <li><a href="#"><?php echo translatedText('support_help'); ?></a></li>
                    <li><a href="#"><?php echo translatedText('support_track'); ?></a></li>
                    <li><a href="#"><?php echo translatedText('support_returns'); ?></a></li>
                    <li><a href="#"><?php echo translatedText('support_shipping'); ?></a></li>
                    <li><a href="#"><?php echo translatedText('support_size'); ?></a></li>
                    <li><a href="#"><?php echo translatedText('support_contact'); ?></a></li>
                </ul>
            </div>

            <div class="footer-contact">
                <h4><?php echo translatedText('footer_contact_title'); ?></h4>
                <ul class="contact-info">
                    <li><i class="fa-solid fa-location-dot"></i> <span>123 Prime Avenue, Suite 400<br>New York, NY 10001</span></li>
                    <li><i class="fa-solid fa-phone"></i> <span>+1 (800) 742-7463</span></li>
                    <li><i class="fa-regular fa-envelope"></i> <span>support@primeselection.com</span></li>
                </ul>

                <div class="footer-newsletter">
                    <label><?php echo translatedText('newsletter'); ?></label>
                    <form action="#" method="POST" class="newsletter-form">
                        <input type="email" placeholder="<?php echo translatedText('email_placeholder'); ?>" required>
                        <button type="submit">Go</button>
                    </form>
                </div>
            </div>
            
        </div>

        <div class="footer-bottom">
            <div class="copyright">
                &copy; <?php echo date('Y'); ?> Prime Selection. <?php echo translatedText('all_rights_reserved'); ?>
            </div>
            <div class="footer-legal">
                <a href="#"><?php echo translatedText('privacy_policy'); ?></a>
                <a href="#"><?php echo translatedText('terms_of_service'); ?></a>
                <a href="#"><?php echo translatedText('cookie_policy'); ?></a>
            </div>
        </div>
    </div>
</footer>