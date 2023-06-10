console.log(jQuery().jquery);

// Swiper
new Swiper('.main-block__slider',{
    // Arrows
    navigation: {
        nextEl: '.swiper-next-button',
        prevEl: '.swiper-prev-button'
    },
    loop:true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: true,
    },
    speed: 1000,
});


// Submit subscription form using Ajax
$('#subcriptionForm').on('submit', function (e) {
  e.preventDefault();
  var $form = $(this);
  $.ajax({
    type: 'POST',
    url: 'subscriptionAjax.php',
    data: $form.serialize()
  }).done(function () {
    $form[0].reset()
    alert('Thank you for the subscription!')
  }).fail(function () {
alert('Something went wrong')
  });
});
