a class named Invoice
		class Invoice{
			private $item;
			private $quantity;
			private $price;
			
			//constructor to set all the properties
			public function __construct($_Item = NULL,$_Quantity = NULL,$_Price = NULL){
				$this->item = $_Item;
				$this->quantity = $_Quantity;
				$this->price = $_Price;
			}
			
			//setter and getter methods that will set and get the value of the properties
			//Set and Get Item
			public function setItem($_Item){
				$this->item = $_Item;
			}public function getItem(){
				return $this->item;
			}
			
			//Set and Get quantity
			public function setQuantity($_Quantity){
				$this->quantity = $_Quantity;
			}public function getQuantity(){
				return $this->quantity;
			}
			
			//Set and Get price
			public function setPrice($_Price){
				$this->price = $_Price;
			}public function getPrice(){
				return $this->price;
			}
			
			//showOutput method that will display the output
			public function showOutput(){
				echo "<strong>Task 9 A</strong><br />";
				$TotalAmount = $this->getQuantity() * $this->getPrice() * 2;
				echo "Item : " . $this->getQuantity() . " " . $this->getItem() . " @ R" . $this->getPrice() . " R" . $TotalAmount . "." ;
			}
		}
		$Sales = new Invoice();
		$Sales->setItem('Umbrellas');
		$Sales->setQuantity(20);
		$Sales->setPrice(50);
		
		echo $Sales->showOutput();
		
		
	//connect to the database
	define('SERVER_NAME','127.0.0.1');//server name
	define('DB_NAME','ABC_STORES');//database name
	define('DB_USER','root');//database user
	define('DB_PASSWORD','');//database password

	try
	{
	  $connect = new PDO('mysql:host='.SERVER_NAME.';dbname='.DB_NAME,DB_USER,DB_PASSWORD);
	  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $connect->exec('SET NAMES utf8');
	}
	catch(PDOException $e){
	  die($e->getMessage());
	}
	
	//add items into the database
	if(isset($_POST['submit']))
	{
		  $item		=$_POST['item'];
		  $quantity	=$_POST['quantity'];
		  $price	=$_POST['price'];
		 
		 //Prepare and execute the query 
		  $sql="INSERT INTO Invoice 
				SET 
					item=:item, 
					quantity=:quantity, 
					price=:price";
		  $query = $connect->prepare($sql);  
		  $query->bindParam(':item',$item);
		  $query->bindParam(':quantity',$quantity);
		  $query->bindParam(':price',$price);
		  $insert = $query->execute();
		  $query->closeCursor();
		if($sql)
		{
		header("location:task9.php");
		}
	}
	//delete item from database
	if(isset($_GET['id']))
	{
		$id = (int)$_GET['id'];

		$Delete = 'DELETE FROM Invoice WHERE id=:id';
		$query = $connect->prepare($Delete);
		$query->bindParam('id',$id,PDO::PARAM_STR);
		$delete = $query->execute();
	  if($Delete)
	  {
		header("location:task9.php");
	  }
	}
	//update item from database
	if(isset($_GET['idupt']))
	{
		$id = (int)$_GET['idupt'];
		$sql = 'SELECT * FROM Invoice WHERE id=:id';
		$Select = $connect->prepare($sql);
		$Select->bindParam('id',$id);
		$Select->execute();
		$FetchItem = $Select->fetch();
		
		if(isset($_POST['update']))
		{
			$item		=$_POST['item'];
			$quantity	=$_POST['quantity'];
			$price		=$_POST['price'];
			  
			$Update = 'UPDATE Invoice 
					SET 
						item	=:item, 
						quantity=:quantity, 
						price	=:price 
					WHERE id	=:id';
			$query = $connect->prepare($Update);
			$query->bindParam('item',$item,PDO::PARAM_STR);
			$query->bindParam('quantity',$quantity,PDO::PARAM_STR);
			$query->bindParam('price',$price,PDO::PARAM_STR);
			$query->bindParam('id',$id,PDO::PARAM_STR);
			$update = $query->execute();
		if($update == TRUE)
		  {
		  header("location:task9.php");
		  }
		}
	echo"<br /><br /><p><strong>Update Item</strong>
		<table border='0'>
			<form action='' method='POST'>
				<tr>
					<td align='right'>Item</td>			
					<td align='center'>:</td>			
					<td><input type='text' name='item' value='$FetchItem[item]'/></td>			
				</tr>
				<tr>
					<td align='right'>Quantity</td>			
					<td align='center'>:</td>			
					<td><input type='text' name='quantity' value='$FetchItem[quantity]' /></td>			
				</tr>
				<tr>
					<td align='right'>Price</td>			
					<td align='center'>:</td>			
					<td><input type='text' name='price' value='$FetchItem[price]' /></td>			
				</tr>
				<tr>			
					<td></td>			
					<td align='left' colspan='2'><input type='submit' name='update' value='Update' /></td>			
				</tr>
			</form>
		</table></p>
	";
	}
	
	
	//Setting a table to hold the records
	echo"<br /><br />
		<strong>Task 9 B</strong><br /><br />
		<table border='0' width='50%' align='left'>
		<tr>
			<td align='center'>Item</td>
			<td align='center'>Quantity</td>
			<td align='center'>Price</td>
			<td align='center' colspan='2' bgcolor='#C0C0C0'>Action</td>
		</tr>
		<tr><td colspan='5'><hr></hr></td></tr>
	";
	//select all record from the database
	$query = 'SELECT * FROM Invoice';
	$results = $connect->prepare($query);
	$results->execute();
	$Items = $results->fetchAll();
	$results->closeCursor();
	foreach($Items as $item){
		echo "
			<tr>
			<td align='center'>$item[item]</td>
			<td align='center'>$item[quantity]</td>
			<td align='center'>$item[price]</td>
			<td align='center' bgcolor='#C0C0C0'><a href='task9.php?idupt=$item[id]'>Update</a></td>
			<td align='center' bgcolor='#C0C0C0'><a href='task9.php?id=$item[id]'>Delete</a></td>
			</td>
		</tr>
		<tr><td colspan='5'><hr></hr></td></tr>
		";
	}
		
	?>
	</table>
	
	<br /><br /><br />
	
	<table border='0' width='50%' align='left'>