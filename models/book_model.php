<?
class Book_Model
{
	public  $dataTemp = array(
	                                  1 => array(
	                                  				   "id"=>1,
	                                                   "title" => "Yii framerk",
	                                                   "description" => "Yii framework description",
	                                                   "price" => 45.5
	                                                 ),
	                                  2 => array(
	                                  				 "id"=>2,
	                                                 "title" => "javascript ahead",
	                                                 "description" => "javascript ahead description",
	                                                 "price" => 15.8
	                                                ),
	                                  3 => array(
	                                  				 "id"=>3,
	                                                 "title" => "PHP Beginner",
	                                                 "description" => "PHP Beginner description",
	                                                 "price" => 55.55
	                                              )
	                                   );
	public function getListBooks()
	{
	        return $this->dataTemp;
	}
	public function getBook($id)
	{
	        return $this->dataTemp[$id];
	}
} 
?> 