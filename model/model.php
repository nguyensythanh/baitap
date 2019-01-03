<?php 
	class Model
	{
		private $currency;
		private $sell;
		private $buy;
		private $status;
		private $changee;
		private $created_time;
		private function __construct($currency,$cell,$buy,$status,$changee,$time)
		{
			$this->currency = $currency;
			$this->sell = $cell;
			$this->buy = $buy;
			$this->created_time = $time;
			$this->status = $status;
			$this->changee = $changee;
		}

		public function getcurrency()
		{
			return $this->currency;
		}

		public function getcell()
		{
			return $this->sell;
		}

		public function getbuy()
		{
			return $this->buy;
		}

		public function gettime()
		{
			return $this->created_time;
		}

		public function getstatus()
		{
			return $this->status;
		}

		public function getchange()
		{
			return $this->changee;
		}

		public static function gethight()
		{
			$con=DB::getConnection();
			$sql = "SELECT * FROM pull WHERE buy = (SELECT MAX(buy) FROM pull WHERE currency = 'VND/USD') OR 
			buy = (SELECT MAX(buy) FROM pull WHERE currency = 'USD/JPY')";
			$rs = $con->query($sql,PDO::FETCH_OBJ);
			$list = [];
			foreach($rs as $r){
				$list[] = new Model($r->currency,$r->sell,$r->buy,$r->status,$r->changee,$r->created_time);
			}
			return $list;
		}

		public static function getlow()
		{
			$con=DB::getConnection();
			$sql = "SELECT * FROM pull WHERE sell = (SELECT MIN(sell) FROM pull WHERE currency = 'VND/USD') OR 
			sell = (SELECT MIN(sell) FROM pull WHERE currency = 'USD/JPY')";
			$rs = $con->query($sql,PDO::FETCH_OBJ);
			$list = [];
			foreach($rs as $r){
				$list[] = new Model($r->currency,$r->sell,$r->buy,$r->status,$r->changee,$r->created_time);
			}
			return $list;
		}

		public static function get()
		{
			$con=DB::getConnection();
			$sql="SELECT * FROM pull WHERE created_time = (SELECT MIN(created_time) FROM pull WHERE currency = 'VND/USD') OR created_time = (SELECT MIN(created_time) FROM pull WHERE currency = 'USD/JPY')";
			$rs = $con->query($sql,PDO::FETCH_OBJ);
			$list = [];
			foreach($rs as $r){
				$list[] = new Model($r->currency,$r->sell,$r->buy,$r->status,$r->changee,$r->created_time);
			}
			return $list;
		}

		public static function getnew()
		{
			$con=DB::getConnection();
			$sql="SELECT * FROM pull WHERE created_time = (SELECT MAX(created_time) FROM pull WHERE currency = 'VND/USD') OR created_time = (SELECT MAX(created_time) FROM pull WHERE currency = 'USD/JPY')";
			$rs = $con->query($sql,PDO::FETCH_OBJ);
			$list = [];
			foreach($rs as $r){
				$list[] = new Model($r->currency,$r->sell,$r->buy,$r->status,$r->changee,$r->created_time);
			}
			return $list;
		}
	}
?>