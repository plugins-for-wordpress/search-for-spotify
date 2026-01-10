=== Search for Spotify ===
Contributors: kirilkirkov
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=W5BR6K29BQX7E
Tags: spotify search, spotify, spotify widget, spotify shortcode
Requires at least: 4.7
Tested up to: 6.9
Stable tag: 1.6
Requires PHP: 7.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Search Spotify for tracks, albums, playlists, and artists from your WordPress site.

== Description ==

Search for Spotify plugin provides a way to find any Track, Album, Playlist or Artist in spotify.com through their API. 
Spotify is one of the largest music streaming service providers with over 406 million monthly active users, including 180 million paying subscribers, as of December 2021.
Integrated with [tunedex.routenote.com](https://tunedex.routenote.com), part of [RouteNote.com](https://www.routenote.com/?ref=wordpress-kirilkirkov-spotify-search), the world’s largest music distribution company. Tunedex gives access to a vast collection of additional information about artists, albums, and tracks, including multiple links for listening and downloading where the content is available. 

📌 Features included:

* Search for Artists, Tracks, Albums, Playlists
* Combine search for all types or only for specific
* Choose limit of the results
* Using with short-code, can be included everywhere in the website
* Responsive design
* Included option for absolute positioned results which means that results can be listed in the main menu or in pages/posts
* Pagination of the results
* Option to write your own styles if you wants to rewrite the current style
* Option for full exclude of the default styles
* Easily AUTO generate tokens for Spotify API with one Button
* Caching queries to prevent reach limit quota of the Spotify API
* Beautiful design which looks exactly like your users are in spotify
* All type of themes compatible
* Open found results directly on Spotify or [Tunedex RouteNote](https://tunedex.routenote.com) **(Tunedex is biggest Open Music Database with a lot of additional information)**
* Add custom URL parameters (GET parameters) to all Spotify links - perfect for referral links, tracking parameters, or any custom parameters you need

Beautiful and easy administration with help/explain for each field and feature.

Updates and new features in future.

Provide a way for your users to find any musical asset in the world.

== Installation ==

1. Install Search for Spotify from the WordPress Plugin Directory. Or, if that doesn't work:
2. Upload the "kirilkirkov-spotify-search.zip" directory to your "wp-content/plugins" directory.
3. In your WordPress admin, go to Plugins and activate "Search for Spotify"
4. Enter your Client ID and Client Secret which can get from your Spotify Application
5. Get the link from the help icon next to "Client ID" field and add it to your "Return Back" url of your Spotify Application
6. Click Get Token button to get the authentication token
7. Paste the Shortcode in your page/s

== Frequently Asked Questions ==

= How to get authenticated? =

Go to WordPress Spotify Settings and enter your client and secret id's, then save them and get the token throught the "Get Token" button. Keep in mind that should to enter your "return back url" in your Spotify application which can find into the help icon. 

= How to show the widget at the frontend? =

When get the token, just copy the Shortcode and paste in into your page/s.

= How to add custom URL parameters to Spotify links? =

Go to WordPress Spotify Settings, scroll down to "URL Parameters" section. Click "Add Parameter" to add key-value pairs. These parameters will be automatically appended to all Spotify links as GET parameters. This is perfect for adding referral links, tracking parameters (like UTM parameters), or any custom parameters you need. For example, if you add parameter "ref" with value "wordpress", all links will look like: `https://open.spotify.com/track/123?ref=wordpress`

== Screenshots ==

1. Public widget throught shortcode
2. Administration Settings Preview

== Changelog ==

= 1.2 =
= 1.3 =
= 1.4 =
* Updated for WordPress 6.8.3
* Minor bug fixes
* Improved Spotify token generation
= 1.5 =
* Updated for WordPress 6.9
* Minor bug fixes
= 1.6 =
* Added URL Parameters feature - add custom GET parameters to all Spotify links (perfect for referral links and tracking)
* Improved CSS isolation for better theme compatibility
* Enhanced absolute positioned results with better scrolling and z-index handling