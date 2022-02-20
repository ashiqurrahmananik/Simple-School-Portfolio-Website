function openside()
{

	if(document.getElementById('sidenav').style.width =='0px')
	{
		document.getElementById('sidenav').style.width='250px';
		document.getElementById('p').style.marginLeft='250px';
	}
	else
	{
		document.getElementById('sidenav').style.width='0px';
		document.getElementById('p').style.marginLeft='0px';
	}
}
function bangla()
{
	document.getElementById('p').innerHTML = "বঙ্গোপসাগরে ভারতের পূর্বে বাংলাদেশ একটি দক্ষিণ এশিয়ার দেশ, যে সবুজ রঙের সবুজ এবং অনেক জলপথ চিহ্নিত। এর পদ্মা (গঙ্গা), মেঘনা এবং যমুনা নদী উর্বর সমভূমি তৈরি করে এবং নৌকায় করে ভ্রমণ সাধারণ is দক্ষিণ উপকূলে, সুন্দরবন, পূর্ব ভারতের সাথে ভাগ করা একটি বিশাল ম্যানগ্রোভ বন, রয়েল বেঙ্গল বাঘের বাড়ি।";
}
function english()
{
	document.getElementById('p').innerHTML = "Bangladesh, to the east of India on the Bay of Bengal, is a South Asian country marked by lush greenery and many waterways. Its Padma (Ganges), Meghna and Jamuna rivers create fertile plains, and travel by boat is common. On the southern coast, the Sundarbans, an enormous mangrove forest shared with Eastern India, is home to the royal Bengal tiger.";
}

