<div class="bungkus_foto">
    <div class="foto"></div>
        <div class="tombol_ganti">
            <button><a href="?module=ganti#pos">Ganti foto</a></button>
        </div>
    </div>

    <div class="bungkus_profil">
    <div class="profil_1">
        <h2>Nama</h2>
        <h2>Usia</h2>
        <h2>Jenis Kelamin</h2>
        <h2>TTL</h2>
    </div>

    <?php $coba = mysqli_fetch_assoc($masuk); ?>
    <div class="profil_2">
        <h2>: <?php echo $coba["nama"]?></h2>
        <h2>: <?php echo $coba["usia"]?></h2>
        <h2>: <?php echo $coba["jk"]?></h2>
        <h2>: <?php echo $coba["ttl"]?></h2>
    </div>
</div>