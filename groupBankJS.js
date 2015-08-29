function custLogin()  
  {
    var done=0;
      if (document.login.userName.value=="member1" && document.login.passWord.value=="password1") 
        { window.location="mainmenu.html"; done=1; }
      if (done==0)
        { alert("Invalid login!"); clearHist();}
  }

function clearHist()
  {
    document.login.userName.value="";
    document.login.passWord.value=null;
  }  

function viewAccountBalances()  
  {
    var done=0;
    var viewAccountBalancesUrl = "viewAccountBalances.html";
    if (done==0)  { window.location.href = viewAccountBalancesUrl; }
  }

function viewAccountHistory()  
  {
    var done=0;
    if (done==0) { alert("View Account History function not available yet!"); }
  }

function transferFunds()  
  {
    var done=0;
    if (done==0) { alert("Transfer Funds function not available yet!"); }
  }

function depositCheck()  
  {
    var done=0;
    if (done==0) { alert("Deposit Check function not available yet!"); }
  }

function payBills()  
  {
    var done=0;
    if (done==0) { alert("Pay Bills function not available yet!"); }
  }

function logOut()  
  {
    alert("Thank you for using Group Bank Mobile Apps - Logging Out!");
    window.location.href="login.html";
  }

function returnToMainMenu()  
  {
    window.location.href="mainmenu.html";
  }
  
  function createBillPay()
{
	var done=0;
	if (done==0)
	{
		alert("Create Bill feature is currently under construction");
	}
}

function editBillPay()
{
	var done=0;
	if (done==0)
	{
		alert("Edit Bill feature is currently under construction");
	}
}

