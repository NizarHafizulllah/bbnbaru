<link href="<?php echo base_url("assets") ?>/css/datepicker.css" rel="stylesheet">

<script src="<?php echo base_url("assets") ?>/js/bootstrap-datepicker.js"></script>


<style>
.green {
color:green;
font-weight:bold;
}
.red {
	color:red;
	font-weight:bold;
	
}

.v2 {
 margin: 5px 0px;
}
</style>

<div class="row">
  <div id="salah" class="col-lg-12" style="display:none">
            <div class="alert alert-danger" role="alert" id="message">
            	
            </div>
        </div>
    </div>
    
  <div class="row">
  <div id="benar" class="col-lg-12" style="display:none">
            <div class="alert alert-success" role="alert" id="message2">
            	
            </div>
        </div>
    </div> 


<div class="row">
  <div  class="col-lg-7">
             
             
      
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">DETAIL KENDARAAN</h3>
  </div>
  <div class="panel-body">
      <table width="100%" border="0">
        <tr>
          <td width="35%">TANGGAL PENDAFTARAN</td>
          <td width="1%">:</td>
          <td width="64%"><?php echo flipdate($daft_date); ?></td>
        </tr>
        <tr>
          <td>STATUS PENDAFTARAN </td>
          <td>: </td>
          <td><?php echo $status2; ?><?php echo $status; ?></td>
        </tr>
        <tr>
          <td>NOMOR RANGKA </td>
          <td>:</td>
          <td><?php echo $no_rangka; ?></td>
        </tr>
        <tr>
          <td>NOMOR MESIN </td>
          <td>:</td>
          <td><?php echo $no_mesin; ?></td>
        </tr>
        <tr>
          <td>TAHUN KENDARAAN </td>
          <td>:</td>
          <td><?php echo $tahun_kendaraan; ?></td>
        </tr>
        <tr>
          <td>JENIS KENDARAAAN </td>
          <td>:</td>
          <td><?php echo $jenis_nama; ?></td>
        </tr>
        <tr>
          <td>MERK</td>
          <td>:</td>
          <td><?php echo $merk_nama; ?></td>
        </tr>
        <tr>
          <td>WARNA</td>
          <td>:</td>
          <td><?php echo $warna_nama; ?></td>
        </tr>
        <tr>
          <td><strong>DATA CUSTOMER </strong></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>NAMA CUSTOMER</td>
          <td>:</td>
          <td><?php echo $nama_pengajuan_leasing; ?></td>
        </tr>
        <tr>
          <td>NO. KTP </td>
          <td>:</td>
          <td><?php echo $customer_ktp; ?></td>
        </tr>
        <tr>
          <td>ALAMAT CUSTOMER</td>
          <td>:</td>
          <td><?php echo $alamat_pengajuan_leasing; ?></td>
        </tr>
        <tr>
          <td>KELURAHAN </td>
          <td>:</td>
          <td><?php echo $customer_kelurahan; ?></td>
        </tr>
        <tr>
          <td>KECAMATAN</td>
          <td>:</td>
          <td><?php echo $customer_kecamatan; ?></td>
        </tr>
        <tr>
          <td>KAB. / KOTA </td>
          <td>:</td>
          <td><?php echo $customer_kab; ?></td>
        </tr>
        <tr>
          <td>PROVINSI</td>
          <td>:</td>
          <td><?php echo $customer_prov; ?></td>
        </tr>
        <tr>
          <td><strong>DATA PEMILIK</strong></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>NAMA</td>
          <td>:</td>
          <td><?php echo $pemilik_nama; ?></td>
        </tr>
        <tr>
          <td>NO. KTP</td>
          <td>:</td>
          <td><?php echo $pemilik_ktp; ?></td>
        </tr>
        <tr>
          <td>ALAMAT </td>
          <td>:</td>
          <td><?php echo $pemilik_alamat; ?></td>
        </tr>
        <tr>
          <td>KELURAHAN</td>
          <td>:</td>
          <td><?php echo $pemilik_kelurahan; ?></td>
        </tr>
        <tr>
          <td>KECAMATAN</td>
          <td>:</td>
          <td><?php echo $pemilik_kecamatan; ?></td>
        </tr>
        <tr>
          <td>KAB./KOTA</td>
          <td>:</td>
          <td><?php echo $pemilik_kab; ?></td>
        </tr>
        <tr>
          <td>PROVINSI</td>
          <td>:</td>
          <td><?php echo $pemilik_prov; ?></td>
        </tr>
      </table>
  </div>
