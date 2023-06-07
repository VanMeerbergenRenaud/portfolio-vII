<!-- Class footer -->
<section class="footer">
    <h2 class="hidden">Requête de projet</h2>
    <div class="footer__grid">
        <a href="/contact" class="footer__grid__link__first parallax">
            <div>
                <p class="footer__link__first__text-1">
                    <?= get_field('footer-first-cta') ?>
                </p>
                <p class="footer__link__first__text-2 link__effect">
                    Commencer un projet&nbsp;
                    <img src="<?= get_field('arrow-right'); ?>" alt="">
                </p>
            </div>
        </a>
        <a href="" class="footer__link__second footer__grid__img-1">
            <div class="footer__link__second__container">
                <p class="footer__link__second__text1">
                    <?= get_field('footer-second-cta') ?>
                </p>
                <p class="footer__link__second__text2">
                    <?= get_field('footer-second-cta-text') ?>
                </p>
            </div>
        </a>
        <a href="" class="footer__link__second footer__grid__img-2">
            <div class="footer__link__second__container">
                <p class="footer__link__second__text1">
                    <?= get_field('footer-third-cta') ?>
                </p>
                <p class="footer__link__second__text2">
                    <?= get_field('footer-third-cta-text') ?>
                </p>
            </div>
        </a>
    </div>
</section>