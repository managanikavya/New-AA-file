$( document ).ready(function()
{
	// +This is required to fetch the list of projects for admin login
	$.ajax(
	{
		url: urlConstant + "Admin/FetchAllProjects",
		type: "Post",
		data:
		{
			FilteringValue: 0
		},
		success: function(data)
		{
			// console.log(data);
			var AdminProjectTable = "";
			for(var ProjectCount = 0; ProjectCount < data.length; ProjectCount++)
			{
				AdminProjectTable += "<tr>";
				AdminProjectTable += "<td>" + data[ProjectCount].ProjectCode + "</td>";
				AdminProjectTable += "<td>" + data[ProjectCount].ProjectName + "</td>";
				AdminProjectTable += "<td>" + data[ProjectCount].Email + "</td>";
				AdminProjectTable += "<td>" + data[ProjectCount].SubmissionDate + "</td>";
				AdminProjectTable += "<td>" + data[ProjectCount].TurnAoundTime + "</td>";
				AdminProjectTable += "<td>" + data[ProjectCount].DeliveryDate + "</td>";
				AdminProjectTable += "<td>" + data[ProjectCount].PaymentStatus + "</td>";
				AdminProjectTable += "<td>"+ 
										"<a class='btn btn-primary' onClick='SetProjectDetailsCookies(" + data[ProjectCount].ProjectCode + ")'>Edit</a>"+
										"<a class='btn btn-primary' href='generate-invoice/?ProjectID="+data[ProjectCount].ProjectCode+"' target='_BLANK'>Generate Invoice</a>"+
										"<a class='btn btn-primary' onClick=sendInvoiceMail('"+data[ProjectCount].ProjectCode+"','"+ data[ProjectCount].FirstName +"','"+data[ProjectCount].Email+"')>Send Mail</a>"+
									"</td>";
				AdminProjectTable += ""+ "</td>";
				AdminProjectTable += "</tr>";
			}
			$("#tblBodyProjectDetails").html(AdminProjectTable);
		}
	});
	// -This is required to fetch the list of projects for admin login
});


// +For now we are storing the ProjectCode in localstorage but todo - Cookies
function SetProjectDetailsCookies(ProjectCode)
{
	//alert(ProjectCode);
	document.cookie = "projectCode=" + ProjectCode;
	window.location.href = "ProjectDetails.php?ProjectCode="+ProjectCode;
	localStorage.setItem("ProjectCode", ProjectCode); 
}
// -For now we are storing the ProjectCode in localstorage but todo - Cookies

function btnLogoutClick()
{
	window.localStorage.clear();
}

function ProjectsFiltering(filteringValue)
{
	$.ajax(
	{
		url: urlConstant + "Admin/FetchAllProjects",
		type: "Post",
		data:
		{
			FilteringValue: filteringValue
		},
		success: function(data)
		{
			var AdminProjectTable = "";
			for(var ProjectCount = 0; ProjectCount < data.length; ProjectCount++)
			{
				AdminProjectTable += "<tr>";
				AdminProjectTable += "<td>" + data[ProjectCount].ProjectCode + "</td>";
				AdminProjectTable += "<td>" + data[ProjectCount].ProjectName + "</td>";
				AdminProjectTable += "<td>" + data[ProjectCount].Email + "</td>";
				AdminProjectTable += "<td>" + data[ProjectCount].SubmissionDate + "</td>";
				AdminProjectTable += "<td>" + data[ProjectCount].TurnAoundTime + "</td>";
				AdminProjectTable += "<td>" + data[ProjectCount].DeliveryDate + "</td>";
				AdminProjectTable += "<td>" + data[ProjectCount].PaymentStatus + "</td>";
				AdminProjectTable += "<td>" + "<a class='btn btn-primary' onClick='SetProjectDetailsCookies(" + data[ProjectCount].ProjectCode + ")'>Edit</a>"+ "</td>";
				AdminProjectTable += "</tr>";
			}
			$("#tblBodyProjectDetails").html(AdminProjectTable);
		}
	});
}

