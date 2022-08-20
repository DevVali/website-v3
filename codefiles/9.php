$c[THE MOST POWERFUL STAFF STATUS SYSTEM | BDFD]
$c[Language: BDscript 2; YouTube: https://youtu.be/doH2l73GK4E]
$c[
ADD THE OTHER COMMANDS, REQUIRED:
- https://ejvali.eu/code.php?id=5 
- https://ejvali.eu/code.php?id=6 
- https://ejvali.eu/code.php?id=7 
- https://ejvali.eu/code.php?id=8 
- https://ejvali.eu/code.php?id=9 (this)
- https://ejvali.eu/code.php?id=10
- https://ejvali.eu/code.php?id=11
- https://ejvali.eu/code.php?id=12
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
    
$c[#5 FIFTH CODE]
$botListHide
$nomention
$reply
$allowUserMentions[]
$varExistError[staffchannel;Make sure to make a new variable with name "staffchannel" and value "$botID"]
$varExistError[staffrole1;Make sure to make a new variable with name "staffrole1" and value "$botID"]
$varExistError[staffrole2;Make sure to make a new variable with name "staffrole2" and value "$botID"]
$varExistError[staffperm1;Make sure to make a new variable with name "staffperm1" and value "$botID"]
$varExistError[staffperm2;Make sure to make a new variable with name "staffperm2" and value "$botID"]

$if[$checkContains[$message[1];cancel]==false]
$if[$checkContains[$message[1];skip]==false]
$if[$roleExists[$findRole[$message]]==true]
$setServerVar[staffrole2;$findRole[$message]]
Successfully set the role **$roleName[$findRole[$message]]** ($findRole[$message]) as the staff role Nº2.
$description[Enter the **non-hoisted staff permissions role** below. (you can use mention, ID or name)

This is the permissions role, with all permissions your server staff needs.
This role will be required to use the tt!staff command.]
$color[88888]
$footer[Or type 'cancel' to exit] $addTimestamp
$awaitFunc[staffperm1;$authorID]
$else
$setServerVar[staffchannel;$botID]
$setServerVar[staffrole1;$botID]
$setServerVar[staffrole2;$botID]
$setServerVar[staffperm1;$botID]
$setServerVar[staffperm2;$botID]
Oh no! Invalid role! Please, try again.
$endif
$else
Successfully skipped to the next option.
$description[Enter the **non-hoisted staff permissions role** below. (you can use mention, ID or name)

This is the permissions role, with all permissions your server staff needs.
This role will be required to use the tt!staff command.]
$color[88888]
$footer[Or type 'cancel' to exit] $addTimestamp
$awaitFunc[staffperm1;$authorID]
$endif
$else
$setServerVar[staffchannel;$botID]
$setServerVar[staffrole1;$botID]
$setServerVar[staffrole2;$botID]
$setServerVar[staffperm1;$botID]
$setServerVar[staffperm2;$botID]
The setup was canceled successfully.
$endif
