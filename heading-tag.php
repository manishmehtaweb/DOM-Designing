<?php
include('simple_html_dom.php');
$html = new simple_html_dom();
$url="h1.html";
// Create DOM from URL or file
$html = file_get_html($url);

$count = 0;

$h1=array();
$h2=array();
$h3=array();
$h4=array();
$h5=array();
$h6=array();
//find all h1
foreach($html->find('h1') as $i=> $element) {
    $h1 [$count++]= $element->plaintext;  
    }
    $num=count($h1);
    echo "  H1  = ".$num."<br>";

//find all H2
    foreach($html->find('h2') as $i=> $element) {
    $h2 [$count++]= $element->plaintext;  
    }
    $num2=count($h2);
    echo " H2  = ".$num2."<br>";

//find All H3
        foreach($html->find('h3') as $i=> $element) {
        $h3 [$count++]= $element->plaintext;  
    }
        $num3=count($h3);
        echo "  H3  = ".$num3."<br>";


//find All H4
            foreach($html->find('h4') as $i=> $element) {
            $h4 [$count++]= $element->plaintext;  
            }   
                $num4=count($h4);
                echo " H4  = ".$num4."<br>";

//find All H5
                    foreach($html->find('h5') as $i=> $element) {
                    $h5 [$count++]= $element->plaintext;  
                        }
                        $num5=count($h5);
                        echo "  H5  = ".$num5."<br>";


//find All H6
                                foreach($html->find('h6') as $i=> $element) {
                                 $h6 [$count++]= $element->plaintext;  
                            }
                                $num6=count($h6);
                                echo " H6  = ".$num6."<br>";