function sendInvoiceMail(projectCode, FirstName, Email)
{
	$.ajax(
	{
		url: urlConstant + "Admin/FetchLinkParameters",
		type: "Post",
		data:
		{
			ProjectCode: projectCode
		},
		success: function(data)
		{
			if(data.IsOk == true)
			{
				var paymentLink = data.Message;
				_mail(projectCode,FirstName,Email,paymentLink);
			}
			else
			{
				alert("Unable to generate the invoice link. Please contact the software developer.")
			}
		}
	});
}
function _mail(projectCode,FirstName,Email,paymentLink)
{
	// console.log(projectCode+"--"+FirstName+"--"+Email+"--"+paymentLink);
	var projectCode = "ProjectCode="+projectCode;
	var FirstName = "Name="+FirstName;
	var Email = "MailId="+Email;
	var paymentLink = "PaymentLink="+encodeURIComponent(paymentLink);
	var UserId = "UserId=cs296";
	var data_all = projectCode + "&" + FirstName + "&" + Email + "&" + paymentLink + "&" + UserId;
	// alert(data_all);
	$.ajax({
		type: "POST",
		url: "http://aaweb.authorassists.com/api/Admin/SendInvoiceMail/",
		dataType: "json",
		data: data_all,
		success: function (response) {
			console.log(response);
			if(response.IsOk == true)
			{
				swal("Done!!","Mail has been sent successfully!","success");
			}
			else
			{
				swal("Oppss...","Unable to send mail!","error");
			}
		},
		error: function (xhr, ajaxOptions, thrownError) {
			console.log(ajaxOptions);
		}
	});
}


// function _mail(projectCode,FirstName,Email,paymentLink)
// {
// 	// console.log(projectCode+"--"+FirstName+"--"+Email+"--"+paymentLink);
// 	var projectCode = "ProjectCode="+projectCode;
// 	var FirstName = "Name="+FirstName;
// 	var Email = "MailId="+Email;
// 	var paymentLink = "PaymentLink="+encodeURIComponent(paymentLink);
// 	var UserId = "UserId=cs296";
// 	var data_all = projectCode + "&" + FirstName + "&" + Email + "&" + paymentLink + "&" + UserId;
// 	// alert(data_all);
// 	$.ajax({
// 		type: "POST",
// 		url: "http://aaweb.authorassists.com/api/Admin/SendInvoiceMail/",
// 		dataType: "json",
// 		data: data_all,
// 		success: function (response) {
// 			console.log(response);
// 			if(response.IsOk == true)
// 			{
// 				swal("Done!!","Mail has been sent successfully!","success");
// 			}
// 			else
// 			{
// 				swal("Oppss...","Unable to send mail!","error");
// 			}
// 		},
// 		error: function (xhr, ajaxOptions, thrownError) {
// 			console.log(ajaxOptions);
// 		}
// 	});
// }









	//Write the mail function here

	// $.ajax(
	// {
	// 	url: urlConstant + "Admin/SendInvoiceMail",
	// 	type: "Post",
	// 	data:
	// 	{
	// 		ProjectCode: projectCode,
	// 		Name: FirstName,
	// 		PaymentLink: paymentLink,
	// 		MailId: Email,
	// 		UserId: //login UserId
	// 	},
	// 	success: function(data)
	// 	{
	// 		console.log(data);
	// 		if(data.IsOk == true)
	// 		{
	// 			swal
	// 			({
	// 				title: "Mail Sent",
	// 				text:data.Message,
	// 				type: "success",
	// 				showCancelButton: true,
	// 				confirmButtonClass: "btn-danger",
	// 				confirmButtonText: "OK",
	// 				cancelButtonText: "Cancel",
	// 			});
	// 		}
	// 		else
	// 		{
	// 			swal
	// 			({
	// 				title: "Oops!! Unable to send mail",
	// 				text:data.Message,
	// 				type: "error",
	// 				showCancelButton: true,
	// 				confirmButtonClass: "btn-danger",
	// 				confirmButtonText: "OK",
	// 				cancelButtonText: "Cancel",
	// 			});
	// 		}
	// 	}
	// });
// }