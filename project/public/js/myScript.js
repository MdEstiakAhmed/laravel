function myFunc()
{
	window.location.replace(document.getElementById('profileBtn').value);
}

function Activation(linkToGo,status)
{
	alert('Heloo');
	var linkToGo = linkToGo;
	var status = status;
	if(confirm('Sure want to '+status+' this account ?' ))
	{
		window.location.replace(linkToGo);
	}
}


function Notify(Message)
{
	alert(Message);
}

function ErrFunc()
{
	var msg = document.getElementById('errData').value;
	alert(msg);
}

$(document).ready(function(){
	
	mandatoryfields();
	loadJobList();
	loadBids($.session.get("BidJobId"));
	loadHistories();
	$("#create").click(function(){
		postData();
	});
	$("#delete").click(function(){
		deleteData();
	});
	
	$("#detailShow").click(function(){
		detailShow();
	});
	$("#insertHistory").click(function(){
		insertHistory();
	});
	$("#detailHistory").click(function(){
		detailHistory();
	});
	$("#deleteHistory").click(function(){
		deleteHistory();
	});
	$("#loadHistories").click(function(){
		loadHistories();
	});
	$("#insertBid").click(function(){
		insertBid();
	});
	$("#detailBid").click(function(){
		detailBid();
	});
	$("#deleteBid").click(function(){
		deleteBid();
	});
	$("#loadBids").click(function(){
		loadBids();
	});
	$("#del").click(function(){
		alert('deling..');
	});
		
});