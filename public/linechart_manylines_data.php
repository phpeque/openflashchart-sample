<?php

include dirname(__FILE__).'/../libs/php-ofc-library/open-flash-chart.php';

// generate some random data
srand((double)microtime()*1000000);

$data_1 = array();
$data_2 = array();
$data_3 = array();
for( $i=0; $i<9; $i++ )
{
    $data_1[] = rand(1,6);
    $data_2[] = rand(7,13);
    $data_3[] = rand(14,19);
}

$default_dot = new dot();
$default_dot->size(5)->colour('#DFC329');

$line_dot = new line();
$line_dot->set_default_dot_style($default_dot);
$line_dot->set_width( 4 );
$line_dot->set_colour( '#DFC329' );
$line_dot->set_values( $data_1 );
$line_dot->set_key( "Line 1", 10 );


$default_hollow_dot = new hollow_dot();
$default_hollow_dot->size(5)->colour('#6363AC');

$line_hollow = new line();
$line_hollow->set_default_dot_style($default_hollow_dot);
$line_hollow->set_width( 1 );
$line_hollow->set_colour( '#6363AC' );
$line_hollow->set_values( $data_2 );
$line_hollow->set_key( "Line 2", 10 );

$star = new star();
$star->size(5);

$line = new line();
$line_hollow->set_default_dot_style($star);
$line->set_width( 1 );
$line->set_colour( '#5E4725' );
$line->set_values( $data_3 );
$line->set_key( "Line 3", 10 );

$y = new y_axis();
$y->set_range( 0, 20, 5 ); 

$chart = new open_flash_chart();
$chart->set_title( new title( 'Three lines example' ) );
$chart->set_y_axis( $y );
//
// here we add our data sets to the chart:
//
$chart->add_element( $line_dot );
$chart->add_element( $line_hollow );
$chart->add_element( $line );

echo $chart->toPrettyString();