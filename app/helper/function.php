<?php 
function ShowError($errors,$name)
{
if($errors->has($name))
	return
   '
   <div class="alert alert-danger">
			<strong>'.$errors->first($name).'</strong>			
			
  </div>
  ';
 }


 function getCategory($mang,$parent,$shift,$id_select)
 {
   foreach ($mang as $value) 
   {
   	if ($value['parent'] == $parent)
   	{
   		if($value['id'] == $id_select)
   		{
   			echo "<option value=".$value['id']." selected >".$shift.$value['category_name']."</option>";
   		}
   		else
   		{
            echo "<option value=".$value['id'].">".$shift.$value['category_name']."</option>";
   		}
   		
   		getCategory($mang,$value['id'],$shift."---|",$id_select);
   	}  	
   }
 }


 function ShowCategory($mang,$parent,$shift)
 {
   foreach ($mang as $value) 
   {
   	if ($value['parent'] == $parent) 
   	{
        echo '<div class="item-menu"><span>'.$shift.$value['category_name'].'</span>
					<div class="category-fix">
						<a onclick="return edit_cate()" class="btn-category btn-primary" href="/admin/category/edit/'.$value['id'].'"><i class="fa fa-edit"></i></a>
						<a onclick="return delete_cate()" class="btn-category btn-danger" href="/admin/category/delete/'.$value['id'].'"><i class="fas fa-times"></i></i></a>

					</div>
			  </div>';
   		
   		ShowCategory($mang,$value['id'],$shift."---|");
   	}  	
   }
 }



 
 function GetLevel($mang,$parent,$count)
 {
 	foreach ($mang as $value)
 	{
 		if($value['id'] == $parent)
 		{
 			$count++;
 			if($value['parent'] == 0)
 			{
 				return $count;
 			}
 			return GetLevel($mang,$value['parent'],$count);
 		}
 	}
 }
 