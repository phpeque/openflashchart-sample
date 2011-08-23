<?php

include dirname(__FILE__).'/../libs/php-ofc-library/open-flash-chart.php';

$chart = new open_flash_chart();

$title = new title( date("D M d Y") );

$line_dot = new line();
$line_dot->set_values( array(9,8,7,6,5,4,3,2,1) );

$chart->set_title( $title );
$chart->add_element( $line_dot );

//
// create an X Axis object
//
$x = new x_axis();
$x->set_steps( 2 );

//
// Add the X Axis object to the chart:
//
$chart->set_x_axis( $x );

echo $chart->toPrettyString();