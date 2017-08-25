
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
         <?php 
$config = include('../../config.php');
$dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
try {
         $con = new PDO($dsn, $config['username'], $config['pass']);
            }
//catch exception
        catch(Exception $e) {
                echo 'Message: ' .$e->getMessage();
                die();
            }
     if(isset($con)){
        $exe = $con->query('SELECT * FROM password LIMIT 1');
        $data = $exe->fetch();
        $password = $data['password'];
        }else {
    echo "Error Fetching Data";
    die();
        }
?>
    }

    function closeContactForm(e){
        e.preventDefault();
        e.currentTarget.setAttribute('tabindex',-1);
        openContactFormButton.removeAttribute('tabindex')
        contactContainer.setAttribute('aria-hidden','true');
        content.classList.remove('contact--open');
    }
}
