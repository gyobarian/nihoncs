$(function(){
	// 郵便番号から住所自動入力
	$(window).ready(function() {
		$('#zip').jpostal({
			postcode : [
				'#zip',
			],
			address : {
				'#address_prefecture': '%3',
				'#address_city': '%4',
				'#address_town': '%5',
				'#address_prefecture_kana': '%ASKV8',
				'#address_city_kana': '%ASKV9',
				'#address_town_kana': '%ASKV10',
			}
		});

	});

    $('input.required, select[name^="birthdate"]').each(function(){
        if(this.value == ""){
            $(this).css("background-color","#ffebeb");
        } else {
            $(this).css("background-color","#ffffff");
        }
    });
    $('input.required, select[name^="birthdate"]').blur(function(){
        if(this.value == ""){
            $(this).css("background-color","#ffebeb");
        } else {
            $(this).css("background-color","#ffffff");
        }
    });
});