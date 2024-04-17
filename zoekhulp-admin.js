$(document).ready(function () {
  function search(query) {
    $.ajax({
      url: query ? "search-admin.php" : "admin-items.php",
      method: "POST",
      data: query ? { query: query } : {},
      success: function (data) {
        $("#searchResults").fadeOut(100, function () {
          $(this).html(data).fadeIn(200);
        });
      },
    });
  }

  $("#searchInput").on("keyup", function () {
    search($(this).val().trim());
  });

  $("#searchInput").trigger("keyup");
});
