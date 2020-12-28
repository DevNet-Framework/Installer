# DevNet Installer
This dependency is the main repository of **DevNet Framework**, that will install the following packages:
- **devnet/core**  a basic common library needed for all DevNet components.
- **devnet/cli**  a command line Interpreter that has development tool, for creating and running DevNet prjects
- **devnet/web**  a collection of web components that helps to create a web project in modern way.
- **devnet/entity**  an object relational mapping system that helps to manipulate database, in object-oriented way.

## Requirements
- PHP 7.4 or higher version from [php.net](https://www.php.net/)
- Composer the dependency manager from [getcomposer.org](https://getcomposer.org/)
- Git the distributed version control system from [git-scm.com](https://git-scm.com/)

## Installation
> **Note :** This is an early release, not recommended for production use.

First we need to config composer global minimum-stability to development, because DevNet is still in development  
so in the terminal type the following command:
```bash
composer global rquire devnet/installer
```

To install DevNet framework globally, run the following command in the terminal:
```bash
composer global rquire devnet/installer
```
>**Note:** For linux users, do not forget to add into the System Environment Variables the following line:  
`export PATH="$PATH:$HOME/.config/composer/vendor/bin"`

## Usage
To create a **Console Application**, navigate to your folder project in the terminal, and run the following command:
```bash
devnet new console
```

To create a **Web Application**, navigate to your folder project in the terminal, and run the following command:
```bash
devnet new web
```

To run your application, run the following command :
```bash
devnet run
```

If your project is a *Web Application*, the built-in server will start at: http://localhost:8000  
  
For more help on how to use **devnet/cli**, run devnet command with the option ```--help``` in your terminal:
```bash
devnet --help
```

That's it! Enjoy coding and build cool things :)
>**Note :** For full documentation on how to use **DevNet Framework** visite [devnet-framework.github.io/docs](https://devnet-framework.github.io/docs)
