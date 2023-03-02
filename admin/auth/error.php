<?php if (count($errors) > 0) :  ?>
	<div class="error">
		<?php foreach ($errors as $error) : ?>
			<p><?php echo $error ?> </p>
		<?php endforeach ?>
	</div>
<?php endif;

/* ? Kode ini memeriksa apakah array '$errors' berisi elemen apa pun.
Jika ya, itu akan mengulang setiap elemen
dalam array dan menampilkannya sebagai paragraf.
Kode dibungkus div dengan kelas "kesalahan".
*/
?>