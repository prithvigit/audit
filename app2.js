function DeleteOption(){
	parent_a = null
	temp = null	
	var deleted = []
	var current = ['','','']
	const selects = document.querySelectorAll(".MySelect");
	selects.forEach(selected => {
		selected.addEventListener('click',() =>{
			const input = selected.value;
			console.log(input)
			if (input!=""){
				const a = document.querySelectorAll("option");
				a.forEach(a_option => {
					if (a_option.value == input && a_option.parentElement != selected){
						
							deleted.push([a_option.parentElement,a_option]);
						a_option.parentElement.removeChild(a_option);
						


					}
				})
			}
			if(input == ''){
				var choices = []
				deleted.forEach(deleted_element =>{
					const selects2 = document.querySelectorAll(".MySelect");
					selects2.forEach(selected2 => {
						if (!choices.includes(selected2.value)) {
						choices.push(selected2.value);}
					})
					console.log(choices)
					deleted.forEach(deleted_element => {
						console.log(deleted_element)
						if (deleted_element[0]!=null && deleted_element[1]!=null){
							if( (!choices.includes(deleted_element[1].value) )){
						(deleted_element[0]).appendChild(deleted_element[1])
							}
						}
					})
				})
			}
		})
	})

};

DeleteOption();