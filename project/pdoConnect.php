<?php
//PDO connect
$db = NULL;
// Let's connect to a database
// Order of db connection: Heroku mySQL Database --> Local mySQL Database
// Check to see if we are on a Heroku Server by checking for an environmental variable with db data
if ((getenv('JAWSDB_URL') != null)) {
	
	$dbparts = parse_url(getenv('JAWSDB_URL'));
	$hostname = $dbparts['host'];
	$username = $dbparts['user'];
	$password = $dbparts['pass'];
	$database = ltrim($dbparts['path'],'/');
	
	try {
	    $db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password, array(PDO::MYSQL_ATTR_FOUND_ROWS => true));
	    // set the PDO error mode to exception
	    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    //echo "Connected successfully";
    }
	catch(PDOException $e) {
  		http_error(500, "Internal Server Error", "We couldn't connect to a Heroku MySQL database.");
  		//echo "Connection failed: " . $e->getMessage();
    }
}
else {
	
	$hostname = "sql2.njit.edu";
	$username = "yz746";
	$password = "XpKmPKQQB";
	$database = "yz746";
	try {
		$db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password, array(PDO::MYSQL_ATTR_FOUND_ROWS => true));
		
	}
	catch (PDOException $e) {
		http_error(500, "Internal Server Error", "We couldn't connect to a local(host) MySQL database.");
	}
	
}
// Prepares and executes the given sql query with the provided parameters array.
// also removes the need for having quotes and washing via prepare
// fetchAll - if true fetches all rows, if false only fetches first row.
function prepareAndExecute($sql, $params = null, $fetchAll = false, $returnNoAffected = false) {
	global $db;
	try {
		// Clean up character if using mySQL using next line
		$sql = str_replace("\"", "", $sql);
		$q = $db->prepare($sql);
		$q->execute($params);
		if (strpos($sql, "INSERT") !== false || strpos($sql, "DELETE") !== false || strpos($sql, "UPDATE") !== false) {
			if (!$returnNoAffected) {
				return $db->lastInsertId();				
			} else {
				return $q->rowCount();
			}
		} else {
			if ($fetchAll) {
				return $q->fetchAll(PDO::FETCH_ASSOC);
			} else {
				return $q->fetch(PDO::FETCH_ASSOC);
			}		
		}
	} catch (PDOException $e) {
		if (true) {	// change to false when deploying
			http_error(500, "Internal Server Error", "There was a SQL error:\n\n" . $e->getMessage());
		} else {
			http_error(500, "Internal Server Error", "Something went wrong.");
		}	
	}	
}


// Runs SQL query and returns results (if valid)
    function runQuery($query) {

		global $db;

	    try {
    
			$q = $db->prepare($query);
			$q->execute();
			$results = $q->fetchAll();
			$q->closeCursor();

			return $results;
			
		} catch (PDOException $e) {

			http_error(500, "Internal Server Error", "There was a SQL error:\n\n" . $e->getMessage());
			
		}	
	    
	}




// begins transaction
function beginTransaction() {
	global $db;
	$db->beginTransaction();
}
// commits changes
function commit() {
	global $db;
	$db->commit();
}
// rollbacks any changes
function rollBack() {
	global $db;
	$db->rollBack();
}
/**
 * Checks if the specified parameter exists in the $_POST array.
 * @param  String $paramName the name of the parameter
 */
function checkParameterOrDie($paramName) {
	if (!isset($_REQUEST[$paramName])) {
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: There was an error receiving '$paramName' from the form submitter.");
	}
}
function http_error($code, $status, $message) {
		header("HTTP/1.1 $code $status");
		header("Content-type: text/plain");
		die($message);
	}