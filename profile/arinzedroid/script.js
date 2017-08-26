
window.onload = function(){
    let content = document.querySelector('.content');
    let openContactFormButton = document.querySelector('.contact__button');
    let closeContactFormButton = document.querySelector('.contact__me__close-button')
    let aboutMeSection = document.querySelector('.about__me')
    let contactContainer = document.querySelector('.contact__me')
    openContactFormButton.addEventListener('click',openContactForm);
    closeContactFormButton.addEventListener('click',closeContactForm);
    aboutMeSection.addEventListener('transitionend',function(){
        content.classList.toggle('contact--opened');
    });
    /**
     * 
     * @param {Event} e 
     */
    function openContactForm(e){
        e.preventDefault();
        e.currentTarget.setAttribute('tabindex',-1);
        contactContainer.removeAttribute('aria-hidden');
        content.classList.add('contact--open');
        
    }

    function closeContactForm(e){
        e.preventDefault();
        e.currentTarget.setAttribute('tabindex',-1);
        openContactFormButton.removeAttribute('tabindex')
        contactContainer.setAttribute('aria-hidden','true');
        content.classList.remove('contact--open');
    }
}
