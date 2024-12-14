<?php
//Buatkan dua input area yang dapat diisi
//input pertama berupa angka
//input kedua berupa dropdown
//buatkan 1 button yang bernama hitung
//nilai plus jika pake bootstrap

//waktunya 10 menit

// if (empty($_GET['inputAngka'])) {
// 	echo "Tidak boleh kosong";
// }
if (($_GET)) {
	echo "muncul";
}
// echo $_GET['inputAngka'];
?>
<!DOCTYPE html>
<html>

<body>
	<div class="card">
		<div class="card-body">
			<form action="" method="get">
				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Input Suhu Celcius</label>
					<input type="number" name="inputNomor" class="form-control">
				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Pilihan Konversi</label>
					<select class="form-select" aria-label="Default select example" name="pilihan">
						<option selected>Open this select menu</option>
						<option value="F">F</option>
						<option value="K">K</option>
						<option value="T">T</option>
					</select>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			<?php
			if (isset($_POST['inputNomor'])) {
				echo $_POST['inputNomor'];
			}
			?>
		</div>
	</div>
</body>

</html>