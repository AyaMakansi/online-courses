$(".see-more").click(function() {
  $div = $($(this).data('div')); //div to append
  $link = $(this).data('link'); //current URL

  $page = $(this).data('page'); //get the next page #
  $href = $link + $page; //complete URL
  $.get($href, function(response) { //append data
    $html = $(response).find("#posts").html(); 
    $div.append($html);
  });

  $(this).data('page', (parseInt($page) + 1)); //update page #
});