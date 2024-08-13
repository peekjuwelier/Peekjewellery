<?php get_header()?>
<div class="main">
    <div class="error">
        <div class="error__code">404</div>
        <div class="error__message">
            De pagina die u zoekt,<br>
            kan niet worden gevonden
        </div>
        <a class="lightBg__return-button-link" href="<?= home_url() ?>">
            <div class="lightBg__return-button">Terug naar startpagina</div>
        </a>
    </div>
</div>
<?php get_footer()?>