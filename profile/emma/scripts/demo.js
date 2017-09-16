$( document ).ready(function() {           
    if($('body').hasClass('menu-demo-page')){
        $('.header-icon-2, .header-icon-3, .material-menu, .footer-menu').addClass('disabled-menus');            
        
        $('.activate-left-sidebar').click(function(){
            $('.header-icon-1').toggleClass('disabled-menus');
            $(this).toggleClass('active-menu-selecter');
            return false;
        }); 
        
        $('.activate-right-sidebar').click(function(){
            $('.header-icon-4').toggleClass('disabled-menus');
            $(this).toggleClass('active-menu-selecter');
            return false;
        });   
        
        $('.activate-header-menu').click(function(){
            $('.header-icon-3').toggleClass('disabled-menus');
            $(this).toggleClass('active-menu-selecter');
            return false;
        });          
        
        $('.activate-modal-menu').click(function(){
            $('.header-icon-2').toggleClass('disabled-menus');
            $(this).toggleClass('active-menu-selecter');
            return false;
        });        
        
        $('.activate-share-menu').click(function(){
            $(this).toggleClass('active-menu-selecter');
            return false;
        });        
        
        $('.share-bottom-tap-close').click(function(){
            $('.activate-share-menu').removeClass('active-menu-selecter');
        });
        
        $('.activate-material-menu-left').click(function(){
            $('.footer-menu').addClass('disabled-menus');
            $('.footer-clear').addClass('disabled');
            $('.material-menu-left').toggleClass('disabled-menus');
            $(this).toggleClass('active-menu-selecter');
            $('.activate-footer-menu').removeClass('active-menu-selecter');
            return false;
        });         
        
        $('.activate-material-menu-right').click(function(){
            $('.footer-menu').addClass('disabled-menus');
            $('.footer-clear').addClass('disabled');
            $('.material-menu-right').toggleClass('disabled-menus');
            $(this).toggleClass('active-menu-selecter');
            $('.activate-footer-menu').removeClass('active-menu-selecter');
            return false;
        });         
        
        $('.activate-footer-menu').click(function(){
            $('.material-menu').addClass('disabled-menus');
            $('.footer-menu').toggleClass('disabled-menus');
            $('.footer-clear').toggleClass('disabled');
            $(this).toggleClass('active-menu-selecter');
            $('.activate-material-menu-right, .activate-material-menu-right').removeClass('active-menu-selecter')
            return false;
        });   
            
        $('.activate-header-color').click(function(){
            $('.header-fixed').toggleClass('header-dark');
            $('.header-fixed').toggleClass('header-light');
            $(this).toggleClass('active-menu-selecter');
            return false;
        }); 
        
        $('.activate-footer-color').click(function(){
            $('.footer').toggleClass('footer-dark');
            $('.footer').toggleClass('footer-light');
            $(this).toggleClass('active-menu-selecter');
            return false;
        });         
        
        $('.activate-left-sidebar-color').click(function(){
            $('.sidebar-left').toggleClass('sidebar-dark');
            $('.sidebar-left').toggleClass('sidebar-light');
            $(this).toggleClass('active-menu-selecter');
            return false;
        }); 
        
        $('.activate-right-sidebar-color').click(function(){
            $('.sidebar-right').toggleClass('sidebar-dark');
            $('.sidebar-right').toggleClass('sidebar-light');
            $(this).toggleClass('active-menu-selecter');
            return false;
        });   
                
        $('.activate-sidebar-border').click(function(){
            $('.sidebar-right').toggleClass('no-sidebar-border');
            $('.sidebar-left').toggleClass('no-sidebar-border');
            $(this).toggleClass('active-menu-selecter');
            return false;
        });   
        
        $('.activate-header-menu-color').click(function(){
            $('.header-icon-3').removeClass('disabled-menus');
            $('.header-icon-2').addClass('disabled-menus');
            $('.activate-modal-menu-color').removeClass('active-menu-selecter');
            $('.header-menu').toggleClass('header-menu-dark');
            $('.header-menu').toggleClass('header-menu-light');
            $(this).toggleClass('active-menu-selecter');
            return false;
        });          
        
        $('.activate-modal-menu-color').click(function(){
            $('.header-icon-2').removeClass('disabled-menus');
            $('.header-icon-3').addClass('disabled-menus');
            $('.activate-header-menu-color').removeClass('active-menu-selecter');
            $('.modal-menu').toggleClass('modal-menu-dark');
            $('.modal-menu-background').toggleClass('modal-menu-dark-background');
            $('.modal-menu').toggleClass('modal-menu-light');
            $('.modal-menu-background').toggleClass('modal-menu-light-background');
            $(this).toggleClass('active-menu-selecter');
            return false;
        });               
        
        $('.activate-material-menu-color').click(function(){
            $('.footer-menu').addClass('disabled-menus');
            $('.footer-clear').addClass('disabled');
            $('.material-menu').removeClass('disabled-menus');
            $('.material-menu').toggleClass('material-menu-dark');
            $('.material-menu').toggleClass('material-menu-light');
            $('.material-menu-background').toggleClass('material-menu-dark-background');
            $('.material-menu-background').toggleClass('material-menu-light-background');
            $(this).toggleClass('active-menu-selecter');
            $('.activate-footer-menu').removeClass('active-menu-selecter');
            return false;
        });         
                   
        $('.activate-footer-menu-color').click(function(){
            $('.material-menu').addClass('disabled-menus');
            $('.footer-menu').removeClass('disabled-menus');
            $('.footer-menu').toggleClass('footer-menu-dark');
            $('.footer-menu').toggleClass('footer-menu-light');
            $('.footer-clear').removeClass('disabled');
            $(this).toggleClass('active-menu-selecter');
            $('.activate-material-menu-right, .activate-material-menu-right').removeClass('active-menu-selecter')
            return false;
        }); 
        
        $('.activate-share-color').click(function(){
            $('.share-bottom').toggleClass('share-dark');
            $('.share-bottom').toggleClass('share-light');
            $(this).toggleClass('active-menu-selecter');
            return false;
        }); 
    }
});