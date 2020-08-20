# Web development Project

A E-coomerce Website name **E-store**. The website consist of 8 HTML/php pages.The website consist of HTML, CSS,
BOOTSTRAP, PHP and MYSQLI code. The HTML, CSS and BOOTSTRAP part of this code decides 
website look, while the PHP and MySQL part decides  it functions.

## Structures
1) HTML , CSS AND BOOTSTRAP: where designed the look of each page of your website.
2) PHP & MySQLi: where you  added functionality to the website. This allow us to allow users
to register and buy mobiles on the website.
3) Advanced PHP: where you added advanced features, such as validations and security to the
website.

### Prerequisites
install these two apps.
##### 1. Netbeans
##### 2. Wamp

## pages descriptoions:
  * **The index page** will be the landing page of the website i.e. the page which a user will first see when he/she opens the website. The page will be divided into three parts
      *the navbar ( fixed navbar at the top)
          *<div class=”navbar navbar-default navbar-fixed-top” class will be used. It will be a collapsing navbar.
      *Sign Up will contain the link to the signup.php page.
      *About Us will contain the link to the about.php page.
      *Contact Us will contain the link to the contact.php page.
      *For login, the modal will be created.
      *Login link in the navbar will trigger the modal.
* **body( container-fluid)**
      *Body will contain the grid system with two rows and three panels will be made in each row.
* **footer page**
  *the footer (grid system and the links.)
  *It is not included in the container-fluid and given a manual css with width:100%. This section will contain one
  row divided into three columns.
*Information, My Account and Contact Us are text but beneath them all are links except the number below the
contact us. Login link below the My Account will again trigger the modal.

* **ABOUT US PAGE**
*The navbar and the footer will remain same. In the body section, one row will be created which will have class
container inside to make the row responsive and helps in the design of the web page. This row will be divided into
3 columns which will contain one panel each.
*The navbar and the footer will remain same. In the body section, two rows will be created and both the rows will
be divided into two columns. First row will contain live support section and the image. Second row will contain
the contact us form and company information
* **SIGNUP PAGE (signup.php)**
*On the signup page, new users can register using the ‘signup’ form and create accounts, while existing users can
login using the ‘login’ modal.
*the signup form has six fields i.e. ‘name’, ‘email’, ‘password’, ‘contact’, ‘address’ and ‘city’.

* **FORM VALIDATION**
*In order that the data entered by any user is considered as a valid input, we have to force the data to obey certain
rules. We have listed the rules for this signup form as follows:
*1) Each user on the website will be uniquely identified by his email id, so we must to ensure that no two users
have the same email ids.
*2) We must ensure that the user enters a valid e-mail address and not just any string.
*3) We must ensure that a valid ten digit mobile number is entered by the user.
*4) We must ensure that the user can submit the form only after he/she fills in all the fields.
The other fields i.e. Name, Password, City and Address can take any value. If a user enters valid data, he is logged
in and is taken to the home page.
Using Form Validation, we check whether the user has entered the correct values. If the user enters an email which
is invalid, he/she is shown a message that the email entered is invalid. Similarly, If the user enters an email
address which has already been registered, a message is shown telling him/her that this email address is already
registered. If the user enters a contact number which is not a valid 10 digit mobile number, a message is shown
that the contact number is invalid. The user may enter any value in the remaining fields.

* **FORM INJECTION**
*When you allow a user to enter an input on your website, there is always the risk that a hacker may try to
compromise your server or website. This can be done by entering a PHP code instead of just plain text in the input
field of the form. Form injection is a basic security feature which makes it very difficult for hackers to do this.
Using form injection, we identify whether a user is trying to pass a PHP code in the input field of a form. This is
basic security against potential hackers.

* **LOGIN MODAL**
*In the login form, there are two fields, one is email address and the other is password. When the user enters his
credentials, the website checks the database for the email and password. If both are found corresponding to the
same user on the database, the user is logged in.
Again, we use form validation and form injection just as we did it in the signup form. If a user enters an email id
which is not registered in the database, he is not allowed to login and an error message is displayed. If the email id
is registered and the user enters a wrong password, an error message is shown indicating that the password entered
is incorrect. If he enters the correct email address and password, he is logged in and is redirected to the home
page.
We also have a ‘forgot password’ link, which takes the user to a page where he can enter his email address. Upon
doing so, a new password is set for him and emailed to his email address.
An additional safety feature being implemented in these forms are that the passwords entered by the users are
encrypted. Therefore, even if the database is compromised by a hacker, he/she cannot determine the password. For
this, we will use an encryption technique that you will be learning during the program.
Once the user’s input is validated, the data entered by him is accepted and stored in a database (MySQLi is used
for this purpose). The user is redirected to the home page, where he can browse and order items.
* **THE HOME PAGE (home.php)**
*The navbar will contain cart, settings and logout option. Settings will link to the settings page. Body will be same
as of index page except the content inside the panel will change. The buttons will now show text Add to Cart.
There will be no footer in the web page.
* **SETTINGS PAGE (settings.php)**
*This page will contain only one row. The row will consist of one column containing a form.
Here, we again implement form validation. If the user enters different passwords in the fields ‘New Password’ and
‘Retype New Password’, a message is shown that the passwords don’t match. If the user enters the incorrect ‘Old
Password’, an error message is displayed indicating that he/she has entered the wrong password. If the user fills
the three fields correctly, his/her password is updated. The form uses form injection to reduce security threats.
* **CART PAGE (cart.php)**
*The body of the web page will contain single row and a table which will have headings as Item number and price.
The rest will be generated dynamically, so in this module the table will contain only the table headings.
* **SUCCESS PAGE (success.php)**
The success page informs the user that his/her order has been accepted and his items would be delivered shortly. Also,
there is a link to the home page where the user can purchase more items.
* **EXTRA FEATURES**
*We have added some extra features on the website. Unless the user is logged in, he cannot go to the home page, the
confirm page, the success page or the settings page. When he/she isn’t logged in and he tries to navigate to the above
pages, he/she if redirected to the index page of the website. In this case, clicking on the logo from any page redirects
the user to the index page.
Once the user is logged in, he/she cannot navigate to either the index page or the login page and is redirected to the
home page. In this case, clicking on the logo from any page redirects the user to the home page.
## Author
* **Sarvesh Kumar Sharma** -(https://github.com/shsarv)

## Acknowledgments

* for any enquiry email-(**shsarv@gmail.com**)

