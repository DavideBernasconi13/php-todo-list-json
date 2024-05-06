<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list 1</title>
    <link rel="stylesheet" href="asset/css/style.css">

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/axios@1.6.7/dist/axios.min.js"></script>
    <script type="module" src="asset/js/main.js"></script>
</head>

<body>
    <div id="app">
        <header>
            <img src="https://seeklogo.com/images/E/esselunga-logo-5508870056-seeklogo.com.png" alt="Esselunga"
                id="logo">
        </header>
        <main>
            <div class="container">
                <h1>La lista della spesa</h1>
                <ul>
                    <li v-for="(item, index) in todolist" :key="item.id" @click="underline(item.id)"
                        class="d-flex pointer">
                        <span :class="{'underline' : item.done}">{{item.text}}</span>
                        <i class="fa-solid fa-circle-xmark pointer" @click="removeItem(item.id)"></i>
                    </li>
                </ul>
            </div>
            <div class="addElement">
                <input type="text" v-model="itemText" placeholder="Aggiungi elemento" @keyup.enter="addItem">
                <button @click="addItem">Aggiungi alla lista</button>
            </div>


        </main>
        <footer>
            <div class="center">Made &copy 2024</div>
        </footer>
    </div>
</body>

</html>