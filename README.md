# Smack Jeeves Interview: Code Task

### App URL
The app can be viewed at http://localhost/sj_test/

## Objective
Build a one-page app that allows the user to upload multiple images at a time. After selecting images to upload, a form for each image should be propagated, allowing the user to add a Title and Description to the image before uploading.

### Additional Requirements
* After the user clicks "Upload", update the UI to indicate when each image has finished uploading
* Save each image uploaded to the server in the [/images/uploaded/](/images/uploaded/) directory
* Store each image's title, description and saved filename as a record in the database.

## Starting Resources
### Starter code, TODO code blocks
To help save time, much of the task has been started for you already. Look for `// TODO` comments to see where you need to add functionality.

### phpMyAdmin
phpMyAdmin can be used to manage the database, i.e. create/view/edit tables. It is available at http://localhost/phpmyadmin/

### The database connection and class
The database wrapper class is defined in [/classes/mysql.db](/classes/mysql.db) and the connection is made in [/includes/db.php](/includes/db.php) which is automatically included by [/common.php](/common.php). Example usage is demonstrated in [/ajax/uploadImage.php](/ajax/uploadImage.php).

### JavaScript Utils
A JavaScript `Utils` object is provided with some utilities to help you complete the task. It is located in [/js/Utils.js](/js/Utils.js).

## Bonus Objectives
* Have the image title field automatically populate based on the filename
* Make the title field required using Bootstrap validation rules and/or styles (https://getbootstrap.com/docs/4.1/components/forms/#validation)
* Add an upload progress bar for each image
