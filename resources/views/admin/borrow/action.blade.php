
<button href="#" class="btn btn-info" id="delete">Pengembalian</button>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

 <script>
    $('button#delete').on('click', function(e){
        e.preventDefault();
        var href = $(this).attr('href');
        Swal.fire({
        title: 'Apakah kamu yakin hapus data ini?',
        text: "Data yang sudah hapus tidak bisa dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yahh, Hapus Saja!'
        }).then((result) => {
        if (result.value) {
            document.getElementById('deleteForm').action = href;
             document.getElementById('deleteForm').submit();
                Swal.fire(
                'Terhapus!',
                'Data kamu berhasil dihapus.',
                'success'
                )
            }
        })
        
        
    })     
     
</script>                   