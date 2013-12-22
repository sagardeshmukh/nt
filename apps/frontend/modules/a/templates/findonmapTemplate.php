<?php use_helper('a') ?>

<?php // See the documentation for exciting ways to completely customize the areas and slots used here. This ?>
<?php // is just a copy of what's in the plugin to show you that you can override template files at project level. ?>
<?php // You should never modify the plugin. ?>

<?php // Defining the <body> class ?>
<?php slot('a-body-class','a-home') ?>

<?php // Breadcrumb is removed for the home page template because it is redundant ?>
<?php slot('a-breadcrumb', '') ?>

<?php // Subnav is removed for the home page template because it is redundant ?>
<?php slot('a-subnav', '') ?>

<?php a_slot('home-banner', 'aSlideshow', array(
  'areaHideWhenEmpty' => true,
  'history' => false,  
	'width' => 960,
	'height' => 300,
	'resizeType' => 'c',
	'flexHeight' => false,
	'constraints' => array('minimum-width' => 960, 'minimum-height' => 300),
	'arrows' => true,
	'interval' => 8,
	'random' => true,
	'title' => false,
	'description' => false,
	'credit' => false,
	'position' => true,
	'transition' => 'crossfade',
	'duration' => 500,
	'itemTemplate' => 'homeBannerItem',
	'allowed_variants' => array('autoplay','normal'),
)) ?>

<?php // The a/standardArea component is an easy way to pull in the usual list of great content slots. ?>
<?php // You don't have to limit yourself to it, see a_area and a_slot in the documentation ?>
<?php // http://trac.apostrophenow.org/wiki/ManualDesignersGuide#areas ?>
<?php // http://trac.apostrophenow.org/wiki/ManualDesignersGuide#slots ?>
<?php //echo "Hello world"; ?>
<div style="border:thin solid #000">


<link href="/js/css/application.css" media="all" rel="stylesheet" type="text/css">
<link href="/js/css/facebox.css" media="all" rel="stylesheet" type="text/css">
<script src="/js/css/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="/js/css/infobubble.js" type="text/javascript"></script>
<script src="/js/css/facebox.js" type="text/javascript"></script>

<section id="page_container" class="container_16 clearfix" style="min-height:160px;">
	<section class="clearfix">
		<section id="results">

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

    <section class="clearfix">
        
        <section id="locations_list_view" class="grid_4" style="width:244px;margin-right:0px;">
            <ul id="locations">
                    <li id="location_659" data-id="659" data-lat="40.7032" data-lng="-73.9905" class="location">
    <table>
        <tr class="title">
            <td class="index"><span>1</span></td>
            <td><span>Aegir Boardworks</span></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <div class="category">Shopping</div>
                <div class="address" style="display:none;">99 Water Street</div>
                <!-- <div class="city-state-zip">Brooklyn, NY 11201</div> -->
                <div class="phone" style="display:none;">(347) 987-3825</div>
            </td>
        </tr>
    </table>
</li>
                    <li id="location_591" data-id="591" data-lat="40.704" data-lng="-73.9867" class="location">
    <table>
        <tr class="title">
            <td class="index"><span>2</span></td>
            <td><span>AICAD/New York Studio Residency Program</span></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <div class="category">Culture</div>
                <div class="address" style="display:none;">20 Jay Street, Suite M10</div>
                <!-- <div class="city-state-zip">Brooklyn, NY 11201</div> -->
                <div class="phone" style="display:none;">718.852.0173</div>
            </td>
        </tr>
    </table>
</li>
                    <li id="location_536" data-id="536" data-lat="40.7025" data-lng="-73.9893" class="location">
    <table>
        <tr class="title">
            <td class="index"><span>3</span></td>
            <td><span>Almacen Unlimited Art</span></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <div class="category">Businesses &amp; Services</div>
                <div class="address" style="display:none;">111 Front Street, Suite 224</div>
                <!-- <div class="city-state-zip">Brooklyn, NY 11201</div> -->
                <div class="phone" style="display:none;">(347) 935-0128 </div>
            </td>
        </tr>
    </table>
