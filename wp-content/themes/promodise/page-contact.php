<?php
/*
    Template Name: Шаблон страницы контактов
    Template Post Type: page
*/
?>

<?php get_header() ?>

<!--MAIN BANNER AREA START -->
<div class="page-banner-area page-contact" id="page-banner">
    <div class="overlay dark-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                <div class="banner-content content-padding">
                    <?php the_content();?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MAIN HEADER AREA END -->
<!--  Contact START  -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-md-12">
                <div class="mb-5">
                    <h2 class="mb-2">Напишите нам</h2>
                    <p>
                        Обычно, мы видим заявку сразу, а перезваниваем или пишем в ответ в течение часа. Иногда ответ может
                        занять до одного дня.
                    </p>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-sm-12">
                <form class="contact__form" action="<?php echo admin_url('admin-ajax.php') ?>">
                    <input type="hidden" name="action" value="my_action">
                    <!-- form message -->
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                             <!--  Ваше сообщение отправлено. -->
                            </div>
                        </div>
                    </div>
                    <!-- end message -->
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input name="name" type="text" class="form-control" placeholder="Имя" required />
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="email" type="email" class="form-control" placeholder="Email" required />
                        </div>
                        <div class="col-md-12 form-group">
                            <input name="phone" type="text" class="form-control" placeholder="Телефон" required />
                        </div>
                        <div class="col-12 form-group">
                            <textarea name="message" class="form-control" rows="6" placeholder="Сообщение" required></textarea>
                        </div>
                        <div class="col-12 mt-4">
                            <input name="submit" type="submit" class="btn btn-hero btn-circled" value="Отправить" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-sm-12">
                                <?php
                // echo do_shortcode('[contact-form-7 id="235" title="Contact form 1"]');
                ?>
            </div>

            <div class="col-lg-5 pl-4 mt-4 mt-lg-0">
                <h4>Адрес офиса</h4>
                <p class="mb-3"><?php the_field('contact_address', 'option'); ?></p>
                <h4>Телефон</h4>
                <p class="mb-3"><?php the_field('contact_number', 'option'); ?></p>
                <h4>E-Mail</h4>
                <p class="mb-3"><?php the_field('contact_email', 'option'); ?></p>
            </div>
        </div>
    </div>
</section>
<!--  CONTACT END  -->
<!--  Google Map START  -->

<script src="https://maps.google.com/maps/api/js?libraries=geometry&v=3.41&key=AIzaSyBf86ERXMsj_Tj2mXWAS9GATz9H8ulGxbg&language=en&ver=5.7.1"></script>

<script>
    function initMap() {
        // Styles a map in night mode.
        const map = document.getElementById('map');
        const mapSettings = new google.maps.Map(map, {
            center:  new google.maps.LatLng(<?php the_field('maps_gps')?>),
            zoom: <?php the_field('zoom_maps')?>,
            styles: [
                {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
                {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
                {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
                {
                    featureType: 'administrative.locality',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#d59563'}]
                },
                {
                    featureType: 'poi',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#d59563'}]
                },
                {
                    featureType: 'poi.park',
                    elementType: 'geometry',
                    stylers: [{color: '#263c3f'}]
                },
                {
                    featureType: 'poi.park',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#6b9a76'}]
                },
                {
                    featureType: 'road',
                    elementType: 'geometry',
                    stylers: [{color: '#38414e'}]
                },
                {
                    featureType: 'road',
                    elementType: 'geometry.stroke',
                    stylers: [{color: '#212a37'}]
                },
                {
                    featureType: 'road',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9ca5b3'}]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'geometry',
                    stylers: [{color: '#746855'}]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'geometry.stroke',
                    stylers: [{color: '#1f2835'}]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#f3d19c'}]
                },
                {
                    featureType: 'transit',
                    elementType: 'geometry',
                    stylers: [{color: '#2f3948'}]
                },
                {
                    featureType: 'transit.station',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#d59563'}]
                },
                {
                    featureType: 'water',
                    elementType: 'geometry',
                    stylers: [{color: '#17263c'}]
                },
                {
                    featureType: 'water',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#515c6d'}]
                },
                {
                    featureType: 'water',
                    elementType: 'labels.text.stroke',
                    stylers: [{color: '#17263c'}]
                }
            ],
        });

        const mapData = "<?php the_field('marker-text')?>";
        const infowindow = new google.maps.InfoWindow({
            content: mapData
        });
        const marker = new google.maps.Marker({
            position: mapSettings.getCenter(),
            icon: "<?php the_field('icon_map');?>",
            map: mapSettings,
        })

        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map,marker);
        });
    }
    window.onload=function (){
        initMap()
    }

</script>

<section id="map" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-6 col-md-3">

            </div>
        </div>
    </div>
</section>
<!--  Google Map END  -->

<?php get_footer() ?>
