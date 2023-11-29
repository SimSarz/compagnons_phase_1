if(window.innerWidth < 1400){
    //HAMBURGER MENU
    const hamburgerBtn = document.getElementById('nav-icon3');
    const hamburgerMenu = document.querySelector('.header-container');
    const body = document.querySelector('body');
    const filter = document.querySelector('.menu-filter');

    hamburgerBtn.addEventListener('click', () =>{
        console.log('prout');
        if(hamburgerBtn.classList.contains("open")){
            hamburgerBtn.classList.remove("open");
            hamburgerMenu.classList.remove("header-container--open");
            body.style.position = "relative";
            filter.style.display = "none";



        }else{
            hamburgerBtn.classList.add("open");
            hamburgerMenu.classList.add("header-container--open");
            body.style.position = "fixed";
            filter.style.display = "block";
        }
})
    //DROPDOWNS MOBILE

    const dropdownBtn = document.querySelectorAll('.dropdown_btn');

    dropdownBtn.forEach(button =>{
        let chevron = button.querySelector('span');
        let content = button.nextElementSibling;
        if(content){
            if(window.innerWidth < 1400){
                button.addEventListener('click', ()=>{
                    if(content.style.display !== "block"){
                    closeOtherDropdowns();
                    content.style.display = "block";
                    chevron.innerHTML = "expand_less";
                    }else{
                        content.style.display = "none";
                        chevron.innerHTML = "expand_more";
                    }
                })
            }
        }
    })

    function closeOtherDropdowns(){
        const panels = document.querySelectorAll('.dropdown_content');
        const chevrons = document.querySelectorAll('.material-symbols-outlined')
        panels.forEach(panel =>{
            panel.style.display = 'none';
        } )
        chevrons.forEach(chevron =>{
            chevron.innerHTML = "expand_more";
        })
    }
}else{
    //MINIFIER LE HEADER AU SCROLL - DESKTOP (jquery)
jQuery(function($) {
    var screenWidth = window.innerWidth;
  
    function handleResize() {
        screenWidth = window.innerWidth;

        if (screenWidth >= 1400) {
            $(window).on("scroll", function() {
                if($(window).scrollTop() > 50) {
                    $(".logo").addClass("logo--mini");
                    $(".header-container").addClass("header-container--mini")
                    $(".top_nav").addClass("top_nav--mini");
                    $(".main_nav_container").addClass("main_nav_container--mini");
                    $(".main_nav_menu_link_btn").addClass("main_nav_menu_link_btn--mini");
                    $(".main_nav_menu_link_btn_title").addClass("main_nav_menu_link_btn_title--mini");
                    $(".main_nav_menu_link_btn_title2").addClass("main_nav_menu_link_btn_title2--mini");
                    $(".main_nav_menu_submenu").addClass("main_nav_menu_submenu--mini");
                } else {
                    $(".logo").removeClass("logo--mini");
                    $(".header-container").removeClass("header-container--mini")
                    $(".top_nav").removeClass("top_nav--mini");
                    $(".main_nav_container").removeClass("main_nav_container--mini");
                    $(".main_nav_menu_link_btn").removeClass("main_nav_menu_link_btn--mini");
                    $(".main_nav_menu_link_btn_title").removeClass("main_nav_menu_link_btn_title--mini");
                    $(".main_nav_menu_link_btn_title2").removeClass("main_nav_menu_link_btn_title2--mini");
                    $(".main_nav_menu_submenu").removeClass(".main_nav_menu_submenu--mini");
                }
            });
        }
    }
  
    // Appel initial de la fonction pour gérer la largeur de l'écran
    handleResize();
  
    // Gère le redimensionnement de l'écran
    $(window).on("resize", handleResize);
  });
}

