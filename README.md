twitter clone edited as chirpchatter description given below..
 
 The Chirpchatter provides a platform for users to interact in a manner similar to
X.
o It mimics real-time interactions, allowing users to post content instantly and 
engage with others.
o Chirpchatter can be used to inform people about various events and happenings 
across the globe.
o Users can follow other accounts to see their Chirps in their feed according to 
their personal interest.
o A large number of audiences can be reached using various methods like tags, 
hashtags, etc.


# <img align="left" alt="Twitter" width="30px" src="https://github.com/aminyasser/aminyasser/blob/main/icons/twitter.png" draggable="false" /> Twitter Clone ([Click to try 🚀](https://sn-amin.000webhostapp.com/))

Bulit PHP **_Twitter Clone_** IN OOP style and using MYSQL Database. AJAX and Jquery for requests without reloading like Follow/unfollow, like, Search users, Show popups like comment , User lists, etc.


## Features

- Sign in / Sign UP
- Post Image or Normal Tweet.
- Retweet or Qoute Tweet (You can qoute the qouted tweet).
- Like Tweet.
- Add Comment and reply to the comment (Nested Comments).
- Mention User in Tweet or add hashtag to your tweet.
- Follow/Unfollow user.
- Get Notification when any previous action happened.
- Change Username/Password/Email From Settings.
- Search users by name and username.
- Edit Profile Like: (Change :avatar/username/cover etc).

## Running locally
 
 - Create New Database then import twitter.sql file on it.
 - go to PATH **core/classes/connection.php** and add your database info.

 ```php
    protected static $servername = "localhost";
    protected static $db_name="chirpchatter";
    protected static $username = "root";
    protected static $password = "";
```
 then the project is ready to run in localhost!

## 📷 UI


### Index
![Index](screenshots/Index.png)

### Home
![Home](screenshots/Home.png)

### Tweet and Comments
![Post](screenshots/Inner-Post.png)

### Profile
![Profile](screenshots/Profile.png)

### Notifications
![Movie](screenshots/Notifications.png)

### Edit Account
![Edit](screenshots/Edit.png)

### Preview Image before Tweet
![Post](screenshots/Post.png)

### Users List (For following/likedby etc)
![Users](screenshots/Users.png)

### Setting
![Setting](screenshots/Setting.png) 



