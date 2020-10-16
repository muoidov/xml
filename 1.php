<!-- tao file php->xml-->
<?php 
header("Content-type:text/xml");
$book=array(array(
'id'=>11,'title'=>'Lap trinh con quan que',
	'author'=>'ZendVn',
'pages'=>500,
	'weight'=>array(400,'kg'),
	'price'=>array('real'=>35.50,'saleoff'=>36.9),
	'shipping'=>array('us'=>1.3,'eu'=>2,'vn'=>1),
),
		   );
$xml='<?xml version="1.0" encoding="UTF-8"?>';
$xml.='<book_s>';
foreach($book as $value){
	$xml.='<book id="'.$value['id'].'">
	<title>'.$value['title'].'</title>
	<author>'.$value['author'].'</author>
	<pages>'.$value['pages'].'</pages>
	<weight units="'.$value['weight'][0].'">'.$value['weight'][1].'</weight>
	<image src="php.png" />
	<price>
		<real>'.$value['price']['real'].'</real>
		<saleoff>'.$value['price']['saleoff'].'</saleoff>
	</price>
	<shipping>
		<US>'.$value['shipping']['us'].'</US>
		<EU>'.$value['shipping']['eu'].'</EU>
		<VN>'.$value['shipping']['vn'].'</VN>
	</shipping>
	</book>';
}
$xml.='</book_s>';
echo $xml;
?>