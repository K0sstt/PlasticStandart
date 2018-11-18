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
    <div class="caps">
       <div class="container top">
        <h1>Колпачки</h1>
        <div class="container">
            <div class="row">
                <?php
                    require_once('admin/lib/classData.php');
                    $data = Data::getClass(1);
                    print_r($data);
                    foreach($data as $key => $value){
                        printf('<div class="col-md-4">
                    <h2>%s</h2>
                    <p><img class="img-circle" src="admin/script.php?n=essence_image&id=%s" data-toggle="modal" data-target="#modal-1"></p>
                </div>
                <div class="modal fade" id="modal-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" type="button" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Колпачок PCO 1810 S4</h4>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table table-striped ">  
                                                    <tr> 
                                                        <td class="right"><strong>Высота</strong></td> 
                                                        <td class="left"><em>20 мм</em></td> 
                                                    </tr> 
                                                    <tr> 
                                                        <td class="right"><strong>Внутренний диаметр</strong></td> 
                                                        <td class="left"><em>28 мм</em></td> </tr> 
                                                    <tr> 
                                                        <td class="right"><strong>Внешний диаметр</strong></td> 
                                                        <td class="left"><em>30 мм</em></td> 
                                                    <tr> 
                                                        <td class="right"><strong>Назначение</strong></td> 
                                                        <td class="left"><em>пиво, соки, вода, мин. вода</em></td> 
                                                    </tr> 
                                                    <tr> 
                                                        <td class="right"><strong>Вес за 1000 шт.</strong></td> 
                                                        <td class="left"><em>2,75 кг</em></td> 
                                                    </tr> 
                                                    <tr> 
                                                        <td class="right"><strong>Кол-во в коробке</strong></td> 
                                                        <td class="left"><em>4600 шт</em></td> 
                                                    </tr>  
                                                </table>
                                                <p>
                                                    При изготовлении колпачков используется метод горячего прессования, который имеет ряд преимуществ, в сравнении c инжекторным методом, который используют  отечественные  производители аналогичной продукции
                                                </p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
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
                require_once('admin/lib/classData.php');
                $data = Data::getClass(4);
                foreach($data as $key => $value){
                    printf('<li><img src="admin/script.php?n=essence_image&id=%s" /></li>', $key);
                }
            ?>
        </ul>
    </div>
    <?php
        include('content/logo.php');
    ?>
</div>