# Tweetable Text
A simple CKEditor plugin to make some of text tweetable.

##### Screenshots for the UI as below:

![Screenshot]
(http://i.imgur.com/mQAu3wI.png)

![Screenshot]
(http://i.imgur.com/38J9RLn.png)

![Screenshot]
(http://i.imgur.com/w08LYCz.png)

------------------------------------------------------------------

##### Screenshot on the frontend as below:

![Screenshot]
(http://i.imgur.com/1ATzYJ3.png)

##### CSS for the frontend:

```css
a.tweetabletext {
  text-decoration: underline;
}
a.tweetabletext:hover {
  background-color: #A9F43B;
  color: #2C4414;
  text-decoration: none;
}
a.tweetabletext::after {
  display: inline-block;
  background: url("http://i.imgur.com/ikC8axw.png") no-repeat center center;
  width: 16px;
  height: 16px;
  content: "\00a0";
  text-decoration: none;
  margin: 0;
  margin-left: 5px;
  right: 0px;
  position: relative;
  padding: 0;
  top: 3px;
}
```
_feel free to make modification on the css._


##### @todo:
* Proper Roadmap planning.
* ~~URL need to encode~~ (_checked_).
* Adding more parameter as mentioned here: https://dev.twitter.com/web/tweet-button/web-intent
* Improving README file.
