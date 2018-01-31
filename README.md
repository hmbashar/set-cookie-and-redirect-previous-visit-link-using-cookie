#Set cookie and redirect previous visit link using cookie

You can set cookie on visitor/client browser then when a visitor goes offline and again come back into your website then the visitor/client auto redirect last visit link when he tries visitor home page. He/she can't visit home page auto redirect latest link. He/she can again visit the home page after clear/delete the cookie. 


##Set Cookie
First you need to set link on browse as a cookie.
just using below code.

```$exlink =  "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";



    setcookie('saveexperice', $exlink, time()+(60*60*24*30), '/'); ```
    
    
Note: Must you need php file. like .php, if your file is .html, .css that php is not work (exmple for new user). and must using that code into header of avobe all code. example see screenshot http://prntscr.com/i7y64e
![alt text](https://image.prntscr.com/image/TjJLOgEySRqN42Z67sQN8Q.png)


Now we've set last visited link on browser as a cookie

##Now we'll get that url from cookie. 

```if(isset($_COOKIE['last_visited_url'])){
		$redirect_url = $_COOKIE['last_visited_url'];		
	} 
	```
    
    Now we've got that url, and you can redirect header() to that url 
    
```header('Location: '. $redirect_url);```
    
    full code like 
    
```if(isset($_COOKIE['last_visited_url'])){
		$redirect_url = $_COOKIE['last_visited_url']; // get link from cookie
		header('Location: '. $redirect_url); // redirect cookie link
	}```
	
	
Note: Must you need php file. like .php, if your file is .html, .css that php is not work (exmple for new user). and must using that code into header of avobe all code. example see screenshot http://prntscr.com/i7y8km
 
![alt text](https://image.prntscr.com/image/9iO1r1k9Sa6QTORtgbefgQ.png)
    
just set cookie for another page and place redirect code Which link will be redirected by visiting? like home page.


## Cookie clear/delete

Now you can remove/clear your cookie using that code

```$cookieurl =  $_SERVER['REQUEST_URI'];

setcookie('last_visited_url', $current_location, time()-60*60*24*30, '/'); // remove cookie time

header('location: https://link.com'); // inpur link which link redirect after clear cookie
```

http://prntscr.com/i7y9sc

![alt text](https://image.prntscr.com/image/rkeYFFhjTWmWKkau4dcCcQ.png)


If you need any help please let me know or hire me.

