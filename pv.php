<?php
/*
Start:) 
GpGram
No sell
عرضه رایگان سورس های دیباگ شده در 
@Source_Eliya
*/
// pv
if($textmassage=="/start" && $tc == "private" or $textmassage=="/panel" && $tc == "private"){
	EliyaBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"سلام😉

به ربات مدیریت گروه 🚨پلیس🚔گروه²🚨 خوش آمدید🌹

از طریق این ربات راحت میتونی گروه خودت رو به صورت خودکار و بیست چهارساعته مدیریت کنی😍

✨این ربات دارای قابلیت حذف پیام بدون اخراج کاربره
➖➖➖➖➖
کانال ما : 
🆔 : @$channel
➖➖➖➖➖

از دکمه های زیر استفاده کن🔻
",
     'reply_markup'=>json_encode([
    'keyboard'=>[
				[
				['text'=>"💭اموزش نصب ربات"],['text'=>"🔖 راهنما"]
				],
                 [
                   ['text'=>"🗄 دستورات و امکانات"],['text'=>"🚦 پشتیبانی | ارسال نظر"]
                ],
 	],
            	'resize_keyboard'=>true
       		])
    		]);
}
 elseif($textmassage=="💭اموزش نصب ربات" && $tc == "private"){
	EliyaBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️برای مدیریت گپتون به صورت کاملا رسمی و رایگان توسط ربات تخصصی ما شما باید:

✅ روی دکمه شیشه ای بردن ربات در گروه  #لمس کرده و گپ خود را انتخواب کنید که ربات به صورت اتوماتیک عضو بشود.


✅ سپس به پروفایل گپ رفته و روی پیوی ربات دست خود را #نگه دارید تا پنجره ای برای شما نمایان شود.

✅ پس از نمایان شدن پنجره افزودن مدیر را کلیک کنید و تمام #تیک هارا ابی کنید که کاملا گپ مدیریت شود.

✅ سپس در داخل گروه خود دستور  ```نصب``` یا  ```/add``` را ارسال نمایید و صبر کنید تا گپ شما به لیست ربات اضافه شود.

✅ بعد از اضافه شدن گپ شما میتوانید با تایپ کردن راهنما به ربات دستور دهید که گپتان چگونه مدیریت شود و بعد اقدام به تنظیم نمایید.

⚠️مدیریت،امنیت،سرعت را در ربات ما احساس کنید.
🆔 @$usernamebot
کانال ما : 
🆔 : @$channel
",
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	[
	['text'=>"بردن ربات در گروه✅",'url'=>"https://telegram.me/$usernamebot?startgroup=start"]
              ] 
              ],
        ])
            ]);
        }
elseif($textmassage=="🔙 برگشت" && $tc == "private"){
	EliyaBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به منوی اصلی بازگشتید✔️
➖➖➖➖➖
از دکمه های زیر استفاده کنید🔻",

   'reply_markup'=>json_encode([
    'keyboard'=>[
				[
				['text'=>"💭اموزش نصب ربات"],['text'=>"🔖 راهنما"]
				],
                 [
                   ['text'=>"🗄 دستورات و امکانات"],['text'=>"🚦 پشتیبانی | ارسال نظر"]
                ],
 	],
            	'resize_keyboard'=>true
       		])
    		]);
$user["userjop"]["$from_id"]["file"]="none";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
}
elseif($textmassage=="🔖 راهنما" && $tc == "private"){
if($tch == 'member' or $tch == 'creator' or $tch == 'administrator'){
		EliyaBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🚦لطفا بخش مورد نظر خود را انتخاب نماید
➖➖➖➖➖➖
🔻از دکمه های زیر استفاده کنید",
   'reply_markup'=>json_encode([
    'keyboard'=>[
				[
				['text'=>"🏅 اموزش ادمین کردن"],['text'=>"🎖 اموزش نصب"]
				],
				[
			['text'=>"🔙 برگشت"]
				]
 	],
            	'resize_keyboard'=>true
       		])
    		]);
        }