</li>
                    <li id="location_449" data-id="449" data-lat="40.7025" data-lng="-73.9893" class="location">
    <table>
        <tr class="title">
            <td class="index"><span>4</span></td>
            <td><span>AlMar</span></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <div class="category">Eating + Drinking</div>
                <div class="address" style="display:none;">111 Front Street</div>
                <!-- <div class="city-state-zip">Brooklyn, NY 11201</div> -->
                <div class="phone" style="display:none;">(718) 855-5288</div>
            </td>
        </tr>
    </table>
</li>
                    <li id="location_442" data-id="442" data-lat="40.7033" data-lng="-73.9911" class="location">
    <table>
        <tr class="title">
            <td class="index"><span>5</span></td>
            <td><span>Almondine</span></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <div class="category">Eating + Drinking</div>
                <div class="address" style="display:none;">85 Water Street</div>
                <!-- <div class="city-state-zip">Brooklyn, NY 11201</div> -->
                <div class="phone" style="display:none;">(718) 797-5026</div>
            </td>
        </tr>
    </table>
</li>
                    <li id="location_546" data-id="546" data-lat="40.7025" data-lng="-73.9893" class="location">
    <table>
        <tr class="title">
            <td class="index"><span>6</span></td>
            <td><span>Amos Eno Gallery</span></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <div class="category">Culture</div>
                <div class="address" style="display:none;">111 Front Street, Suite 202</div>
                <!-- <div class="city-state-zip">Brooklyn, NY 11201</div> -->
                <div class="phone" style="display:none;">(718) 237-3001</div>
            </td>
        </tr>
    </table>
</li>
                    <li id="location_453" data-id="453" data-lat="40.703" data-lng="-73.9875" class="location">
    <table>
        <tr class="title">
            <td class="index"><span>7</span></td>
            <td><span>Archway Café</span></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <div class="category">Eating + Drinking</div>
                <div class="address" style="display:none;">57 Pearl St.</div>
                <!-- <div class="city-state-zip">Brooklyn, NY 11201</div> -->
                <div class="phone" style="display:none;">(718) 522-3455</div>
            </td>
        </tr>
    </table>
</li>
                    <li id="location_680" data-id="680" data-lat="40.7047" data-lng="-74.0071" class="location">
    <table>
        <tr class="title">
            <td class="index"><span>8</span></td>
            <td><span>Arcilesi &amp; Homberg Fine Art</span></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <div class="category">Culture</div>
                <div class="address" style="display:none;">111 Front Street, Suite 222</div>
                <!-- <div class="city-state-zip">Brooklyn, NY 11201</div> -->
                <div class="phone" style="display:none;">212.810.7716</div>
            </td>
        </tr>
    </table>
</li>
            </ul>
            <div class="pagination clearfix">
                <a class="previous_page" rel="prev start" href="/places?display=map&amp;page=1">Prev</a> <a rel="prev start" href="/places?display=map&amp;page=1">1</a> <em class="current">2</em> <a rel="next" href="/places?display=map&amp;page=3">3</a> <span class="gap">&hellip;</span> <a href="/places?display=map&amp;page=26">26</a> <a href="/places?display=map&amp;page=27">27</a> <a href="/places?display=map&amp;page=28">28</a> <a class="next_page" rel="next" href="/places?display=map&amp;page=3">Next</a>
            </div>
            
        </section>
<!--        <section id="map_canvas" class="grid_12" style="width:70%;float:right;margin-left:0px;min-height:500px;"></section>-->
    <section id="map_canvas" class="grid_12" style="margin-left:0px;min-height:500px;"></section>

        
    </section>
    
    
    <br/>
    
    <div style="display:none;">
        
        <div id="bubble_659" class="result bubble">
            <div class="image">
                <!--<img alt="Thumb_aegir-places" src="/uploads/location/image/659/thumb_Aegir-Places.jpg?1346788832" />-->
				<img alt="Thumb_aegir-places" src="css/thumb_DSC_0570.jpg" />
            </div>
            <div class="content">
                <h4>Shopping</h4>
                <h3>Aegir Boardworks</h3>

                <p>
                    99 Water Street<br/>
                    (347) 987-3825
                </p>

            </div>
            
            <table width="100%">
                <tr>
                    <td class="center">
                        <div onclick="showEventBox('http://dumbo.is/places/aegir-boardworks');"><img alt="Info_icon" src="css/info_icon.png?1372878126" /></div>
                        <h5><div onclick="showEventBox('http://dumbo.is/places/aegir-boardworks');">More Info</div></h5>
                    </td>
                    <td class="center">
                        <a href="http://maps.google.com/maps?saddr=&amp;daddr=40.7032,-73.9905" target="_new">
                            <div>
                                <img alt="Directions_icon" src="css/directions_icon.png?1372878126" />
                                <h5>Directions</h5>
                            <div>
