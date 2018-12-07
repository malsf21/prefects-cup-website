# Prefects' Cup Website
[![GitHub Release](https://img.shields.io/github/release/malsf21/prefects-cup-website.svg)](https://github.com/malsf21/liteweight/releases)
[![Website Up Status](https://img.shields.io/website-up-down-green-red/https/pc.ucc.on.ca.svg?label=pc.ucc.on.ca)](https://pc.ucc.on.ca)

## About
Hey, Matthew Wang here. This repository contains everything involved in the Prefects' Cup website. The website itself is pretty simple - it features a public-facing graph and countdown, as well as a small admin page to manage the points system. The entire website is client-side, and uses [Firebase](http://firebase.google.com/) as its backend. This design is intentional - it means that the website can be hosted on GitHub Pages or some equivalent service.

Previously, there have been iterations of this website made with PHP and mySQL - you can check those out by looking at the different branches and releases.

The Prefects' Cup is an annual competition between houses held at Upper Canada College.

## Setup

Running your own copy of this website is pretty simple - all you need to do is configure [Firebase](http://firebase.google.com/). Sign up for an account on Firebase, find your web config, and replace the config in `index.html` and `manage.html` with the correct information for your own Firebase project. You're looking for a code block that looks like this:

```javascript
var config = {
	apiKey: "AIzaSyB7movfLtHxREJjB2lNIFrY9LQR_0EUly8",
	authDomain: "prefects-cup-website.firebaseapp.com",
	databaseURL: "https://prefects-cup-website.firebaseio.com",
	projectId: "prefects-cup-website",
	storageBucket: "prefects-cup-website.appspot.com",
	messagingSenderId: "21735143583"
}
firebase.initializeApp(config);
```

Then, you should configure your database rules (so that read and write operations are controlled). We'll set the default read/write operations to be false, and only specify that information in the "public" object is readable by the public. Then, we only allow a set of UIDs that are managed in the Firebase backend to write data to the public object - these are UIDs that you'll whitelist.

```json

{
	"rules": {
		".read": false,
		".write": false,
		"public":{
			".read": true,
			".write": "root.child('allowedUids').child(auth.uid).exists()",
		}
	}
}

```

And then in your database, create an object called `allowedUids` that contains each valid UID as a key. You can create users from the authentication view in Firebase, and find their UID once created.

```json
{
	"allowedUids" : {
		"<YOUR FIRST UID HERE>" : true,
		"<YOUR SECOND UID HERE>" : true
	},
	...
}


```

Once you do that, you're all set! Just open up `index.html` and/or `manage.html` and it should all work! If it doesn't, drop an issue and I'll see how I can help you out.

## Credit/Made With
* [Bulma](https://bulma.io), the new flashy CSS framework we use!
* [Chart.js](https://www.chartjs.org/), the superior charts library I've used to make those sexy graphs.
* [Firebase](http://firebase.google.com/), our backend solution (authentication + database)
* [Font Awesome](https://fontawesome.com/), the collection of nice icons that I use.
* [Nick Elder](http://elder.ca), the cool dude who maintained the website before me.
