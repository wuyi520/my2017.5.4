<?php 
	header("content-type:text/html;charset=utf-8;");

	class Num{
		public $width=3;
		public $height=5;
	
		public function area(){
			echo $this->width*$this->height;
	}
}
	$n=new Num();
	$n->area();*/
	//var_dump($s);

	class Money{
		public $m_1=1600;
		public $m_2=2000;
		public $m_3=3000;

		public function moneys(){
			echo $this->m_1+$this->m_2+$this->m_3;
		}
	}
	
		$n=new Money();
		$n->moneys();*/


		class Pcs{
			public $feb=3000;
			public $str=5000;
			public $may=8000;

			public function aer(){
				echo ($this->feb+$this->str+$this->may)/3;
			}
		}
		$n=new Pcs();
		$n->aer();*/


		class Moneys{
			public $pcs_A1=5;
			public $pcs_A2=8;
			public $pcs_B1=6;
			public $pcs_B2=9;
			public $pcs_C1=15;
			public $pcs_C2=3;
			public $num_A1=1000;
			public$num_A2=2000;
			public $num_B1=1800;
			public$num_B2=3200;
			public $num_C1=2400;
			public$num_C2=7500;
		

		public function A(){
			echo $this->pcs_A1*$this->num_A1+$this->pcs_A2*$this->num_A2;
		}
		public function B(){
			echo $this->pcs_B1*$this->num_B1+$this->pcs_B2*$this->num_B2;
		}
		public function C(){
			echo $this->pcs_C1*$this->num_C1+$this->pcs_C2*$this->num_C2;
		}
		public function alls(){
			echo $this->A+$this->B+$this->C;
		}

	}
		$m=new  Moneys();
		$m->A();*/



		class Table{
			public $width;
			public $height;


			public function area($x,$y){
				$this->width=$x;
				$this->height=$y;
				echo $this->width*$this->height;

			}
	
		}

		$n=new Table();
		$n->area(3,5);
		echo "<br/>";



		class Money{
			public $pcs_1;
			public $pcs_2;
			public $pcs_3;

			public function moneys($x,$y,$z){
				$this->pcs_1=$x;
				$this->pcs_2=$y;
				$this->pcs_3=$z;

				echo $this->pcs_1+$this->pcs_2+$this->pcs_3;
			}
		}

		$m=new Money();
		$m->moneys(1600,2600,3000)
		echo "<br/>";*/


		class Moneys{
			/*
				*函数;求和
				*参数:二维数组
				*返回值：int
				*日期:
			*/
			
			public function sum($arr){
				$res=0;
				for($i=0;$i<count($arr);$i++){
					$row=$arr[$i];
					$res=$res+$row[0]*$row[1]."<br/>";
				}return $res;
			}
			
			

		}	


		$n=new Moneys();
		$arr=array([5,1000],[8,2000],[7,1600]);
		$arr1=array([6,1800],[9,3200])
		$arr2=array([15,2400],[3,7600])
		
	
		$res=$n->sum($arr);
		$res=$n->sum($arr1);
		$res=$n->sum($arr2);
		echo $res."<br/>";*/


		class Width{
			public function arr(x){

		}

		$n=new Width();
		$n->arr(4)
		echo $j;*/

		class Height{

			public function arr($x,$y){
				echo 2*$x+2*$y;
			}	//return $res;

					
				
		}
			$n=new Height();
			$n->arr(3,6);
			//echo $res;*/

		class Fen{
			public function res($x,$y,$z){
				$j=($x+$y+$z)/3;
			}
				return $j;

		}
			$n=new Fen();
			$n->res(84,79,92);
			echo $j;*/

		class Jitu{
			public function jt(){
				for ($i=0;$i<35;$i++){
					for($j=0;$j<35;$j++){
						if(($i+$j)==35&&(2*$i+4*$j)==94){
							echo "鸡有：".$i."只,兔有：".$j;
						}
					}
				}
			}//鸡兔同笼

		}
		$n=new Jitu();
		$n->jt();*/

class Table{
	public function printtable($rows,$cols,$content){

		$str="<table border='1' width='400px'>";
		for($i=0;$i<$rows;$i++){
			$str.= "<tr>";
			for($j=0;$j<$cols;$j++){
				$str.= "<td>$content</td>";
			}
			$str.="</tr>";

		}
		$str.="</table>";
		return $str;
	}

}

$n=new Table;
$res = $n->printtable(8,8,'nihao');
echo $res;
 
class Color{

	public function colors($con){
		//$c_1=rand(10,99);
		//$c_1=rand(10,99);
		//$c_1=rand(10,99);
		for ($i=0;$i<$con;$i++){
			echo "<div style=\"backgroung:#00f;'float:left;\">nihao</div>";
		}
	}

}
$n=new Color();
$n->colors(10);
class Pop{
	private $name='abc';
	private $age=20;
	protected $sex="man";
	public function say(){
		echo $this->name;
		echo "no";
	}
}
class son extends Pop{
	const PAI =3.14;
	public function say(){
		//parent;;say();//部分继承父类的属性及方法
		echo self ::PAI;
		//echo "vvvvvvyyyyyyy";
	}	
}
$s=new son();
//$n->name;
//$n->say();
//$s->say();
echo self ::PAI;
class Par {
	public function __construct() {
		echo mt_rand(10000,99999).'<br />';
	}
}
	class Son extends Par {
		public function __construct() {
//ThinkPHP
		parent::__construct();
		echo '1'.'<br />';//函数继承
		}
	}
	$a = new Par();
	$b = new Son();


?>