I. Team Members:
	1. Mounika Sabbani
	2. Kavitha Andem
	3. Yamini Sri Vandana Penamakuru

II. Setup and Accessibility of the Application:

	NOTE: The files have been placed in their respective folders => html, php, js and Pics.
		  Please upload these 4 folders as they are into the server and not group all the files into a single folder to make sure the web pages work and show up as expected..


	A. Import the following SQL Scripts into phpMyAdmin:
		1. FEATURED_STORIES.sql
		2. LOGIN.sql
		3. SIGNUP.sql
		4. STORIES.sql
		5. SUBSCRIBED_EMAIL_DETAILS.sql

	B. Upload the following files on the server:

		a) HTML Files - 
			1. subscription.html - allows the user to input their email address to subscribe.
			2. regsiter.html - allows the user to signup to the website with their username and password
			3. demographic.html - here all the demographic information of the user will be collected.
			4. author_user.html - confirms that the user is an author and allows him to select a button.
			5. author_home_page.html - takes back the author to the user view or home page.

		b) PHP Files - 
			1. index.php - this is the default and main page of this web application.
			2. subscription.php - inserts the user's email address into the designated table.
			3. send_email.php - processes the application by sending a confirmation email to the user.
			4. register.php - once the user enter his details it stores them and navigates to next page.
			5. demo.php - inserts the values user enter on the demographic.html page.
			6. login.php - processes the username and password entered by the user from db.
			7. logout.php - simply logs out the user and returns to the home page.
			8. author_view.php - displays three tabs to the user to do the required functionality.
			9. author_upload.php - allows author to upload the story by collecting all the details.
			10. upload_story.php - inserts all the values to the table and provides confirmation to user.
			11. display_story.php - displays a particular story that user selects on the webpage.
			12. admin_view.php - displays the tabs for the admin to perform the required functionality.
			13. approved_books.php - provides a list of approved stories from the db on the webpage.
			14. book_admin.php - provides a list of books pending for approval from the database.
			15. rejected_books.php - provides a list of rejected books from the database.
			16. review_reject_accept.php - used to update the status of a story by the admin.
			17. search_story.php - displays default/ searched stories by retreiving them from db.
			18. admin_display_story.php - just like author, admin can also view stories by ID here.
			19. story1.php to story8.php - stories pulled by storyID from the FEATURED_STORIES table.
			20. author_check_status.php - author can check the status of his uploaded books here.
			21. author_display_story.php - allows author to check the story he has uploaded here.

		NOTE: We have included the db.connection file in order to let you enter your details on the file and you may upload the same on the server to view the pages without any issues. 
		Please enter these details and upload accordingly before testing out the application.
		
		c) JS Files - 
			1. home_page_validation.js - validates the fields on the home page.
			2. register_validation.js - validates the username and password on the signup page.
			3. login_validation.js - validates the login details entered by the user.
			4. sess.js - used for creating and destroying during login and logout.
			5. demographic_validation.js - validates the fields entered by the user before he submits.
			6. subs_validation.js - validates the email address entered by the user.
			7. author_upload_validation.js - validates all the fields including the image type here.

		d) Images/ Pics - Please upload the images included under the 'Pics' folder to view the 		   webpages without any issues.

	C. How the Little Bibliophile web-application works:
		1. Import all the SQL Scripts mentioned above into phpmyadmin.
		2. Once the files have been imported, use this URL to access the application - https://in-info-web4.informatics.iupui.edu/~ypenamak/Project/Attempt1/php/index.php
		3. Enter any one of the fields on the webpage and click on the 'Search' button.
		4. Alternately, browse the featured stories displayed on the front page and also go through the 'About' page to know more about our website.
		5. You may signup to the webpage by providing your demographic information and login once done.
		6. Feel free to signup as an author to have the accessibility to upload stories on the webpage.
		7. You may also login as an admin to have the priviledge to accept or reject a story uploaded by the authors.
		8. Lastly, you may simply login as a user and can even subscribe to the website by clicking on  the 'Subscribe' button.

		NOTE:

		1. Please change this path ~ypenamak/Project/Attempt1 to your respective folder path to view the application and test it without any issues.


		2. Please use the below pre-defined credentials to login and test the usability of the application:
		User Login => username: lisa
					  password: lisa

		Author Login => username: sid
						password: sid

		Admin Login => username: nag
					   password: leg




