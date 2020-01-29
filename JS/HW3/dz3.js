
function doma(){
    const kvNaEtag = document.getElementById('etagnost').value;
    const na_etag1 = document.getElementById('na_etag').value;
    const nom_kvartiri1 = document.getElementById('nom_kvartiri').value;
    const valid = document.querySelector('.validate');
    // console.log(kvNaEtag);
    // console.log(na_etag1);
    // console.log(nom_kvartiri1);

    if (!isNaN(kvNaEtag) && !isNaN(na_etag1) && !isNaN(nom_kvartiri1)) {
        const podezd = ((nom_kvartiri1%(kvNaEtag*na_etag1)) !== 0) ? Math.floor(nom_kvartiri1/(kvNaEtag*na_etag1) + 1) : Math.floor(nom_kvartiri1/(kvNaEtag*na_etag1));
        // alert(podezd)
        const etag = (nom_kvartiri1 <= (kvNaEtag*na_etag1))? Math.ceil(nom_kvartiri1/na_etag1) : Math.ceil((nom_kvartiri1 - (kvNaEtag*na_etag1))/na_etag1);
        valid.innerHTML = 'Подезд - ' + podezd + ', Этаж -' + etag;

        // alert('Подезд - ' + podezd + ', Этаж -' + etag )
    }
    else alert('Номера введены не по формату');
}

function swichIf() {
    const color = prompt("Введите цвет","");
    // switch (color)
    // {
    //     case "red": document.write("<div style='background-color: red;'>красный</div>");
    //     case "black": document.write("<div style='background-color: black; color: white;'>черный</div>");
    //         break;
    //     case "blue": document.write("<div style='background-color: blue;'>синий</div>");
    //     case "green": document.write("<div style='background-color: green;'>зеленый</div>");
    //         break;
    //     default: document.write("<div style='background-color: gray;'>Я не понял</div>");
    // }
    if (color === "red" )
    {
        document.write("<div style='background-color: red;'>красный</div>");
        document.write("<div style='background-color: black; color: white;'>черный</div>");
    }
    else if (color === "black")
    {
        document.write("<div style='background-color: black; color: white;'>черный</div>", "<div style='background-color: black; color: white;'>черный</div>");
    }
    else if (color === "blue")
    {
        document.write("<div style='background-color: blue;'>синий</div>");
        document.write("<div style='background-color: green;'>зеленый</div>");
    }
    else if (color === "green")
    {
        document.write("<div style='background-color: green;'>зеленый</div>");
    }
    else document.write("<div style='background-color: gray;'>Я не понял</div>");
}

function age() {
    let god = new Date().getFullYear();
    let age = Number(prompt("Введите сколько вам исполнится в этом году", ''));

    if (age == "0" || age == false)
    {
        alert("EROR 404")
    }
    else {
        let yers = god - age;
        alert('вы роделись в ' + yers)
    }
}

function confirmByaka() {
    let shoping = confirm("Пойдём пошопимся????") ? document.location ="https://www.google.com.ua/" : alert("Ты бякаааааааа");
    }

function fio() {
    let familiya = prompt('Введите свою Фамилию', '');
    let imya = prompt('Введите своё Имя`', '');
    let otchestvo = prompt('Введите своё Отчество', '');
    // let arr = {familiya, imya, otchestvo};

    let fio_celikom = 'ФИО:   ' + familiya + ' ' + imya + ' ' + otchestvo;

    // for (i = 0; i < arr.length; i++) {
    //     fio_celikom = fio_celikom + arr[i] + ' ';
    // }
    alert(fio_celikom )
}

function fioter() {
    let familiya = prompt('Введите свою Фамилию', '') || "Gore";
    let imya = prompt('Введите своё Имя`', '') || "Ot";
    let otchestvo = prompt('Введите своё Отчество', '') || "Uma";
    // let arr = {familiya, imya, otchestvo};

    let fio_celikom = 'ФИО:   ' + familiya + ' ' + imya + ' ' + otchestvo;

    // for (i = 0; i < arr.length; i++) {
    //     fio_celikom = fio_celikom + arr[i] + ' ';
    // }
    alert(fio_celikom )
}

function fioterif() {
    let familiya = prompt('Введите свою Фамилию', '');
    let imya = prompt('Введите своё Имя`', '');
    let otchestvo = prompt('Введите своё Отчество', '');

    if (!familiya) familiya = "Gore";
    if (!imya) imya = "Ot";
    if (!otchestvo) otchestvo = "Uma";

    let fio_celikom = 'ФИО:   ' + familiya + ' ' + imya + ' ' + otchestvo;

    alert(fio_celikom )
}

function valuta() {
    let valut = prompt("Введите валюту (usd, rub, eur)", '')
    let sumval = +prompt("Введите суму", '')

    switch (valut) {
        case 'usd': alert('сумма для выдачи   ' + Math.floor(sumval/27));

        break;

        case 'rub': alert('сумма для выдачи   ' + Math.floor(sumval/0.4));

            break;

        case 'eur': alert('сумма для выдачи   ' + Math.floor(sumval/38));

            break;
        default : alert("извените мы не меняем" + valut)
    }
}

function valutalov() {
    let valut2 = prompt("Введите валюту (usd, rub, eur)", '')
    let sumval2 = +prompt("Введите суму", '')

    switch (valut2.toLowerCase()) {
        case 'usd': alert('сумма для выдачи   ' + Math.floor(sumval2/27));

            break;

        case 'rub': alert('сумма для выдачи   ' + Math.floor(sumval2/0.4));

            break;

        case 'eur': alert('сумма для выдачи   ' + Math.floor(sumval2/38));

            break;
        default : alert("извените мы не меняем  " + valut2)
    }
}

function valutaPokProd() {
    let pokProd = confirm("Выберете дейстиве: ОК-Купить, Cansle-продать")
    let valut3 = prompt("Введите валюту (usd, rub, eur)", '')
    let sumval3 = +prompt("Сколько " + valut3 + " Вы хотите " + ((pokProd) ? "купить" : "продать"), '')


    switch (valut3.toLowerCase()) {
        case 'usd': alert('сумма для выдачи   ' + (pokProd) ? Math.floor(sumval3*27) : Math.floor(sumval3*25));

            break;

        case 'rub': alert('сумма для выдачи   ' + (pokProd) ? Math.floor(sumval3*0.4) : Math.floor(sumval3*0.38));

            break;

        case 'eur': alert('сумма для выдачи   ' + (pokProd) ? Math.floor(sumval3*38) : Math.floor(sumval3*35));

            break;
        default : alert("извените мы не меняем  " + valut3)
    }
}

function kamNogBum(){
    let user1 = prompt("введите цифру: 1 - камень, 2 - ножници, 3 - бумага")
    if (user1 === "1" || user1 === "2" ||user1 === "3")
    {
    let user2 = Math.random();
    let comp1 = (user2 < 0.34) ? "камень" : (user2 <=0.67) ? "ножници" : "бумага";
    let comp2 = (user1 === 1) ? "камень" : (user1 === 2) ? "ножници" : "бумага";
    let uslovie = comp1 + comp2
    alert((comp1 === comp2) ? "Ничья" : (uslovie ==="бумагакамень" || uslovie ==="каменьножници" || uslovie ==="ножницибумага") ? "Победил игрок" : "Победил Компьютер")
    }
    else {
        alert("ошибка ввода")
        return false;
    }
}
