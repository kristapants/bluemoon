jQuery(document).ready(function( $ ) {

  var logoImg = $('#logo-img').attr('src'), 
   mailLink = $('#mailLink a').attr('href'),
   instagramLink = $('#instagram-link').attr('href'),
   fbLink = $('#fb-link').attr('href');

  $("nav#menu").mmenu({
     "extensions": [
        "pagedim-black",
        "shadow-page"
     ],
     "offCanvas": {
        zposition   : "front"
     },
   //   "searchfield" : {
   //   "placeholder" : 'Need some fresh vegatables?'
   //  },
   //  "navbar" : {
   //          title : 'Organic Shop'
   //        },
     "navbars": [
        {
           "position": "top",
           "content": [
             '<a href="index.html"><img src="' + logoImg + '" class="img-responsive" alt="Image"></a>'
           ]
        },
      //   {
      //     "position"  : 'top',
      //     "content"   : [ 'searchfield' ]
      //   }, 
        {
          "position"  : 'top',
          "content"   : [ 'breadcrumbs' ]
        },
        {
           "position": "bottom",
           "content": [
              "<a class='fa fa-envelope' href='" + mailLink + "'></a>",
              "<a class='fa fa-facebook' href='" + fbLink + "'></a>",
              "<a class='fa fa-instagram' href='" + instagramLink + "'></a>"
           ]
        }
     ]
  });
});