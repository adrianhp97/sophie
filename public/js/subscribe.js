$(document).ready(function() {
  $('#subscribe-form').submit(function() {
    var email = $('#subscribe').val();

    $.ajax({
        type: "post",
        cache: false,
        url:'/insertSubscriber',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
          email: email
        },
        success: function(data) {
            // var obj = $.parseJSON(data);
            console.log(data);
        }
    });
    // .done(function(data) {.
    //     alert('done');
    // })
    // .fail(function(jqXHR, ajaxOptions, thrownError) {
    //     alert('No response from server');
    // });
  });
});