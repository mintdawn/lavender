# Capstone Lavender Acres

This is my final project for the Rasmussen Computer Science Capstone. The assignment was to create a web application and connect it to a database. We must also configure the Azure environment where the database will be hosted and create a simple database. The application can be hosted in any way that we have available to us. The application can be in any language.

# Site Demo
[Lavender Acres @ Unicorn Point](https://www.unicornpoint.net/lavender)

# The Basic Requirements

* The app badge/icon
* The app's initial home screen when launched, complete with basic company information, logo, and login fields (username, password)
* A properly configured database for user accounts, with a minimum of 5 user accounts set up and fully functioning
* A minimum of 3 app screens (accessed after login) for users to access client information appropriate to the company (such as "About Us" or "Services" or "Current Orders")
* A properly functioning Sign Out button, available on all pages
* A screen confirming successful sign out.
* I am still learning how to program so I adapted code from [this tutorial page](https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php). It was actually really easy to implement. Most things are like pulling teeth for me at this point. I also drew heavily from the Bootstrap documentation page.

# Work for Module 3

* Two information pages were added to the site.
* I created a "More Information" page that gives information about the Lavender Acres website. It talks about the purpose of the site and where to obtain more information about essential oils.
* I also created a "Support" page to provide information about how to use the site and create a login account.

I reformatted a lot of the visual appearance and added footers to several of the pages. I also changed the size of the headers on some of the pages and worked at making the page display properly on an actual phone. There is a difference between what the page looks like with the Chrome developer tool's emulations of a phone and my actual phone.

# Work for Module 4

* Create another information screen. For this I put content on the "recipes" page.
  * The page will generate a random blend. It will pull 3 oils from the database, display them and tell what they do.
  * The page also has a drop down feature that lists essential oils by their traditional use. For example, oils that are traditionally used to help people relax will be listed if the user selects "relax" from the drop down menu.
* Create a Logout page.
  * I already had a log out button and code but, I added a redirect page so there is an official page that says "You have logged out successfully." and then from there redirects to the front page again. This took way longer than it should have. The words were hugging the top of the browser. I finally got them to sit somewhere more comfortable by adding "margin-top: 10%" to the styles.css. The ID# for that style is "center-screen".

I keep adjusting the log in, register and reset password page. I keep centering them but I keep losing that change. I am not sure what I am doing to make this happen.

# Work for Module 5

Modifications and fixes for final project submission.
* I improved flow and user communication by creating OBVIOUS redirect screens that narrate each step of the log in and log out process.
* I made the drop down menu on the recipes page populate from the database.
* I fixed the log out script so people who are not logged in receive a different message if they try and log out.
* I made some of the colors on the site have better contrast so color blind or contrast impaired users can see the text and images more clearly.
* I added a Google font to the headings and navbar.
* I added a background hover effect to the links in the navbar so they stand out better.
* I added a light background to the sections on the support page so each section stands out better and it is easier to read.
* I changed the images on the about page to be full color images so they were easier to see for contrast impaired users. They were monochromatically filtered before.
* The form fields for the create log in form are now "required".
* The password reset page checks to see if the user is logged in or not and responds differently for each case.
* The password reset page gives a successful response and redirect when the password is changed.
