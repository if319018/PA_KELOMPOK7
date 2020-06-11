<?php 
	session_start();
	include_once('functions.php');
	open_page('keuangan');

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>tambah keuangan</title>
</head>

<body> 
    <form class="user" action="tambahkeuangan_process.php" method="post">
      <div class="form-group row">
        <div class="col-sm-6 mb-sm-0">
            <input type="text" class="form-control form-control-user" name="bulan" placeholder="Bulan ke -">
              </div><br>
                <div class="col-sm-6 mb-sm-0">
                  <input type="text" class="form-control form-control-user" name="Jumlah" placeholder="Jumlah.."><br><br>
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
