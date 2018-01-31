#Set cookie and redirect previous visit link using cookie

You can set cookie on visitor/client browser then when a visitor goes offline and again come back into your website then the visitor/client auto redirect last visit link when he tries visitor home page. He/she can't visit home page auto redirect latest link. He/she can again visit the home page after clear/delete the cookie. 


##Set Cookie
First you need to set link on browse as a cookie.
just using below code.

```$exlink =  "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";



    setcookie('saveexperice', $exlink, time()+(60*60*24*30), '/');
```
Note: Must you need php file. like .php, if your file is .html, .css that php is not work (exmple for new user). and must using that code into header of avobe all code. example see screenshot http://prntscr.com/i7y64e
![alt text](https://image.prntscr.com/image/TjJLOgEySRqN42Z67sQN8Q.png)
