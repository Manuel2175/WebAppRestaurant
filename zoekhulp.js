
$(document).ready(function () {
  $("#searchInput").on("keyup", function () {
    var query = $(this).val();
    if (query.length > 0) {
      $.ajax({
        url: "search.php",
        method: "POST",
        data: { query: query },
        success: function (data) {
          $("#searchResults").fadeOut(100, function () {
            // Fade out the search results container
            $(this).html(data).fadeIn(200); // Update the content and fade it back in
          });
        },
      });
    } else {
      $("#searchResults").fadeOut(100); // Fade out the search results container
    }
  });
});
