<?php
//IP address
defined('IP') ? null : define('IP','http://13.58.253.198:8080/castingrole/');
//defined('IP') ? null : define('IP','http://192.168.0.22:8080/castingrole/');

//Define Constants
define ("ARTIST_TALENT", "Actor,Choreographer,Comedian,Dancer,Junior Artists,Model,Director,Musician,Production Crew,Script Writer,Singer,Stylist,Voice Over Artist");
define ("ARTIST_SUB_TALENT", "Background,Character,Lead");
define ("CHOREOGRAPHER_SUB_TALENT","Arabic,Ballet,Ballroom,Bollywood,Breakdancing,Contemporary,Cultural,Fire,Hip Hop,Jazz,Latin,LED");
define ("DANCER_SUB_TALENT", "Arabic,Ballet,Ballroom,Bollywood,Breakdancing,Contemporary,Cultural,Fire,Hip Hop,Jazz,Latin,LED");
define ("DIRECTOR_SUB_TALENT", "Action,Art,Assistant,Music,Creative,Movie,Stunt,TVCs/ADs");
define ("MODEL_SUB_TALENT", "Advertising,Casual,Fashion,Fine Art,Magazine Print,Parts Modelling,Print/Editorial,Runway,Swimwear,Tradeshow Appearances");
define ("PRODUCTIONCREW_SUB_TALENT", "Cameraman,Editor,Executive Producer,Floor Manager,Gaffer,Lighting Specialist,Line Producer,Photographer,Producer,Production Designer,Sound Engineer,Spot Boy");
define ("SINGER_SUB_TALENT", "Bhajan,Bollywood,Classical,English,Fusion,Ghazal,Pop,Punjabi,Rap,Regional,Rock,Semi Classical,Sufi,Vocal Group");
define ("STYLIST_SUB_TALENT", "Fashion,Hair,Makeup,Others");
define ("VOA_SUB_TALENT", "Announcement,Biography,Character/Animation,Commercial,Corporate,Education, Inspiration,Internet,Narration. ");
define ("ARTIST_INTERESTS", "Competetions/pageants, Digital, Events, Movies, Music Videos, Print Media, Radio, Reality Shows, Short Films, Stage/ Live Performances, Theatre, TV, TVCs/ADs , Web Series, Workshop");
define("ARTIST_SKILL","Skill 1,Skill 2");
define("ARTIST_SUB_SKILL","Sub Skill 1,Sub Skill 2");


//API's
define('API_ARTIST_LOGIN', IP.'loginArtist');
define('ARTIST_VERIFY_EMAIL', IP.'verifyArtistEmail');
define('REGISTER_ARTIST', IP.'artistSignup');
define('REGISTER_ARTIST_DETAILS', IP.'add/update/generalDetails');
define('REGISTER_ARTIST_TALENT', IP.'registerTalent');
define('REGISTER_ARTIST_INTEREST', IP.'registerInterest');
// Director APIs
define('DIRECTOR_REGISTER', IP.'signupDirector');
define('DIRECTOR_LOGIN', IP.'loginDirector');
define('DIRECTOR_OTP_RESEND', IP.'resendOtp');
define('DIRECTOR_JOB_POST', IP.'jobPostingByDirector');
define('DIRECTOR_VERIFY_EMAIL', IP.'verifyDirectorEmail');
define('DIRECTOR_GET_JOB_BY_ID', IP.'getJobBy/id/all');
?>