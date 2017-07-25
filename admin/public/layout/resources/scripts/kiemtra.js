// JavaScript Document
// Các hàm kiểm tra và hỏi xóa
function Kiemtradulieu()
{
	var kt=document.getElementsByClassName("kiemtra");
	for(i=0;i<kt.length;i++)
	{
		if(kt.item(i).value=="")
		{
			alert(kt.item(i).getAttribute("data_error"));
			kt.item(i).focus();
			return false; 	
		}	
	}
	return true;
}


function Xoadulieu(id_xoa,tbl_xoa,field_xoa)
{
	if(confirm("Dữ liệu sẽ bị xóa, Không thể phục hồi lại\nBạn có chắc không?"))
	{
		// Xóa ajax
		// url
		var url="xoadulieu.php";
		// data {key:value,key:value}
		var data={"id_xoa":id_xoa,"tbl_xoa":tbl_xoa,"field_xoa":field_xoa};
		
		$.post(url,data,function(data){
				// Hiển thị kết quả trả về 
				$("#kqXoa").text(data);
				$("#kqXoa").css({"color":"#F00","font-weight":"bold"});
			})
		.done(function () { // Thành công
			window.setTimeout('location.reload()', 2000)
		})
			
	}
	
}
 