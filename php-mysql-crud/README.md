# Project Steps

1-> Create POST Form with Name and Location input Fields and Save button <br/>
2-> Add divs and bootstrap classes to the form to make it look good, center the form<br/>
3-> Create process.php, add it to Form action and include it from index.php <br/>
4-> Create the mySql database "crud" and table "data" with id, name and location fields. <br/>
5-> Connect to the database and insert the Name and Location records into "data" table if the Save button has been pressed. <br/>
6-> Connect to the database, select the existing records and create the loop to display them above the Form in an HTML table. Add Bootstrap 4 classes to style and center the table. <br/>
7-> Add Edit and Delete link buttons, pass the id of the record as GET variable to the URL in both links. <br/>
8-> If the Delete button has been clicked, delete the record from the "data" using passed id from the $_GET['delete'] variable value. <br/>
9-> Create Session Messages and message types for save and Delete buttons, redirect the user back to index.php for both. <br/>
10-> Display Save and Delete messages with $_SESSION at the top of the page using Bootstrap4 classes appropriate for each message type. <br/>
11-> If the Edit button has been clicked, select the existing record from the database, set $name and $location variables and display them in the Form input fields. Set the $name and $location to empty strings out the if statement. <br/>
12-> Set the $update variable to true inside the Edit button if statement, Set the $update variable to false out the if statement. <br/>
13-> Add hidden input field with the value of the record id to access it from POST <br/>
14-> If the Update button has been clicked, update the record with new $name and $lcoation using the value from the hidden id input field. Set the value of $id to 0 outside the if statement. <br/> 
15-> Set the SESSION message to updated, set the message type and redirect back to index.php <br/>
