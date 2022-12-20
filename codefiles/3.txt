$c[ADVANCED BDFD LEADERBOARD W PAGES]
$c[Language: BDscript 2]
$c[© 2022 Vali (@ejvali)]

$c[ NO VARIABLES NEEDED ]
$nomention
$embedSuppressErrors[Error;;88888;;;]
$onlyIf[$guildID!=;This command only works on servers.]

$c[ SETTINGS ]
$var[medal;:kite:] $c[ THE MEDAL AFTER POSITION ]
$var[symbol;Money:] $c[ THE SYMBOL BEFORE THE VALUE ]
$var[variable;wallet] $c[ THE VARIABLE GETS THE VALUE ]
$var[type;globalUser] $c[ THE LEADERBOARD TYPE, user OR globalUser]

$c[ THE EMBED, YOU CAN EDIT IT AS YOU WANT TO ]

$title[**Leaderboard**]

$color[#ed3491]
 
$if[$message[1]!=]
$onlyIf[$or[$message[1]==1;$message[1]==2;$message[1]==3;$message[1]==4;$message[1]==5]==true;You entered an invalid page!]
$endif

$if[$message[1]==]

$footer[Page 1/5] $addTimestamp
$description[
1 - :first_place: <@$getLeaderboardValue[$var[type];$var[variable];asc;1;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;1;value]`
2 - :second_place: <@$getLeaderboardValue[$var[type];$var[variable];asc;2;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;2;value]`
3 - :third_place: <@$getLeaderboardValue[$var[type];$var[variable];asc;3;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;3;value]`
4 - :potato: <@$getLeaderboardValue[$var[type];$var[variable];asc;4;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;4;value]`
5 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;5;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;5;value]`
6 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;6;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;6;value]`
7 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;7;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;7;value]`
8 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;8;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;8;value]`
9 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;9;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;9;value]`
10 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;10;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;10;value]`
]
$elseif[$message[1]==1]

$footer[Page 1/5] $addTimestamp
$description[
1 - :first_place: <@$getLeaderboardValue[$var[type];$var[variable];asc;1;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;1;value]`
2 - :second_place: <@$getLeaderboardValue[$var[type];$var[variable];asc;2;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;2;value]`
3 - :third_place: <@$getLeaderboardValue[$var[type];$var[variable];asc;3;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;3;value]`
4 - :potato: <@$getLeaderboardValue[$var[type];$var[variable];asc;4;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;4;value]`
5 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;5;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;5;value]`
6 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;6;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;6;value]`
7 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;7;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;7;value]`
8 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;8;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;8;value]`
9 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;9;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;9;value]`
10 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;10;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;10;value]`
]
$elseif[$message[1]==2]

$footer[Page 2/5] $addTimestamp
$description[
11 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;11;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;11;value]`
12 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;12;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;12;value]`
13 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;13;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;13;value]`
14 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;14;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;14;value]`
15 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;15;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;15;value]`
16 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;16;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;16;value]`
17 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;17;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;17;value]`
18 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;18;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;18;value]`
19 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;19;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;19;value]`
20 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;20;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;20;value]`
]
$elseif[$message[1]==3]

$footer[Page 3/5] $addTimestamp
$description[
21 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;21;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;21;value]`
22 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;22;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;22;value]`
23 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;23;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;23;value]`
24 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;24;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;24;value]`
25 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;25;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;25;value]`
26 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;26;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;26;value]`
27 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;27;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;27;value]`
28 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;28;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;28;value]`
29 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;29;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;29;value]`
20 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;30;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;30;value]`
]
$elseif[$message[1]==4]

$footer[Page 4/5] $addTimestamp
$description[
31 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;31;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;31;value]`
32 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;32;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;32;value]`
33 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;23;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;33;value]`
34 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;34;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;34;value]`
35 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;35;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;35;value]`
36 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;36;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;36;value]`
37 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;37;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;37;value]`
38 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;38;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;38;value]`
39 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;39;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;39;value]`
40 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;40;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;40;value]`
]
$elseif[$message[1]==5]

$footer[Page 5/5] $addTimestamp
$description[
41 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;41;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;41;value]`
42 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;42;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;42;value]`
43 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;43;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;43;value]`
44 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;44;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;44;value]`
45 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;45;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;45;value]`
46 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;46;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;46;value]`
47 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;47;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;47;value]`
48 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;48;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;48;value]`
49 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;49;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;49;value]`
50 - $var[medal] <@$getLeaderboardValue[$var[type];$var[variable];asc;50;id]> | `$var[symbol] $getLeaderboardValue[$var[type];$var[variable];asc;50;value]`
]
$endif

$suppressErrors[An unexpected error occurred!]
