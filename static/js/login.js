$("#login-button").click((e) => {
  // clear error input
  $("#login-modal .error").each((e, elem) => $(elem).html(""));
  // store user input
  store = {};
  $("#login-modal input").each((e, elem) => {
    key = elem.getAttribute("id").split("-")[1].trim();
    value = $(elem).val();
    store[key] = value;
  });

  // process ajax
  var jqxhr = $.post("/login", store)
    .done(function (data) {
      console.log(data);
      // check for errors
      if ("error" in data) {
        var err = data["error"];
        Object.keys(err).map((key) => {
          var curr_error = err[key];
          $(".login-" + key + "-error").html(curr_error);
        });
      }
      // if status is found the success
      else if ("success" in data) {
        console.log(data);
      }
      // other technical error
      else {
        alert("sorry we have technical error please reload and try again");
      }
    })
    .fail(function (xhr, err) {
      var responseTitle = $(xhr.responseText).filter("title").get(0);
      alert($(responseTitle).text() + "\n" + formatErrorMessage(xhr, err));
    });
});
