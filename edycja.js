function edytujPropozycje(wiersz) {
            if (document.getElementById("Zatwierdzacz") != null)
                return;
            var komorka;
            var input;
            var dzieci = document.getElementsByTagName("tr")[wiersz].children;
            komorka = document.createElement("td");
            input = document.createElement("button");
            input.type = "submit";
            input.name = "submit";
            input.id = "Zatwierdzacz";
            input.className = "edycjaPrzycisk";
            input.value = dzieci[0].children[1].value;
            input.appendChild(document.createTextNode("Ok"));
            komorka.appendChild(input);
            input = document.createElement("button");
            input.type = "submit";
            input.name = "cancel";
            input.className = "edycjaPrzycisk";
            input.appendChild(document.createTextNode("Esc"));
            komorka.appendChild(input);
            document.getElementsByTagName("tr")[wiersz].removeChild(dzieci[0]);
            document.getElementsByTagName("tr")[wiersz].appendChild(komorka);
            var nr = dzieci[0];
            document.getElementsByTagName("tr")[wiersz].removeChild(nr);
            document.getElementsByTagName("tr")[wiersz].appendChild(nr);
            var numer = 1;
            for (var i = dzieci.length; i > 2; i--) {
                komorka = document.createElement("td");
                input = document.createElement("input");
                input.type = "text";
                input.name = "n" + numer;
                numer++;
                input.value = dzieci[0].textContent;
                input.className = "pole";
                komorka.appendChild(input);
                document.getElementsByTagName("tr")[wiersz].removeChild(dzieci[0]);
                document.getElementsByTagName("tr")[wiersz].appendChild(komorka);
            }
        }