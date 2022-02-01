The main point of a Content Distribution Network (CDN) is to put the content as close to the end-user as possible, thereby reducing the Distance component of the Round Trip Time (RTT) and speeding up the request. Simply serving static content from a sub-domain isn't really the same as using a CDN.

The advantages of serving content from such a sub-domain, however, are that

The sub-domain can be a cookie-less domain

If you use your cookies correctly (ie. don't have any *.mydomain.com cookies), you can dramatically reduce the size (ie. number of packets sent) of the HTTP request, which would save on bandwidth and speed up requests significantly if you use cookies heavily on the main site.

The page can benefit from a more simultaneous requests being made by the browser

Most browsers will make simultaneous requests for page assets, like images, fonts, CSS, etc. The catch is that most browsers will only allow a limited number of open requests to a particular domain (somewhere around 5 I think). By spreading your assets across multiple sub-domains, you "trick" the browser, and allow more parallel requests, since the limit applies to each sub-domain.

So, yes, you could set this up by just making a sub-domain, but you also have to make sure the cookies you are using don't get sent to requests for that sub-domain as well.