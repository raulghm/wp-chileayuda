# Gulp Starter Kit

> A web front end project from scratch with Gulp and other awesome technologies!

## Features

> [Gulp](http://gulpjs.com/) the task automation tool,
> [Node.js](https://nodejs.org/) Containing
> modern web development tools such as 
> [Handlebars](http://handlebarsjs.com/) template system,
> [PostCSS](https://github.com/postcss/postcss) CSS pre processor,
> [SuitCSS](https://suitcss.github.io/) is a reliable and testable styling methodology for component-based UI development,
> [eslint](http://eslint.org/) Javascript linter,
> [Babel](http://babeljs.io/) and [BrowserSync](http://www.browsersync.io/).
> Helping you to stay productive following the best practices. A solid starting
> point for both professionals and newcomers to the industry.

## Directory Layout

```
├── /src/                       # The source code of the application
│   ├── /components/            # The application components
│   ├── /data/                  # Json file containing data shared with the templates
│   ├── /fonts/                 # Fonts files
│   ├── /images/                # Images assets, background, icons, etc
│   ├── /layouts/               # The application handlebars layouts
│   └── /pages/                 # The application pages
│   └── /scripts/               # The application main javascripts files
│   └── /styles/                # The application main styles files
├── /node_modules/              # 3rd-party libraries and utilities
│── .eslintrc                   # The configuration file from eslint
│── .gitignore                  # Git ignore rules
│── bower.json                  # The main bower dependencies file
│── gulpfile.js                 # The Gulp task manager configuration
│── package.json                # The node.js modules dependencies file
└── README.md                   # Important information related
```

## Getting Started

Make sure you install [Node.js](https://nodejs.org/en/) v5.8.0+, [npm](https://www.npmjs.com/) v3.7.3+ and [Gulp](http://gulpjs.com/) 3.9.1+ installed.

Just clone the repo:

```shell
$ git clone [URL]               # Clone this repository
$ cd MyApp                      # Change MyApp with the name of your app
$ npm install                   # Install Node.js components listed in ./package.json
$ bower install                 # Install Bower dependencies listed in ./bower.json
```

## Development server

```shell
$ gulp                          # Start the static node.js server and runs it in browser
```

Visit [http://localhost:9000](http://localhost:9000) in your browser

This will start a light-weight development server with "live reload" and
synchronized browsing across multiple devices and browsers.

## Generate dist files

```shell
$ gulp build                    # This will generate a dist folder ready for production use
```
