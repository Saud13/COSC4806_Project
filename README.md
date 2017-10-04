# COSC4806_Project
Create a website with a login
3 types of users: Admin, staff, manager
Admin can do everything. Staff can only insert names and they can only update names they have previously submitted. Managers can insert and update all names and can only run reports on their own staff.
Admin has a create users page where they can create any type of user. If they create a staff member, they must assign who their manager is. This will require an additional table which has minimum two columns. Staff ID and Manager ID
Once logged in, a user is presented with a form with many dropdowns. Some of these dropdown values are pulled from the database.
User must enter a client's name, date of birth, email, phone number, province (dropdown from DB). When a province is selected, use AJAX to display 10 cities from each province (dropdown from DB), and a notes field that allows bold, italicized, etc., (implement existing js library).
Use javascript to ensure email address is from @algomau.ca. This must be your own js file stored in the js folder in public
Once submitted, in the controller, make sure the DoB is valid, the phone number is valid (10 digits), and the name is unique. 
If it exists already, display all the data on the form again (do not make them type it in again) and change the submit button to an update button. Allow the user to update data but only if they were the one who submitted it to begin with. If the user exists and the staff member didn’t insert the user, then tell them which manager to contact.
Create a report page that allows users to run custom reports based on dropdowns (grab all names from Ontario or grab all people younger than 20, etc.)
There should also be a phone list page that anyone can access. Name and phone number should be displayed. The table needs to be a datatable
Site must be made with MVC and bootstrap. All functionality needs a link in the header menu.
Site must also be mobile friendly (if you are properly using bootstrap, this will be done for you)
Site search which will search for functionality (search for phone list) and can search for names of people in the DB
The site has to be secure. Non-logged in users should not be able to do anything. Only appropriate users (staff/managers) should be able to see certain things. This cannot be hardcoded. You must use ACLs. 

_____________________________
MVC                  |   10% 
-----------------------------
DB/table structure   |   10% 
-----------------------------
Code Structure       |   10% 
-----------------------------
Bootstrap/Mobile     |    5%  
-----------------------------
PDO with bind        |    5%
-----------------------------
ACLs                 |    5%
-----------------------------
Extra                |    5%
_____________________________
Total                |   50%
 
