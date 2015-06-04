<div class="konten">
	<div class="slider"><img src="<?php echo base_url();?>asset/images/web-development.png" width="624" height="326"></div>
	<div class="anggota">
	  <h3>Login Administrator</h3>
	  <form name="form2" method="POST" action="/dyah/index.php">
		<p>
		  <label for="email">Username (email)</label>
		  <input type="text" name="email" id="email">
		</p>
		<p>
		  <label for="password">Password</label>
		  <input type="password" name="password" id="password">
		</p>
		<p>
		  <input type="submit" name="submit2" id="submit2" value="Masuk">
		  <input type="reset" name="submit3" id="submit3" value="Reset">
		</p>
		<!--<p><a href="lohin.php?ref=lupa">Lupa password?</a> | <a href="daftar.php">Daftar jadi anggota</a></p>-->
	  </form>
  </div>    
</div>

<!-- konten bawah -->
<div class="clearfix"></div>

<div class="konten">
	<div class="posting">
		<h3>Berita terbaru</h3>
		
		<!--<div class="ringkasan">
		  <p>Layanan Kursus</p>
		  <p>Saat ini Java Web Media juga memiliki layanan kursus desain web (web design) dan desain grafis (graphic design), antara lain:</p>
		  <ul>
			<li><a title="Web Design Course" href="http://javawebmedia.com/course/web-design-course/">Kursus Web Design (10 -12 sesi @ 2 jam/sesi)</a></li>
			<li><a title="Web Programming Course" href="http://javawebmedia.com/course/web-programming-course/">Kursus Web Programming (10 – 12 sesi @ 2 jam/sesi)</a></li>
			<li><a title="Web Development Course" href="http://javawebmedia.com/course/web-development-course/">Kursus Web Development (15 sesi @ 2 jam/sesi)</a></li>
			<li><a title="Graphic Design Course" href="http://javawebmedia.com/course/graphic-design-course/">Kursus Graphic Design (10 – 12 sesi @ 2 jam/sesi)</a></li>
		  </ul>
		  <p>Layanan Inhouse Training</p>
		  <p>Java Web Media juga melayani pelatihan di tempat Anda (inhouse training), dimana kami akan hadir ke tempat Anda untuk memberikan training dan pelatihan.</p>
		</div>-->
		
		<?php
			foreach($berita as $list){
				echo "<div class='ringkasan'>";
				echo "<h3>
					<a href='".base_url()."home/read/$list[slug]'>$list[judul]</a>
				</h3>";
				echo "$list[ringkasan]";
				echo "</div>";
			}
		?>
	</div>
	
	<div class="anggota">
	   <h3>Berita terbaru</h3>
	   <ul>
	   <?php
		foreach($berita as $list){
			echo "<li>
				<a href='".base_url()."home/read/$list[slug]'>$list[judul]</a>
			</li>";
		}
	   ?>
	   </ul>
	<p>&nbsp;</p>
	<p></p>
	</div>
</div>