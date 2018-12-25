<?php
/*
*   class.class.php
*
*   This class provides methods to construct and write a class file.
*/
// require_once(dirname(__FILE__) . '/class.code.php');
class tableClass {
    protected $CI;
	public $classname;          // Name of our class.
    public $serveraddress;      // IP Address for MySQL connection.
    public $serverusername;     // Username for MySQL connection.
    public $serverpassword;     // Password for MySQL connection.
    public $databasename;       // Name of database.
    public $tablename;          // Name of table within database.
    public $variables;
    public $primarykey;         // Field/publiciable set to primary key.
    private $filename;          // Path to file we're going to write.
    private $filepath;          // Directory+filename to save file to.
    private $filedate;          // Today's date.
    private $output;            // Text to write to file.
    public $filesrequired;      // Any files required. (default: class.database.php)
    public $columns;

	public function __construct($param) {
        // Construction of class
        
        $this->CI =& get_instance();
        
        $this->CI->load->library('code');
        $this->CI->load->helper('file');
        $this->classname = $param['classname'];
		// print_r($param); return;
        
        $this->variables = Array();
        $this->filedate = date("l, M j, Y - G:i:s T");
        $this->filesrequired = array("database.php");
        $filename_m = ucfirst($this->classname);
        $this->filename = $filename_m."_m.php";
        // $this->filepath = realpath(dirname(__FILE__) . "/../output/") . "/$this->filename";
        $this->filepath = base_url()."output".$this->filename;
        $this->databasename = $param['database'];
        $this->serveraddress = $param['serveraddress'];
        $this->serverusername = $param['serverusername'];
        $this->serverpassword = $param['serverpassword'];
        $this->tablename = $param['table'];
        $this->primarykey = $param['keyfield'];;
	}

    private function formatCode($sCode) {
        // Returns formatted code string.
        $oCode = new code($sCode, FALSE);
        $oCode->process();
        return($oCode->code);
    }

    public function setFile($sPath = "", $sFilename = "") {
        // Sets the path and/or the filename to use for the class.
        if($sPath != "") {
            $this->filepath = $sPath;
        }

        if($sFilename != "") {
            $this->filename = $sFilename;
        }
    }

    public function setRequired($aFiles) {
        // Sets the required files to passed array.
        $this->filesrequired = $aFiles;
    }

    public function getRequired() {
        // Returns text to require all files in filesrequired array.
        $sRet = "// Files required by class:\n";
        if(!empty($this->filesrequired)) {
            foreach($this->filesrequired as $file) {
                $sRet .= "require_once(\"$file\");\n";
            }
        } else {
            $sRet .= "// No files required.\n";
        }

        $sRet .= "\n";

        return($sRet);
    }

