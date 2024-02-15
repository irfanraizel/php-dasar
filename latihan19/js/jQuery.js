// menggunakan ajax dengan jQuery
$(document).ready(function () {
  // hide tombol cari
  $("#tombol-cari").hide();
  // event ketika keyword ditulis
  $("#keyword").on("keyup", function () {

    // munculkan icon loader
    $(".loader").show();
    // $("#container").load("ajax/mahasiswa.php?keyword=" + $("#keyword").val());

    $.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function(data){
            $('#container').html(data);
            $('.loader').hide();
    })
  });
});
