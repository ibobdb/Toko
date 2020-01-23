</div>
</div>
<div class="footer mt-4">
    <div class="bg">
        <div class="container-fluid">

            <div class="info mt-4">
                <div class="row">
                    <div class="col-4 contact">
                        <h5 class="p-4">Contact</h5>
                        <input type="text" class="form-control" value="Boby Nugraha" readonly><br>
                        <input type="text" class="form-control" value="+6282169072681" readonly><br>
                        <input type="text" class="form-control" value="bobynugraha19@gmail.com" readonly>
                    </div>
                    <div class="col-4 alamat">
                        <h5 class="p-4">Alamat</h5>
                        <input type="text" class="form-control" value="Jalan Pramuka no 10 Lubuk Sikaping" readonly><br>

                    </div>
                    <div class="col-4 comment">
                        <h5 class="p-4">Saran Untuk Website</h5>
                        <textarea name="" id=""></textarea>
                        <button class="btn btn-sm btn-primary mt-2"> Kirim</button>


                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="copy"> Copyright <span>IBOBDB</span> 2019</div>

</div>








<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<script>
    $(document).ready(function() {
        console.log('js oke !!');
        $(document).on('keyup', '#qty', function() {
            var qty = document.getElementById('qty').value;
            var hrga = document.getElementById('hrga_produk').value;
            var total = parseInt(qty) * parseInt(hrga);
            $('#total_hrga').val(total);
        })
        $(document).on('click', '#kirim', function() {
            alert('Barang akan dikirim setelah di konfirmasi oleh admin')
        })
    })
</script>
</body>

</html>