</div>
<?php 
$warna = ($approved=="1")?"green":"red";
?>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">DATA BLOKIR</h3>
  </div>
  <div class="panel-body">
      <table width="100%" border="0">
        <tr>
          <td width="35%">STATUS BLOKIR </td>
          <td width="1%">:</td>
          <td width="64%" class="<?php echo $warna; ?>"> <?php echo $approved2; ?></td>
        </tr>
        <tr>
          <td>NO BLOKIR </td>
          <td>: </td>
          <td><?php echo $no_blokir; ?></td>
        </tr>
        <tr>
          <td>TANGGAL BLOKIR</td>
          <td>:</td>
          <td><?php echo  ($tgl_blokir); ?></td>
        </tr>
        <tr>
          <td>S.D </td>
          <td>:</td>
          <td><?php echo  ($tgl_blokir2); ?></td>
        </tr>
        <tr>
          <td>NO. BPKB</td>
          <td>:</td>
          <td><?php echo $no_bpkb; ?></td>
        </tr>
        <tr>
          <td>TGL. BPKB </td>
          <td>:</td>
          <td><?php echo $tgl_bpkb; ?></td>
        </tr>
        <tr>
          <td>NOMOR POLISI</td>
          <td>:</td>
          <td><?php echo $no_polisi; ?></td>
        </tr>
      </table>
  </div>
</div>       
      
      
      
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">DATA KONTRAK</h3>
  </div>
  <div class="panel-body">
      <table width="100%" border="0">
        <tr>
          <td>KANTOR CABANG</td>
          <td>:</td>
          <td><?php echo $cabang_nama; ?></td>
        </tr>
        <tr>
          <td width="35%">NOMOR KONTRAK</td>
          <td width="1%">:</td>
          <td width="64%"> <?php echo $kontrak_no; ?></td>
        </tr>
        <tr>
          <td>TANGGAL SURAT KONTRAK</td>
          <td>: </td>
          <td><?php echo $kontrak_date2; ?></td>
        </tr>
        <tr>
          <td>PERIHAL SURAT KONTRAK</td>
          <td>:</td>
          <td><?php echo $kontrak_perihal; ?></td>
        </tr>
      </table>
  </div>
</div>       
      
      
      
             
        </div> 
 
 
 <div  class="col-lg-5">
 
 
 
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">VERIFIKASI, VALIDASI DAN PENCETAKAN</h3>
  </div>
  <div class="panel-body">
  <center>
   <a onClick="history.back();" class="btn btn-md btn-danger btn-block"><span class="glyphicon glyphicon-arrow-left"> KEMBALI </span></a>  
   <hr/>
  			<?php 
				if($userdata['user_level'] > 1 ) : 
			?> 
            <a id="batal" onclick="batal()" href="#" class="btn btn-md btn-danger btn-block">BATAL VERIFIKASI </a> 
<div id="oke">
			<form id="v2" action="">
            <input type="text" class="form-control v2" name="kontrak_no" id="kontrak_no"  placeholder="NOMOR KONTRAK" />
            <input type="text" class="form-control v2" name="kontrak_date" id="kontrak_date"placeholder="TANGGAL KONTRAK" data-date-format="dd-mm-yyyy" />
            <input type="text" class="form-control v2" name="kontrak_perihal" id="kontrak_perihal"placeholder="PERIHAL" />
            </form>

            <a onclick="verifikasi()" href="#"  class="btn btn-md btn-primary btn-block">VERIFIKASI LEVEL 2</a>  
            </div>
            <a id="oke3" onclick="verifikasi3()" href="#"  class="btn btn-md btn-primary btn-block">VERIFIKASI LEVEL 3</a>  <?php endif; ?>
            <?php if($status == 3 and $approved == 0) :   ?>
           
