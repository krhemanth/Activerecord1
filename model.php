<?php
//turn on debugging messages
ini_set('display_errors', 'On');
error_reporting(E_ALL);
class model {
    protected $tableName;
    public function save()
    {
        if ($this->id = '') {
            $sql = $this->insert();
        } else {
            $sql = $this->update();
        }
        echo 'I just saved record: ' . $this->id;
    }
    public function insert() {
        $tableName = $this->tableName;
        $array = get_object_vars($this);
        $columns=array();$values=array();
         foreach($array as $key => $value)
        {
        if($key!="tableName")
          { array_push($columns,$key);
           array_push($values,$value);
           }
        }
        $columnString=implode(",",$columns);
        $valueString=implode("','",$values);
        $sql="INSERT INTO $tableName (".$columnString.") VALUES ('".$valueString."')";
        $db = dbConn::getConnection();
        $statement = $db->prepare($sql);
        $statement->execute();
        echo $sql;
        echo "<br>Inserted Successfully";
        return $sql;
    }
    public function update() {
        $tableName = $this->tableName;
        $array = get_object_vars($this);
        $update=array();
         foreach($array as $key => $value)
        {
        if($key!="tableName"&&$key!="id")
          { 
          if($value!="")
          {
          array_push($update," $key='$value'");
          
          }
           }
        }
        $columnString=implode(",",$update);
        $sql="update $tableName set " .$columnString. " where id=$this->id";
        $db = dbConn::getConnection();
        $statement = $db->prepare($sql);
        $statement->execute();
        echo $sql;
        echo "<br>I just updated record" . $this->id;
        return $sql;
    }
    public function delete() {
        $tableName = $this->tableName;
        $sql="delete from $tableName where id='$this->id'";
        $db = dbConn::getConnection();
        $statement = $db->prepare($sql);
        $statement->execute();
        echo $sql;
        echo '<br>I just deleted record' . $this->id;
        return $sql;
        
    }
}