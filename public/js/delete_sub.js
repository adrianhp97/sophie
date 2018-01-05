$(document).ready(function() {
  $('button.darken-2').click(function(event) {
      var id = $(this).attr('data_sub_id');
      var oModalEdit = $('#delete_sub');
      oModalEdit.find('input[name="sub_id"]').val(id);
      console.log($('input[name="sub_id"]').val());
      oModalEdit.modal();
  });

  $('#delete_sub_form').submit(function() {
    var id = $('input[name="sub_id"]').val();
    $.ajax({
        type: "post",
        cache: false,
        url:'/deleteSubscriber',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
          id: id
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