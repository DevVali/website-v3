$c[BDFD VALENTINE CARD BY VIDK#0024]
$C[Language: BDscript 2]
$c[VARIABLES NEEDED:
-------------------------------
valentine
value=0
valentine_usercards
value=0
valentine_sentcards
value=0
-------------------------------
]
$c[© 2022 Vali (@ejvali)]

$embedSuppressErrors[Error;;88888;;;]
$varExistError[valentine;Make sure to make a new variable with name "valentine" and value "0"]
$varExistError[valentine_usercards;Make sure to make a new variable with name "valentine_usercards" and value "0"]
$varExistError[valentine_sentcards;Make sure to make a new variable with name "valentine_sentcards" and value "0"]

$nomention
$ephemeral

$c[Delete this below if you gonna test the command, and copy it to clipboard so you can put it there again]
$onlyIf[$and[$checkCondition[$getTimestamp>1644706800]==true;$checkCondition[$getTimestamp<1644966000]==true]==true;It's not a Valentine! 
You're able to make a valentine's card <t:1644706800> - <t:1644966000>]

$onlyIf[$userExists[$findUser[$message;no]]==true;You entered invalid Discord handle of the recipient.]
$onlyIf[$findUser[$message]!=$authorID;Oh, you can't make a valentine's card to yourself.]
$onlyIf[$isBot[$findUser[$message]]==false;Oh, you can't make a valentine's card to a bot.]
$onlyIf[$checkContains[$getVar[valentine;$authorID];$findUser[$message]]==false;You already sent a valentine's card to **$username[$findUser[$message]]#$discriminator[$findUser[$message]]**.]
$onlyIf[$isUserDMEnabled[$findUser[$message]]==true;I'm sorry, but it seems like the recipient has DMs disabled.]
$cooldown[1h;You can make a new valentine's card in 1 Hour.]

$c[API by https://berk404.glitch.me/tools/imagemaker.html and https://api.berk404.ga, background by Koutňa#2010]
$var[image;https://api.bsmnt.cf/maker/v1?&image1=https://api.berk404.ga/circle?image=$userAvatar[$botID]&background=https://cdn.discordapp.com/attachments/836105270245457940/941953202893516900/io_valentines_banner.png&text1=&text2=$username[$authorID]%23$discriminator[$authorID]&text3=$username[$findUser[$message]]%23$discriminator[$findUser[$message]]&canvaswidth=1100&canvasheight=500&image1x=65&image1y=165&image1width=&image1height=&text1px=&text1x=&text1y=&text2px=&text2x=210&text2y=65&text3px=&text3x=210&text3y=115&text1color=&text2color=&text3color=]

$channelSendMessage[$channelID;Successfully sent the valentine's card to **$username[$findUser[$message]]#$discriminator[$findUser[$message]]**.
You sent **$sum[$getVar[valentine_sentcards;$authorID];1]** cards.]

$dm[$findUser[$message]]
$sendMessage[
> :shield: Note that this is a valentine's card sent by **$username[$authorID]#$discriminator[$authorID]**.
This is your valentine's card #**$sum[$getVar[valentine_usercards;$findUser[$message]];1]**.
:link: $var[image]
;no]

$setVar[valentine;$getVar[valentine;$authorID], $findUser[$message];$authorID]
$setVar[valentine_sentcards;$sum[$getVar[valentine_sentcards;$authorID];1];$authorID]
$setVar[valentine_usercards;$sum[$getVar[valentine_usercards;$findUser[$message]];1];$findUser[$message]]
