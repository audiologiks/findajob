Guide to web client templates 
======
Update 10/21/19
3.0 months since last update

Repository for code for a desktop client for sharing knowledge on recording and sharing audio using Twilio (www.twilio.com), written in php and html. 
* Used for a meetup in Tokyo to encourage members to engage in exchange languages and to attend the Meetup.
* To access audio files with buttons,to be used to showcase interactive audio content

**Code** is based on Twilio platform, at the url https://www.twilio.com . All rights to their code examples below to them. The MIT license only covers sample code I post here if not already covered by another license. In general, all of it is based on sample code on the twilio website so it can be taken from there as well. I just build on it for specific uses. 

Folders
===
**Logiks** -  In this folder are examples of voice menu scripts and code to initiate different features.

So to build menus, login pages, voice recording examples, I just put the twilio script in php and html static pages usually. The voice menu is what the web client accesses and runs on the twilio infrastructure.

**Client** - In this folder are examples of soft, desktop client html code that I post to share. Using tables from the database_table repo and dialpads in the kb-Articles repo.

Using bootstrap for the [client](https://getbootstrap.com/) and [bootswatch](https://bootswatch.com/) for the skin/outer look theme.

I might start using the Slim php framework for webclients, rather than just the static pages i have now. 
7/4/19 Update - not using it yet. 

**Twiml** - Examples from Twilio website that I download to work on as examples, or code for voice features that I have adapted.

# How Does this Work with:

* Interactive Voice Menus- The webclients connect to voice menus on different topics with different feature sets.

* Database Tables - I use database tables for links to content on the webpage on the webclient. Groups of content are organized by table.

* Dialpads - Different dialpads can be created to allow users access to features of the interactive voice menus.


