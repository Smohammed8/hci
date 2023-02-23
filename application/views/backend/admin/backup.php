
   <style>
    body{
		
		color:green;
		font-size: 16px;
	}
 #progress
{
    width:100%
    Height:10px;
    margin-left: auto;
    margin-right: auto;
	position: relative; 
	color: black;
	background-color: #084184;
}
#information{
	text-align:left;
	color: black;
	font-size: 20px;

	
}
  
   </style>

	          <!--  	<div class="login-progressbar-indicator" id="loader">
		
					<span><img src="uploads/ajax-loader.gif">
			<br>Database is backing up... <?php //echo get_phrase('please wait...');?></span>
				
			</div>
Progress bar holder -->
	
	
<div class="row" >
	<div class="col-md-12">
<div id="progress" style="width: 100%; border:1px solid  buttonface;"></div>
<!-- Progress information -->
<div id="information" style="width:100%;"></div>

<?php
//error_reporting(E_ERROR  | E_PARSE);
 // Total processes
    $total = 10;
 // Loop through process
   for($i=1; $i<=$total; $i++){
    // Calculate the percentation
    $percent = intval($i/$total * 100)."%";  
    // Javascript for updating the progress bar and information
    echo '<script language="javascript">
    document.getElementById("progress").innerHTML="<div style=\"width:'.$percent.';background-color: #084184;\">&nbsp;</div>";
    document.getElementById("information").innerHTML=" '.$i.' out of 29 tables <h3><b> Please wait...</b></h3>";
    </script>';
// This is for the buffer achieve the minimum size in order to flush data
    echo str_repeat(' ',1024*64);
// Send output to browser immediately
    flush();
// Sleep one second so we can see the delay
    sleep(1);
	
}
// Tell user that the process is completed
echo '<script language="javascript" >document.getElementById("information").innerHTML="Back up Processing has been completed!"</script>';

//error_reporting(E_ERROR  | E_PARSE);
define("DB_USER", 'root');
define("DB_PASSWORD", 'ok');
define("DB_NAME", 'ims_db');
define("DB_HOST", 'localhost');
define("OUTPUT_DIR", 'uploads/backups');
define("TABLES", '*');

/**
 * Instantiate Backup_Database and perform backup
 */
$backupDatabase = new Backup_Database(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$status = $backupDatabase->backupTables(TABLES, OUTPUT_DIR) ? 'OK' : 'KO';
echo "<br>Backup result: ".$status;

/**
 * The Backup_Database class
 */
class Backup_Database {
    /**
     * Host where database is located
     */
    var $host = 'localhost';

    /**
     * Username used to connect to database
     */
    var $username = 'root';

    /**
     * Password used to connect to database
     */
    var $passwd = 'ok';

    /**
     * Database to backup
     */
    var $dbName = 'ims_db';

    /**
     * Database charset
     */
    var $charset = 'utf8';

    /**
     * Constructor initializes database
     */
    function Backup_Database($host, $username, $passwd, $dbName, $charset = 'utf8')
    {
        $this->host     = $host;
        $this->username = $username;
        $this->passwd   = $passwd;
        $this->dbName   = $dbName;
        $this->charset  = $charset;

        $this->initializeDatabase();
    }

    protected function initializeDatabase()
    {
        $conn = mysql_connect($this->host, $this->username, $this->passwd);
        mysql_select_db($this->dbName, $conn);
        if (! mysql_set_charset ($this->charset, $conn))
        {
            mysql_query('SET NAMES '.$this->charset);
        }
    }

    /**
     * Backup the whole database or just some tables
     * Use '*' for whole database or 'table1 table2 table3...'
     * @param string $tables
     */
    public function backupTables($tables = '*', $outputDir = '.')
    {
        try
        {
            /**
            * Tables to export
            */
            if($tables == '*')
            {
                $tables = array();
                $result = mysql_query('SHOW TABLES');
                while($row = mysql_fetch_row($result))
                {
                    $tables[] = $row[0];
                }
            }
            else
            {
                $tables = is_array($tables) ? $tables : explode(',',$tables);
            }

            $sql = 'CREATE DATABASE IF NOT EXISTS '.$this->dbName.";\n\n";
            $sql .= 'USE '.$this->dbName.";\n\n";

            /**
            * Iterate tables
            */
            foreach($tables as $table)
            {
                echo "<br> => Backed up ".$table." table...";

                $result = mysql_query('SELECT * FROM '.$table);
                $numFields = mysql_num_fields($result);

                $sql .= 'DROP TABLE IF EXISTS '.$table.';';
                $row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
                $sql.= "\n\n".$row2[1].";\n\n";

                for ($i = 0; $i < $numFields; $i++) 
                {
                    while($row = mysql_fetch_row($result))
                    {
                        $sql .= 'INSERT INTO '.$table.' VALUES(';
                        for($j=0; $j<$numFields; $j++) 
                        {
                            $row[$j] = addslashes($row[$j]);
							
                            $row[$j] = ereg_replace("\n","\\n",$row[$j]);
					
							
                            if (isset($row[$j]))
                            {
                                $sql .= '"'.$row[$j].'"' ;
                            }
                            else
                            {
                                $sql.= '""';
                            }

                            if ($j < ($numFields-1))
                            {
                                $sql .= ',';
                            }
                        }

                        $sql.= ");\n";
                    }
                }

                $sql.="\n\n\n";
				

                echo " OK" . "
";
            }
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
            return false;
        }

        return $this->saveFile($sql, $outputDir);
    }

    /**
     * Save SQL to file
     * @param string $sql
     */
    protected function saveFile(&$sql, $outputDir = '.')
    {
        if (!$sql) return false;

        try
        {
            $handle = fopen($outputDir.'/db-backup-'.$this->dbName.'-'.date("Y-m-d-His", time()).'.sql','w+');
            fwrite($handle, $sql);
            fclose($handle);
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
            return false;
        }

        return true;
    }
}
echo '<hr>';
echo '<p style="color: green; text-align: left"> Your database file  has been  backed up sucessfully in to <u>Uploads/backups</u>directory! </p>';

?>

 &nbsp &nbsp <a href="<?php echo base_url();?>index.php?admin/dashboard"><b>Back</b> </a> 
 <a href="uploads/backups"><b>View </b> </a> <br><br><br>
 
 </div>
	</div>