</a>                    </td>                    
                    <td class="center">
                            <a href="http://dumbo.is/users/sign_up">
                                <img alt="Itinerary_icon" src="css/itinerary_icon.png?1372878126" />
                                <h5>Add to Itinerary</h5>
</a>                    </td>
                </tr>
            </table>
        </div>
        
        
        <div id="bubble_591" class="result bubble">
            <div class="image">
                <!--<img alt="Thumb_default" src="/images/fallback/location/thumb_default.jpg?1372878126" />-->
				<img alt="Thumb_aegir-places" src="css/thumb_DSC_0570.jpg" />
            </div>
            <div class="content">
                <h4>Culture</h4>
                <h3>AICAD/New York Studio Residency Program</h3>

                <p>
                    20 Jay Street, Suite M10<br/>
                    718.852.0173
                </p>

            </div>
            
            <table width="100%">
                <tr>
                    <td class="center">
                        <div onclick="showEventBox('http://dumbo.is/places/aicad-new-york-studio-residency-program');"><img alt="Info_icon" src="css/info_icon.png?1372878126" /></div>
                        <h5><div onclick="showEventBox('http://dumbo.is/places/aicad-new-york-studio-residency-program');">More Info</div></h5>
                    </td>
                    <td class="center">
                        <a href="http://maps.google.com/maps?saddr=&amp;daddr=40.704,-73.9867" target="_new">
                            <div>
                                <img alt="Directions_icon" src="css/directions_icon.png?1372878126" />
                                <h5>Directions</h5>
                            <div>
</a>                    </td>                    
                    <td class="center">
                            <a href="http://dumbo.is/users/sign_up">
                                <img alt="Itinerary_icon" src="css/itinerary_icon.png?1372878126" />
                                <h5>Add to Itinerary</h5>
</a>                    </td>
                </tr>
            </table>
        </div>
        
        
        <div id="bubble_536" class="result bubble">
            <div class="image">
                <!--<img alt="Thumb_almacen" src="/uploads/location/image/536/thumb_almacen.jpg?1332566050" />-->
				<img alt="Thumb_aegir-places" src="css/thumb_DSC_0570.jpg" />
            </div>
            <div class="content">
                <h4>Businesses &amp; Services</h4>
                <h3>Almacen Unlimited Art</h3>

                <p>
                    111 Front Street, Suite 224<br/>
                    (347) 935-0128 
                </p>

            </div>
            
            <table width="100%">
                <tr>
                    <td class="center">
                        <div onclick="showEventBox('http://dumbo.is/places/almacen-unlimited-art');"><img alt="Info_icon" src="css/info_icon.png?1372878126" /></div>
                        <h5><div onclick="showEventBox('http://dumbo.is/places/almacen-unlimited-art');">More Info</div></h5>
                    </td>
                    <td class="center">
                        <a href="http://maps.google.com/maps?saddr=&amp;daddr=40.7025,-73.9893" target="_new">
                            <div>
                                <img alt="Directions_icon" src="css/directions_icon.png?1372878126" />
                                <h5>Directions</h5>
                            <div>
</a>                    </td>                    
                    <td class="center">
                            <a href="http://dumbo.is/users/sign_up">
                                <img alt="Itinerary_icon" src="css/itinerary_icon.png?1372878126" />
                                <h5>Add to Itinerary</h5>
