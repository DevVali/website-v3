$c[THE MOST POWERFUL STAFF STATUS SYSTEM | BDFD]
$c[Language: BDscript 2; YouTube: https://youtu.be/doH2l73GK4E]
$c[
ADD THE OTHER COMMANDS, REQUIRED:
- https://portfolio.devvali.repl.co/code.php?id=5 
- https://portfolio.devvali.repl.co/code.php?id=6 (this)
- https://portfolio.devvali.repl.co/code.php?id=7
- https://portfolio.devvali.repl.co/code.php?id=8
- https://portfolio.devvali.repl.co/code.php?id=9
- https://portfolio.devvali.repl.co/code.php?id=10
- https://portfolio.devvali.repl.co/code.php?id=11
- https://portfolio.devvali.repl.co/code.php?id=12
]
$c[© 2022 Vali (@ejvali)]

$c[VARIABLES NEEDED:
-------------------------------
staffchannel
value=$botID
staffrole1
value=$botID
staffrole2
value=$botID
staffperm1
value=$botID
staffperm2
value=$botID
-------------------------------
]
    
$c[#2 SECOND CODE]
$embedSuppressErrors[Error;;88888;;;]
$varExistError[staffchannel;Make sure to make a new variable with name "staffchannel" and value "$botID"]
$varExistError[staffrole1;Make sure to make a new variable with name "staffrole1" and value "$botID"]
$varExistError[staffrole2;Make sure to make a new variable with name "staffrole2" and value "$botID"]
$varExistError[staffperm1;Make sure to make a new variable with name "staffperm1" and value "$botID"]
$varExistError[staffperm2;Make sure to make a new variable with name "staffperm2" and value "$botID"]

$nomention
$onlyIf[$guildID!=;This command only works on servers.]
$onlyAdmin[]
Successfully started the staff mode setup.
$color[88888] $description[Enter the **staff statuses** channel below.

The bot will log staff statuses into that channel.]
$footer[Or type 'cancel' to exit] $addTimestamp
$awaitFunc[staffchannel;$authorID]