<h1>Lớp <?php 
        if(isset($data["LOPDAY"]) && $data["LOPDAY"]["IDGV"] == $_SESSION["ttgv"]["IDGV"]){
            $ttgvlop = $data["LOPDAY"];
            echo $ttgvlop["TEN_LOP"];
        }
        else
        {
            header("location: http://localhost/quanly/Home/Login");
        }
        ?>
</h1>
<div class="container box">
    <form class="form-horizontal" action="http://localhost/quanly/UPLOAD/tailieu" id="formDemo" name="formDemo" method="post" style="height: autopx;">
        <div class="m-5">
        <input type="hidden" name="idlop" value="<?php 
        if(isset($ttgvlop)){
          echo $ttgvlop["IDLOP"];
        }
        ?>">
        <button type="submit" id="submit1" class="btn btn-lg btn-success m-3" name="save">Upload tài liệu</button>
        </div>
    </form>
    <div class="border border-success border-end-0 border-start-0 border-top-0">
        <h3>Tài liệu</h3>

    </div>
    <div class="m-5">
        <table width="500">
  			<tbody>
    			<tr>
      				<td></td>
      				<td></td>
					<td></td>			
    			</tr>
                <?php
                if(isset($data['TL']))
                {
                    while($row = mysqli_fetch_array($data['TL']))
                    {
                            $file = $row['NAME_FILE'];
                            $idgv = $row['IDGV'];
                            $idlop = $row['IDLOP'];
                            echo '<tr>
      							<td><p>'.$file.'</p></td>
      							<td><a download="'.$file.'" href='.$file.'">Tải file</a></td>
								<td><a href="http://localhost/quanly/GV/xoafile/'.$idgv.'/'.$idlop.'/'.$file.'">Xóa file</a></td>
    						</tr>';
                    }
                }
                ?>
	  	    </tbody>
		</table>
    </div>

    <div class="border border-primary border-end-0 border-start-0 border-top-0">
        <h3>Bài tập</h3>
    </div>
    <div class="m-5">
        <table width="500">
  			<tbody>
    			<tr>
      				<td></td>
      				<td></td>
					<td></td>			
    			</tr>
                <?php
                if(isset($data['BT']))
                {
                    while($row = mysqli_fetch_array($data['BT']))
                    {
                            $file = $row['NAME_FILE'];
                            $idgv = $row['IDGV'];
                            $idlop = $row['IDLOP'];
                            echo '<tr>
      							<td><p>'.$file.'</p></td>
      							<td><a download="'.$file.'" href='.$file.'">Tải file</a></td>
								<td><a href="http://localhost/quanly/GV/xoafile/'.$idgv.'/'.$idlop.'/'.$file.'">Xóa file</a></td>
    						</tr>';
                    }
                }
                ?>
	  	    </tbody>
		</table>
    </div>

<div>