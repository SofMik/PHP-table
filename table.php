<!--Ментору: есть вопрос по A xor B
строка 47
и строка 83, спасибо!-->
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Таблицы PHP</title>
  </head>
  <body>
    <h1 class="title">Таблица истинности PHP</h1>
      <table class="table">
        <thead>
          <tr>
            <th>A</th>
            <th>B</th>
            <th>!A</th>
            <th>A || B</th>
            <th>A && B</th>
            <th>A xor B</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
              $a = 0;
              $b = 0; 
              $rezult1 = !$a;
              $rezult2 = $a||$b;
              $rezult3 = $a && $b;
              $rezult4 = $a xor $b;
            ?>
            <td>0</td>
            <td>0</td>
            <td><?php echo (int)$rezult1; ?></td>
            <td><?php echo (int)$rezult2; ?></td>
            <td><?php echo (int)$rezult3; ?></td>
            <td><?php echo (int)$rezult4; ?></td>
          </tr>
            <?php 
              $c = 0;
              $d = 1;
              $rezult5 = !$c;
              $rezult6 = $c || $d;
              $rezult7 = $c && $d;
              $rezult8 = $c xor $d;//true, если $a или $b — true, но не оба
              //0 и 1, один true, не понимаю, почему выдает 0
            ?>
          <tr>
            <td>0</td>
            <td>1</td>
            <td><?php echo (int)$rezult5; ?></td>
            <td><?php echo (int)$rezult6; ?></td>
            <td><?php echo (int)$rezult7; ?></td>
            <td><?php echo (int)$rezult8; ?></td>
          </tr>
            <?php 
              $e = 1;
              $f = 0;
              $rezult9 = !$e;
              $rezult10 = $e || $f;
              $rezult11 = $e && $f;
              $rezult12 = $e xor $f;
            ?>
          <tr>
            <td>1</td>
            <td>0</td>
            <td><?php echo (int)$rezult9; ?></td>
            <td><?php echo (int)$rezult10; ?></td>
            <td><?php echo (int)$rezult11; ?></td>
            <td><?php echo (int)$rezult12; ?></td>
          </tr>
            <?php
              $g = 1;
              $h = 1;
              $rezult13 = !$g;
              $rezult14 = $g || $h;
              $rezult15 = $g && $h;
              $rezult16 = $g xor $h;//true, если $a или $b — true, но не оба
              //1 и 1, оба true, не понимаю, почему выдает 1
            ?>
          <tr>
            <td>1</td>
            <td>1</td>
            <td><?php echo (int)$rezult13; ?></td>
            <td><?php echo (int)$rezult14; ?></td>
            <td><?php echo (int)$rezult15; ?></td>
            <td><?php echo (int)$rezult16; ?></td>
          </tr>
        </tbody>
      </table>
     
    <h1 class="title">Гибкое сравнение в PHP</h1>
      <table class="table">
        <thead>
          <tr>
            <th></th>
            <th>true</th>
            <th>false</th>
            <th>1</th>
            <th>0</th>
            <th>-1</th>
            <th>"1"</th>
            <th>null</th>
            <th>"php"</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
              $ax = true;
              $bx = false; 
              $cx = 1;
              $dx = 0; 
              $ex = -1;
              $fx = "1"; 
              $gx = null;
              $hx = "php"; 
              $ay = true;
              $rezult1_1 = $ax==$ay;
              $rezult1_2 = $bx==$ay;
              $rezult1_3 = $cx==$ay;
              $rezult1_4 = $dx==$ay;
              $rezult1_5 = $ex==$ay;
              $rezult1_6 = $fx==$ay;
              $rezult1_7 = $gx==$ay;
              $rezult1_8 = $hx==$ay;
            ?>
            <td>true</td>
            <td><?php echo (int)$rezult1_1; ?></td>
            <td><?php echo (int)$rezult1_2; ?></td>
            <td><?php echo (int)$rezult1_3; ?></td>
            <td><?php echo (int)$rezult1_4; ?></td>
            <td><?php echo (int)$rezult1_5; ?></td>
            <td><?php echo (int)$rezult1_6; ?></td>
            <td><?php echo (int)$rezult1_7; ?></td>
            <td><?php echo (int)$rezult1_8; ?></td>
          </tr>
            <?php 
              $by = false; 
              $rezult2_1 = $ax==$by;
              $rezult2_2 = $bx==$by;
              $rezult2_3 = $cx==$by;
              $rezult2_4 = $dx==$by;
              $rezult2_5 = $ex==$by;
              $rezult2_6 = $fx==$by;
              $rezult2_7 = $gx==$by;
              $rezult2_8 = $hx==$by;
            ?>
          <tr>
            <td>false</td>
            <td><?php echo (int)$rezult2_1; ?></td>
            <td><?php echo (int)$rezult2_2; ?></td>
            <td><?php echo (int)$rezult2_3; ?></td>
            <td><?php echo (int)$rezult2_4; ?></td>
            <td><?php echo (int)$rezult2_5; ?></td>
            <td><?php echo (int)$rezult2_6; ?></td>
            <td><?php echo (int)$rezult2_7; ?></td>
            <td><?php echo (int)$rezult2_8; ?></td>
          </tr>
            <?php 
              $cy = 1;
              $rezult3_1 = $ax==$cy;
              $rezult3_2 = $bx==$cy;
              $rezult3_3 = $cx==$cy;
              $rezult3_4 = $dx==$cy;
              $rezult3_5 = $ex==$cy;
              $rezult3_6 = $fx==$cy;
              $rezult3_7 = $gx==$cy;
              $rezult3_8 = $hx==$cy;
            ?>
          <tr>
            <td>1</td>
            <td><?php echo (int)$rezult3_1; ?></td>
            <td><?php echo (int)$rezult3_2; ?></td>
            <td><?php echo (int)$rezult3_3; ?></td>
            <td><?php echo (int)$rezult3_4; ?></td>
            <td><?php echo (int)$rezult3_5; ?></td>
            <td><?php echo (int)$rezult3_6; ?></td>
            <td><?php echo (int)$rezult3_7; ?></td>
            <td><?php echo (int)$rezult3_8; ?></td>
          </tr>
            <?php
              $dy = 0; 
              $rezult4_1 = $ax==$dy;
              $rezult4_2 = $bx==$dy;
              $rezult4_3 = $cx==$dy;
              $rezult4_4 = $dx==$dy;
              $rezult4_5 = $ex==$dy;
              $rezult4_6 = $fx==$dy;
              $rezult4_7 = $gx==$dy;
              $rezult4_8 = $hx==$dy;
            ?>
          <tr>
            <td>0</td>
            <td><?php echo (int)$rezult4_1; ?></td>
            <td><?php echo (int)$rezult4_2; ?></td>
            <td><?php echo (int)$rezult4_3; ?></td>
            <td><?php echo (int)$rezult4_4; ?></td>
            <td><?php echo (int)$rezult4_5; ?></td>
            <td><?php echo (int)$rezult4_6; ?></td>
            <td><?php echo (int)$rezult4_7; ?></td>
            <td><?php echo (int)$rezult4_8; ?></td>
          </tr>
            <?php
              $ey = -1;
              $rezult5_1 = $ax==$ey;
              $rezult5_2 = $bx==$ey;
              $rezult5_3 = $cx==$ey;
              $rezult5_4 = $dx==$ey;
              $rezult5_5 = $ex==$ey;
              $rezult5_6 = $fx==$ey;
              $rezult5_7 = $gx==$ey;
              $rezult5_8 = $hx==$ey;
            ?>
          <tr>
            <td>-1</td>
            <td><?php echo (int)$rezult5_1; ?></td>
            <td><?php echo (int)$rezult5_2; ?></td>
            <td><?php echo (int)$rezult5_3; ?></td>
            <td><?php echo (int)$rezult5_4; ?></td>
            <td><?php echo (int)$rezult5_5; ?></td>
            <td><?php echo (int)$rezult5_6; ?></td>
            <td><?php echo (int)$rezult5_7; ?></td>
            <td><?php echo (int)$rezult5_8; ?></td>
          </tr>
            <?php
              $fy = "1"; 
              $rezult6_1 = $ax==$fy;
              $rezult6_2 = $bx==$fy;
              $rezult6_3 = $cx==$fy;
              $rezult6_4 = $dx==$fy;
              $rezult6_5 = $ex==$fy;
              $rezult6_6 = $fx==$fy;
              $rezult6_7 = $gx==$fy;
              $rezult6_8 = $hx==$fy;
            ?>
          <tr>
            <td>"1"</td>
            <td><?php echo (int)$rezult6_1; ?></td>
            <td><?php echo (int)$rezult6_2; ?></td>
            <td><?php echo (int)$rezult6_3; ?></td>
            <td><?php echo (int)$rezult6_4; ?></td>
            <td><?php echo (int)$rezult6_5; ?></td>
            <td><?php echo (int)$rezult6_6; ?></td>
            <td><?php echo (int)$rezult6_7; ?></td>
            <td><?php echo (int)$rezult6_8; ?></td>
          </tr>
            <?php
              $gy = null;
              $rezult7_1 = $ax==$gy;
              $rezult7_2 = $bx==$gy;
              $rezult7_3 = $cx==$gy;
              $rezult7_4 = $dx==$gy;
              $rezult7_5 = $ex==$gy;
              $rezult7_6 = $fx==$gy;
              $rezult7_7 = $gx==$gy;
              $rezult7_8 = $hx==$gy;
            ?>
          <tr>
            <td>null</td>
            <td><?php echo (int)$rezult7_1; ?></td>
            <td><?php echo (int)$rezult7_2; ?></td>
            <td><?php echo (int)$rezult7_3; ?></td>
            <td><?php echo (int)$rezult7_4; ?></td>
            <td><?php echo (int)$rezult7_5; ?></td>
            <td><?php echo (int)$rezult7_6; ?></td>
            <td><?php echo (int)$rezult7_7; ?></td>
            <td><?php echo (int)$rezult7_8; ?></td>
            </tr>
            <?php
              $hy = "php"; 
              $rezult8_1 = $ax==$hy;
              $rezult8_2 = $bx==$hy;
              $rezult8_3 = $cx==$hy;
              $rezult8_4 = $dx==$hy;
              $rezult8_5 = $ex==$hy;
              $rezult8_6 = $fx==$hy;
              $rezult8_7 = $gx==$hy;
              $rezult8_8 = $hx==$hy;
            ?>
          <tr>
            <td>"php"</td>
            <td><?php echo (int)$rezult8_1; ?></td>
            <td><?php echo (int)$rezult8_2; ?></td>
            <td><?php echo (int)$rezult8_3; ?></td>
            <td><?php echo (int)$rezult8_4; ?></td>
            <td><?php echo (int)$rezult8_5; ?></td>
            <td><?php echo (int)$rezult8_6; ?></td>
            <td><?php echo (int)$rezult8_7; ?></td>
            <td><?php echo (int)$rezult8_8; ?></td>
          </tr>
        </tbody>
      </table>

    <h1 class="title">Жёсткое сравнение в PHP</h1>
      <table class="table">
        <thead>
          <tr>
            <th></th>
            <th>true</th>
            <th>false</th>
            <th>1</th>
            <th>0</th>
            <th>-1</th>
            <th>"1"</th>
            <th>null</th>
            <th>"php"</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
              $ax = true;
              $bx = false; 
              $cx = 1;
              $dx = 0; 
              $ex = -1;
              $fx = "1"; 
              $gx = null;
              $hx = "php"; 
              $ay = true;
              $rezult1_1 = $ax===$ay;
              $rezult1_2 = $bx===$ay;
              $rezult1_3 = $cx===$ay;
              $rezult1_4 = $dx===$ay;
              $rezult1_5 = $ex===$ay;
              $rezult1_6 = $fx===$ay;
              $rezult1_7 = $gx===$ay;
              $rezult1_8 = $hx===$ay;
            ?>
            <td>true</td>
            <td><?php echo (int)$rezult1_1; ?></td>
            <td><?php echo (int)$rezult1_2; ?></td>
            <td><?php echo (int)$rezult1_3; ?></td>
            <td><?php echo (int)$rezult1_4; ?></td>
            <td><?php echo (int)$rezult1_5; ?></td>
            <td><?php echo (int)$rezult1_6; ?></td>
            <td><?php echo (int)$rezult1_7; ?></td>
            <td><?php echo (int)$rezult1_8; ?></td>
          </tr>
            <?php 
              $by = false; 
              $rezult2_1 = $ax===$by;
              $rezult2_2 = $bx===$by;
              $rezult2_3 = $cx===$by;
              $rezult2_4 = $dx===$by;
              $rezult2_5 = $ex===$by;
              $rezult2_6 = $fx===$by;
              $rezult2_7 = $gx===$by;
              $rezult2_8 = $hx===$by;
            ?>
          <tr>
            <td>false</td>
            <td><?php echo (int)$rezult2_1; ?></td>
            <td><?php echo (int)$rezult2_2; ?></td>
            <td><?php echo (int)$rezult2_3; ?></td>
            <td><?php echo (int)$rezult2_4; ?></td>
            <td><?php echo (int)$rezult2_5; ?></td>
            <td><?php echo (int)$rezult2_6; ?></td>
            <td><?php echo (int)$rezult2_7; ?></td>
            <td><?php echo (int)$rezult2_8; ?></td>
          </tr>
            <?php 
              $cy = 1;
              $rezult3_1 = $ax===$cy;
              $rezult3_2 = $bx===$cy;
              $rezult3_3 = $cx===$cy;
              $rezult3_4 = $dx===$cy;
              $rezult3_5 = $ex===$cy;
              $rezult3_6 = $fx===$cy;
              $rezult3_7 = $gx===$cy;
              $rezult3_8 = $hx===$cy;
            ?>
          <tr>
            <td>1</td>
            <td><?php echo (int)$rezult3_1; ?></td>
            <td><?php echo (int)$rezult3_2; ?></td>
            <td><?php echo (int)$rezult3_3; ?></td>
            <td><?php echo (int)$rezult3_4; ?></td>
            <td><?php echo (int)$rezult3_5; ?></td>
            <td><?php echo (int)$rezult3_6; ?></td>
            <td><?php echo (int)$rezult3_7; ?></td>
            <td><?php echo (int)$rezult3_8; ?></td>
          </tr>
            <?php
              $dy = 0; 
              $rezult4_1 = $ax===$dy;
              $rezult4_2 = $bx===$dy;
              $rezult4_3 = $cx===$dy;
              $rezult4_4 = $dx===$dy;
              $rezult4_5 = $ex===$dy;
              $rezult4_6 = $fx===$dy;
              $rezult4_7 = $gx===$dy;
              $rezult4_8 = $hx===$dy;
            ?>
          <tr>
            <td>0</td>
            <td><?php echo (int)$rezult4_1; ?></td>
            <td><?php echo (int)$rezult4_2; ?></td>
            <td><?php echo (int)$rezult4_3; ?></td>
            <td><?php echo (int)$rezult4_4; ?></td>
            <td><?php echo (int)$rezult4_5; ?></td>
            <td><?php echo (int)$rezult4_6; ?></td>
            <td><?php echo (int)$rezult4_7; ?></td>
            <td><?php echo (int)$rezult4_8; ?></td>
          </tr>
            <?php
              $ey = -1;
              $rezult5_1 = $ax===$ey;
              $rezult5_2 = $bx===$ey;
              $rezult5_3 = $cx===$ey;
              $rezult5_4 = $dx===$ey;
              $rezult5_5 = $ex===$ey;
              $rezult5_6 = $fx===$ey;
              $rezult5_7 = $gx===$ey;
              $rezult5_8 = $hx===$ey;
            ?>
          <tr>
            <td>-1</td>
            <td><?php echo (int)$rezult5_1; ?></td>
            <td><?php echo (int)$rezult5_2; ?></td>
            <td><?php echo (int)$rezult5_3; ?></td>
            <td><?php echo (int)$rezult5_4; ?></td>
            <td><?php echo (int)$rezult5_5; ?></td>
            <td><?php echo (int)$rezult5_6; ?></td>
            <td><?php echo (int)$rezult5_7; ?></td>
            <td><?php echo (int)$rezult5_8; ?></td>
          </tr>
            <?php
              $fy = "1"; 
              $rezult6_1 = $ax===$fy;
              $rezult6_2 = $bx===$fy;
              $rezult6_3 = $cx===$fy;
              $rezult6_4 = $dx===$fy;
              $rezult6_5 = $ex===$fy;
              $rezult6_6 = $fx===$fy;
              $rezult6_7 = $gx===$fy;
              $rezult6_8 = $hx===$fy;
            ?>
          <tr>
            <td>"1"</td>
            <td><?php echo (int)$rezult6_1; ?></td>
            <td><?php echo (int)$rezult6_2; ?></td>
            <td><?php echo (int)$rezult6_3; ?></td>
            <td><?php echo (int)$rezult6_4; ?></td>
            <td><?php echo (int)$rezult6_5; ?></td>
            <td><?php echo (int)$rezult6_6; ?></td>
            <td><?php echo (int)$rezult6_7; ?></td>
            <td><?php echo (int)$rezult6_8; ?></td>
          </tr>
            <?php
              $gy = null;
              $rezult7_1 = $ax===$gy;
              $rezult7_2 = $bx===$gy;
              $rezult7_3 = $cx===$gy;
              $rezult7_4 = $dx===$gy;
              $rezult7_5 = $ex===$gy;
              $rezult7_6 = $fx===$gy;
              $rezult7_7 = $gx===$gy;
              $rezult7_8 = $hx===$gy;
            ?>
          <tr>
            <td>null</td>
            <td><?php echo (int)$rezult7_1; ?></td>
            <td><?php echo (int)$rezult7_2; ?></td>
            <td><?php echo (int)$rezult7_3; ?></td>
            <td><?php echo (int)$rezult7_4; ?></td>
            <td><?php echo (int)$rezult7_5; ?></td>
            <td><?php echo (int)$rezult7_6; ?></td>
            <td><?php echo (int)$rezult7_7; ?></td>
            <td><?php echo (int)$rezult7_8; ?></td>
          </tr>
            <?php
              $hy = "php"; 
              $rezult8_1 = $ax===$hy;
              $rezult8_2 = $bx===$hy;
              $rezult8_3 = $cx===$hy;
              $rezult8_4 = $dx===$hy;
              $rezult8_5 = $ex===$hy;
              $rezult8_6 = $fx===$hy;
              $rezult8_7 = $gx===$hy;
              $rezult8_8 = $hx===$hy;
            ?>
          <tr>
            <td>"php"</td>
            <td><?php echo (int)$rezult8_1; ?></td>
            <td><?php echo (int)$rezult8_2; ?></td>
            <td><?php echo (int)$rezult8_3; ?></td>
            <td><?php echo (int)$rezult8_4; ?></td>
            <td><?php echo (int)$rezult8_5; ?></td>
            <td><?php echo (int)$rezult8_6; ?></td>
            <td><?php echo (int)$rezult8_7; ?></td>
            <td><?php echo (int)$rezult8_8; ?></td>
          </tr>
      </tbody>
    </table>
    <br>
  </body>
</html>
