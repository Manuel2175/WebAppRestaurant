$(document).ready(function () {
  function searchProducts(query) {
    $.ajax({
      url: "search-admin.php",
      method: "POST",
      data: { query: query },
      success: function (data) {
        $("#searchResults").fadeOut(100, function () {
          // Fade out the search results container
          $(this).html(data).fadeIn(200); // Update the content and fade it back in
        });
      },
    });
  }

  $("#searchInput").on("keyup", function () {
    var query = $(this).val().trim(); // Trim whitespace
    if (query.length > 0) {
      searchProducts(query);
    } else {
      // If search input is empty, fetch all products
      $.ajax({
        url: "admin-items.php", // Replace "fetch-all-products.php" with the actual URL to fetch all products
        method: "GET",
        success: function (data) {
          $("#searchResults").fadeOut(100, function () {
            // Fade out the search results container
            $(this).html(data).fadeIn(200); // Update the content and fade it back in
          });
        },
      });
    }
  });

  // Initial call to load all products when the page loads
  $("#searchInput").trigger("keyup");
});
