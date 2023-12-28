<?php 

include 'Backend/DataBaseConnection.php';

            //Do the query
            //$query = "SELECT * FROM hotels";
            //$result = mysqli_query($link, "SELECT * FROM 'hotels'");
            //iterate over all the rows
            $sql = "SELECT * FROM hotels";
            $result = $link->query($sql);
 
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                   ?>
                    <li class="hotel-card">
                        <a class="hotel-card-link" href="#">
                          <?php 
                          $fileDir = "UploadsImages/".$row["id"]."/".$row["id"].".jpg";                          
                          if(file_exists($fileDir))
                          {
                            ?>
                              <img class="hotel-card-image" src="<?php echo $fileDir ?>" width="300" height="212" alt="Отель Amara Resort & Spa.">
                            <?php 
                          }
                          else {

                           ?>
                           <img class="hotel-card-image" src="images/catalog/catalog-1.jpg" width="300" height="212" alt="Отель Amara Resort & Spa.">
                           <?php 
                          }
                          ?>
                          
                        </a>
                        <a class="hotel-card-link-title" href="#">
                            <h3 class="hotel-card-title"><?php echo $row["name"] ?></h3>
                        </a>
                        <span class="hotel-card-desc-housing-type">Гостиница</span>
                        <span class="hotel-card-desc-price">От <?php echo $row["price"]  ?> ₽</span>
                        <a href="#" class="button-brown hotel-card-more">Подробнее</a>
                        <button type="button" class="button-blue hotel-card-button-favourite">В избранное</button>
                        <div class="hotel-card-four-stars">
                          <span class="visually-hidden">Четыре звезды.</span>
                        </div>
                        <p class="hotel-card-rating">Рейтинг: <?php echo $row["raiting"] ?></p>
                    </li>

                <?php 
                }               
            } else {
                echo "0 results";
            }
            ?>
                


<?php 
/*
<li class="hotel-card">
            <a class="hotel-card-link" href="#">
              <img class="hotel-card-image" src="images/catalog/catalog-1.jpg" width="300" height="212" alt="Отель Amara Resort & Spa.">
            </a>
            <a class="hotel-card-link-title" href="#"><h3 class="hotel-card-title">Amara Resort & Spa</h3></a>
            <span class="hotel-card-desc-housing-type">Гостиница</span>
            <span class="hotel-card-desc-price">От 4000 ₽</span>
            <a href="#" class="button-brown hotel-card-more">Подробнее</a>
            <button type="button" class="button-blue hotel-card-button-favourite">В избранное</button>
            <div class="hotel-card-four-stars">
              <span class="visually-hidden">Четыре звезды.</span>
            </div>
            <p class="hotel-card-rating">Рейтинг: 8,5</p>
          </li>
          <li class="hotel-card">
            <a class="hotel-card-link" href="#">
              <img class="hotel-card-image" src="images/catalog/catalog-2.jpg" width="300" height="212" alt="Отель Villas at Poco Diablo.">
            </a>
            <a class="hotel-card-link-title" href="#"><h3 class="hotel-card-title">Villas at Poco Diablo</h3></a>
            <span class="hotel-card-desc-housing-type">Гостиница</span>
            <span class="hotel-card-desc-price">От 5000 ₽</span>
            <a href="#" class="button-brown hotel-card-more">Подробнее</a>
            <button type="button" class="button-green hotel-card-button-favourite favourite">В избранном</button>
            <div class="hotel-card-four-stars">
              <span class="visually-hidden">Четыре звезды.</span>
            </div>
            <p class="hotel-card-rating">Рейтинг: 9,2</p>
          </li>
          <li class="hotel-card">
            <a class="hotel-card-link" href="#">
              <img class="hotel-card-image" src="images/catalog/catalog-3.jpg" width="300" height="212" alt="Отель Desert Quail Inn.">
            </a>
            <a class="hotel-card-link-title" href="#"><h3 class="hotel-card-title">Desert Quail Inn</h3></a>
            <span class="hotel-card-desc-housing-type">Гостиница</span>
            <span class="hotel-card-desc-price">От 2500 ₽</span>
            <a href="#" class="button-brown hotel-card-more">Подробнее</a>
            <button type="button" class="button-blue hotel-card-button-favourite">В избранное</button>
            <div class="hotel-card-three-stars">
              <span class="visually-hidden">Три звезды.</span>
            </div>
            <p class="hotel-card-rating">Рейтинг: 6,9</p>
          </li>
          <li class="hotel-card">
            <a class="hotel-card-link" href="#">
              <img class="hotel-card-image" src="images/catalog/catalog-4.jpg" width="300" height="212" alt="Отель GreenTree Inn.">
            </a>
            <a class="hotel-card-link-title" href="#"><h3 class="hotel-card-title">GreenTree Inn</h3></a>
            <span class="hotel-card-desc-housing-type">Гостиница</span>
            <span class="hotel-card-desc-price">От 1500 ₽</span>
            <a href="#" class="button-brown hotel-card-more">Подробнее</a>
            <button type="button" class="button-blue hotel-card-button-favourite">В избранное</button>
            <div class="hotel-card-two-stars">
              <span class="visually-hidden">Две звезды.</span>
            </div>
            <p class="hotel-card-rating">Рейтинг: 5,0</p>
          </li>
*/

?>