</a>                    </td>
                </tr>
            </table>
        </div>
        
        
        <div id="bubble_449" class="result bubble">
            <div class="image">
                <!--<img alt="Thumb_almar" src="/uploads/location/image/449/thumb_almar.jpg?1332565932" />-->
				<img alt="Thumb_aegir-places" src="css/thumb_DSC_0570.jpg" />
            </div>
            <div class="content">
                <h4>Eating + Drinking</h4>
                <h3>AlMar</h3>

                <p>
                    111 Front Street<br/>
                    (718) 855-5288
                </p>

            </div>
            
            <table width="100%">
                <tr>
                    <td class="center">
                        <div onclick="showEventBox('http://dumbo.is/places/almar');"><img alt="Info_icon" src="css/info_icon.png?1372878126" /></div>
                        <h5><div onclick="showEventBox('http://dumbo.is/places/almar');">More Info</div></h5>
                    </td>
                    <td class="center">
                        <a href="http://maps.google.com/maps?saddr=&amp;daddr=40.7025,-73.9893" target="_new">
                            <div>
                                <img alt="Directions_icon" src="css/directions_icon.png?1372878126" />
                                <h5>Directions</h5>
                            <div>
</a>                    </td>                    
                    <td class="center">
                            <a href="http://dumbo.is/users/sign_up">
                                <img alt="Itinerary_icon" src="css/itinerary_icon.png?1372878126" />
                                <h5>Add to Itinerary</h5>
</a>                    </td>
                </tr>
            </table>
        </div>
        
        
        <div id="bubble_442" class="result bubble">
            <div class="image">
                <!--<img alt="Thumb_almondine" src="/uploads/location/image/442/thumb_almondine.jpg?1332565920" />-->
				<img alt="Thumb_aegir-places" src="css/thumb_DSC_0570.jpg" />
            </div>
            <div class="content">
                <h4>Eating + Drinking</h4>
                <h3>Almondine</h3>

                <p>
                    85 Water Street<br/>
                    (718) 797-5026
                </p>

            </div>
            
            <table width="100%">
                <tr>
                    <td class="center">
                        <div onclick="showEventBox('http://dumbo.is/places/almondine');"><img alt="Info_icon" src="css/info_icon.png?1372878126" /></div>
                        <h5><div onclick="showEventBox('http://dumbo.is/places/almondine');">More Info</div></h5>
                    </td>
                    <td class="center">
                        <a href="http://maps.google.com/maps?saddr=&amp;daddr=40.7033,-73.9911" target="_new">
                            <div>
                                <img alt="Directions_icon" src="css/directions_icon.png?1372878126" />
                                <h5>Directions</h5>
                            <div>
</a>                    </td>                    
                    <td class="center">
                            <a href="http://dumbo.is/users/sign_up">
                                <img alt="Itinerary_icon" src="css/itinerary_icon.png?1372878126" />
                                <h5>Add to Itinerary</h5>
</a>                    </td>
                </tr>
            </table>
        </div>
        
        
        <div id="bubble_546" class="result bubble">
            <div class="image">
                <!--<img alt="Thumb_amoseno" src="/uploads/location/image/546/thumb_amoseno.jpg?1332566063" />-->
				<img alt="Thumb_aegir-places" src="css/thumb_DSC_0570.jpg" />
            </div>
            <div class="content">
                <h4>Culture</h4>
                <h3>Amos Eno Gallery</h3>

                <p>
                    111 Front Street, Suite 202<br/>
                    (718) 237-3001
                </p>

            </div>
            
            <table width="100%">
                <tr>
                    <td class="center">
                        <div onclick="showEventBox('http://dumbo.is/places/amos-eno-gallery');"><img alt="Info_icon" src="css/info_icon.png?1372878126" /></div>
                        <h5><div onclick="showEventBox('http://dumbo.is/places/amos-eno-gallery');">More Info</div></h5>
                    </td>
                    <td class="center">
                        <a href="http://maps.google.com/maps?saddr=&amp;daddr=40.7025,-73.9893" target="_new">
                            <div>
                                <img alt="Directions_icon" src="css/directions_icon.png?1372878126" />
                                <h5>Directions</h5>
                            <div>
</a>                    </td>                    
                    <td class="center">
                            <a href="http://dumbo.is/users/sign_up">
                                <img alt="Itinerary_icon" src="css/itinerary_icon.png?1372878126" />
                                <h5>Add to Itinerary</h5>
