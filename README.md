# Website for the Prefect Cup

## About
Hey, Matthew Wang here. This repository contains everything involved in the [prefects cup website](http://pc.ucc.on.ca). It's a nice pet project that also serves some sort of useful purpose.

Right now, I'm rewriting the code to rely less and less on databases, be updated to newer Bootstrap Versions, be less crappy, and be easier to clone/replicate. That involves switching chart data from a SQL Database to JSON, updating the website's design feel to look less ew, and rewriting a lot of the mechanisms that I use to make the site work out.

You can find a test version of the most stable release at [my website](http://matthewwang.me/pc).

## Setup
Firstly, you need to copy the api_example folder to api. This is mostly just for giving a starting point to the files.
```
cp api_example/ api/
```
Secondly, you need to give PHP write permission to the api folder. It'll look something like this (though it depends on whatever user PHP is running from).
```
chown -R www-data:www-data api
chmod -R g+w api
```

## API
I've made a semi-legitimate API for the website. You can get data on each house's individual points, when they were last updated, as well as a lot of other data (that hasn't actually been implemented yet). You can find more about each API and its usage/format in the README of the api_example folder.

## Credit
* [Bootstrap](http://getbootstrap.com), the framework I've used for responsive utilities, pretty web UI elements, and robust Javascript.
* [plotly.js](https://plot.ly/javascript/), the (better) framework I've used for creating that nice looking bar graph.
* [Font Awesome](https://fortawesome.github.io), the collection of nice icons that I use.
* [Nick Elder](http://elder.ca), the cool dude who maintained the website before me.
* [Jack Sarick](http://sarick.tech), the cool dude who built a lot of the login framework that I base this one off of (for WAC).
