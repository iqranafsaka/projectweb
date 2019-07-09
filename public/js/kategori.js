$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var alamat = 'api/ajaxkategori'

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
                    <td><button class="btn btn-danger btn-sm hapus-data" data-id="${value.id}">Hapus</button></td>
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
