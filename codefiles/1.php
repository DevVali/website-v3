$c[ADVANCED BDFD WHOIS COMMAND]
$c[Language: BDscript 2]
$c[© 2022 Vali (@ejvali)]

$nomention
$embedSuppressErrors[Error;;88888;;;]
$onlyIf[$guildID!=;This command only works on servers.]
$ignoreTriggerCase
$title[$username[$findUser[$message]]'s info;2]
$description[<@$findUser[$message]>;2]
$addField[Username:; $username[$findUser[$message;yes]] (Nickname: $nickname[$findUser[$message]]);yes;2]
$addField[Discriminator:; #$discriminator[$findUser[$message;yes]];no;2]
$addField[ID:; $findUser[$message;yes];no;2]
$addField[Bot?; $replaceText[$replaceText[$checkCondition[$isBot[$findUser[$message;yes]]==true];true;Yes, $username[$findUser[$message;yes]] is a bot.;-1];false;No, $username[$findUser[$message;yes]] is not a bot.;-1];no;2]
$addField[Admin?; $replaceText[$replaceText[$checkCondition[$isAdmin[$findUser[$message;yes]]==true];true;Server Admin;-1];false;Server Member;-1];yes;2]
$addField[DM Status;$replaceText[$replaceText[$isUserDMEnabled[$findUser[$message]];true;Open;1];false;Close;1];no;2]
$addField[Creation Date;$replaceText[$replaceText[$replaceText[$userJoinedDiscord[$findUser[$message];Monday 2th of January 2006 at 3:04 PM];1th;1st;1];2th;2nd;1];3th;3nd;1];no;2]
$addField[Join Date;$replaceText[$replaceText[$replaceText[$userJoined[$findUser[$message];Monday 2th of January 2006 at 3:04 PM];1th;1st;1];2th;2nd;1];3th;3nd;1];no;2]
$addField[Highest Role:; 
<@&$highestRole[$findUser[$message;yes]]>]
$color[$getRoleColor[$highestRole[$findUser[$message]]];2] 
$addField[Lowest Role:; 
<@&$lowestRole[$findUser[$message;yes]]>]
$footer[Requested by $username[$authorID];2]
$addTimestamp
$thumbnail[$userAvatar[$findUser[$message]];2]
$suppressErrors
