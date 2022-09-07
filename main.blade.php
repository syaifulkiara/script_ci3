<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Input Data Menggunakan Barcode Scanner</title>
<style type="text/css">
   body{ 
     padding: 20px 
   }
   .content{
     padding: 40px 20px;
     background: lightblue; 
     border-radius: 10px; 
   }
   .table_content tr td:nth-child(1){
     width:110px;
   }
   .table_content tr td:nth-child(2){
     width:50px;
   }
   .table_content tr td:nth-child(3){
     width:440px;
   }
   .table_content tr td{
     padding:7px;
   }
   input[type=text]{
     width:100%;height:33px;
   }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
  <div class="row mb-4">
    <div class="col-md-6 text-center">
     <a href="" class="btn btn-primary btn-block"><h1>Input Data</h1></a>
    </div>
    <div class="col-md-6 text-center">
     <a href="{{route('main.search')}}" class="btn btn-primary btn-block"><h1>Search Data</h1></a>
    </div>
  </div>
  <br><br>
<div class="content">
   <table class="table_content">
   <tr><td>Kode Barcode</td><td>:</td><td> <input type='text' id="input_scanner"></td></tr>
   <tr><td>Nama Item</td><td>:</td><td> <input type='text' id="nama_barang"></td></tr>
   <tr><td>Harga</td><td>:</td><td> <input type='text' id="harga"></td></tr>
   <tr><td>Quantity</td><td>:</td><td> <input type='text' id="quantity"></td></tr>
   <tr><td></td><td></td>
   <td>
   <button type="button" id="btn_batal" class="btn btn-primary"><span class="glyphicon glyphicon-remove"></span>  Batal</button>
   <button type="button" id="btn_simpan" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span>  Simpan</button>
   </td>
   </tr>
   </table>
   <p id="message_info"></p>
</div>
<script>
$(document).ready(function(){
$('#input_scanner').val("").focus();
$('#input_scanner').keyup(function(e){
   var tex = $(this).val();
   if(tex !=="" && e.keyCode===13){
     $('#input_scanner').val(tex).focus();
   }
   e.preventDefault();
});
$('#btn_simpan').click(function(){
   let input_scanner = $('#input_scanner').val();
   let nama_barang = $('#nama_barang').val();
   let harga = $('#harga').val();
   let quantity= $('#quantity').val();
   if(input_scanner !=="" & nama_barang !=="" & harga!=="" & quantity!==""){
     $.ajax({
        type: 'POST',
        url: 'input_data.php',
        data: {"input_scanner":input_scanner,"nama_barang":nama_barang,"harga":harga,"quantity":quantity},
        beforeSend:function(response) {
          $('#message_info').html("Sedang memproses data, silahkan tunggu...");
        },
        success:function(response) {
          $('#message_info').html("");
          alert(response);
          $('#input_scanner,#nama_barang,#harga,#quantity').val("");
          $('#input_scanner').focus();
        }
     });
   }else{
     alert("input tidak boleh kosong..");
     $('#input_scanner').focus();
   }
});
$('#btn_batal').click(function(){
   $('#input_scanner,#nama_barang,#harga,#quantity').val("");
   $('#input_scanner').focus();
});
});
</script>
</body>
</html>
