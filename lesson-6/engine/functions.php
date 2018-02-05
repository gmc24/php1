<?php

//Константы ошибок
define('ERROR_NOT_FOUND', 1);
define('ERROR_TEMPLATE_EMPTY', 2);


//Функция получает переменные в зависимости от выбранной страницы. news или newspage или feedback

function prepareVariables($page_name) 
{
	$vars = [];
	switch ($page_name)
	{
		case "index":
			$vars['content'] = '../templates/index.php';
			$vars['new_product'] = NewProduct();
			$vars['top_product'] = TopProduct();
			$vars['sale_product'] = SaleProduct();
		break;
		
		case "contact":
		
		break;
		
		case "catalog":
		
		break;
	}
	
	
	return $vars;
}


function NewProduct()
{
	$sql = 'select * from goods order by date desc limit 6;';
	return getAssocResult($sql);
}

function TopProduct()
{
	$sql = 'select * from goods order by view desc, date desc limit 3;';
	return getAssocResult($sql);
}

function SaleProduct()
{
	$sql = 'select * from goods where status = "2" order by view desc limit 3;';
	return getAssocResult($sql);
}


function getTestimonials($x) {
	$sql = "select * from testimonials where chkd = 1 and public = 1 order by add_date desc limit $x;";
    return getAssocResult($sql);
}



function translit_url($str) {
    $abc = [
        'а'=>'a', 'б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'yo','ж'=>'zh','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p',
        'р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'kh','ц'=>'ts','ч'=>'ch','ш'=>'sh','щ'=>'sch','ъ'=>'y','ы'=>'y','ь'=>'','э'=>'e','ю'=>'yu','я'=>'ya',
        ' '=>'_','.'=>'',','=>'','!'=>'','?'=>'','('=>'',')'=>'','-'=>'_',':'=>'',';'=>'','='=>'_','+'=>'_','/'=>'_','\\'=>'_','|'=>'_','`'=>'','@'=>'_','"'=>'','\''=>'','~'=>'', '«'=>'', '»'=>''
    ];
    $arr = str_replace(array_keys($abc), array_values($abc), mb_strtolower((string)$str, 'UTF-8'));
    return $arr;
}

?>
