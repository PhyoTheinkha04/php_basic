<?php
$xml =<<<START
<coder>
   <name>Phyo Theinkha</name>
   <age>18</age>
   <subject>c++, Python, Assembly</subject>
   <address>1234 dhid i nolw;ukmcm </address>
   <married>nope</married>
</coder>
START;
#simplexml_load_file()
#simpleexml_load_string()
$data = simplexml_load_string($xml);
print_r($data);
// $data = simplexml_load_file("data.xml");

// foreach ($data as $key => $val) {
//     echo $key . "=>" . $val . "<br>";
// }