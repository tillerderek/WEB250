<?php

class ParseCSV {
  // the delimiter property is set equal to a comma that will seperate values in the csv file.
  public static $delimiter = ',';

  private $filename;
  private $header;
  private $data=[];
  private $row_count = 0;

  public function __construct($filename='') {
    if($filename != '') {
      $this->file($filename);
    }
  }
  //this function checks to see if the file exists and if it is readable. If it is not readable, it will return false. If it is readable, it will return true.
  public function file($filename) {
    if(!file_exists($filename)) {
      echo "File does not exist.";
      return false;
    } elseif(!is_readable($filename)) {
      echo "File is not readable.";
      return false;
    }
    $this->filename = $filename;
    return true;
  }
//this function parses the csv file and returns the data in an array. It also counts the number of rows in the csv file.
  public function parse() {
    if(!isset($this->filename)) {
      echo "File not set.";
      return false;
    }

    // clear any previous results
    $this->reset();

    $file = fopen($this->filename, 'r');
    while(!feof($file)) {
      $row = fgetcsv($file, 0, self::$delimiter);
      if($row == [NULL] || $row === FALSE) { continue; }
      if(!$this->header) {
     	  $this->header = $row;
      } else {
        $this->data[] = array_combine($this->header, $row);
        $this->row_count++;
     	}
    }
    fclose($file);
    return $this->data;
  }
//this function returns the header of the csv file.
  public function last_results() {
    return $this->data;
  }
//this function returns the number of rows in the csv file.
  public function row_count() {
    return $this->row_count;
  }
//this function resets the header and data properties to NULL and the row_count property to 0.
  private function reset() {
    $this->header = NULL;
    $this->data = [];
    $this->row_count = 0;
  }

}

?>
