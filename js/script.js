(function($) {
  var $content = $("#content");
  var URL = "";
  var siteURL = "http://" + top.location.host.toString();
  var $internalLinks = $("a[href^='" + siteURL + "']");
  var hash = window.location.hash;
  var $el,
    allLinks = $("a");
  console.log(hash);

  $internalLinks
    .each(function() {
      $(this).attr("href", "#" + this.pathname);
    })
    .click(function() {
      $el = $(this);
      URL = $el.attr("href").substring(1);
      URL = URL + "#inside";
      $content.load(URL, function() {});
    });
  "#all".click(function() {
    $content.load("wordpress_theme/");
  });
})(jQuery);
