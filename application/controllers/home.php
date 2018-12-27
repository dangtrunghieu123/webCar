<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('file');
		
		date_default_timezone_set('Asia/Ho_Chi_Minh');
	}
	public function showdatabases()
	{

		$oLink = @mysql_connect($_POST["serveraddress"], $_POST["serverusername"], $_POST["serverpassword"]) or die("Error: Could not connect to server.");
		$oResult = mysql_list_dbs($oLink);

		// Check for valid results
		if(mysql_affected_rows($oLink) == 0) {
			echo "Error: No databases returned from server \"" . $_POST["serveraddress"] . "\" (" . $_POST["serverusername"] . "@" . $_POST["serverpassword"] . ")";
			exit;
		}

		// Output first option
		echo "<option value=\"\"></option>";

		// Output Database Names
		while($oRow = mysql_fetch_object($oResult)) {
			echo "<option value=\"" . $oRow->Database . "\">" . $oRow->Database . "</option>\n";
		}
	}
	public function showtables()
	{
		// Attempt to list databases with supplied credentials.
		$oLink = @mysql_connect($_POST["serveraddress"], $_POST["serverusername"], $_POST["serverpassword"]) or die("Error: Could not connect to server.");
		$oResult = mysql_query("SHOW TABLES FROM " . $_POST["database"] . ";");
		// Check for valid results.
		if(mysql_affected_rows($oLink) == 0) {
			echo "Error: No tables returned from database \"" . $_POST["database"] . "\".";
			exit;
		}
		// Output first option
		echo "<option value=\"\"></option>";
		// Output table names
		while($oRow = mysql_fetch_row($oResult)) {
			echo "<option value=\"" . $oRow[0] . "\">" . $oRow[0] . "</option>\n";
		}
	}

	
	public function showcolumns()
	{
		$oLink = @mysql_connect($_POST["serveraddress"], $_POST["serverusername"], $_POST["serverpassword"]) or die("Error: Could not connect to server.");
		mysql_select_db($_POST["database"], $oLink);
		$oResult = mysql_query("SHOW COLUMNS FROM " . $_POST["table"] . ";");

		// Check for valid results
		if(mysql_affected_rows($oLink) == 0) {
			echo "Error: No columns returned from table \"" . $_POST["table"] . "\" in database \"" . $_POST["database"] . "\".";
			exit;
		}

		// Output first option
		echo "<option value=\"\"></option>";

		// Ouput column names
		while($oRow = mysql_fetch_object($oResult)) {
			// Attempt to detect primary key column.
			if($oRow->Key == "PRI") {
				// Primary key column.
				//echo "<option value=\"" . $oRow->Field . "\" selected=\"selected\">" . $oRow->Field . "</option>\n";
				echo "<option value=\"" . $oRow->Field . "\" class=\"primarykey\">" . $oRow->Field . "</option>\n";
			} else {
				// Non-primary key column.
				echo "<option value=\"" . $oRow->Field . "\">" . $oRow->Field . "</option>\n";
			}
		}
	}
	public function createfile()
	{
		// require_once(dirname(__FILE__) . '/class.tableclass.php');
		$classname = $this->input->post('classname');
		$database = $this->input->post('database');
		$table = $this->input->post('table');
		$keyfield = $this->input->post('keyfield');
		$serveraddress = $this->input->post('serveraddress');
		$serverusername = $this->input->post('serverusername');
		$serverpassword = $this->input->post('serverpassword');
		$para = array(
			'classname' => $classname,
			'database' => $database,
			'table' => $table,
			'keyfield' => $keyfield,
			'serveraddress' => $serveraddress,
			'serverusername' => $serverusername,
			'serverpassword' => $serverpassword
		);
		$this->load->library('tableclass', $para);
		$strPath = realpath($this->tableclass->createClass());
		// echo "File saved as <strong>" . $strPath . "</strong>";

	}
	public function index(){
		$this->load->view('home');
		
	}

	public function layout(){
		$this->load->view('layout');
	}
	public function admin(){
		$this->load->view('admin');
	}

	public function product(){
		$this->load->view('product');
	}
	public function userLogin(){
		$this->load->view('userLogin');
	}

}