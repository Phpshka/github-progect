<?php
  if(isset($_SESSION['USER_SESSION'])){
?>
<nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
  <a class="navbar-brand" href="index.php">
    <?php echo $_SESSION['USER_SESSION']['full_name'];?>
       
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile.php">Profile</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="addblog.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Add blog
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="addblog.php">community
</a>
          <a class="dropdown-item" href="#">music</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact  with us</a>
      </li>
            
    </ul>
    <?php
      $key = "";
      if(isset($_GET['key'])){
        $key = $_GET['key'];
      }
    ?>
    <form class="form-inline my-2 my-lg-0" action="search.php" method="get">
      <input   style="background-color:whitesmoke;" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="key" value="<?php echo $key; ?>">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<?php
  }else{
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a style="color:#FF5349; font-size:30px;"  href="index.php"><i class="fab fa-github"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
    </ul>
      
    <?php
      $key = "";
      if(isset($_GET['key'])){
        $key = $_GET['key'];
      }
    ?>
    <form class="form-inline my-2 my-lg-0" action="search.php" method="get">
      <input    style="background-color:whitesmoke;" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="key" value="<?php echo $key; ?>">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
    </form>
              <!-- Button trigger modal -->
<button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModalLong" style="margin-left:1%">
  Support
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">What is this site for?
</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       GitHub is the largest [8] web service for hosting IT projects and their joint development.

The web service is based on the git version control system and developed on Ruby on Rails[9] and Erlang by GitHub, Inc (formerly Logical Awesome) [10]. The service is free for open source projects and (as of 2019) small private projects, providing them with all the features (including SSL[11]), and for large corporate projects, various paid tariff plans are offered[12].

The slogan of the service - "Social Coding" - can be translated into Russian as "Writing code together". On t-shirts same print quite another phrase: "Fork you!"("Answer!")[13]. On the one hand, it is consonant with the English-language curse and hints at an informal atmosphere. On the other hand, these words remind you that creating new forks with Git can be easy and painless-traditionally, developers of open source projects have a negative attitude to the creation of branches[14] - and also consonant with the name of one of the features of GitHub-the fork queue[15].

The mascot of GitHub selected Simikot (eng. octocat), which, contrary to popular misconception, is not related to the short film "Octocat Adventure", but was simply found by Tom Preston-Werner on the service iStock (eng.)Russian.[16].

On June 4 2018 Microsoft bought GitHub for 7.5 billion[17][18][19].
          <h5 class="modal-title" id="exampleModalLongTitle">Opportunities
</h5>
          The site's creators call GitHub a " social network for developers."

In addition to posting code, participants can communicate, comment on each other's edits, and follow the news of friends.

With git's extensive capabilities, programmers can consolidate their repositories — GitHub offers a user-friendly interface for doing so and can display each contributor's contribution as a tree.

For projects, there are personal pages, small Wikis and a bug tracking system.

Right on the site you can view project files with syntax highlighting for most programming languages.

You can create private repositories that will be visible only to you and your chosen people.
Previously, the ability to create private repositories was paid.

It is possible to directly add new files to your repository through the web interface of the service[20].
The project code can not only be copied through Git, but also downloaded as regular archives from the site.
In addition to Git, the service supports receiving and editing code through SVN[21] [22] and Mercurial [23].
The site has a pastebin-service gist.github.com to quickly publish code snippets.
Previously, Ruby projects could be automatically published in the RubyGems repository of the service, but in October 2009 GitHub abandoned this service
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  </div>
</nav>
<?php
  }
?>