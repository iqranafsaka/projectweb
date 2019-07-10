$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var alamat = '/api/kategori'

    // Get Data Siswa
    $.ajax({
        url: alamat,
        method: "GET",
        dataType: "json",
        success: function (berhasil) {
            // console.log(berhasil)
            $.each(berhasil.data, function (key, value) {
                $(".data-kategori").append(
                    `
                    <tr>
                    <td>${value.nama_kategori}</td>
                    <td>${value.slug}</td>
                    <td><button class="btn btn-danger btn-rounded btn-outline btn-sm hapus-data" data-id="${value.id}">Hapus</button></td>
                    </tr>
                    `
                )
            })
        }
    })

    
    // Simpan Data
    $(".tombol-simpan").click(function (simpan) {
        simpan.preventDefault();
        var variable_isian_nama = $("input[name=nama_kategori]").val()
        // console.log(nama)
        $.ajax({
            url: alamat,
            method: "POST",
            dataType: "json",
            data: {
                nama_kategori: variable_isian_nama,
                slug: variable_isian_nama
            },
            success: function (berhasil) {
                alert(berhasil.message)
                location.reload();
            },
            error: function (gagal) {
                console.log(gagal)
            }
        })
    })

    $('#ubah-kategori').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var nama = button.data('nama')
        var id = button.data('id') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-body input[name="id"]').val(id)
        modal.find('.modal-body input[name="nama_kategori"]').val(nama)
    })


    // Hapus Data
    $(".data-kategori").on('click', '.hapus-data', function () {
        var id = $(this).data("id");
        // alert(id)
        $.ajax({
            url: alamat + "/" + id,
            method: "DELETE",
            dataType: "json",
            data: {
                id : id
            },
            success: function (berhasil) {
                alert(berhasil.message)
                location.reload();
            },
            error: function (gagal) {
                console.log(gagal)
            }
        })
    })
})


// Get the modal 1
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
