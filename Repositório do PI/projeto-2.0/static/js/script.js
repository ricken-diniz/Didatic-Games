let carrosselCondition = true;
let z = 1;
let interval;

function a(i) {
    if (carrosselCondition == false) {
        clearInterval(interval);
        resetInterval();
    }
    const cardsArray = document.getElementsByClassName('game');

    function fadeOut(items) {
        items.classList.add('fade');
    }
    for (let j = 0; j < cardsArray.length; j++) {
        fadeOut(cardsArray[j]);
    }

    function y() {
        function exitOut(items) {
            items.classList.add('exit');
        }
        for (let j = 0; j < cardsArray.length; j++) {
            exitOut(cardsArray[j]);
        }
        document.getElementById("r" + i).classList.toggle('fade');
        document.getElementById("r" + i).classList.toggle('exit');
    }
    setTimeout(y, 1000);
    z = i;
}

function refresh() {
    const cardsArray = document.getElementsByClassName('game');
    carrosselCondition = true;
    if (z == cardsArray.length) {
        z = 1;
    } else {
        z++;
    }
    a(z);
    carrosselCondition = false;
}

function my_interval() {
    interval = setInterval(refresh, 5000);
}

function resetInterval() {
    setTimeout(my_interval, 5000);
}
my_interval();

function evaluationsWindow(car_id, usu_id) {
    if (usu_id) {
        document.getElementById('evaluationForm').style.display = "block";
        document.getElementById('cardInput').value = car_id;
        document.getElementById('userInput').value = usu_id;
    } else {
        window.location.href = "/login";
    }
}

function closeWindow(id) {
    document.getElementById(id).style.display = "none";
}

function buttonRedirect(link) {
    window.open(link, '_blank');
}