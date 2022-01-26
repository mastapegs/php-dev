<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="PHP Sandbox">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>Hello, World!</h1>
        <p>From php</p>

        <h2>PokeAPI GET Request</h2>
        <p>This is powered by the <a href="https://pokeapi.co/" target="_blank">PokeAPI</a></p>
        <form id="idForm">
            <label for="id">Pokemon ID</label>
            <input id="id" name="id" type="number" value="" />
            <button>Submit</button>
        </form>

        <?php if (isset($_GET["id"])) : ?>
            <?php
            $path = "https://pokeapi.co/api/v2/pokemon/" . $_GET["id"];
            $jsonfile = file_get_contents($path);
            $data = json_decode($jsonfile);
            ?>
            <p><?= $data->name ?></p>
        <?php endif ?>

        <script>
            const isANumber = (number) => !Number.isNaN(Number(number));

            function handleSubmit(event) {
                const id = document.querySelector("#id").value;
                if (!isANumber(id) || id === "" || id < 1 || id > 300) {
                    event.preventDefault();
                }
            }

            const form = document.querySelector("#idForm");
            form.addEventListener("submit", handleSubmit);
        </script>

    </div>
</body>

</html>