#PIPless

PIPless is a tiny MVC application framework forked from [Gilbert Pellegrom's PIP](http://gilbitron.github.com/PIP/).

## Features

* PHP 7 with strict typing as standard.
* Select between using `mod_rewrite` or simply a GET-variable for navigation.
* By using the latest and most advance OOP-features in PHP, PIPless aims to reduce code repetition and make the framework, along with the applications using it, more maintainable.
* Includes RedBeanPHP ([http://readbeanphp.com](http://redbeanphp.com)) which supports MySQL, MariaDB, PostgreSQL, SQLite and CUBRID.

## Requirements

* PHP 7.0 or greater

## Installation

* Download PIPless and extract.
* Navigate to `application/config/config.php` and fill in your `base_url`. Also set `url_rewrite` to the appropriate setting.
* Point your browser to your `base_url` and hopefully you'll see a welcome message.
* If you want to use a database just fetch the [RedBeanPHP Toolbox](http://redbeanphp.com/api/class-RedBeanPHP.ToolBox.html) using Model::initDB()

## Documentation

Visit [https://github.com/tombayo/PIPless](https://github.com/tombayo/PIPless) to see the documentation.

## License

PIPless is released using GPLv3.

Please direct all credit to [Gilbert Pellegrom and PIP](http://gilbitron.github.com/PIP/).