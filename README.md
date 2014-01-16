#Time Bank system ( ธนาคารจิตอาสา )
##### URL : [http://jitarsabank.com/](http://jitarsabank.com/)


## Development Setup

1. Set up apache server in your machine
2. Clone the repo
```
git clone git@github.com:xinexo/TimeBank.git
```
3. Create symlink from apache `htdoc` to **timebank** folder in no.2
4. Set up database and import **timebank.sql** then set database connection information in `application/config/setup_database.php` and rename it to **database.php**

**NOTE**

	If you see 500 internal error,please check more information from error-log. It might happen from serveral problem.
		1. Folder permission.	
		2. Rewrite rule
		3. mod_rewrite.so doesn't enable.
			- Do enable it in `httpd.conf`	
	
	If you see the error, something like this `<? endif ?>`. Make sure your `php.ini` allow **short_open_tag**
