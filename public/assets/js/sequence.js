
        var example = ['Web Developer', 'Ambitious', 'Perfectionist', 'Courage', 'Trust'];

        textSequence(0);
        function textSequence(i) {

        if (example.length > i) {
        setTimeout(function() {
        document.getElementById("sequence").innerHTML = example[i];
        textSequence(++i);
    }, 300); // 1 second (in milliseconds)

    } else if (example.length == i) { // Loop
        textSequence(0);
    }

    }
