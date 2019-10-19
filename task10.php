open the current directory find the names of all the files in the directory 
		$path = getcwd();
		$items = scandir($path);
		echo"<p>Contents of $path</p>";
		echo '<ul>';
		foreach ($items as $item){
			echo '<li>' . $item . '</li>';
		}
		echo '</ul>';
		
		// create a new empty file named newfile.php
		$file = fopen('newfile.php', 'wb');
		fclose($file);
		
		
		// add data to the file newfile.php
		$path = getcwd();
		$items = scandir($path);
		$file = fopen('newfile.php','wb');
		foreach ($items as $item){
			$item_path = $path . DIRECTORY_SEPARATOR . $item;
			if(is_dir($item_path)){
				fwrite($file, $item . "\n");
			}
		}
		fclose($file);
		
		echo"<strong>Contents of newfile.php renamed to oldfile.php</strong>";
		// read data from the file newfile.php.
		$file = fopen('newfile.php', 'rb');
		$contents = '';
		while(!feof($file)){
			$content = fgets($file);
			if($content === false) continue;
			$content = trim($content);
			if(strlen($content) == 0 || substr($content, 0, 1) == '#') continue;
			$contents .= "<div>" . $content . "</div>\n";									
		}
		fclose($file);
		echo $contents;
		
		//Mail the contents of the file to the email address ict-test@gmail.com 
		try{
			$mail = mail('ict-test@gmail.com','task 10 e',$contents);
			if($mail){
				echo"File sent to ". 'ict-test@gmail.com';
			}
		}catch(Exception $e){
			$error = $e->getMessage();
			echo $error;
		}
		
		//Rename the file newfile.php to oldfile.php
		$newfile = 'newfile.php';
		$oldfile = 'oldfile.php';
		if(file_exists($newfile)){
			$success = rename($newfile, $oldfile);
			if($success){
				echo "<br />" .$newfile ." File was renamed to " . $oldfile;
			}		
		}