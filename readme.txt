=== Registration Honeypot ===

Contributors: greenshady
Donate link: http://themehybrid.com/donate
Tags: custom post type, taxonomy, restaurant
Requires at least: 3.7
Tested up to: 3.9.1
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Plugin for stopping most spambot registrations via a simple honeypot method.

== Description ==

A plugin for stopping most spambots from registering user accounts on WordPress sites with open user registration. This plugin creates a simple, hidden field that spambots will automatically fill out. If this registration field has data entered into it, the registration process is cut off and no spam user account will be created.

This plugin isn't an end-all solution to spam registrations. It's a simple solution for one type of spam registration issue that has come in handy for me many times.

There's no configuration. Simply install, activate, and let the plugin do its work.

### Professional Support

If you need professional plugin support from me, the plugin author, you can access the support forums at [Theme Hybrid](http://themehybrid.com/support), which is a professional WordPress help/support site where I handle support for all my plugins and themes for a community of 40,000+ users (and growing).

### Plugin Development

If you're a plugin author or just a code hobbyist, you can follow the development of this plugin on it's [GitHub repository](https://github.com/justintadlock/registration-honeypot). 

### Donations

Yes, I do accept donations.  If you want to buy me a beer or whatever, you can do so from my [donations page](http://themehybrid.com/donate).  I appreciate all donations, no matter the size.  Further development of this plugin is not contingent on donations, but they are always a nice incentive.

== Installation ==

1. Uzip the `registration-honeypot.zip` folder.
2. Upload the `registration-honeypot` folder to your `/wp-content/plugins` directory.
3. In your WordPress dashboard, head over to the *Plugins* section.
4. Activate *Registration Honeypot*.

== Frequently Asked Questions ==

### Why was this plugin created?

I've had some sites over the years that would get hit by spambots registering user accounts.  There are WordPress plugins for stopping user registration spam, but I couldn't find any simple plugin for handling just this specific type of spam.  Plus, I hate having to go configure a lot of options that other plugins offer.

I just wanted a plugin that I could set and forget.  I wanted something that would simply do its job and nothing more.

### How do I use the plugin?

You simply need to activate it.  That's it.  It'll stop most spambot user registrations.

### Is this the best way to stop registration spam?

The absolute best way is to disable open user registration on your site.  A lot of WordPress users don't need this functionality but have it turned on anyway.  You can disable it by going to "Settings > General" in your WordPress admin and unticking the checkbox for "Anyone can register".  Then, you don't need any plugin.

### Will this stop all spam registrations?

No.  This plugin was built for a specific type of spam.  It uses a simple honeypot method to stop most spambots from registering a user account on your site.  For the most part, it's all I've ever needed to stop spam registrations.

However, it might not always work in all situations.  It really depends on what type of spam registrations you're getting, but spambots are pretty common.  So, this should work for most people.

### What is the "honeypot" method?

Basically, the plugin adds a hidden input field on the WordPress user registration form.  It's hidden to us humans, but spambots will see this field and enter text into it.  This is what we call "putting your hand in the honeypot".  If a spambot puts his hand in it, the plugin catches it and cuts off the user registration process before a new user account is created.

It's a pretty simple method, but it will not stop all spammers.  It mostly just stops those that send spambots to automatically fill out forms.

== Screenshots ==

1. Error screen if spambot is caught.

== Changelog ==

### Version 1.0.0

* Everything is new!