$(document).ready(function(){

	function Cart_update(rowId,qty)
	{
       $.get("/cart/update/"+rowId+""+qty,
       	function(data)
       	{
           if(data == "success")
           {
           	location.reload();
           }
           else
           {
           	alert("cập nhật thất bại");
           }
       	}
  	}
});