</a>                    </td>
                </tr>
            </table>
        </div>
        
        
        <div id="bubble_453" class="result bubble">
            <div class="image">
                <!--<img alt="Thumb_archwaycafe02" src="/uploads/location/image/453/thumb_archwaycafe02.jpg?1332565940" />-->
				<img alt="Thumb_aegir-places" src="css/thumb_DSC_0570.jpg" />
            </div>
            <div class="content">
                <h4>Eating + Drinking</h4>
                <h3>Archway Café</h3>

                <p>
                    57 Pearl St.<br/>
                    (718) 522-3455
                </p>

            </div>
            
            <table width="100%">
                <tr>
                    <td class="center">
                        <div onclick="showEventBox('http://dumbo.is/places/archway-cafe');"><img alt="Info_icon" src="css/info_icon.png?1372878126" /></div>
                        <h5><div onclick="showEventBox('http://dumbo.is/places/archway-cafe');">More Info</div></h5>
                    </td>
                    <td class="center">
                        <a href="http://maps.google.com/maps?saddr=&amp;daddr=40.703,-73.9875" target="_new">
                            <div>
                                <img alt="Directions_icon" src="css/directions_icon.png?1372878126" />
                                <h5>Directions</h5>
                            <div>
</a>                    </td>                    
                    <td class="center">
                            <a href="http://dumbo.is/users/sign_up">
                                <img alt="Itinerary_icon" src="css/itinerary_icon.png?1372878126" />
                                <h5>Add to Itinerary</h5>
</a>                    </td>
                </tr>
            </table>
        </div>
        
        
        <div id="bubble_680" class="result bubble">
            <div class="image">
                <!--<img alt="Thumb_aha-arcilesi-homberg" src="/uploads/location/image/680/thumb_AHA-arcilesi-homberg.jpg?1350938180" />-->
				<img alt="Thumb_aegir-places" src="css/thumb_DSC_0570.jpg" />
            </div>
            <div class="content">
                <h4>Culture</h4>
                <h3>Arcilesi &amp; Homberg Fine Art</h3>

                <p>
                    111 Front Street, Suite 222<br/>
                    212.810.7716
                </p>

            </div>
            
            <table width="100%">
                <tr>
                    <td class="center">
                        <div onclick="showEventBox('http://dumbo.is/places/arcilesi-homberg-fine-art');"><img alt="Info_icon" src="css/info_icon.png?1372878126" /></div>
                        <h5><div onclick="showEventBox('http://dumbo.is/places/arcilesi-homberg-fine-art');">More Info</div></h5>
                    </td>
                    <td class="center">
                        <a href="http://maps.google.com/maps?saddr=&amp;daddr=40.7047,-74.0071" target="_new">
                            <div>
                                <img alt="Directions_icon" src="css/directions_icon.png?1372878126" />
                                <h5>Directions</h5>
                            <div>
</a>                    </td>                    
                    <td class="center">
                            <a href="http://dumbo.is/users/sign_up">
                                <img alt="Itinerary_icon" src="css/itinerary_icon.png?1372878126" />
                                <h5>Add to Itinerary</h5>
</a>                    </td>
                </tr>
            </table>
        </div>
        
    </div>
    

