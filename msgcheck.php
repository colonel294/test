<?php
/*
Start:) 
GpGram
No sell
عرضه رایگان سورس های دیباگ شده در 
@Source_Eliya
*/
// msg check
// lock link
if($settings["lock"]["link"] == "| فعال | ✅"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev)){
if (strstr($textmassage,"t.me") == true or strstr($textmassage,"telegram.me") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
EliyaBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
// lock photo
if($settings["lock"]["photo"] == "| فعال | ✅"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev)){
if ($update->message->photo){  
EliyaBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
// gif
if($settings["lock"]["gif"] == "| فعال | ✅"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev)){
if ($update->message->document){  
EliyaBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
// document
if($settings["lock"]["document"] == "| فعال | ✅"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev)){
if ($update->message->document){  
EliyaBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
// video
if($settings["lock"]["video"] == "| فعال | ✅"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev)){
if ($update->message->video){  
EliyaBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
// edit 
if($editgetsettings["lock"]["edit"] == "| فعال | ✅"){
if ( $you != 'creator' && $you != 'administrator' && $edit_for_id != $Dev){
if ($update->edited_message->text){  
EliyaBot('deletemessage',[
    'chat_id'=>$chat_edit_id,
    'message_id'=>$message_edit_id
    ]);
  }
}
}
// contact
if ($settings["lock"]["contact"] == "| فعال | ✅"){
if($update->message->contact){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
	EliyaBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// tag
if ($settings["lock"]["tag"] == "| فعال | ✅"){
if (strstr($textmassage,"#") == true or strstr($caption,"#") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
	EliyaBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}// username 
if ($settings["lock"]["username"] == "| فعال | ✅"){
if (strstr($textmassage,"@") == true or strstr($caption,"@") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
	EliyaBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// audio
if ($settings["lock"]["audio"] == "| فعال | ✅"){
if($update->message->audio){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
	EliyaBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// voice 
if ($settings["lock"]["voice"] == "| فعال | ✅"){
if($update->message->voice){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
	EliyaBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
?>