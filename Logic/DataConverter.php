<?php
	interface ByteAmount{
		public function byteAmount();
	}

	class ConvertToBytes implements ByteAmount{
		public function byteAmount(){
			return pow(1024, 0);
		}
	}

	class ConvertToKilobytes implements ByteAmount{
		public function byteAmount(){
			return pow(1024, 1);
		}
	}

	class ConvertToMegabytes implements ByteAmount{
		public function byteAmount(){
			return pow(1024, 2);
		}
	}

	class ConvertToGigabytes implements ByteAmount{
		public function byteAmount(){
			return pow(1024, 3);
		}
	}

	class ConvertToTerabytes implements ByteAmount{
		public function byteAmount(){
			return pow(1024, 4);
		}
	}

	class DataCalculator{
		public function convert($amount, $initialConverter, $finalConverter){
			return $amount * $initialConverter->byteAmount() / $finalConverter->byteAmount();
		}
	}

	if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){
		$amount = $_POST['amount'];
		$initialUnit = $_POST['initial_unit'];
		$finalUnit = $_POST['final_unit'];

		switch ($initialUnit) {
			case 'bytes':
				$initialConverter = new ConvertToBytes();
				break;

			case 'kilobytes':
				$initialConverter = new ConvertToKilobytes();
				break;

			case 'megabytes':
				$initialConverter = new ConvertToMegabytes();
				break;

			case 'gigabytes':
				$initialConverter = new ConvertToGigabytes();
				break;

			case 'terabytes':
				$initialConverter = new ConvertToTerabytes();
				break;
			
			default:
				echo "<p>Initial unit not recognized</p>";
				break;
				exit;
		}

		switch ($finalUnit) {
			case 'bytes':
				$finalConverter = new ConvertToBytes();
				break;

			case 'kilobytes':
				$finalConverter = new ConvertToKilobytes();
				break;

			case 'megabytes':
				$finalConverter = new ConvertToMegabytes();
				break;

			case 'gigabytes':
				$finalConverter = new ConvertToGigabytes();
				break;

			case 'terabytes':
				$finalConverter = new ConvertToTerabytes();
				break;
			
			default:
				echo "<p>Final unit not recognized</p>";
				break;
				exit;
		}
		
			
		$dataCalculator = new DataCalculator();
		$result = $dataCalculator->convert($amount, $initialConverter, $finalConverter);
		echo "$amount $initialUnit = $result $finalUnit";
	}
?>