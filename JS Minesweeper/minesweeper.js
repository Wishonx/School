function generateField(rows, cols) {
    for (x = 0; x < rows; x++) {
        document.getElementById("play_field").innerHTML += "<div class='row'></div>";

        for (y = 0; y < cols; y++) {

            var $rnd = Math.floor(Math.random() * 101);

            if ($rnd <= 10) {
                document.getElementById("play_field").innerHTML += "<div class='col bomb'></div>";

            } else {
                document.getElementById("play_field").innerHTML += "<div class='col'></div>";
            }
        }
    }
}


generateField(10, 10);