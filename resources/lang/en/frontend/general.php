<?php
/**
* Language file for general strings
*
*/
use App\Translation;
$translates = Translation::lists('lang_en', 'slug')->toArray();
return $translates;

/*
return array(

    'no'  			=> 'No',
    'noresults'  	=> 'No Results.',
    'yes' 			=> 'Yes',
	'discount'		=> 'Discount',
	'new'			=> 'New',
	'encoksatan'	=> 'Trending Products',
	'indirimurunler'=> 'Discounts',
	'vitrinurunler'	=> 'Showcase',
	'sponsor'		=> 'Sponsor',
	'home'			=> 'Home',
	'hakkimizda'	=> 'About Us',
	'iletisim'		=> 'Contact',
	'yardim'		=> 'Help',
	'kategorisec'	=> 'Select Category',
	'searchingProduct'	=> 'Enter Product Name',
	'ara'			=> 'Search',
	'uyebilgilerim'	=> 'Member Info',
	'alisverissepetim'=>'My Cart',
	'siparislerim'	=> 'My Orders',
	'favoriurunlerim'=>'My Favourite Products',
	'adresdefteri'	=> 'Adress Book',
	'cikis'			=> 'Exit',
	'uyegirisi'		=> 'Sign In',
	'yeniuye'		=> 'Sign Up',
	'sepetim'		=> 'My Cart',
	'tumkategoriler'=> 'All Categories',
	'SAYFALAR'		=> 'PAGES',
	'KATEGORILER'	=> 'CATEGORIES',
	'ILETISIM'		=> 'CONTACT',
	'SOSYALMEDYA'	=> 'SOCIAL MEDIA',
	'SPONSOR'		=> 'SPONSOR',
	'tel'			=> 'Tel',
	'fax'			=> 'Fax&nbsp;',
	'email'			=> 'E-Mail',
	'copyright'		=> 'All rights reserved. Images and content published on this site cannot be used without permission. <br/>This site is a service of :host',
	'cancel'		=> 'Cancel',
	'ok'			=> 'Ok',
	'notamemberyet'	=> 'Not a member yet? <b>Signup now.</b>',
	'existmember'	=> 'Are you already member? <b>Login now.</b>',
	'cart'			=> 'Cart',
	'order'			=> 'Order',
	'error'			=> 'Error',
	'pleasecheckerror'=> 'Please Check the Following Errors;',
	'select'		=> 'Select',
	'goback'		=> 'Go Back',
	'iaccept'		=> 'I Accept',
	'anerroroccurred'=> 'An error occured!',
	'namesurname'	=> 'Name Surname',
	'country'		=> 'Country',
	'nextstep'		=> 'Next Step',
	'addnew'		=> 'Add New',
	'aboutthispage'	=> 'About This Page',
	'cancellong'	=> 'Cancel',
	'safelogout'	=> 'Logout',
	'notfoundtitle'	=> '404 Not Found - La Tienda Turca',
	'pagenotfound'	=> 'Page Not Found.',
	'loginfb'		=> 'Connect with Facebook',
	'logintwitter'	=> 'Connect with Twitter',
	'success'		=> 'Success',
	'warning'		=> 'Warning',
	'info'			=> 'Info',
	'searchresults'	=> 'Search Results',
	'word'			=> 'Word',
	'sort'			=> 'Sort',
	'newest'		=> 'Newest',
	'lowestprice'	=> 'Lowest Price',
	'highestprice'	=> 'Highest Price',
	'appearance'	=> 'Appearance',
	'noresultfound'	=> 'No result found.',
	'guest'			=> 'Guest',
	'applyfilter'	=> 'Apply Filter',
	'filteroptions'	=> 'Filter Options',
	'errorandtry'	=> 'An error occured! Please try again.',
	'errortrylater'	=> 'An error occured! Please try again later.',
	'congrats'		=> 'Congrats'
);
*/

