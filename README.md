# Smack Jeeves Interview Test

## Objective
Build a one-page app that allows the user to upload multiple images and give each image a title and description.

## Starting Resources
### The database connection and class
The database class is defined in [/classes/mysql.db](/classes/mysql.db) and the connection is made in [/includes/db.php](/includes/db.php). In practice, it is used as a singleton and made available via the global variable `$db`. Here's an example usage:
```

$sql = "SELECT NOW() as now";

if( !$result = $db->sql_query($sql) ) {

  throw new Exception('Could not perform query');
  
}

$row = $db->sql_fetchrow($result);
$now = $row['now'];

```
