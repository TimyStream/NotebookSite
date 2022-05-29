# Device (Notebooks, Tablets, Phones, ...) Management
## What do i need?
- Webserver with PHP
- Database Server (MySQL)

## How can i start?
1. Upload / Copy all the Files exept the .gitignore, Notebooks.sql and README.md to your Webserver
2. Create a new Database on the Database Server and then Apply the "Notebooks.sql" file.
3. Create a ".env" file next to the "index.php" with these variables:
- <strong>DB_HOST</strong> => Database IP or Hostname
- <strong>DB_USERNAME</strong> => The Username of the Database User
- <strong>DB_PASSWORD</strong> => The Password of the Database User
- <strong>DB_DATABASE</strong> => The Database Name
- <strong>DB_PORT</strong> => The Database Port if not changed enter => <strong>"3306"</strong>