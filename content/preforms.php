<script src="js/jquery.bxslider.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          $('.bxslider').bxSlider({
              slideWidth: 230,
              minSlides: 2,
              maxSlides: 10,
              moveSlides: 1,
          });
        });
    </script>
    <!-- bxSlider CSS file -->
    <link href="css/jquery.bxslider.css" rel="stylesheet" />
    <div class="preforms">        
        <div class="container top">
            <h1>Пэт преформа</h1>
            <div class="container">
                <div class="row">
                <?php
                    require_once('admin/lib/classData.php');
                    $data = Data::getClass(2);
                    foreach($data as $key => $value){
                        printf('<div class="col-md-4">
                    <h2>%s</h2>
                    <p><img class="img-circle" src="admin/script.php?n=essence_image&id=%s"></p>
                </div>', $value['title'], $key);
                    }
                ?>
                </div>
             </div>
             <div class="description">
                <p>
                    При изготовлении колпачков используется метод горячего прессования, который имеет ряд преимуществ, в сравнении c инжекторным методом, который используют  отечественные  производители аналогичной продукции,  а именно:
                </p>
                <ul>
                    <li>придает большей стабильности размеру;</li>
                    <li>улучшает геометрические характеристики колпачка;</li>
                    <li>поверхность колпачков не имеет следов, что приводит к улучшению эстетичного вида и повышению качества прессования;</li>
                    <li>при производстве материал подвергается меньшему температурному и механическому воздействию, что влияет на качество колпачка;</li>
                    <li>компьютерный контроль качества продукции;</li>
                    <li>легкость или жесткость открывания защитного кольца при откручивании колпака с ПЭТ-бутылки можно обеспечить по желанию клиента при помощи настроек оборудования;</li>
                </ul>
             </div>
        </div>
            
            <!--carousel-->
        <div class="container carousel">
           <h2>Цвета в наличии</h2>
            <ul class="bxslider">
                <?php
                    $data = Data::getClass('5');
                    foreach($data as $key => $value){
                        printf('<li><img src="admin/script.php?n=essence_image&id=%s" /></li>', $key);
                    }
                ?>
            </ul>
        </div>
</div>