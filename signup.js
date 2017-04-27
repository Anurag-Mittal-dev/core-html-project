function validate()
			{
				var n1 = document.form.name.value;
				var n2 = document.form.gender.value;
				var n3 = document.form.age.value;
				var n4 = document.form.email.value;
				var n5 = document.form.pasw.value;
				var n6 = document.form.psw-repeat.value;

				if(n1==""||n1==null)
				{
					alert("Enter a name");
					return false;
				}

				if(n1.length>20 || !/^[a-zA-Z]+$/.test(n1))
				{
					alert("Enter a valid name");
					return false;
				}

				if(n2.checked==false)
				{
					alert("Select a gender");
					return false;
				}

				if(n3 == "" || n3 == null)
				{
					alert("Enter Age");
					return false;
				}

				if(n4 == "" || n4 == null)
				{
					alert("Enter a Email");
					return false;
				}

				if(n5 == "" || n5 == null)
				{
					alert("Set a password");
					return false;
				}

				if(n6 != n5){
					alert("password does not match");
					return false;
				}