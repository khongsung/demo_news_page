<?php
	function listCat ($data) {
		foreach ($data as $val) {
			echo '
				<tr>
	              <td>'.$val['id'].'</td>
	              <td>'.$val['name'].'</td>
	              <td>
	                <a href="{!! route(\'getCatEdit\', [\'id\' => '.$val['id'].']) !!}" class="btn btn-primary">Sửa</a>
	                <a onclick="return confirm(\'Bạn chắc chắn muốn xóa?\')" href="delete/'.$val['id'].'" class="btn btn-danger">Xóa</a>
	              </td>
	            </tr>
			';
		}
	}

	function listUser ($data)
	{
		foreach ($data as $val) {
			echo '
				<tr>
	              <td>'.$val['id'].'</td>
	              <td>'.$val['username'].'</td>
	              <td>'.$val['level'].'</td>
	              <td>
	                <a href="edit/'.$val['id'].'" class="btn btn-primary">Sửa</a>
	                <a onclick="return confirm(\'Bạn chắc chắn muốn xóa không?\')" href="delete/'.$val['id'].'" class="btn btn-danger">Xóa</a>
	              </td>
	            </tr>
			';
		}
	}
?>