
<!DOCTYPE html>
<html>
<head>
	<title>Register | Four-Wheelers</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  	<link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
</head>
<body>
	<div id="app">
		<template>
		<v-app id="inspire">
			<v-content>
			<v-container fluid fill-height>
				<v-layout align-center justify-center>
					<v-flex xs12 sm8 md4>
						<v-card class="elevation-12">
							<v-toolbar color="green">
								<v-toolbar-title class="white--text">Register for 4 Wheelers</v-toolbar-title>
								<v-spacer></v-spacer>
								<v-btn icon large><v-icon large color="white">directions_car</v-icon></v-btn>
								</v-toolbar>
								<v-card-text>
									
			<v-form method="post" v-model="valid" id="form" @submit="submit" action="signup.php" lazy-validation>
				<v-text-field name="model" label="Model Name" type="text" v-model="model" required></v-text-field>
                  <v-text-field name="no" label="Vehicle Number" type="text" v-model="no" required></v-text-field>
                  <!-- <span class="subheading">Select time:</span><br><br>
                  <center><v-time-picker v-model="picker" :landscape="landscape" color="green" required></v-time-picker></center><br> -->
                  <v-flex>
                  <v-dialog ref="dialog1" persistent lazy full-width width="290px" v-model="model1" :return-value.sync="time">
                  	<v-text-field slot="activator" label="Pickup Time" name="time1" v-model="time1" readonly required></v-text-field>
                  	<v-time-picker v-model="time1" color="green" actions>
                   		<v-spacer></v-spacer>
                  		<v-btn flat color="green" @click="model1 = false">Cancel</v-btn>
                  		<v-btn flat color="green" @click="$refs.dialog1.save(time1)">Ok</v-btn>
                  	</v-time-picker>
                  </v-dialog>
              </v-flex>
               <v-flex>
                  <v-dialog ref="dialog2" persistent lazy full-width width="290px" v-model="model2" :return-value.sync="time">
                  	<v-text-field slot="activator" label="Drop Time" v-model="time2" name="time2" readonly required></v-text-field>
                  	<v-time-picker v-model="time2" color="green" actions>
                   		<v-spacer></v-spacer>
                  		<v-btn flat color="green" @click="model2 = false">Cancel</v-btn>
                  		<v-btn flat color="green" @click="$refs.dialog2.save(time2)">Ok</v-btn>
                  	</v-time-picker>
                  </v-dialog>
              </v-flex>
              <v-select label="Select One" class="list-group--focused" v-model="e1" single-line :items="items"></v-select>
                  <v-text-field name="fare" type="text" value="100" label="Enter Fare" v-model="fare" required></v-text-field><br>
                  <v-text-field name="address" v-model="address" label="Enter Address" ref="address" required></v-text-field>
                  <span class="subheading">Upload Image of your vehicle: </span><br><br>
                  <center><v-btn color="green" class="white--text" v-model="img" required>Upload Image</v-btn></center>
                  <v-text-field name="descr" label="Enter Description" type="text" v-model="descr" multi-line required></v-text-field>
		</v-card-text>
		<v-card-actions>
			<v-spacer></v-spacer>
			<v-btn color="green" class="white--text" @click="submit" :disabled="!valid">Register</v-btn>
		</v-card-actions>
		</v-form>
		</v-card>
		</v-flex>
		</v-layout>
		</v-container>
		</v-content>
		</v-app>
	</template>
	</div>
	<script src="https://unpkg.com/vue/dist/vue.js"></script>
 	<script src="https://unpkg.com/vuetify/dist/vuetify.js"></script>
	<script>
	new Vue({
			  el: '#app',
			  data: () => ({
			    drawer: null
			  }),
			  data(){
			  	return{
			  		valid:false,
			  		model:null,
			  		no:null,
			  		time1:null,
			  		time2:null,
			  		fare:null,
			  		address:null,
			  		descr:null,
			  		model1:false,
			  		model2:false,
			  		e1:null,
			  		items : [
			  		<?php

include "config.php";

$sql="SELECT * FROM register";

$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result))
{

?>


			  		{text : '<?php echo $row['model'].' ('.$row['no']; ?>) '},

<?php

}
?>			  		]
			  	}
			  },
			  props: {
			    source: String
			  },
			  methods: {
			  	submit(){
			  		form.submit()
			  	}
			  }
			})
	</script>
</body>
</html>