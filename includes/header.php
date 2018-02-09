<div class="nav">
	<ul>
        <?php
        foreach($pages as $key=>$value) {
			if ($page_id == $value) {
				if ($key == "Resume.pdf") echo('<li><a href="#" class="active" target="_blank">'.$value.'</a></li>');
				else echo('<li><a href="#" class="active">'.$value.'</a></li>');
			}
			else {
				echo('<li><a href="'.$key.'">'.$value.'</a></li>');
			}
		}
        ?>
	</ul>
	<div class="nav__social">
		<a href="https://linkedin.com/in/cindywa" target="_blank"><img data-feather="linkedin" /></a>
		<a href="https://instagram.com/cindydoubleyou" target="_blank"><img data-feather="instagram" /></a>
		<a href="mailto:cw653@cornell.edu"><img data-feather="mail" /></a>
	</div>

</div>