const townshipSelect = document.getElementById('townshipSelect');
const regionSelect = document.getElementById('regionSelect');

const [html] = document.getElementsByTagName("html")
const lang = html.getAttribute("lang");

const getTownships = () => {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var townships = JSON.parse(this.responseText);

            if(lang === 'ar'){
                townshipSelect.innerHTML = '<option selected hidden style="display:none" value="">الدائرة</option>';
            } else if(lang === 'fr' || 'en'){
                townshipSelect.innerHTML = '<option selected hidden style="display:none" value="">Township</option>';
            }

            townships.forEach(element => {
                const option = document.createElement("option");
                option.value = element.id;
                option.text = element.name;
                townshipSelect.add(option);
                townshipSelect.removeAttribute("disabled");
            });
        }
    };
    var region = regionSelect.value;
    xhttp.open("GET",  `/${lang}/api/townships/` + region, true);
    xhttp.send();
}

if(regionSelect.value){
    getTownships()
}

regionSelect.addEventListener('change', getTownships);
