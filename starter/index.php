<?php
require 'code/vendor/autoload.php';

// Database information
$options = array(
    'driver' => 'mysqli',
    'host' => 'localhost',
    'user' => 'root',
    'password' => '',
    'database' => 'test2',
    'prefix' => '',
    'port' => 3306
);

$db = \Joomla\Database\DatabaseDriver::getInstance($options);

// Create New Query:
$query = $db->getQuery(true);

// Build Insert Query Example:
/*$query->insert('#__sales');
$query->set('first_name = ' . $db->quote($json->first_name));
$query->set('last_name = ' . $db->quote($json->last_name));
$query->set('date_of_birth = ' . $db->quote($json->date_of_birth));
$query->set('phone_number = ' . $db->quote($phone_number));
$query->set('address1 = ' . $db->quote($json->address1));
$query->set('address2 = ' . $db->quote($json->address2));
$query->set('city = ' . $db->quote($json->city));
$query->set('state = ' . $db->quote($json->state));
$query->set('zip = ' . $db->quote($json->zip));
$query->set('created_date = NOW()');

// Set Query:
$db->setQuery($query);

// Execute Query and Load Data:
try {
    $result = $db->execute();
} catch(RuntimeException $e) {
    echo $e->getCode() . ' - ' . $e->getMessage();
}

echo "<pre>";
echo print_r($result, true);
echo "</pre>";*/

// Create New Query:
$query = $db->getQuery(true);

// Build Query:
$query->select('avg(qty_2006_02)');
$query->from('#__sales');
$query->where('qty_2006_02 > 0');
// Set Query:
$db->setQuery($query);

// Execute Query and Load Data:
//$data = $db->loadAssocList();
$data = $db->loadResult();

if (!empty($data))
{
    echo "<pre>";
    echo print_r($data, true);
    echo "</pre>";
}
else
{
    echo "No data";
}