<script type="text/javascript">

	var initialLocation = new google.maps.LatLng(40.7033,-73.989);
	var map;
	var infoWindow;
	var infoBubble;
	var markers = [];
	var selected_marker;
	var icons = [];
	var locations = [{"location":{"address":"99 Water Street","city":"Brooklyn","description":"Aegir Boardworks is a surf shop in the summer, and a snowboard shop in the winter. Stop by for some skateboards and some clothing, but mostly they are here to assist you on anything you might need in the realm of surf/snow.","hours":"Mon - Sun: 11am - 8pm","id":659,"latitude":40.7032,"longitude":-73.9905,"name":"Aegir Boardworks","phone":"(347) 987-3825","state":"NY","zip":"11201"}},{"location":{"address":"20 Jay Street, Suite M10","city":"Brooklyn","description":"The New York Studio Residency Program (NYSRP), a project of the Association of Independent Colleges of Art and Design (AICAD), is a sixteen-credit program for undergraduate and graduate art and design students in New York City. It follows a model of art education that blends learning with location and structure with flexibility. Built on diversity, self-motivation and discourse, the program is ideal for students eager to work independently among other art and design students from around North America in New York, the intense and vibrant world community of artists.","hours":"","id":591,"latitude":40.704,"longitude":-73.9867,"name":"AICAD/New York Studio Residency Program","phone":"718.852.0173","state":"NY","zip":"11201"}},{"location":{"address":"111 Front Street, Suite 224","city":"Brooklyn","description":"A recent addition to DUMBO's art scene, the long established gallery in Brazil, Almacen Unlimited Art, recently opened a satellite space at 111 Front Street.","hours":"","id":536,"latitude":40.7025,"longitude":-73.9893,"name":"Almacen Unlimited Art","phone":"(347) 935-0128 ","state":"NY","zip":"11201"}},{"location":{"address":"111 Front Street","city":"Brooklyn","description":"The chef/co-owner hails from the longstanding Brooklyn Heights outpost Noodle Pudding to bring an interesting Italian dinner menu to DUMBO.  Breakfast and lunch are also served with an assortment of egg dishes, salads and paninis.  Dine in and take out both available.","hours":"Mon-Thurs: 8am-10:30pm; Fri: 8am-11pm; Sat: 9am-11pm; Sun: 10am-5pm","id":449,"latitude":40.7025,"longitude":-73.9893,"name":"AlMar","phone":"(718) 855-5288","state":"NY","zip":"11201"}},{"location":{"address":"85 Water Street","city":"Brooklyn","description":"Herv\u00e9 Poussot, formerly a pastry chef at Le Bernardin and Windows on the World, brings a French Bakery / cafe to DUMBO. Almondine sells organic bread (baked thrice daily), muffins, and brioche, as well as pastries that span the Franco-American spectrum, from macaroons to brownies.\r\n\r\n\u201cBest Bakery\u201d by New York Magazine (2009)","hours":"Mon-Sat: 7am-7pm; Sun: 10am-6pm","id":442,"latitude":40.7033,"longitude":-73.9911,"name":"Almondine","phone":"(718) 797-5026","state":"NY","zip":"11201"}},{"location":{"address":"111 Front Street, Suite 202","city":"Brooklyn","description":"The Amos Eno Gallery is one of the oldest, continually operating artist collectives in New York City. Their members are nationally and internationally recognized for their outstanding work, having received awards and grants from a variety of prestigious foundations. Their shows have been reviewed by the New Yorker, Art in America, the New York Times, and other major media outlets.\u2028\u2028","hours":"Wed - Sat: 12pm - 6pm","id":546,"latitude":40.7025,"longitude":-73.9893,"name":"Amos Eno Gallery","phone":"(718) 237-3001","state":"NY","zip":"11201"}},{"location":{"address":"57 Pearl St.","city":"Brooklyn","description":"Archway Cafe is adjacent to The Archway, serving coffee drinks, specialty sandwiches, croissants, and muffins. The space offers a downstairs available for events, as well as a slightly higher level with seating. The Archway Cafe\u2019s walls are covered with local pieces that rotate regularly.","hours":"","id":453,"latitude":40.703,"longitude":-73.9875,"name":"Archway Caf\u00e9","phone":"(718) 522-3455","state":"NY","zip":"11201"}},{"location":{"address":"111 Front Street, Suite 222","city":"Brooklyn","description":"Arcilesi & Homberg Fine Art (\"AHA\") specializes in the work of artists who use their  abilities to probe and challenge conventional artistic parameters, eliciting a multi-faceted commentary on contemporary life. AHA integrates works of mid-career and emerging New York-based artists. The works incorporate and combine genres such as pop culture imagery, na\u00efve expressionism, realism, and spiritual allegory.","hours":"Tues - Sun: 12pm - 6pm","id":680,"latitude":40.7047,"longitude":-74.0071,"name":"Arcilesi & Homberg Fine Art","phone":"212.810.7716","state":"NY","zip":"11201"}}];

	var iconShadow = new google.maps.MarkerImage('http://labs.google.com/ridefinder/images/mm_20_shadow.png',
	      new google.maps.Size(22, 20),
	      new google.maps.Point(0,0),
	      new google.maps.Point(16, 20)
	);
	
    var iconShape = {
         coord: [1,1,20,1,20,36,1,36],
         type: 'poly'
    };
	
    function showEventBox(location_url){
	location_url = "containt.php"; // overide for testing
        jQuery.facebox({ 
            ajax: location_url,
            loadingImage: 'css/loading.gif', 
            closeImage: 'css/closelabel.png', 
            opacity: 0.4,
            },"event");
        return false;
    }
    
    function addToItinerary(location_url){
        //console.log($("#itinerary_drawer").hasClass("open"))
        if ($("#itinerary_drawer").hasClass("open") == false){
             $('#itinerary_drawer .handle').click();
        } 
        $.post(location_url, function(data) {});
        return false;
    }
	
	$(function(){    
	    
	    jQuery(document).ready(function($) {
/*          $('.pagination a').livequery('click', function() {
              $.get(this.href, function(data) {
                $('#results').html(data);
              });
            return false;
          })
*/        })
          
	    $("#filter_footer span.count").html("217 places to go in Dumbo");
        $("#filter_footer span.tags").html("<span class='tag'>Culture</span>, <span class='tag'>Eating + Drinking</span>, <span class='tag'>Shopping</span>, <span class='tag'>Community</span>");
        
        initialize();
        
		$("li.location").mouseenter(function(){
			lat = $(this).attr("data-lat");
			lng = $(this).attr("data-lng");

			location_id = $(this).attr("id");
			id = $(this).attr("data-id")

			var objLocation = getLocation(id);
			marker = markers[location_id]
		})
		
		$("li.location").click(function(){
			showlocation($(this).attr("data-id"))
		})
		
		$("li.location").mouseover(function(){
			location_id = $(this).attr("id");
			marker = markers[location_id]
			if (marker != selected_marker){
				marker.setIcon(getMarkerImage("red", marker.idx));
			}
		});
		
		$("li.location").mouseout(function(){
			location_id = $(this).attr("id");
			marker = markers[location_id]
			if (marker != selected_marker){
				marker.setIcon(getMarkerImage("black", marker.idx));
			}
		})
	});
	
	function showlocation(location_id){
		infoBubble.close(map);
		if (selected_marker){
			selected_marker.setIcon(getMarkerImage("black", selected_marker.idx));
		}
		var objLocation = getLocation(location_id);
		marker = markers['location_' + location_id]
		marker.setIcon(getMarkerImage("red",marker.idx));
		selected_marker = marker
		
		infoBubble.setContent($('#bubble_' + objLocation.id).html());
		infoBubble.open(map, marker);
	}
	
	function initialize() {
		var myLatlng = initialLocation
		var myOptions = {
			zoom: 16,
			maxZoom: 19, 
			minZoom: 16,
			center: myLatlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			scrollwheel: false,
            panControl: false,
            zoomControl: true,
            zoomControlOptions: {style: google.maps.ZoomControlStyle.SMALL},
            mapTypeControl: false,
            scaleControl: false,
            streetViewControl: false,
            overviewMapControl: false
		}
		
         stylez = [ 
             { featureType: "transit.station", elementType: "all", stylers: [ { visibility: "on" }, { hue: "#1100ff" } ] },
             { featureType: "poi", elementType: "labels", stylers: [ { visibility: "off" } ] },
             { featureType: "landscape.man_made", stylers: [ { visibility: "simplified" } ] },
             { featureType: "transit", stylers: [ { visibility: "off" } ] },
             { featureType: "water", stylers: [ { visibility: "on" }, { saturation: 100 }, { lightness: -46 }, { gamma: 1 },{ hue: "#00ddff" } ] },
             { featureType: "landscape.man_made", elementType: "all", stylers: [ { visibility: "off" }, { hue: "#00a1ff" }, { saturation: 66 }, { lightness: 0 } ] },
             { featureType: "transit.line", elementType: "all", stylers: [ { hue: "#ff0000" }, { saturation: -97 }, { visibility: "off" } ] },
             { featureType: "road.highway", elementType: "geometr", stylers: [ { visibility: "on" }, { hue: "#4b4b4c" }, { saturation: -100 }, { lightness: -20 } ] },
             { featureType: "road.arterial", elementType: "all", stylers: [ { hue: "#4b4b4c" }, { saturation: -100 }, { lightness: -20 }, { visibility: "on" } ] },
             { featureType: "road.local", elementType: "all", stylers: [ { hue: "#ff0000" }, { saturation: -100 }, { lightness: 0 }, { visibility: "on" } ] },
             { featureType: "poi.park", elementType: "geometry", stylers: [ { saturation: 53 }, { lightness: -40 }, { visibility: "on" } ] },
             { featureType: "landscape", elementType: "geometry", stylers: [ { hue: "#f1f2f2" } ] }
         ]
         
         map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

         var styledMapOptions = {
         map: map,
         name: "tips4phpHip-Hop"
         }

         var testmap =  new google.maps.StyledMapType(stylez,styledMapOptions);

         map.mapTypes.set('tips4php', testmap);
         map.setMapTypeId('tips4php');
		
		infoBubble = new InfoBubble({
			map: map,
			content: '<div class="bubble_text">Some label</div>',
			position: new google.maps.LatLng(-35, 151),
			shadowStyle: 1,
			padding: 0,
			backgroundColor: 'rgba(255,255,255,0.8)',
			borderRadius: 0,
			arrowSize: 0,
			borderWidth: 0,
			borderColor: '#666',
			disableAutoPan: false,
			hideCloseButton: true,
			arrowPosition: 50,
			backgroundClassName: 'bubble result',
			arrowStyle: 0,
			minWidth: 224,
			maxWidth: 224,
			minHeight: 290,
			maxHeight: 293
		});
	
		var latlngbounds = new google.maps.LatLngBounds();

		$.each(locations,function(index){
			var location = this.location
			var latLng = new google.maps.LatLng(location.latitude, location.longitude);
			createMarker(map, latLng, index, location);
			latlngbounds.extend(latLng);
		});

		map.fitBounds( latlngbounds );
	}

	function getLocation(id){
		$.each(locations, function(index, item) { 
			if (parseInt(item.location.id) == parseInt(id)){
				objLocation = item.location	
				return objLocation;
			}
		});
		return objLocation;
	}
	
	function getStaticMapUrl(objLocation){
		// USING THE STATIC MAP API: http://code.google.com/apis/maps/documentation/staticmaps/#Latlons
		var latlng = objLocation.latitude + "," + objLocation.longitude;
		url = "http://maps.google.com/maps/api/staticmap?center=" + latlng + "&zoom=18&size=100x100&maptype=roadmap&markers=color:blue%7C" + latlng + "&sensor=false"
		return url;
	}
	
	function createMarker(map, position, number, objLocation) {
		var marker = new google.maps.Marker({
			position: position,
			map: map,
			icon: getMarkerImage("black",number),
			idx: number,
			shadow: iconShadow,
			shape: iconShape
		});

		marker.setValues({type: "location", id: objLocation.id, idx: number});
		markers['location_' + objLocation.id] = marker;
		
		markers.push(marker);

		google.maps.event.addListener(marker, 'click', function() {
			showlocation(objLocation.id);
		});

		google.maps.event.addListener(marker, 'mouseover', function() {
			$('#location_' + objLocation.id).addClass("hover")
//			$('#locations_list_view').scrollTo('#location_' + objLocation.id, 200);
		});
		google.maps.event.addListener(marker, 'mouseout', function() {
			$('#location_' + objLocation.id).removeClass("hover")
		});
	}
	
	function getMarkerImage(iconColor, idx) {
		if ((typeof(iconColor)=="undefined") || (iconColor==null)) { 
			iconColor = "black"; 
		}
		if (!icons[iconColor + idx.toString()]) {
		    if (idx > 18){
		        iconUrl = "css/marker-" + iconColor + ".png"
		    }else{
		        iconUrl = "css/markers/marker-"+ (parseInt(idx) + 1) + "-" + iconColor +".png"
		    }
		    icons[iconColor + idx.toString()] = new google.maps.MarkerImage(iconUrl,
			new google.maps.Size(20, 36),
			new google.maps.Point(0,0))
		} 
		return icons[iconColor + idx.toString()];
	}

</script>

		</section>
	</section>
</section>



</div>
<?php include_component('a', 'standardArea', array('name' => 'body', 'width' => 680, 'toolbar' => 'Main')) ?>

<?php include_component('a', 'standardArea', array('name' => 'sidebar', 'width' => 240, 'toolbar' => 'Sidebar')) ?>


<?php slot('a-footer') ?>
<div class='a-footer-wrapper clearfix'>
	<div class='a-footer clearfix'>
	  <?php include_partial('a/footer') ?>
		<?php include_partial('aFeedback/feedbackForm'); ?>	
	</div>
</div>
<?php end_slot() ?>
