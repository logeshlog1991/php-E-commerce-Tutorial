<div id="cart_content">
	<div id="cart_inside">
		<h3>View All Brands</h3>
		<hr/>
		<?php 
		$select = $conn->query("select * from brands");
		if($select->num_rows>0){
			$pro_array = array();
			while($rows = $select->fetch_assoc()){
				$pro_array[] = $rows;
			}
		}
		?>
		<table align="center" style="margin-top:20px;" width="500px">		
				<thead style="font-style:bold">
					<th>Sl:no</th>
					<th>Title</th>
					<th>Delete</th>
					<th>Edit</th>	
				</thead>
				<tbody>
				<?php if(count($pro_array)){
					foreach ($pro_array as $product){
						
				?>
					<tr style="height:50px;">
						<td align="center" valign="middle">
							<?php echo $product['brand_id'];?>
						</td>
						<td align="center">
							<?php echo $product['brand_title'];?>
						</td>
						<td align="center" valign="middle">
							<a href="index.php?brand_delete_id=<?php echo $product['brand_id'];?>" style="text-decoration:none;color:#FA5858">Delete</a>
						</td>
						<td align="center" valign="middle">
							<a href="index.php?brand_update_id=<?php echo $product['brand_id'];?>" style="text-decoration:none;">Edit</a>
						</td>
					</tr>
					<?php 
					}
				}
				?>
			</tbody>
		</table>
	</div>
</div>
