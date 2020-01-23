</div>
</div>
</div>






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<script src="<?= base_url('assets/') ?>js/bootstrap.min.js">
</script>



<script>
    $(document).ready(function() {
        $(document).on('click', '#select', function() {
            var kd = $(this).data('kode');
            var nm = $(this).data('nama');
            var hrga = $(this).data('harga');
            $('#id').val(kd);
            $('#nama_produk').val(nm);
            $('#harga').val(hrga);
            $('#cari-kode').modal('hide');



        });
        $(document).on('click', '#btn-detail', function() {
            var kode = $(this).data('kode');
            var nm = $(this).data('nm');
            var kt = $(this).data('kt');
            var spp = $(this).data('spp');
            var hrg = $(this).data('hrg');
            var st = $(this).data('st');
            var imgP = $(this).data('imgP');
            console.log(kode);
            $('#kd').text(kode);
            $('#nm').text(nm);
            $('#kt').text(kt);
            $('#spp').text(spp);
            $('#hrg').text(hrg);
            $('#st').text(st);
            $('#img-produk').text(imgP);
        })
        $(document).ready(function() {
            $('#data-table').DataTable();
        })
        $(document).on('keyup', '#qty', function() {
            var qty = document.getElementById('qty').value;
            var harga = document.getElementById('harga').value;
            var total = parseInt(qty) * parseInt(harga);
            $('#total').val(total);
        })
        // Calc
        $(document).on('keyup', '#bayar', function() {
            var total = document.getElementById('total-harga').value;
            var jb = document.getElementById('bayar').value;
            var kembalian = parseInt(total) - parseInt(jb);
            console.log(total);
            console.log(jb);
            console.log(kembalian);
            $('#kembalian').val(kembalian);
        })





    });
</script>
</div>
</body>

</html>