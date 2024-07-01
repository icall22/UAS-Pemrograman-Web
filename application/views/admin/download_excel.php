<!DOCTYPE html>
<html>
<head>
	<title>Export Data Ke Excel</title>
</head>
<body>
	<style type="text/css">
		body{
			font-family: sans-serif;
		}
		/* table{
			margin: 20px auto;
			border-collapse: collapse;
		} */
		/* table th{
			background: #9FD3FF;
			border: 1px solid #8D8D8D;
			padding: 3px 8px;
		}
		table td{
			border: 1px solid #8D8D8D;
			padding: 3px 8px;

		} */
	</style>

      <?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Pengisi.xls");
header("Pragma: no-cache");
header("Expires: 0");
  ?>

	<center>
		<h2>Data Pengisian Pre Test & Post Test</h2>
	</center>

	     <table border="1">
          <thead>
                <tr>
                  <th width="40px">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Jawaban</th>                  
                  <th width="70px">Nilai</th>
                </tr>
              </thead>
              <tbody width="100%">
                <?php                                     
                $no=1;
                foreach ($data as $pengisi) { ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $pengisi['nama']; ?></td>
                    <td><?php 
                    $a = $pengisi['id_kategori'];
                    if($a=='1'){
                      echo "Pre Test 1";
                    }elseif($a=='2'){
                      echo "Pre Test 2";
                    }elseif($a=='3'){
                      echo "Pre Test 3";
                    }elseif($a=='4'){
                      echo "Pre Test 4";
                    }elseif($a=='5'){
                      echo "Post Test 1";
                    }elseif($a=='6'){
                      echo "Post Test 2";
                    }elseif($a=='7'){
                      echo "Post Test 3";
                    }elseif($a=='8'){
                      echo "Post Test 4";
                    }else{
                      echo "-";
                    }                     
                    
                    ?></td>
                    <td><?= $pengisi['jawaban']; ?></td>
                    <td><?= $pengisi['total_jawab']; ?></td>

                  </tr>
                  <?php } ?>
              </tbody>
		</table>
	</body>
	</html>