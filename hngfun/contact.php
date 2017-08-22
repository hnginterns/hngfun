<?php 
include "header.php"; 
?>

<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
  @import url('https://fonts.googleapis.com/css?family=Lato');

  .m-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    box-sizing: border-box;
  }
  .contact {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    width: 80%;
  }

  .contact section {
    width: 40%;
  }

  .contact-form input,
  .contact-form textarea {
    width: 100%;
    margin-top: 15px;
    padding: 12px 20px;
    border: .5px solid #ccc;
    border-radius: 5px;
    background-color: #eaeaea;
  }
  input[type=submit] {
    background-color: #26acd9;
  }

  input[type=submit]:hover {
    color: white;
    border: .5px solid #ccc;
    cursor: pointer;
  }

  textarea {
    font-family: inherit;
    resize: none;
  }

  .social-links span {
    margin-right: 30px;
  }
  .map {
    margin-top: 15px;
  }

  p > span {
    margin-right: 10px;
  }

  .map iframe {
    width: 100%;
    height: 100%:
  }
  @media only screen and (max-width:1024px) {
    .contact {
      width: 90%;
    }
    .contact section {
      width: 45%;
    }
  }

  @media only screen and (max-width:768px) {
    .contact section {
      width: 95%;
    }
  }

</style>
<main class="m-container">
  <div class="underlay"></div>
  <h2 style="font-family: 'Lato', sans-serif">GET IN TOUCH</h2>
  <section class="contact">
  <section class="contact-info">
    <div>
      <p><span><i class="fa fa-map-marker"></i></span><span>1, Intern Ave, Hotel NG</span></p>
      <p><span><i class="fa fa-phone"></i></span><span>+234-hng-interns</span></p>
      <p><span><i class="fa fa-mobile"></i></span><span>+234-alt-number</span></p>
    </div>
    <div class="social-links">
      <span><i class="fa fa-2x fa-facebook"></i></span>
      <span><i class="fa fa-2x fa-twitter"></i></span>
      <span><i class="fa fa-2x fa-slack"></i></span>
      <span><i class="fa fa-2x fa-github"></i></span>
    </div>
  <div class="map">
    <iframe height="250"
    frameborder="0" style="border:0"
    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAtVAvtq9fcVMGq2sOSK0Ok6tiRQT71I2o&q=Ibom+eLibrary" allowfullscreen>
  </iframe>
</div>
  </section>
  <section class="contact-form">
    <form>
    <h4>Leave us a message</h4>
    <input type="text" placeholder="Name" required/><br>
    <input type="email" placeholder="Email" required/><br>
    <textarea name="message" id="message" cols="30" rows="10" placeholder="Write your message here" required></textarea><br>
    <input type="submit"/>
    </form>
  </section>
  </section>
</main>



<?php 
include "footer.php"; 
?>
