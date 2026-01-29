<?php require_once "Controllers/Ligler.php"?>
<?php require_once "Controllers/GolKralligi.php"?>
<?php require_once "Controllers/PuanDurumu.php"?>
<?php require_once "Controllers/MacSonuclari.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPOR</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form method="POST">
        <h1>SPOR API</h1>
        <p>Seçtiğin Lige göre Puan Tablosu, Maç sonuçları ve Gol Krallığı tablolarını görüntüle.</p>
        <div class="form-group options">
            <select name="ligler" style="width:90%">
                <?php foreach($ligler["result"] as $lig):?>
                    <option value="<?php echo $lig["key"]?>"><?php echo $lig["league"]?></option>
                    <?php endforeach;?>
            </select>
            <button type="submit" name="searchBtn" style="width:10%"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
    </form>
    <div id="bilgiler">
        <div class="card">
            <div class="card-header">
                <h3>PUAN DURUMU</h3>
            </div>
            <div class="card-body">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Takım</th>
                            <th>OM</th>
                            <th>G</th>
                            <th>M</th>
                            <th>B</th>
                            <th>AG</th>
                            <th>YG</th>
                            <th>A</th>
                            <th>P</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($puandurumu as $puan):?>
                        <tr>
                            <td><?php echo $puan["rank"];?></td>
                            <td><?php echo $puan["team"];?></td>
                            <td><?php echo $puan["play"];?></td>
                            <td><?php echo $puan["win"];?></td>
                            <td><?php echo $puan["lose"];?></td>
                            <td><?php echo $puan["draw"];?></td>
                            <td><?php echo $puan["goalfor"];?></td>
                            <td><?php echo $puan["goalagainst"];?></td>
                            <td><?php echo $puan["goaldistance"];?></td>
                            <td><?php echo $puan["point"];?></td>
                        </tr>           
                        <?php endforeach;?>                           
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3>GOL KRALLIĞI TABLOSU</h3>
            </div>
            <div class="card-body">
                <table>
                    <thead>
                        <tr>
                            <th>İsim</th>
                            <th>Gol</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($golkralligi as $kral):?>
                        <tr>
                            <td><?php echo $kral["name"];?></td>
                            <td><?php echo $kral["goals"];?></td>
                        </tr>           
                        <?php endforeach?>                          
                    </tbody>
                </table>
            </div>
        </div>         
        <div class="card">
            <div class="card-header">
                <h3>MAÇ SONUÇLARI</h3>
            </div>
            <div class="card-body">
                <table>
                    <thead>
                        <tr>
                            <th>Ev Sahibi</th>
                            <th>Sonuç</th>
                            <th>Deplasman</th>
                            <th>Tarih</th>
                        </tr>
                    </thead>
                    <tbody>
                          <?php foreach($macsonuclari as $sonuc):
                                if ($sonuc["skor"]=="undefined-undefined"){
                                    $skor = "-";
                                }else{
                                    $skor = $sonuc["skor"];
                                }
                            ?>
                        <tr>
                            
                            <td><?php echo $sonuc["home"];?></td>
                            <td><?php echo $skor;?></td>
                            <td><?php echo $sonuc["away"];?></td>
                            <td><?php echo $sonuc["date"];?></td>
                        </tr>           
                        <?php endforeach?>                           
                    </tbody>
                </table>
            </div>            
        </div>
       
    </div>
</body>
</html>