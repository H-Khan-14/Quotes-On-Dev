//the below code does not seem to be working which is strange because I copied it pretty much from the lecture and placed it into my own code properly, it was then checked by Akshay and Ollie and neither could figure out what was wrong.

// $(document).ready(function() {
//   $('.submit-quote-form').on('submit', function(event) {
//     event.preventDefault();
//     const author = $('.author').val();
//     const quote = $('.quote').val();
//     const QuoteSource = $('.quote-location').val();
//     const QuoteUrl = $('.quote-url').val();
//     $.ajax({
//       method: 'POST',
//       url: red_vars.rest_url + 'wp/v2/posts',
//       data: {
//         title: author,
//         content: quote,
//         _qod_quote_source: QuoteSource,
//         _qod_quote_source_url: QuoteUrl
//       },
//       headers: {
//         'X-WP-Nonce': red_vars.wpapi_nonce;
//       }

//The above is the code that was gutted to try and make it work and below are the portions that were cut off. Will most likely attempt to fix that later at some other time

// },
// beforeSend: function(xhr) {
//   console.log(xhr);
//   //xhr.requestHeader('X-WP-Nonce', red_vars.wpapi_nonce);
// }
//     }).done(function(response) {
//       alert('Success! Comments are closed for this post.');
//     });
//   });
// });

// Also need to change the front-page so that the proper values can be plugged in and go where they need to and get the remaining areas.
// $(document).ready(function() {
//   $('.show-another').on('click', function() {
//     console.log(red_vars);
//     $.ajax({
//       method: 'GET',
//       url:
//         red_vars.rest_url +
//         'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1'
//     }).done(result => {
//       console.log(result[0].content.rendered);
//       $("quote-area").html(result[0].content.rendered);
//       $("author-area").html
//     });
//   });
// });
