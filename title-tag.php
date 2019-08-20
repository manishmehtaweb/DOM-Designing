<html>
    <head>

    <style>
div.header{ background-color:white;width:70%;max-height:auto;border:1px solid black;}
div.header_background { background-color:#1C7AFA;height:40px;}
span.heading_txt { float:left;color:white;margin:12px;}
span.good_txt { width:10%;float:right;color:white;margin:12px;background-color:green;border-radius:25px;}
span.bad_txt { width:10%;float:right;color:white;margin:12px;background-color:red;border-radius:25px;}
p.title_result { border:1px solid black;margin:50px;background-color:skyblue;height:20px;text-align:center;}
div.footer { color:Green;border:1px solid black;margin:10px;background-color:#CCF6C7;height:30px;margin:30;}
        </style>

    </head>

<?php
error_reporting(0);
include('simple_html_dom.php');

$html = new simple_html_dom();

// Create DOM from URL or file
$html = file_get_html('manish.txt');
?>

<center>




<div class="header"> 

		<div class="header_background">
		
		<span class="heading_txt">&nbsp;&nbsp;Title</span>
		
                   
                   
                   <?php 
                   $title = $html->find('title',0)->innertext;
                   if($title==true){
    echo   "<span class='good_txt'>Good </span>";
}
else{
    echo   "<span class='bad_txt'>Bad </span>";
} 
?>

                   

<span style="clear:both;">&nbsp;</span>

</div>

<p class='title_result'>
<?php
$title = $html->find('title',0)->innertext;
if($title==true){
    echo $title;  
}
else{
    echo "Title Tag Not Found!";
}
?>
</p>

<table style="border-collapse: collapse;">

<tr style="border:1px solid black;border-collapse: collapse;">
    <td style="border:1px solid black;">Length &nbsp;&nbsp;</td>
        <td><?php echo strlen($title);  ?> &nbsp;&nbsp;</td>
    </tr>

</table>

<div class="footer">

<span style="color:green;margin:120px;text-align:center;">
<?php if($title==true){
    echo   "Well Done!";
}
else{
    echo "<span style='color:red;'>Error</span>";
} 
?>
</span>
<span style="clear:both;">&nbsp;</span>
</div>

		 </div>
		 </center>