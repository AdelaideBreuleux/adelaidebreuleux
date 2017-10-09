<div class="pull">
    <span></span>
    <span></span>
    <span></span>
</div>
<div class="menu">
    <div class="menu_top">
        <li><a href="?page=home" class="<?php echo (!isset($_GET['page']) || $_GET['page'] == 'home' ) ? '' : null; ?>">À propos</a></li>
        <li><a href="?page=portfolio" class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'portfolio' ) ? '' : null; ?>">Portfolio</a></li>
        <li><a href="?page=contact" class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'contact' ) ? '' : null; ?>">Contact</a></li>
    </div>
    <div class="socials">
        <li class="linkedin"><a href="https://www.linkedin.com" target=_blank><img src="app/ressources/img/linkedin.png" alt='Logo Linkedin'></a></li>
        <li class="behance"><a href="https://www.behance.com" target=_blank><img src="app/ressources/img/behance.png" alt='Logo Behance'></a></li>
    </div>
    <div class="barre"></div>
</div>
</div>