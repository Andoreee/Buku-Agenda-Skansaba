$(document).ready(function () {
    $("#category-filter").change(function () {
        window.location =
            `/admin/surat-keluar/?kategori=` + $("#category-filter").val();
    });
});
