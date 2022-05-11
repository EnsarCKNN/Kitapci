<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veri Tabanı</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include("baglantı.php");
        $query = $conn->query("SELECT * FROM kitap  ", PDO::FETCH_ASSOC);
    ?>
    <table class="table table-hover">
    <thead>
    <tr>
      <th scope="col">Kitap Numarası</th>
      <th scope="col">Kitap Adı</th>
      <th scope="col">Kitap Fiyatı</th>
    </tr>
    </thead>
    <tbody>
    <?php
      foreach( $query as $kayit ){
        for ($i=0; $i < 1; $i++) {?>
    <tr>
      <th scope="row"><?php echo $kayit['kitap_int']."<br />"; ?></th>
      <td><?php echo $kayit['kitap_name']."<br />"; ?></td>
      <td><?php echo $kayit['kitap_fiyat']."<br />"; ?></td>
    </tr>
    <?php }} ?>
  </tbody>
</table>
</body>
</html>