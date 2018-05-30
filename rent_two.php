<?php

include_once "config1.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rent | Two-Wheelers</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  	<link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  	<link rel="icon" href="launcher.png">
  	<style type="text/css">
  		.navigation-drawer__border {
    display: none;
  }
  	</style>
</head>
<body>
	<div id="app">
		<v-app id="inspire">
			<v-toolbar app absolute dark clipped-left color="primary">
				<v-toolbar-side-icon @click.native="drawer = !drawer"></v-toolbar-side-icon>
				<v-toolbar-title>Rent | Two-Wheelers</v-toolbar-title>
				<v-spacer></v-spacer>
			</v-toolbar>
			<v-navigation-drawer fixed clipped app v-model="drawer" stateless>
				<v-list dense class="pt-0">
					
				</v-list>
			</v-navigation-drawer>
			<v-container fluid grid-list-sm>
				<v-layout row wrap align-center child-flex>
					<?php

$sql = "SELECT * FROM registertwo";

$result= mysqli_query($conn,$sql);

while ( $row =mysqli_fetch_assoc($result) )
{
		?>	
			<v-card class="ml-3 mt-5 mr-3" width="400px">
				<v-card-media :src="`uploads/image/<?php echo $row['image']; ?>`" width="250px" height="200px"><!-- Pass name here instead of 4.png and `` signs should be as it is-->
				</v-card-media>
				<v-card-title primary-title>
					<div>
						<h3 class="headline mb-0"><?php echo $row['model']; ?></h3>
						<div><?php echo $row['descr']; ?></div>
						<!-- <p class="subheading"><v-icon>call</v-icon> <?php echo $row['mobile']?></p> -->
					</div>
				</v-card-title>
				<v-card-actions>
					<v-btn flat color="primary"><v-icon>access_time</v-icon>&nbsp<?php echo $row['time1']; ?> To <?php echo $row['time2']; ?></v-btn>
					<v-btn flat color="primary"><v-icon>attach_money</v-icon>&nbsp<?php echo $row['fare']; ?></v-btn>
					<v-btn flat color="primary"><v-icon>call</v-icon>&nbsp<?php echo $row['mobile']?></v-btn>
				</v-card-actions>
			</v-card>
						<?php
		}
			?>
		</v-layout>
		</v-container>
		<v-footer height="auto" class="white">
			<v-flex xs12 py-3 text-xs-center white--text>
				<a href="signup2.html" style="text-decoration: none;"><v-btn round color="primary" text-color="white">
					<!-- <v-avatar>
						<v-icon>keyboard_arrow_left</v-icon>
					</v-avatar> -->
				Not showing your Bike?
				</v-btn></a>
			</v-flex>
		</v-footer>
		</v-app>
	</div>
	<script src="https://unpkg.com/vue/dist/vue.js"></script>
 	<script src="https://unpkg.com/vuetify/dist/vuetify.js"></script>
	<script>
	new Vue({
			  el: '#app',
			  data: () => ({
			    drawer: null
			  })
			})
	</script>
</body>
</html>