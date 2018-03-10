
<div class="category-header">
  <div class="wrap wim">
    <div class="wrpimg">
      <div class="wrpovr">
        <img src="<?php echo $image; ?>">
      </div>
    </div>

    <?php
    $term = get_queried_object();
    $adress = get_field('адрес', $term);    
    $quantity = get_field('количество_квартир', $term);    
    $sqrt = get_field('площадь_квартир', $term);    
    $status = get_field('статус_дома', $term);    
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
  </div>
  <div class="wrap data">
    <div class="singcarry">
      <div class="singcarry-h">      
        <div class="flex">
          <span class="bdg-adress">
            <img src="http://novostroy/wp-content/uploads/2017/12/003-gps.png">
            Адрес:  <p><?php echo $adress; ?></p>
          </span></div>
        <div class="flex">
          <span class="bdg-quantity">
            <img src="http://novostroy/wp-content/uploads/2017/12/002-appartments.png">
            Количество квартир: <p> <?php echo $quantity; ?></p>
          </span>
        </div>
        <div class="flex">
          <span class="bdg-sqrt">
            <img src="http://novostroy/wp-content/uploads/2017/12/001-ruler.png">
            Площадь квартир: <p> <?php echo $sqrt; ?></p>
          </span>
        </div>
        <div class="flex">
          <span class="bdg-status">
            <img src="http://novostroy/wp-content/uploads/2017/12/004-list.png">
            Статус дома: <p><?php echo $status; ?></p>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="wrap map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2742.54755618702!2d30.8057235512293!3d46.576411866459416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c63b2edc864137%3A0xda288dd451caab6d!2z0YPQu9C40YbQsCDQkNC60LDQtNC10LzQuNC60LAg0KHQsNGF0LDRgNC-0LLQsCwg0J7QtNC10YHRgdCwLCDQntC00LXRgdGB0LrQsNGPINC-0LHQu9Cw0YHRgtGM!5e0!3m2!1sru!2sua!4v1509821501031" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen=""></iframe>
  </div>
</div>