else
{
		EliyaBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📣 برای استفاده از امکانات رایگان ربات شما باید ابتدا عضو کانال اطلاع رسانی ربات شوید
	
📍 سپس به ربات برگشته و مجدد امتحان کنید تا از امکانات فوق العاده ربات بهر مند شوید

📌 ادرس کانال : @$channel",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	[
	['text'=>"📢 عضویت در کانال",'url'=>"https://telegram.me/$channel"]
	],
              ]
        ])
            ]);
}
}
elseif($textmassage=="🏅 اموزش ادمین کردن" && $tc == "private"){
		EliyaBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 آموزش ادمین کردن ربات در گروه
➖➖
ℹ️ تلگرام فارسی :
1️⃣ اول ربات رو تو گروهتون اضافه کنید کنید 
2️⃣سپس به قسمت ویرایش گروه
3️⃣ سپس برین به  قسمت مدیران 
4️⃣ سپس افزودن مدیر
5️⃣ سپس افزودن مدیر بعد وارد مخاطبینتون میشه و بالا سمت راست یه گزینه ذره بین هستش 
روی ان کلیک کنید
6️⃣ سپس یوزرنیم ربات که در زیر مینویسم رو اونجا تو ذره بین باید وارد کنید
@$usernamebot
7️⃣ سپس روی ربات کلیک کرده و تمام دسترسی های ادمین را فعال کنید


ℹ️ تلگرام انگلیسی :
1️⃣ اول ربات رو تو گروهتون اضافه کنید کنید
2️⃣ سپس به edit گروه خود بروید 
3️⃣ سپس روی گزینه adminstrator بزنید سپس روی add adminstrator  بزنید
4️⃣ سپس افزودن مدیر بعد وارد مخاطبینتون میشه و بالا سمت راست یه گزینه ذره بین هستش 
روی ان کلیک کنید
5️⃣ سپس یوزرنیم ربات که در زیر مینویسم رو اونجا تو ذره بین باید وارد کنید
@$usernamebot
6️⃣ سپس روی ربات کلیک کرده و تمام دسترسی های ادمین را فعال کنید",
	]);
}
elseif($textmassage=="🎖 اموزش نصب" && $tc == "private"){
		EliyaBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🔶اموزش افزودن ربات به گروه به صورت متنی :

1⃣ابتدا با استفاده از دکمه زیر ربات را به گروه خود اضافه کنید

2⃣سپس ربات را ادمین کنید
[اموزش نصب به صورت فیلم در راهنما موجود است]

3⃣با ارسال دستور
 ```نصب``` یا ```/add```

ربات برای شما برای  فعال میشود

4⃣سپس با ارسال دستور
/panel
یا
/help

اقدام به انجام تنظیمات ربات کنید😄
➖➖",
	]);
}
/*elseif($textmassage=="🚀 دریافت رایگان" && $tc == "private"){
if($tch == 'member' or $tch == 'creator' or $tch == 'administrator'){
		EliyaBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به بخش دریافت ربات رایگان خوش امدید😀
➖➖➖➖➖
📍 شما با استفاده از این بخش میتوانید ربات را برای گروه خودتان به صورت رایگان دریافت کنید
",
 'reply_markup'=>json_encode([
    'keyboard'=>[
				[
				['text'=>"📅 365 روز رایگان"],['text'=>"👥 زیر مجموعه گیری"]
				],
	[
	['text'=>"🔙 برگشت"]
	],
 	],
            	'resize_keyboard'=>true
       		])
            ]);
        }
else
{
		EliyaBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📣 برای استفاده از امکانات رایگان ربات شما باید ابتدا عضو کانال اطلاع رسانی ربات شوید
	
📍 سپس به ربات برگشته و مجدد امتحان کنید تا از امکانات فوق العاده ربات بهر مند شوید

📌 ادرس کانال : @$channel",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	[
	['text'=>"📢 عضویت در کانال",'url'=>"https://telegram.me/$channel"]
	],
              ]
        ])
            ]);
}
}
		elseif($textmassage=="👥 زیر مجموعه گیری" && $tc == "private"){
		EliyaBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"شما با استفاده از این بخش میتوانید با دعوت دیگران ربات رو به زمان بیش تری رایگان دریافت کنید
➖➖➖➖➖
🔻از دکمه های زیر استفاده کنید🔻",
 'reply_markup'=>json_encode([
    'keyboard'=>[
				[
				['text'=>"🔗 لینک دعوت من"],['text'=>"ℹ️ اطلاعات حساب"]
				],
	[
	['text'=>"دریافت ربات [365 روز]"],['text'=>"دریافت ربات [730 روز]"]
	],
		[
	['text'=>"دریافت ربات [1095 روز]"],['text'=>"🔙 برگشت"]
	],
 	],
            	'resize_keyboard'=>true
       		])
            ]);
        }
			elseif($textmassage=="🔗 لینک دعوت من" && $tc == "private"){
		EliyaBot('sendphoto',[
	'chat_id'=>$chat_id,
	'photo'=>new CURLFile("other/logo.jpg"),
	'caption'=>"دوست داری گروهت رو 24 ساعته مدیریت کنی ؟ 😃
➖
از ربات های بی کیفیت خسته شدی ؟ ☹️

ربات رایگان ولی خوب برای مدیریت گروهت میخوای ؟ 👾

🤖 کافیه بری ربات زیر :
https://telegram.me/$usernamebot?start=$from_id",
            ]);
			EliyaBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 بنر بالا حاوی لینک شخصی شماست بنر را برای دوستان و گروه های خود ارسال کنید و با دریافت زیر مجموعه ربات رایگان دریافت کنید
➖➖
ℹ️ برای اطلاع از تعداد حساب و میزان دعوت شما از دکمه حساب کاربری استفاده کنید",
            ]);
        }
					elseif($textmassage=="ℹ️ اطلاعات حساب" && $tc == "private"){
$invite = $user["userjop"]["$from_id"]["invite"];
if($invite != false){
		EliyaBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖 اطلاعات حساب شما :
➖➖

📍نام : $first_name
📍یوزرنیم : $username
📍ایدی : $from_id
📍تعداد زیر مجموعه : $invite",
            ]);
        }
else
{
EliyaBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖 اطلاعات حساب شما :
➖➖

📍نام : $first_name
📍یوزرنیم : $username
📍ایدی : $from_id
📍تعداد زیر مجموعه : 0",
            ]);
}
}
elseif($textmassage=="دریافت ربات [365 روز]" && $tc == "private"){
$invite = $user["userjop"]["$from_id"]["invite"];
if($invite > 10){
		EliyaBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 تبریک شما میتوانید رباترا برای 265 روز دریافت کنید
➖➖
ℹ️ لینک گروه خود را ارسال کنید",
            ]);
				EliyaBot('sendmessage',[
				'chat_id'=>$Dev[0],
	'text'=>"📍 یک کاربر توانست ربات رایگان دریافت کند به پشتیبانی متصل شد
➖➖	
🔖 اطلاعات وی :

📍نام : $first_name
📍یوزرنیم : $username
📍ایدی : $from_id
📍تعداد زیر مجموعه : $invite
$text
365",
            ]);
$plusinvite = $invite - 10;
$user["userjop"]["$from_id"]["invite"]=$plusinvite;
$user["userjop"]["$from_id"]["file"]="sup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
        }
else
{
EliyaBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 شما هنوز زیر مجموعه کافی برای دریافت ربات ندارید
➖➖
ℹ️ باید 10 نفر را به ربات دعوت کنید",
            ]);
}
}
elseif($textmassage=="دریافت ربات [730 روز]" && $tc == "private"){
$invite = $user["userjop"]["$from_id"]["invite"];
if($invite > 20){
		EliyaBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 تبریک شما میتوانید رباترا برای 730 روز دریافت کنید
➖➖
ℹ️ لینک گروه خود را ارسال کنید",
            ]);
				EliyaBot('sendmessage',[
				'chat_id'=>$Dev[0],
	'text'=>"📍 یک کاربر توانست ربات رایگان دریافت کند به پشتیبانی متصل شد
➖➖	
🔖 اطلاعات وی :

📍نام : $first_name
📍یوزرنیم : $username
📍ایدی : $from_id
📍تعداد زیر مجموعه : $invite
730
$text",
            ]);
$plusinvite = $invite - 20;
$user["userjop"]["$from_id"]["invite"]=$plusinvite;
$user["userjop"]["$from_id"]["file"]="sup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
        }
else
{
EliyaBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 شما هنوز زیر مجموعه کافی برای دریافت ربات ندارید
➖➖
ℹ️ باید 20 نفر را به ربات دعوت کنید",
            ]);
}
}
elseif($textmassage=="دریافت ربات [1095 روز]" && $tc == "private"){
$invite = $user["userjop"]["$from_id"]["invite"];
if($invite > 40){
		EliyaBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 تبریک شما میتوانید رباترا برای 1095 روز دریافت کنید
➖➖
ℹ️ لینک گروه خود را ارسال کنید",
            ]);
				EliyaBot('sendmessage',[
				'chat_id'=>$Dev[0],
	'text'=>"📍 یک کاربر توانست ربات رایگان دریافت کند به پشتیبانی متصل شد
➖➖	
🔖 اطلاعات وی :

📍نام : $first_name
📍یوزرنیم : $username
📍ایدی : $from_id
📍تعداد زیر مجموعه : $invite
$text
1095",
            ]);
$plusinvite = $invite - 40;
$user["userjop"]["$from_id"]["invite"]=$plusinvite;
$user["userjop"]["$from_id"]["file"]="sup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
        }
else
{
EliyaBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 شما هنوز زیر مجموعه کافی برای دریافت ربات ندارید
➖➖
ℹ️ باید 40 نفر را به ربات دعوت کنید",
            ]);
}
}*/
elseif(strpos($textmassage , '/start ') !== false && $tc == "private") {
$from = str_replace("/start ","",$textmassage);
@$user = json_decode(file_get_contents("data/user.json"),true);
if(in_array($from_id, $user["userlist"])) {
EliyaBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 شما قبلا عضو ربات شده اید
	
از دکمه های زیر استفاده کن 🔻",
     'reply_markup'=>json_encode([
    'keyboard'=>[
				[
				['text'=>"💭اموزش نصب ربات"],['text'=>"🔖 راهنما"]
				],
                 [
                   ['text'=>"🗄 دستورات و امکانات"],['text'=>"🚦 پشتیبانی | ارسال نظر"]
                ],
 	],
            	'resize_keyboard'=>true
       		])
    		]);
}
else 
{
$invite = $user["userjop"]["$from"]["invite"];
$plusinvite = $invite + 1;	
	EliyaBot('sendmessage',[
	'chat_id'=>$from,
	'text'=>"📍 یک کابر با لینک دعوت شما وارد ربات شد
➖➖
ℹ️ تعداد افرادی که دعوت کرده اید	: $plusinvite",
    		]);
EliyaBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"سلام😉

به ربات مدیریت گروه خوش امدید🌹

از طریق این ربات راحت میتونی گروه خودت رو به صورت خودکار و بیست چهارساعته مدیریت کنی😍

✨این ربات دارای قابلیت حذف پیام بدون اخراج کاربره
➖➖➖➖➖
کانال ما : 
🆔 : @$channel
➖➖➖

از دکمه های زیر استفاده کن🔻",
     'reply_markup'=>json_encode([
    'keyboard'=>[
				[
				['text'=>"💭اموزش نصب ربات"],['text'=>"🔖 راهنما"]
				],
                 [
                   ['text'=>"🗄 دستورات و امکانات"],['text'=>"🚦 پشتیبانی | ارسال نظر"]
                ],
 	],
            	'resize_keyboard'=>true
       		])
    		]);
