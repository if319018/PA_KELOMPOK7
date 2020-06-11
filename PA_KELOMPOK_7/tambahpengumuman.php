<?php 
	session_start();
	include_once('functions.php');
	open_page('pengumuman');

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>tambah pengumuman</title>
</head>

<body>
      <form class="user" action="tambahpengumuman_process.php" method="post">
        <div class="form-group row">
          <div class="col-sm-6 mb-sm-0">Judul :<br> 
            <input type="text" class="form-control form-control-user" name="judul" placeholder="Judul">
              </div><br>Isi : 
                <div class="col-sm-6 mb-sm-0">
                  <input type="textarea" class="form-control form-control-user" name="deskripsi" placeholder="Deskripsi"><br><br>
                </div><br>Tanggal terbit : 
                <div class="col-sm-6 mb-sm-0">
                  <input type="text" class="form-control form-control-user" name="tanggal_terbit" placeholder="Tanggal"><br><br>
                </div>
                
  
                <input type="submit" value="ok" name="action">
                </form>
            </div>
          </div>
        </div>
      </div>
  </div>

</body>

</html>
<?php 
 close_page();
  ?>