<a  class="btn btn-primary btn-block"  href="#" onclick="validasi('<?php echo $daft_id; ?>');"><span class="glyphicon glyphicon-ok"></span> VALIDASI KE POLDA </a>   <?php endif; ?>
            
              <?php if($approved == 1) :   ?>
             <a target="_blank" class="btn btn-primary btn-block"  href="<?php echo site_url("$controller/cetak_berkas/$daft_id"); ?>" onclick=""><span class="glyphicon glyphicon-print"></span> Cetak </a> <br>
             <?php endif; ?>
            </center>
             
  </div>
</div>

 </div>
 
 
  </div><!-- end of row --> 








<?php 

?>

<script>
$(document).ready(function(){

  $("#kontrak_date").datepicker();


		if( parseFloat(<?php echo $userdata["user_level"] ?>) == 2 )
			 {
			 	$("#oke3").hide();
			 	if(parseFloat(<?php echo $status ?>) < 2 )
			 	{
			 		$("#oke").show();
			 		$("#batal").hide();
			 	}
			 	else if(parseFloat(<?php echo $status ?>)==2)
			 	{
			 		$("#oke").hide();
			 		$("#batal").show();
			 	}
			 	else {
			 		$("#oke").hide();
			 		$("#batal").hide();
			 	}

			 } 
			if( parseFloat(<?php echo $userdata["user_level"] ?>) == 3 ) {
			 	// level 3 
			 	$("#oke").hide();
			 	$("#batal").hide();
			 	if (parseFloat(<?php echo $status ?>) == 2) {
			 		$("#oke3").show();
					$("#batal").hide();
			 	}
			 	else {
			 		$("#oke3").hide();
			 	}
			 }

});



function validasi(daft_id){
	$.ajax({
		url:'<?php echo site_url("$controller/cek_validasi/$daft_id"); ?>',
		beforeSend : function(){
					$("#salah").hide();
					$("#benar").show();
					$("#message2").html('Sedang diproses. Harap menunggu...');
		},
		 
		dataType :'json',
		success : function(hasil){
		 console.log(hasil);
			if(hasil.error == true){
			
				$("#salah").show();
				$("#benar").hide();
				$("#message").html(hasil.message);
			}
			else {
			//alert(hasil.message);
				$("#benar").show();
				$("#salah").hide();
				$("#message2").html(hasil.message + ' SILAHKAN REFRESH HALAMAN INI');
			}
		}
	});
}




function verifikasi(){
	//alert(DAFT_ID);

  vdata = $("#v2").serialize();

	a = confirm('ANDA AKAN MELAKUKAN VERIFIKASI. ANDA YAKIN ?  ? ');
	if(a){

		$.ajax({
			url:'<?php echo site_url("baru_verifikasi/verifikasi/$daft_id") ?>',
			dataType : 'json',
      data : vdata,
      type :'post',
			success : function(hasil) {
				if(hasil.error == false) {
					alert(hasil.message);
					 
					location.href=('<?php echo site_url("baru_verifikasi") ?>');
				}
				else {
					alert(hasil.message);
				}
			}
		});
	}

}


function verifikasi3(){
	//alert(DAFT_ID);

  
	a = confirm('ANDA AKAN MELAKUKAN VERIFIKASI. ANDA YAKIN ?  ? ');
	if(a){

		$.ajax({
			url:'<?php echo site_url("baru_verifikasi/verifikasi3/$daft_id") ?>',
			dataType : 'json',
      
      
			success : function(hasil) {
				if(hasil.error == false) {
					alert(hasil.message);
 					location.href=('<?php echo site_url("baru_verifikasi") ?>');
				}
				else {
					alert(hasil.message);
				}
			}
		});
	}

}


function batal(){
	a = confirm('ANDA AKAN MEMBATALKAN VERIFIKASI. ANDA YAKIN ?  ? ');
	if(a){

		$.ajax({
			url:'<?php echo site_url("baru_verifikasi/batal/$daft_id") ?>',
			dataType : 'json',
			success : function(hasil) {
				if(hasil.error == false) {
					alert(hasil.message);
 					location.href=('<?php echo site_url("baru_verifikasi") ?>');
				}
				else {
					alert(hasil.message);
				}
			}
		});
	}

}



</script>