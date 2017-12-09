<?php

/* frontofficefrontBundle::map.html.twig */
class __TwigTemplate_01c2615a18143d838e5e2e1a06bdba68154d9d3db2f83fde11a304405603e0ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <script src=\"http://maps.googleapis.com/maps/api/js?Key=AIzaSyCeMOjpwtYKRt6T1n7aw0TE7gRORcXi4s8\"></script>
        <script>
            function initialize() {

                var geocoder = new google.maps.Geocoder();
                var address = document.getElementById('emp').value;
                ;

                geocoder.geocode({'address': address}, function (results, status) {

                    if (status == google.maps.GeocoderStatus.OK) {
                        
                        var latitude = results[0].geometry.location.lat();
                        var longitude = results[0].geometry.location.lng();
                        var myCenter=new google.maps.LatLng(latitude,longitude);
                        var mapProp = {
                            center: new google.maps.LatLng(latitude, longitude),
                            zoom: 17,
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        };
                        var map = new google.maps.Map(document.getElementById(\"googleMap\"), mapProp);
                        var marker = new google.maps.Marker({
                            position: myCenter,
                            animation: google.maps.Animation.BOUNCE
                        });

                        marker.setMap(map);
                    }
                });




            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </head>

    <body>
        ";
        // line 43
        $this->displayBlock('container', $context, $blocks);
        // line 46
        echo "
    </body>

</html>";
    }

    // line 43
    public function block_container($context, array $blocks = array())
    {
        // line 44
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "frontofficefrontBundle::map.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  76 => 44,  73 => 43,  66 => 46,  64 => 43,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <script src="http://maps.googleapis.com/maps/api/js?Key=AIzaSyCeMOjpwtYKRt6T1n7aw0TE7gRORcXi4s8"></script>*/
/*         <script>*/
/*             function initialize() {*/
/* */
/*                 var geocoder = new google.maps.Geocoder();*/
/*                 var address = document.getElementById('emp').value;*/
/*                 ;*/
/* */
/*                 geocoder.geocode({'address': address}, function (results, status) {*/
/* */
/*                     if (status == google.maps.GeocoderStatus.OK) {*/
/*                         */
/*                         var latitude = results[0].geometry.location.lat();*/
/*                         var longitude = results[0].geometry.location.lng();*/
/*                         var myCenter=new google.maps.LatLng(latitude,longitude);*/
/*                         var mapProp = {*/
/*                             center: new google.maps.LatLng(latitude, longitude),*/
/*                             zoom: 17,*/
/*                             mapTypeId: google.maps.MapTypeId.ROADMAP*/
/*                         };*/
/*                         var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);*/
/*                         var marker = new google.maps.Marker({*/
/*                             position: myCenter,*/
/*                             animation: google.maps.Animation.BOUNCE*/
/*                         });*/
/* */
/*                         marker.setMap(map);*/
/*                     }*/
/*                 });*/
/* */
/* */
/* */
/* */
/*             }*/
/*             google.maps.event.addDomListener(window, 'load', initialize);*/
/*         </script>*/
/*     </head>*/
/* */
/*     <body>*/
/*         {% block container %}*/
/* */
/*         {% endblock %}*/
/* */
/*     </body>*/
/* */
/* </html>{# empty Twig template #}*/
/* */