    public function getHeader() {
        // Returns text for a header for our class file.
        $sRet  = "<?php\n";
        $sRet .= "/*******************************************************************************
* Class Name:       $this->classname
* File Name:        $this->filename
* Generated:        $this->filedate
*  - for Table:     $this->tablename
*   - in Database:  $this->databasename
* Created by: table2class (http://www.stevenflesch.com/projects/table2class/)
********************************************************************************/\n\n";
        $sRet .= $this->getRequired();
        $sRet .= "// Begin Class \"$this->classname\"\n";
        $sRet .= "class $this->classname {\n";

        return($sRet);
    }

    public function getFooter() {
        // Returns text for a footer for our class file.
        $sRet = "}\n";
        $sRet .= "// End Class \"$this->classname\"\n?>";

        return($sRet);
    }

    public function getVariables() {
        // public function to return text to declare all the variables in the class.
        $sRet =     "// Variable declaration\n";
        $sRet .=    "public \$$this->primarykey; // Primary Key\n";
        foreach($this->variables as $variable) {
            // Loop through variables and declare them.
            if($variable != $this->primarykey) {
                // Variable is not primary key, so we'll add it.
                $sRet .= "public \$$variable;\n";
            }
        }
        // Add variable for connection to database.
        $sRet .= "public \$database;\n\n";

        return($sRet);
    }

    public function getConstructorDestructor() {
        // public function to create the class constructor and destructor.
        $sRet  = "// Class Constructor\npublic function __construct() {\n";
        $sRet .= "\$this->database = new Database();\n\$this->database->SetSettings(\"$this->serveraddress\", \"$this->serverusername\", \"$this->serverpassword\", \"$this->databasename\");\n}\n\n";
        $sRet .=  "// Class Destructor\npublic function __destruct() {\n";
        $sRet .= "unset(\$this->database);\n}\n\n";

        return($sRet);
    }

    public function getGetters() {
        // public function to create all the GET methods for the class.
        $sRet =  "// GET Functions\n";

        // Create the primary key function.
        $sRet .= "public function get$this->primarykey() {\n";
        $sRet .= "return(\$this->$this->primarykey);\n}\n\n";

        // Loop through variables to create the functions.
        foreach($this->variables as $variable) {
            // Loop through variables and declare them.
            if($variable != $this->primarykey) {
                // Variable is not primary key, so we'll add it.
                $sRet .= "public function get$variable() {\n";
                $sRet .= "return(\$this->$variable);\n}\n\n";
            }
        }

        return($sRet);
    }

    public function getSetters() {
        // public function to create all the SET methods for the class.
        $sRet =  "// SET Functions\n";

        // Create the primary key function.
        $sRet .= "public function set$this->primarykey(\$mValue) {\n";
        $sRet .= "\$this->$this->primarykey = \$mValue;\n}\n\n";

        // Loop through variables to create the functions.
        foreach($this->variables as $variable) {
            // Loop through variables and declare them.
            if($variable != $this->primarykey) {
                // Variable is not primary key, so we'll add it.
                $sRet .= "public function set$variable(\$mValue) {\n";
                $sRet .= "\$this->$variable = \$mValue;\n}\n\n";
            }
        }

        return($sRet);
    }

    public function getSelect() {
        $sRet  = "public function select(\$mID) { // SELECT Function\n// Execute SQL Query to get record.\n";
        $sRet .= "\$sSQL =  \"SELECT * FROM $this->tablename WHERE $this->primarykey = \$mID;\";\n";
        $sRet .= "\$oResult =  \$this->database->query(\$sSQL);\n\$oResult = \$this->database->result;\n\$oRow = mysql_fetch_object(\$oResult);\n\n";
        $sRet .= "// Assign results to class.\n";
        $sRet .= "\$this->$this->primarykey = \$oRow->$this->primarykey; // Primary Key\n";
        // Loop through variables.
        foreach($this->variables as $variable) {
            $sRet .= "\$this->$variable = \$oRow->$variable;\n";
        }
        $sRet .= "}\n\n";

        return($sRet);
    }

    public function getInsert() {
        $sRet  = "public function insert() {\n";
        $sRet .= "\$this->$this->primarykey = NULL; // Remove primary key value for insert\n";
        $sRet .= "\$sSQL = \"INSERT INTO $this->tablename (";
        $i = "";
        foreach($this->variables as $variable) {
            $sRet .= "$i$variable";
            $i = ", ";
        }
        $i = "";
        $sRet .= ") VALUES (";
        foreach($this->variables as $variable) {
            $sRet .= "$i'\$this->$variable'";
            $i = ", ";
        }
        $sRet .= ");\";\n";
        $sRet .= "\$oResult = \$this->database->query(\$sSQL);\n";
        $sRet .= "\$this->$this->primarykey = \$this->database->lastinsertid;\n}\n\n";

        return($sRet);
    }

    public function getUpdate() {
        $sRet  = "function update(\$mID) {\n";
        $sRet .= "\$sSQL = \"UPDATE $this->tablename SET ($this->primarykey = '\$this->$this->primarykey'";
        // Loop through variables.
        foreach($this->variables as $variable) {
            //$sRet .= ", $variable = '\" . mysql_real_escape_string(\$this->$variable, \$this->database->link) . \"'";
            $sRet .= ", $variable = '\$this->$variable'";
        }
        $sRet .= ") WHERE $this->primarykey = \$mID;\";\n";
        $sRet .= "\$oResult = \$this->database->Query(\$sSQL);\n}\n\n";

        return($sRet);
    }

    public function getDelete() {
        // Creates the delete function.
        $sRet = "public function delete(\$mID) {\n\$sSQL = \"DELETE FROM $this->tablename WHERE $this->primarykey = \$mID;\";\n\$oResult = \$this->database->Query(\$sSQL);\n}\n\n";

        return($sRet);
    }
    public function getColumn()
    {
        $oLink = @mysql_connect($this->serveraddress, $this->serverusername, $this->serverpassword) or die("Error: Could not connect to server.");
        mysql_select_db($this->databasename, $oLink);
        $oResult = mysql_query("SHOW COLUMNS FROM " . $this->tablename . ";");
        // Check for valid results
        if(mysql_affected_rows($oLink) == 0) {
            echo 0;
        }
        $count = 0;
        while($oRow = mysql_fetch_object($oResult)) {
            if($oRow->Key == "PRI"){
            }
            else{
                $arr[$count] = $oRow->Field;
                $count+=1;
            }
        }
        return $arr;
    }
    public function createModel()
    {
        $columns = $this->getColumn();
        $nameclass = ucfirst($this->tablename);
        $rs = "<?php
        class ".$nameclass."_m extends CI_Model
        {\n";
            $rs.="
            function load_all_".$this->tablename."()
            {
                \$this->load->database();
                \$this->db->from('".$this->tablename."');
                \$list = \$this->db->get()->result();
                return \$list;
            }
            \n";
            $rs.="
            function get_".$this->tablename."_by_id(\$id)
            {
                \$this->load->database();
                \$this->db->from('".$this->tablename."');
                \$this->db->where('".$this->primarykey."',\$id);
                \$list = \$this->db->get()->result()[0];
                return \$list;
            }
            \n";
            $rs.="
            function add_".$this->tablename."(";
            
            for($i = 0; $i < count($columns); $i++)
            {
                if($i != (count($columns)-1))
                {
                    $rs.= "\$".$columns[$i].", ";
                }
                else{
                    $rs.= "\$".$columns[$i];                    
                }
            }
            $rs.="){\n";
            $rs.="
                \$this->load->database();
                \$this->db->from('".$this->tablename."');
                \$data = array(\n";
            for($i = 0; $i < count($columns); $i++)
            {
                if($i != (count($columns)-1))
                {
                    $rs.= "'".$columns[$i]."' => " ."\$".$columns[$i].", \n";
                }
                else{
                    $rs.= "'".$columns[$i]."' => " ."\$".$columns[$i];                    
                }
            }
            $rs.=");";
            $rs.="
                return \$this->db->insert('".$this->tablename."',\$data);
            }\n";
            $rs.="
            function edit_".$this->tablename."_by_id(\$id, ";
            for($i = 0; $i < count($columns); $i++)
            {
                if($i != (count($columns)-1))
                {
                    $rs.= "\$".$columns[$i].", ";
                }
                else{
                    $rs.= "\$".$columns[$i];                    
                }
            }
            $rs.= "){";
            $rs.="
                \$this->load->database();
                \$this->db->from('".$this->tablename."');
                \$this->db->where('".$this->primarykey."',\$id);
                \$data = array(\n";
            for($i = 0; $i < count($columns); $i++)
            {
                if($i != (count($columns)-1))
                {
                    $rs.= "'".$columns[$i]."' => " ."\$".$columns[$i].", \n";
                }
                else{
                    $rs.= "'".$columns[$i]."' => " ."\$".$columns[$i];                    
                }
            }
            $rs.=");
                return \$this->db->update('".$this->tablename."',\$data);
            }    
            ";
            $rs.="
            public function delete_".$this->tablename."_by_id(\$id){
                \$this->load->database();
                \$this->db->from('".$this->tablename."');
                \$this->db->where('".$this->primarykey."',\$id);
                return \$this->db->delete('".$this->tablename."');
            }";
            
        $rs.="}\n";
        return($rs);
        
    }
    public function createController(){
        $columns = $this->getColumn();
        
        $Tablename = ucfirst($this->tablename);
        $rs= "<?php
        defined('BASEPATH') OR exit('No direct script access allowed');
        
        class ".$Tablename." extends CI_Controller {
        
            public function __construct() {
                parent::__construct();
                \$this->load->helper('form');
                \$this->load->helper('url');
                date_default_timezone_set('Asia/Ho_Chi_Minh');
            }
            
            public function index(){
                \$this->load->model('".$Tablename."_m');
                \$data['list']=\$this->".$Tablename."_m->load_all_".$Tablename."();
                // print_r(\$data['list']);return;
                \$this->load->view('admin/a_".$this->tablename."',\$data);
            }
            public function add_".$this->tablename."()
            {
                \$this->load->view('admin/a_".$this->tablename."_add');
            }
            public function form_add_".$this->tablename."(";
            for($i = 0; $i < count($columns); $i++)
            {
                if($i != (count($columns)-1))
                {
                    $rs.= "\$".$columns[$i].", ";
                }
                else{
                    $rs.= "\$".$columns[$i];                    
                }
            }
            $rs.="){\n";
            for($i = 0; $i < count($columns); $i++)
            {
                $rs.= "\$".$columns[$i]." = \$this->input->post('".$columns[$i]."');\n";
            }
            $rs.="
                \$this->load->model('".$Tablename."_m');
                \$this->".$Tablename."_m->add_".$this->tablename."(";
            for($i = 0; $i < count($columns); $i++)
            {
                if($i != (count($columns)-1))
                {
                    $rs.= "\$".$columns[$i].", ";
                }
                else{
                    $rs.= "\$".$columns[$i];                    
                }
            }    
            $rs.=");
                redirect('/admin/".$this->tablename."/');
            }
            public function edit_".$this->tablename."(\$id)
            {
                \$this->load->model('".$Tablename."_m');
                \$data['list']=\$this->".$Tablename."_m->get_".$this->tablename."_by_id(\$id);
                \$this->load->view('admin/a_".$this->tablename."_edit',\$data);
            }
            public function form_edit_".$this->tablename."(";
            for($i = 0; $i < count($columns); $i++)
            {
                if($i != (count($columns)-1))
                {
                    $rs.= "\$".$columns[$i].", ";
                }
                else{
                    $rs.= "\$".$columns[$i];                    
                }
            }
            $rs.="){\n";
                //code here 
            $rs.= "\$id = \$this->input->post('\$id');\n";
            for($i = 0; $i < count($columns); $i++)
            {
                $rs.= "\$".$columns[$i]." = \$this->input->post('".$columns[$i]."');\n";
            }
            $rs.="
                \$this->load->model('".$Tablename."_m');
                \$this->".$Tablename."_m->edit_".$this->tablename."_by_id(\$id, ";
            for($i = 0; $i < count($columns); $i++)
            {
                if($i != (count($columns)-1))
                {
                    $rs.= "\$".$columns[$i].", ";
                }
                else{
                    $rs.= "\$".$columns[$i];                    
                }
            }
            $rs.=");
                redirect('/admin/".$this->tablename."/');
            }
            public function delete_".$this->tablename."(\$id)
            {
                \$this->load->model('".$Tablename."_m');
                \$data['list']=\$this->".$Tablename."_m->delete_".$this->tablename."_by_id(\$id);
                redirect('/admin/".$this->tablename."/');
                
            }
        }
        ";
        return($rs);
        
    }
    public function create_view_list()
    {
        $columns = $this->getColumn();
        $Tablename = ucfirst($this->tablename);
        $rs="";
        $rs.= 
        '<?php include("tm_head.php"); ?>
                <body class="theme-deep-orange">
                    <?php include("tm_topbar.php"); ?>
                    <?php include("tm_navi.php"); ?>
                    
                    <!-- Add content here -->
                    <section class="content">
                        <div class="container-fluid">
                            <div class="block-header">
                                <h2>'.$this->classname.'</h2>
                            </div>

                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="card">
                                        <div class="header">
                                            <a class="btn bg-deep-orange btn-raised pull-right m-t--10 waves-effect waves-light"  href="">
                                                <i class="material-icons">add</i>
                                            </a>
                                            <h2>'.$this->classname.' list</h2>
                                        </div>
                                        <div class="body">
                                            <table id="mytable" class="table table-striped table-bordered table-hover display responsive no-wrap dataTable no-footer" style="margin-top:10px">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>';
                                            for($i = 0; $i < count($columns); $i++)
                                            {
                                                $rs.= '<th>'.$columns[$i].'</th>'."\n";
                                            }    

                    $rs.=                            '</tr>
                                                </thead>
                                                <tbody>
                                                    <?php if(isset($list)){ foreach ($list as $item) { ?>
                                                        <tr>
                                                            <td><?= $item->id ?></td>';
                                                            for($i = 0; $i < count($columns); $i++)
                                                            {
                                                                // $rs.= '<th>'.$columns[$i].'</th>\n';
                                                                $rs.= '<td><?= $item->'.$columns[$i].' ?></td>'."\n";
                                                            }   
                    $rs.=                                  '
                                                            <td>
                                                                <a href="<?= base_url() ?>admin/'.$this->classname.'/edit_'.$this->classname.'/<?= $item->id ?>" class="btn btn-xs btn-info btn-raised"><i class="material-icons">mode_edit</i></a>
                                                                <a  onclick="checkalert(<?= $item->id ?>)" class="btn btn-xs btn-danger btn-raised"><i class="material-icons">delete</i></a>
                                                            </td>
                                                        </tr>
                                                    <?php } }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- #END Add content here -->

                    <?php include("tm_foot.php"); ?>
                </body>';
            

                $rs.='<script>
                    function checkalert(id) {
                        swal({
                            title:"Bạn đã đã chắn chắn?",
                            text: "Hành động này sẽ xóa tất cả các dữ liệu liên quan, và không thể phục hồi",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonClass: "btn-danger",
                            confirmButtonText: "Đồng ý!",
                            closeOnConfirm: false
                        },
                        function () {
                            swal("Thành công!", "Dữ liệu của bạn đã được xóa!", "success");
                            window.location.href = "<?= base_url() ?>admin/'.$this->classname.'/delete_'.$this->classname.'/" + id;
                        });
                    }
                </script>
                </html>';
        return $rs;
    }
    public function createfileCI($sFile,$filename,$filepath)
    {
        $bEcho = 0; $bWrite = 1;
        $sFile = $this->formatCode($sFile);
        if($bEcho) {
            echo "";
            highlight_string($sFile);
            echo "<br><br><br>Output save path: $filepath";
        }
        if($bWrite) {
            // Check to see if file already exists, and if so, delete it.
            if(file_exists($filename)) {
                unlink($filename);
            }
            // Open file (insert mode), set the file date, and write the contents.
            // $oFile = fopen($filepath, "w+");
            // fwrite($oFile, $sFile);
            if(!write_file($filepath, $sFile)){
                    echo 'Unable to write the file';
                }
                else
                {
                        echo 'File written at <strong>'.$filepath."</strong></br>";
                }
            
        }
    }
    public function createClass($bEcho = 0, $bWrite = 1) {
        
        $filename_m = ucfirst($this->classname);
        
        $filename = $filename_m."_m.php";
        $link = str_replace("index.php","",$_SERVER['SCRIPT_FILENAME']);     
        ///////////////////////create model
        $filepath = $link."/output/model/". "/$filename";
       
        
        $sFile = $this->createModel();
        $this->createfileCI($sFile,$filename,$filepath);
        /////////////// create controller
        $filename = $filename_m.".php";
        $filepath = $link."/output/controller/". "/$filename";
        $sFile = $this->createController();
        $this->createfileCI($sFile,$filename,$filepath);
        ///////////////////////create view list
        $filename = "a_".$this->classname.".php";
        $filepath = $link."/output/view/". "/$filename";
        
        $sFile = $this->create_view_list();
        // $fields = array(
        //     'code' => urlencode($sFile),
        //     'indent' => 4,
        //     'line-length' =>80,
        //     'output' => 'full-page',
        //     'indent-style' => 'auto',
        //     'add-empty-lines' =>true,
        //     'allow-proprietary-attribs' =>false,
        //     'optimize-for-ms-word' => true
        // );
         
        // $url = 'https://www.10bestdesign.com/dirtymarkup/api/html';
        // $fields_string="";
        // //url-ify the data for the POST
        // foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
        // rtrim($fields_string, '&');
        // //open connection
        // $ch = curl_init();
        // //set the url, number of POST vars, POST data
        // curl_setopt($ch,CURLOPT_URL, $url);
        // curl_setopt($ch,CURLOPT_POST, count($fields));
        // curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
        // //execute post
        // $result = curl_exec($ch);
        // //close connection
        // curl_close($ch);
        // $rs = json_decode($result)->clean;
        // var_dump($rs); return;
        
        $this->createfileCI($sFile,$filename,$filepath);
        
        

        // Exit the function
        return($this->filepath);
    }
}
?>
