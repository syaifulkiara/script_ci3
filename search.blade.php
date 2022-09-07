<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Pencarian Data Menggunakan Barcode Scanner</title>
<style type="text/css">
   body{ 
     padding: 20px 
   }
   .content{
     padding: 40px 20px;
     background: lightblue; 
     border-radius: 10px; 
   }
   .table_content tr th,.table_content tr td{
     border:solid 1px #fff;padding:7px;width:110px;
   }
   input[type=text]{
     width:630px;
   }
   .error{
     color:red;
   }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
 <div class="row mb-4">
    <div class="col-md-6 text-center">
     <a href="{{route('main')}}" class="btn btn-primary btn-block"><h1>Input Data</h1></a>
    </div>
    <div class="col-md-6 text-center">
    <a href="" class="btn btn-primary btn-block"><h1>Search Data</h1></a>
    </div>
  </div>
   <br><br>
<div class="content">
<p>Masukkan Kode Barcode : <input type='text' id="input_scanner"></p>
<p><button type="button" id="btn_clear" class="btn btn-primary" style="margin-left:170px;"><span class="glyphicon glyphicon-remove"></span>  Clear Field</button> </p>
<p id="message_info"></p>
</div>
<script>
$(document).ready(function(){
$('#input_scanner').val("").focus();
$('#input_scanner').keyup(function(e){
   var tex = $(this).val();
   if(tex !=="" && e.keyCode===13){
     $('#input_scanner').val(tex).focus();
     $.ajax({
        type: 'POST',
        url: 'cari.php',
        data: {"input_scanner":tex},
        beforeSend:function(response) {
        $('#message_info').html("Sedang memproses data, silahkan tunggu...");
        },
        success:function(response) {
        $('#message_info').html(response);
        }
     });
   }
   e.preventDefault();
});
$('#btn_clear').click(function(){
   $('#input_scanner').val("").focus();
});
});
</script>
</body>
</html>
