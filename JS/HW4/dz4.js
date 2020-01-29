function arr1() {
    let arr = [];
    arr = [prompt('Введите первое'), prompt('Введите второе'),prompt('Введите третье')];
    console.log(arr)
}

function while_confirm() {
    let vopros = confirm("Чё надо?");
    let a = 0;
    while (!vopros){
    alert("Ты лох");
        a +=1;
        if (a ===5) break;
    }
}

function array_fill() {
    let arr = [];
    let a
    while (true){
        a = prompt("Enter data")
        if (a) arr.push(a);
        else break;
    }
      console.log(arr)
}

function array_fill_nopush() {
    let arr = [];
    let a
    let i = 0
    while (true){
        a = prompt("Enter data")
        if (a) {
            arr[i] = a;
            i++
        }
        else break;
    }
    console.log(arr)
}

function infinite_probability() {
    let i = 0
    while (true){
        a = Math.random()
        if (a<0.9) {

            i++
        }
        else break;
    }
    console.log(i)
}
function empty_loop() {

    while (!prompt("Enter somsine", " ")){

    }
    console.log("end")
}

function progression_sum(){
    let end = prompt("enter end namber")
    let sum = 0
    for (let i=1; i < end; i+=3){
        sum += i
        // console.log(i)

    }
    alert(sum)
}

function chess_one_line() {
    let teg = "#"
    let sum = ''
    let kolVo = prompt("Enter Kolichestvo", '')
    for (let i=1; i<=kolVo; i++){
        sum += ' ' + teg + ' '
    }
    console.log(sum)
    alert(sum)

}

function numbers() {
    let chois = prompt("Enter Kolichestvo string")

    for(let x=1; x<=chois; x++){
        let str = ''
        for(let y=0; y<=9; y++){
            str +=y
        }
        str +="<br>"
        // console.log(str)
        document.write(str)
    }

}
// str = str.split("").reverse().join("");

function chess() {
    let arr = [" # ", "."]
    let x = +prompt("ширина доски")
    let y = +prompt("Длинна доски")
    let strX = ''
    let strY = ''
    for(let i=1; i<=y; i++){
        for(let i=1; i<=x; i++){
            strX +=arr[0] + arr[1]
        }
        strX +="<br>"
        document.write(strX)
        strX = ''
        arr.reverse()
    }
}

function cubes() {
    let a = prompt()
    let arr =[]
    for (let i=0; i<=a; i++){
        arr[i] = i*i*i}
    console.log(arr)

}

function multiply_table() {
    let a = prompt()
    let b = prompt()
    let arr =[]
    let arr2 =[]
    for (let i=1; i<=9; i++)
    {
        for (let x=1; x<=9; x++)
        {
            arr2[x] = i*x;
        }
        arr[i] = arr2
        arr2 = []
    }
    alert(arr[a][b])
}

function matrix_to_html_table() {
    let arr1 =[], arr2 =[];
    for (let i=1; i<=9; i++)
    {
        for (let x=1; x<=9; x++)
        {
            arr2[x] = i*x;
        }
        arr1[i] = arr2
        arr2 = []
    }
    console.log(arr1)
    // setTimeout(fillTable, 2000)
    let table = document.querySelector('#table');

    fillTable(table, arr1);

    let x = +arr1.length, y = +arr1[1].length
    console.log(typeof x + '  ' + typeof y)
    function fillTable(table, arr) {
        for (let i = 1; i < 10; i++){
            let tr = document.createElement('tr')

            for (let j = 1; j < 10; j++){
                let td = document.createElement('td')
                td.innerHTML = arr[i][j];
                tr.appendChild(td)
            }
            table.appendChild(tr);
        }
    }
}


function trugoln() {
    let lines = line = +prompt("Enter velechinu"), a='.', b='*';
    while(line-->0) console.log(Array(line+1).join(a) +Array(2*(lines-line)).join(b) +Array(line+1).join(a));
}