 <?php
//turn on debugging messages
ini_set('display_errors', 'On');
error_reporting(E_ALL);
static public function buildHtml($records,$obj)
    {
    $html="<table border='1'><tr>";
   foreach($obj as $key => $value)
   {
    $html.="<th>$key</th>";
   }
    $html.="</tr>";
    foreach($records as $row)
    {
    $rowHtml="<tr>";
    foreach($obj as $key => $value)
    {
    $rowHtml.="<td>";
    $rowHtml.=$row->$key;
    $rowHtml.="</td>";
    }
    $rowHtml.="</tr>";
    $html.=$rowHtml;
    }
    $html.="</table>";
    return $html;
    }
