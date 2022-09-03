/*=========================================================================================
  File Name: sweet-alerts.js
  Description: A beautiful replacement for javascript alerts
  ----------------------------------------------------------------------------------------
  Item Name: Frest HTML Admin Template
  Version: 1.0
  Author: Pixinvent
  Author URL: hhttp://www.themeforest.net/user/pixinvent
==========================================================================================*/
$(document).ready(function () {

  // confirm options

  $('#confirm-text').on('click', function () {
    Swal.fire({
      title: 'INFO',
      html: '<div class="fonticon-wrap account-info-icon"><i class="bx bxs-error"></i></div><p>Confirm Resend Verification?</p>',
      showCancelButton: true,
      confirmButtonColor: '#8ee327',
      cancelButtonColor: '#d33',
      confirmButtonText: 'OK',
      confirmButtonClass: 'btn tab-blue',
      cancelButtonClass: 'btn tab-red ml-1',
      buttonsStyling: false,
    }).then(function (result) {
      if (result.value) {
        Swal.fire(
          {
            icon: "success",
            title: 'Sent!',
            text: 'Verification Resent.',
            confirmButtonClass: 'btn tab-green',
          }
        )
      }
    })
  });


});
