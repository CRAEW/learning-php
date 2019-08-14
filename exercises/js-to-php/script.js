// Variable with random strings
// ============================
var strings = [
    "Kirito",
    "Erza",
    "Akatsuki",
    "Shiro",
    "Leo",
    "Rundel-Haus-Code",
    "Ken Kaneki",
    "Glenn Radars",
    "Momonga-Sama",
];

var pictures = [
    "https://www.pixelstalk.net/wp-content/uploads/2016/08/HD-PC-Wallpaper-2016.jpg",
    "https://wallpaperaccess.com/full/190815.jpg",
    "https://images7.alphacoders.com/528/528418.jpg",
    "https://wallpaperaccess.com/full/300068.jpg",
    "https://www.hdwallpaper.nu/wp-content/uploads/2016/02/golden-gate_wallpaper_030.jpg"
];

// Executables
// ===========
changeImage(document.getElementById("header"));
loopWhile(strings);
createUsername("Rafael Lambelin Selene Nijst");


// ====================================================================
// ========================== Functions ===============================
// ====================================================================

// Exercise 1: Changing attributes
// ===============================
function changeImage(img) {
    img.style.backgroundImage = "url('"+pictures[getRandomNumber(5)]+"')";
}

// Exercise 2: Loops and randoms
// =============================
function loopWhile(arr) {
    let arr_tracker = arr.slice(0, arr.length-1);
    let list = document.createElement("ul");

    while(arr_tracker.length > 0) {
        let list_item = document.createElement("li");
        list_item.innerText = arr[getRandomNumber(arr.length-1)];
        list.appendChild(list_item);

        if(arr_tracker.includes(list_item.innerText)) {
            arr_tracker.splice(arr_tracker.indexOf(list_item.innerText), 1);
        }
    }

    let holder = document.getElementById("loop-while");
    holder.innerHTML = "<h2>Exercise 1: Loops and stuff</h2>";
    holder.appendChild(list);
}


// Exercise 3: String manipulation - cookies and printing
// ======================================================
function createUsername(name) {
    let collection;
    if (name.includes(" ")) {
        collection = name.split(" ");
    }
    else {
        collection = [name]
    }

    for (let i = 0; i < collection.length; i++) {
        collection[i] = collection[i].split("");
        for (let ii = 0; ii < collection[i].length/2; ii++) {
            let x = getRandomNumber(collection[i].length - 1) + 1;
            collection[i][x] = addRandomColorSpan(collection[i][x].toUpperCase());
        }
        collection[i] = collection[i].join("");
    }

    let holder = document.getElementById("username-generator"),
        p = document.createElement("p");
    p.innerHTML = collection.join(" - ");
    holder.appendChild(p);
}


// Utility functions
// =================
function getRandomNumber(max) {
    return Math.floor(Math.random() * max);
}

function addRandomColorSpan(char) {
    let r = getRandomNumber(255),
        g = getRandomNumber(255),
        b = getRandomNumber(255);
    return "<span style='color:rgb("+r+","+g+","+b+");'>" + char + "</span>";
}