$user["userjop"]["$from"]["invite"]=$plusinvite;
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
/*elseif($textmassage=="📅 365 روز رایگان" && $tc == "private"){
		EliyaBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🏅شما با استفاده از این بخش میتوانید برای گروه خودت ربات مدیریت گروه با تمام امکانات دریافت کنید

🏵قبل از دریافت ربات به نکات زیر توجه داشته باشید
➖➖➖

1⃣دریافت ربات با تمام امکانات به صورت رایگان  برای 365 روز است

2⃣ربات باید حتما در گروه ادمین باشد تا بتواند به صورت کامل عمل کند

3⃣درصورتی که نیاز به اموزش تصویری دارید از بخش راهنما اقدام کنید

4⃣ تعداد اعضا باید بیش تر از 15 نفر باشد

⚠️ تمام دسترسی ها یک ادمین را به ربات بدهید
➖➖➖➖
🔶اموزش افزودن ربات به گروه به صورت متنی :

1️⃣ابتدا با استفاده از دکمه زیر ربات را به گروه خود اضافه کنید

2️⃣سپس ربات را ادمین کنید
[اموزش ادمین کردن ربات در پیام بالا ارسال شد]

3️⃣با ارسال دستور
/addfree
یا

نصب رایگان

ربات برای شما برای 365 روز فعال میشود

4️⃣سپس با ارسال دستور
/panel
یا
/help

اقدام به انجام تنظیمات ربات کنید😄
برای افزودن ربات به گروه خود:
https://telegram.me/$GpPaybot?startgroup=addfree
را بزنید و گروهتان را انتحاب کنید
➖➖",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	[
	['text'=>"📍 اضافه کردن ربات به گروه",'url'=>"https://telegram.me/$usernamebot?startgroup=addfree"],['text'=>"توسعه دهنده",'url'=>"@JimzZz"]
	],
              ]
        ])
            ]);
        }*/
	elseif($textmassage=="🚦 پشتیبانی | ارسال نظر" && $tc == "private"){
				EliyaBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"نظرات شما باعث دلگرمی ماست❤️
➖➖➖➖➖
انتفادات پیشنهادات و نظرات خود را برای ما ارسال کنید✔️
➖➖➖
پیام خود را وارد کنید",
                 'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"🔙 برگشت"]
	],
	]
	])
	]);
$user["userjop"]["{$from_id}"]["file"]="sup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
	}
elseif($update->message && $rt && in_array($from_id,$Dev) && $tc == "private"){
	EliyaBot('sendmessage',[
        "chat_id"=>$chat_id,
        "text"=>"پیام شما برای فرد ارسال شد ✔️"
		]);
	EliyaBot('sendmessage',[
        "chat_id"=>$reply,
        "text"=>"👤پاسخ پشتیبان برای شما :

`$textmassage`",
'parse_mode'=>'MarkDown'
		]);
}
//@eliyatm
?>