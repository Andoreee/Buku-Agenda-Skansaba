$(document).ready(function () {
    $("#category-filter").change(function () {
        window.location =
            `/admin/surat-masuk/?kategori=` + $("#category-filter").val();
    });
});
