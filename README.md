# exerciseProject
Short project in straight line PHP, MYSQL, JAVASCRIPT, JQUERY, HTML
This is a working example of paging, AJAX(JQUERY) search. The code is not compartmentalized as would be in a production setting(header.php, meta.php, body.php, footer.php), since this is simply an demo of a working example. The code has been tested on and offline and works at  no records, 20-70 records, 100 records, 500 records. Partial dynamic URLs have been used and the search and type URL has not been changed when applied to non-search as it makes no difference to the code output(this would obviously be rectified in production).
Dynamic record sets have been applied, allowing any number of record sets.(This could be added to the AJAX search, as well as any other pages(but was not part of the specs for this project)
Most of all, I would never use my own Pagnation script in a production setting, since there are marvelous Open Source classes to render info, made by coders who have specslized in it. This script, written by me works and (hopefully) demonstates undertstanding of the concept and ability to execute. Much could be done to improve it, though, but time was of the essence.
Download the zip and test it in XAMP, WAMP, LAMP or online(please add your own MYSQL settings to the connection files) I've used a combo of PDO and MYSQLI for DB queries, since both were requested.
I've added a JQUERY (tables.php) results table to demo my point about the stunning classes available to use in production, written by people who specslize in tools for the purpose. All other files have been hand coded.
WORKING ONLINE version
http://laundrybymagic.herokuapp.com/exer/
