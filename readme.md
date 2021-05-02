# Visitor 404

This is a very simple WordPress plugin for a niche requirement. It sends a 404, page not found header to any visitors and displays a blank page instead of showing them your WordPress site.

The intent is for this to be used on a WordPress installation when you're using WordPress for content management but some other package, Laravel in my case, to actually display content. 

**What about previews?**

The 404 headers are only sent to users that aren't logged in. Logged in users will see the WordPress site like normal so you'll be able to preview. 