<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<?php get_header(); ?>
    <main>
        <div class="container-1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 786.94 294.29" xml:space="preserve">
              <path class="line anim" d="M151.13,226.53H26.2v-56.4L151.13,21.64h59.77v151.69h30.98v53.2h-30.98v46.13h-59.77V226.53z M151.13,173.33V95.65
            l-66.01,77.67H151.13z" />
              <path class="line anim" d="M669.99,226.53H545.07v-56.4L669.99,21.64h59.77v151.69h30.98v53.2h-30.98v46.13h-59.77V226.53z M669.99,173.33V95.65
            l-66.01,77.67H669.99z" />
              <path class="line anim" d="M393.47,80.81c36.58,0,66.34,29.76,66.34,66.34c0,36.58-29.76,66.34-66.34,66.34s-66.34-29.76-66.34-66.34
            C327.13,110.57,356.89,80.81,393.47,80.81 M393.47,21.81c-69.22,0-125.34,56.11-125.34,125.34s56.11,125.34,125.34,125.34
            s125.34-56.11,125.34-125.34S462.69,21.81,393.47,21.81L393.47,21.81z" />
            </svg>
        </div>
        <div class="container-2">
            <h1 class="error404__title">Page non trouvée...</h1>
            <p class="error404__text">Vous êtes perdu&nbsp;?</p>
            <a href="<?= get_home_url(); ?>" title="Retour à l'accueil" class="error404__link glow-on-hover">
                Retourner à l'accueil
            </a>
        </div>
    </main>
<?php get_footer(); ?>