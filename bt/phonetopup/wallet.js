 document.addEventListener("DOMContentLoaded", function(event) {
    $(".submit-amount").on("click", function(e) {
      var PBFKey = "FLWPUBK-aa82cac8ee08f5bb206f937db274081a-X";
      
      var amount = this.getAttribute('data-amount');
    
      console.log(amount);
      getpaidSetup({
        PBFPubKey: PBFKey,
        customer_email: "user@example.com",
        customer_firstname: "Temi",
        customer_lastname: "Adelewa",
        custom_description: "Pay Internet",
        custom_logo: "http://localhost/communique-3/skin/frontend/ultimo/communique/custom/images/logo.svg",
        custom_title: "TransferRules",
        amount: amount,
        customer_phone: "234099940409",
        country: "NG",
        currency: "NGN",
        txref: "rave-123456",
        //integrity_hash: "6800d2dcbb7a91f5f9556e1b5820096d3d74ed4560343fc89b03a42701da4f30",
        onclose: function() {},
        callback: function(response) {
          var flw_ref = response.tx.flwRef; // collect flwRef returned and pass to a                  server page to complete status check.
          console.log("This is the response returned after a charge", response);
          if (
            response.tx.chargeResponse == "00" ||
            response.tx.chargeResponse == "0"
          ) {
            // redirect to a success page
          } else {
            // redirect to a failure page.
          }
        }
      });
    });
  });
