$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var alamat = '/api/artikel'
    var alamat_kategori = '/api/kategori'
    var alamat_tag = '/api/tag'

    // Get Data Siswa
    $.ajax({
        url: alamat,
        method: "GET",
        dataType: "json",
        success: function (berhasil) {
            // console.log(berhasil)
            $.each(berhasil.data, function (key, value) {
                $(".data-artikel").append(
                    `
                    <tr>
                    <td>${value.judul}</td>
                    <td>${value.slug}</td>
                    <td>${value.kategori.nama_kategori}</td>
                    <td>${value.user.name}</td>
                    <td><ol>
                        ${value.tag[0].nama_tag}
                    </ol></td>
                    <td><img src="../assets/img/artikel/${value.foto}" 
                        style="width:115px; height:80px;" alt="foto">
                    </td>
                    <td><button class="btn btn-danger btn-rounded btn-outline btn-sm hapus-data" data-id="${value.id}">Hapus</button></td>
                    </tr>
                    `
                )
            })
        }
    })

    
    // Simpan Data
    // $('#createData').submit(function(e){
    //     var formData = new FormData($('#createData')[0]);
    //     e.preventDefault();
    //     $.ajax({
    //         url: '/api/artikel',
    //         type:'POST',
    //         data:formData,
    //         cache: true,
    //         contentType: false,
    //         processData: false,
    //         async:false,
    //         dataType: 'json',
    //         success:function(formData){
    //             $('#exampleModal').modal('hide');
    //             $('#datatable').DataTable().ajax.reload();
    //             alert(formData.message)
    //         },
    //         complete: function() {
    //             $("#indexKategori").show();
    //             $("#createData")[0].reset();
    //         }
    //     })
    // })

    // isi dari select Tag di MODAL TAMBAH 
    $.ajax({
        url: alamat_tag,
        method: "GET",
        dataType: "json",
        
        success: function (berhasil) {
            // console.log(berhasil)
            $.each(berhasil.data, function (key, value) {
                $(".isi-tag").append(
                    `
                    <option value="${value.id}">${value.nama_tag}</option>        
                    `
                )
            })
        }
    })

    // isi dari select Kategori di MODAL TAMBAH
    $.ajax({
        url: alamat_kategori,
        method: "GET",
        dataType: "json",
        
        success: function (berhasil) {
            // console.log(berhasil)
            $.each(berhasil.data, function (key, value) {
                $(".isi-kategori").append(
                    `
                    <option value="${value.id}">${value.nama_kategori}</option>
                    `
                )
            }) 
        }
    })



    // Hapus Data
    $(".data-artikel").on('click', '.hapus-data', function () {
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
