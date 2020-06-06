Execution steps:

1. Please download the entire master branch from Git by either downloading as a Zip or Git clone.
2. Do update the dependencies by using composer update command.
3. Please make sure the database connectivity is updated in configuration files (.env file and database file). 
4. run the database migration command - php artisan migrate
5. run database seeding command to insert some of the cities information. php artisan db:seed --class=CityTabl
eSeeder
6. use php artisan serve command to run the code.

Code explanation:

Weather information

Created a WeatherController.php Controller method. The actual route for this to execute is / (e.x http:localhost:8000/). This will try to get lastest weather information for some cities and update it in our database. 

Created two tables city and city_weather. City will act as master table. Also I have updated some specific city information alone from city_list.json which is given by openweather by using database seeding. City Seed information is available in CityTableSeeder.php class. 

I have created two modal classes City and CityWeather to access the database table details. This is used to get the information from database table and update the information to tables. 

Palindrome Check

It uses the PalindromeCheckController. The actual route for this to execute is /palindrome/create (e.x http:localhost:8000/palindrome/create). This will accept the text input and by submit this form will check whether entered text is palindrome or not. 
 
Palindrome String

It uses the PalindromeStringController. The actual route for this to execute is /palindromeString/create (e.x http:localhost:8000/palindromeString/create). This will accept the text input and by submit this form will check whether entered text is palindrome or not. If it is palindrome text then it will display as palindrome text.



 


