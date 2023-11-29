<?php
/* Header Template */
?>
<?php
    $compagnons_logo_ID= get_theme_mod("custom_logo");
    $logo_src= wp_get_attachment_image_src($compagnons_logo_ID, "full");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title><?php wp_title("Les Compagnons - "); ?></title>
    <?php  wp_head(); ?>
</head>
    <body>
    <header class="">
        <a href="<?php bloginfo("template_url") ?>/accueil/" aria-label="Accueil"><img class="logo" src="<?php echo $logo_src[0] ?>" alt="Logo Les Compagnons de la mise en valeur du patrimoine vivant"></a>
        <div class="hamburger-menu-btn" id="nav-icon3">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
        </div>
        <div class="background_header_btn"></div>
        <div class="header-container">
            <nav class="top_nav">
                <ul class="top_nav_menu">
                    <li class="top_nav_menu_item"><a class="top_nav_item_link" href="<?php bloginfo("template_url") ?>/evenements_a_venir/"><span class="top-nav-text">Événements à venir</span></a></li>
                    <li class="top_nav_menu_item"><a class="top_nav_item_link" href="https://lepointdevente.com/les-compagnons-de-la-mise-en-valeur-du-patrimoine-vivant-de-troi" target="_blank"><span class="top-nav-text">Acheter des billets</span></a></li>
                    <li class="top_nav_menu_item"><a class="top_nav_item_link" href="<?php bloginfo("template_url") ?>/contact/"><span class="top-nav-text">Contact</span></a></li>
                    <li class="top_nav_menu_item"><a class="top_nav_item_link" href="<?php bloginfo("template_url") ?>/compagnons_accueil"><span class="top-nav-text">À propos</span></a></li>
                    <li class="top_nav_menu_item"><a class="top_nav_item_link" href="<?php bloginfo("template_url") ?>/faq/"><span class="top-nav-text">FAQ</span></a></li>       
                </ul>
            </nav>
            <div class="main_nav_container">
                <nav class="main_nav">
                    <div class="main_nav_menu--compagnons dropdown">
                        <div class="main_nav_menu_link dropdown_btn btn_compagnons">
                            <button class="main_nav_menu_link_btn nav-compagnons">
                                <div class="main_nav_menu_link_btn_titles">
                                    <p class="main_nav_menu_link_btn_title ">NOTRE ORGANISME</p>
                                    <p class="main_nav_menu_link_btn_title2">LES COMPAGNONS</p>
                                </div>
                                <span class="material-symbols-outlined">
                                    expand_more
                                </span>
                            </button>
                        </div>
                        <div class="main_nav_menu_submenu compagnons dropdown_content dropdown_content--animated">
                            <a class="main_nav_menu_submenu_link" href="<?php bloginfo("template_url") ?>/compagnons_equipe/">
                                <button class="main_nav_menu_submenu_link_btn nav-compagnons toplist"><span class="submenu-link">Notre équipe</span></button>  
                            </a>
                            <a class="main_nav_menu_submenu_link" href="<?php bloginfo("template_url") ?>/notre_mission/">
                                <button class="main_nav_menu_submenu_link_btn nav-compagnons"><span class="submenu-link">Notre mission</span></button>
                            </a>
                            <a class="main_nav_menu_submenu_link" href="<?php bloginfo("template_url") ?>/notre_histoire">
                                <button class="main_nav_menu_submenu_link_btn nav-compagnons"><span class="submenu-link">Notre histoire</span></button>
                            </a>
                            <a class="main_nav_menu_submenu_link" href="<?php bloginfo("template_url") ?>/nos_projets/">
                                <button class="main_nav_menu_submenu_link_btn nav-compagnons"><span class="submenu-link">Nos projets</span></button>
                            </a>
                            <a class="main_nav_menu_submenu_link" href="<?php bloginfo("template_url") ?>/nos-partenaires/">
                                <button class="main_nav_menu_submenu_link_btn nav-compagnons"><span class="submenu-link">Nos partenaires</span></button>
                            </a>
                        </div>
                    </div>
                    <div class="main_nav_menu--forge dropdown">
                        <div class="main_nav_menu_link dropdown_btn btn_forge">
                            <button class="main_nav_menu_link_btn nav-forge">
                                <div class="main_nav_menu_link_btn_titles">
                                    <p class="main_nav_menu_link_btn_title ">NOTRE SALLE</p>
                                    <p class="main_nav_menu_link_btn_title2">LA FORGE À BÉRUBÉ</p>
                                </div>
                                <span class="material-symbols-outlined">
                                    expand_more
                                </span>
                            </button>
                        </div>
                        <div class="main_nav_menu_submenu dropdown_content dropdown_content--animated">
                            <a class="main_nav_menu_submenu_link" href="https://lepointdevente.com/les-compagnons-de-la-mise-en-valeur-du-patrimoine-vivant-de-troi">
                                <button class="main_nav_menu_submenu_link_btn nav-forge toplist"><span class="submenu-link">Billetterie</span></button>
                            </a>
                            <a class="main_nav_menu_submenu_link" href="<?php bloginfo("template_url") ?>/la_forge_en_action">
                                <button class="main_nav_menu_submenu_link_btn nav-forge"><span class="submenu-link">La forge en action</span></button>
                            </a>
                            <a class="main_nav_menu_submenu_link" href="<?php bloginfo("template_url") ?>/evenements_a_venir">
                                <button class="main_nav_menu_submenu_link_btn nav-forge"><span class="submenu-link">Événements à venir</span></button>
                            </a>
                        </div>
                    </div>

                    <div class="main_nav_menu--festival dropdown">
                        <div class="main_nav_menu_link dropdown_btn btn_festival">
                            <button class="main_nav_menu_link_btn nav-festival">
                                <div class="main_nav_menu_link_btn_titles">
                                    <p class="main_nav_menu_link_btn_title">LE RENDEZ-VOUS DES</p>
                                    <p class="main_nav_menu_link_btn_title2">GRANDES GUEULES</p>
                                </div>
                                <span class="material-symbols-outlined">
                                    expand_more
                                </span>
                            </button>
                        </div>
                        <div class="main_nav_menu_submenu dropdown_content">
                            <a class="main_nav_menu_submenu_link" href="<?php bloginfo("template_url") ?>/evenements_a_venir/" target="">
                                <button class="main_nav_menu_submenu_link_btn nav-festival toplist"><span class="submenu-link">Programmation 2023</span></button>
                            </a>
                            <a class="main_nav_menu_submenu_link" href="<?php bloginfo("template_url") ?>/lieux_du_festival/">
                                <button class="main_nav_menu_submenu_link_btn nav-festival"><span class="submenu-link">Lieux du festival</span></button>
                            </a>
                            <a class="main_nav_menu_submenu_link" href="<?php bloginfo("template_url") ?>/artistes/">
                                <button class="main_nav_menu_submenu_link_btn nav-festival"><span class="submenu-link">Artistes</span></button>
                            </a>
                            <a class="main_nav_menu_submenu_link" href="<?php bloginfo("template_url") ?>/simpliquer/">
                                <button class="main_nav_menu_submenu_link_btn nav-festival"><span class="submenu-link">S'impliquer</span></button>
                            </a>
                            <div class="main_nav_menu_submenu_link a-propos_link ">
                                <button class="main_nav_menu_submenu_link_btn a-propos_btn">
                                <p class="submenu-link a-propos_titre"> À propos</p>
                                    <ul class="main_nav_menu_submenu_link_btn_list">
                                        <li class="main_nav_menu_submenu_link_btn_list_item"><a class="main_nav_menu_submenu_link_btn_list_item_link" href="<?php bloginfo("template_url") ?>/equipe-festival/"><span class="submenu-items">L'équipe du festival</span></a></li>
                                        <li class="main_nav_menu_submenu_link_btn_list_item"><a class="main_nav_menu_submenu_link_btn_list_item_link" href="<?php bloginfo("template_url") ?>/prix_jocelyn_berube"><span class="submenu-items">Le prix Jocelyn Bérubé</span></a></li>
                                        <li class="main_nav_menu_submenu_link_btn_list_item"><a class="main_nav_menu_submenu_link_btn_list_item_link" href="<?php bloginfo("template_url") ?>/la-bavarde"><span class="submenu-items">La Bavarde: La bière officielle</span></a></li>
                                        <li class="main_nav_menu_submenu_link_btn_list_item"><a class="main_nav_menu_submenu_link_btn_list_item_link" href="<?php bloginfo("template_url") ?>/festival-responsable/"><span class="submenu-items">Vers un festival responsable</span></a></li>
                                        <li class="main_nav_menu_submenu_link_btn_list_item"><a class="main_nav_menu_submenu_link_btn_list_item_link" href="<?php bloginfo("template_url") ?>/galerie_media/"><span class="submenu-items">Galerie médias</span></a></li>
                                    </ul>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="main_nav_menu--vents">
                        <a class="main_nav_menu_link dropdown_btn btn_vents" href="<?php echo get_home_url(); ?>/accueil-vents-de-parole">
                            <button class="main_nav_menu_link_btn nav-vents">
                                <div class="main_nav_menu_link_btn_titles">
                                    <p class="main_nav_menu_link_btn_title ">NOTRE PROG' ESTIVAL</p>
                                    <p class="main_nav_menu_link_btn_title2">VENTS DE PAROLES</p>
                                </div>
                            </button>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="menu-filter"></div>
    </header>