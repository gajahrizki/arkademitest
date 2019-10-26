<script type="text/javascript">
	function tampilJson()
	{
		var json = [{
						"name":"gajah",
						"age":22,
						"address": "bogor",
						"hobbies": ["mancing", "jongkok", "beridir"],
						"is_married": false,
						"list_school" : [{ "name" : "telkom university", "year_in" : 2015, "year_out" : 2019, "major" : "informatika"}],
						"skills" : [{"skill_name" : "python", "level" : "junior"}],
						"interest_in_coding" : true
					}
					{
						"name":"oki",
						"age":22,
						"address": "bandung",
						"hobbies": ["tengkurep", "duduk"],
						"is_married": true,
						"list_school" : [{ "name" : "Institude Tekchnology Bandung", "year_in" : 2015, "year_out" : 2019, "major" : "informatika"}],
						"skills" : [{"skill_name" : "Machine Learning", "level" : "senior"}],
						"interest_in_coding" : false
					}
					{
						"name":"poncut",
						"age":22,
						"address": "aceh",
						"hobbies": ["bebaring", "sending text KUY to his friends"],
						"is_married": false,
						"list_school" : [{ "name" : "university Indonesia", "year_in" : 2015, "year_out" : 2019, "major" : "informatika"}],
						"skills" : [{"skill_name" : "Aritificial Intelegent", "level" : "junior"}],
						"interest_in_coding" : false
					}]
		var nama = document.getElementById('nama');
		var umur = document.getElementById('umur');

		// var json = $.getJSON("data.json");
		if (nama == json.name && umur == json.age) 
		{
			document.getElementById('name') = json.name;
			document.getElementById('age') = json.age;
			document.getElementById('address') = json.address;
			document.getElementById('hobi') = json.hobies;
			document.getElementById('status') = json.is_married;
			document.getElementById('sekolah') = json.list_school;
			document.getElementById('skill') = json.skills;
			document.getElementById('coding') = json.interest_in_coding;
		}else{
			document.getElementById('alert') = "error";
			return false;
		}

	}
</script>