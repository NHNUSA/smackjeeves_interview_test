# Smack Jeeves Interview: Code Task

## Objective
Build a one-page app that allows the user to upload multiple images at a time. After selecting images to upload, a form for each image should be propogated, allowing the user to add a Title and Description to the image before uploading.

### Additional Requirements
* Update the UI to indicate when each image has finished uploading
* Save each image uploaded to the server in the [/images/uploaded/](/images/uploaded/) directory
* Store each image's title, description and locally stored filename as a record in the database


## Starting Resources
### Starter code, TODO code blocks
To help save time, much of the task has been started for you already. Look for `// TODO` comments to see where you need to add functionality.

### The database connection and class
The database wrapper class is defined in [/classes/mysql.db](/classes/mysql.db) and the connection is made in [/includes/db.php](/includes/db.php). In practice, it is used as a singleton and made available via the global variable `$db`. Here's an example usage:
```

$sql = "SELECT NOW() as now";

if( !$result = $db->sql_query($sql) ) {

  throw new Exception('Could not perform query');
  
}

$row = $db->sql_fetchrow($result);
$now = $row['now'];

```
### JavaScript Utils
A JavaScript `Utils` object is provided with some utilities to help you complete the task. It is located in [/js/Utils.js](/js/Utils.js).

## Bonus Objectives
* Have the title automatically propogate based on the filename
* Make the title required using Bootstrap validation rules and/or styles (https://getbootstrap.com/docs/4.1/components/forms/#validation)
* Add an upload progress bar for each image
