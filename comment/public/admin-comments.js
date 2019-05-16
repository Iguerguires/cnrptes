var comments = {
  ajax: function (opt) {
    // ajax() : do AJAX request
    // PARAM opt : AJAX options

    // APPEND FORM DATA
    var data = new FormData();
    for (var key in opt.data) {
      data.append(key, opt.data[key]);
    }

    // INIT AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', "admin-ajax-comments.php", true);

    // WHEN THE PROCESS IS COMPLETE
    xhr.onload = function () {
      if (typeof (opt.load) == "function") {
        opt.load(this.response);
      }
    };

    // SEND
    xhr.send(data);
  },

  edit: function (id, name, msg) {
  // edit() : update comment
    comments.ajax({
      data: {
        req: "edit",
        comment_id: id,
        name: name,
        message: msg
      },
      load: function (res) {
        // OK - DO SOMETHING
        if (res == "OK") {
        }
        // ERROR - DO SOMETHING
        else {
        }
      }
    });
  },

  delete: function (id) {
  // delete() : delete comment

    if (confirm("Delete comment?")) {
      comments.ajax({
        data: {
          req: "del",
          comment_id: id
        },
        load: function (res) {
          // OK - DO SOMETHING
          if (res == "OK") {}
          // ERROR - DO SOMETHING
          else {}
        }
      });
    }
  }
};