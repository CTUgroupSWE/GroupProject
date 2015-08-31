function custLogin()  
  {
    var done=0;
      if (document.login.userName.value=="member1" && document.login.passWord.value=="password1") 
        { 
			window.location.href="mainmenu.html"; done=1; 
		}
      if (done==0)
        { 
			alert("Invalid login!"); clearHist();
		}
  }

function clearHist()
  {
    document.login.userName.value="";
    document.login.passWord.value=null;
  }  

function viewAccountBalances()  
  {
    window.location.href="viewAccountBalances.html";
  }

function viewAccountHistory()  
  {
    window.location.href="viewAccountHistory.html";
  }

function transferFunds()  
  {
    window.location.href="transferFunds.html";
  }

function depositCheck()  
  {
    window.location.href="depositCheck.html";
  }

function payBills()  
  {
    window.location.href="payBills.html";
  }

function logOut()  
  {
    alert("Thank you for using Group Bank Mobile Apps - Logging Out!");
    window.location.href="login.php";
  }

function returnToMainMenu()  
  {
    window.location.href="mainmenu.html";
  }

function createBillPay()  
  {
     alert("Create Bill feature is currently under construction");
  }

function editBillPay()  
  {
     alert("Edit Bill feature is currently under construction");
  }
